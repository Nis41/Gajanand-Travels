function package_insert() {

	// alert('hey');
	// var stateName = document.querySelector('.select-location').value;
	var myLabel = document.querySelector(".bmd-help");


	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {

        alert(this.responseText);

		}

	};

	xhr.open('GET', 'package_insert.php,true);
    xhr.send();

}
