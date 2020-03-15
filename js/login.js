var btn1 = document.getElementById('Btn1');
var btn2 = document.getElementById('Btn2');

// (btn1.classList.contains("btn1-selected")) ? btn1.classList.remove("btn1-selected") :
// 											 btn1.classList.add("btn1-selected"); 
btn1.onclick = check;
btn2.onclick = check;

function check(e){

	 if(this.id === "Btn1"){

	 btn2.classList.remove("selected-btn");
	 btn1.classList.add("selected-btn");
	 document.querySelector('.secondPart1').style.display = "block";
	 document.querySelector('.secondPart2').style.display = "none";
	}else{

		btn1.classList.remove("selected-btn");
		btn2.classList.add("selected-btn");
	    document.querySelector('.secondPart2').style.display = "block";
	    document.querySelector('.secondPart1').style.display = "none";
	}
}