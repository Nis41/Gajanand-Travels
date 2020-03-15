function loc_search(e) {

	// alert('hey');
	var stateName = document.querySelector('.select-location').value;
	var package = document.querySelector(".package");   
	

	var xhr = new XMLHttpRequest();
		
	xhr.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
			
			package.innerHTML = ""; //setting package empty
			
			var jsonObj = JSON.parse(this.responseText);
			var x;

			console.log(jsonObj);
			var title = document.createElement('h5');
			title.className = 'title';
			title.innerHTML = 'Best Packages in '+jsonObj[0].State;
			package.appendChild(title);


			var detail = document.createElement('h6');
			detail.className = 'detail';
			detail.innerHTML = 'Age is no barrier when it comes to travel. ';
			package.appendChild(detail);

		    for (x in jsonObj) {

				var package_form = document.createElement('form');
				package_form.className = 'package-form';
				package_form.setAttribute('method','POST');
				package_form.setAttribute('action','package_detail.php');
				package.appendChild(package_form);

				var img_container = document.createElement('div');
				img_container.className = 'img-container';
				package_form.appendChild(img_container);
				
				var hidden_field = document.createElement('input');
				hidden_field.setAttribute('type','hidden');
				hidden_field.setAttribute('name','id');
				hidden_field.setAttribute('value',jsonObj[x].Package_Id);
				img_container.appendChild(hidden_field);

				var imgTag = document.createElement('img');
				imgTag.className = 'images';
				imgTag.src = jsonObj[x].Image;
				img_container.appendChild(imgTag);

				var pTag = document.createElement('p');
				pTag.className = 'info';
				pTag.innerHTML = jsonObj[x].Duration+' Start From Rs '+jsonObj[x].Price+' only';
				img_container.appendChild(pTag);


				var h5Tag = document.createElement('h5');
				h5Tag.className = 'name';
				h5Tag.innerHTML = jsonObj[x].Package_Name;
				img_container.appendChild(h5Tag);

				var btn = document.createElement('button');
				btn.className = 'overlay';
				btn.innerHTML = 'Book Now';
				img_container.appendChild(btn);

		    }

		}

	};

	xhr.open('GET', 'package_search.php?state='+stateName,true);
    xhr.send();

}

function hotel_search() {
	
	// alert('hey');
	var cityName = document.querySelector('.select-city').value;
	var hotelType = document.querySelector('.Hotel-Type').value;
	var package = document.querySelector(".package");   
	
	var xhr = new XMLHttpRequest();
		
	xhr.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
			
			package.innerHTML = ""; //setting package empty
			var jsonObj = JSON.parse(this.responseText);
			var x;

			// console.log(jsonObj);
			var title = document.createElement('h5');
			title.className = 'title';
			title.innerHTML = 'Best Hotels in '+jsonObj[0].Hotel_City;
			package.appendChild(title);


			var detail = document.createElement('h6');
			detail.className = 'detail';
			detail.innerHTML = 'you do your thing leave the rest to us a very good place to be';
			package.appendChild(detail);

		    for (x in jsonObj) {

				var package_form = document.createElement('form');
				package_form.className = 'package-form';
				package_form.setAttribute('method','POST');
				package_form.setAttribute('action','hotel_detail.php');
				package.appendChild(package_form);
	
	
				var img_container = document.createElement('div');
				img_container.className = 'img-container';
				package_form.appendChild(img_container);
				
				var hidden_field = document.createElement('input');
				hidden_field.setAttribute('type','hidden');
				hidden_field.setAttribute('name','id');
				hidden_field.setAttribute('value',jsonObj[x].Id);
				img_container.appendChild(hidden_field);


				var imgTag = document.createElement('img');
				imgTag.className = 'images';
				imgTag.src = jsonObj[x].Image;
				img_container.appendChild(imgTag);

				var pTag = document.createElement('p');
				pTag.className = 'info';
				pTag.innerHTML = jsonObj[x].Hotel_Type + ' Hotel';
				img_container.appendChild(pTag);


				var h5Tag = document.createElement('h5');
				h5Tag.className = 'name';
				h5Tag.innerHTML = jsonObj[x].Hotel_Name;
				img_container.appendChild(h5Tag);

				var btn = document.createElement('button');
				btn.className = 'overlay';
				btn.innerHTML = 'View';
				img_container.appendChild(btn);
		    }

		}

	};

	// xhr.open('GET', 'hotel_search.php?city='+cityName+'&hotelType='+hotelType,true);
	xhr.open('GET', 'hotel_search.php?city='+cityName,true);

  xhr.send();
}