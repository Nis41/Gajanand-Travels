
// $('.carousel').carousel({
//   interval: 1000;
// });
// alert("hello");
$(document).ready(function() {

	$('.hotel-button').click(function() {
		$('.location-search').css('display','none');
		$('.hotel-search').css('display','block');
		$('.loc-button').removeClass('target');
    	$(this).addClass('target');

	});

	$('.loc-button').click(function() {
		$('.hotel-search').css('display','none');
		$('.location-search').css('display','block');
		$('.hotel-button').removeClass('target');
    	$(this).addClass('target');

	});

	$('.bracket').hover(function() {
		$(this).addClass('hovering');
	}, function() {
    	$(this).removeClass('hovering');
	});

	$('#Btn1').click(function(){
		$('.secondPart2').css('display','none');
		$('.secondPart1').css('display','block');
		$('#Btn2').removeClass('selected-btn');
		$(this).addClass('selected-btn');
	});

	$('#Btn2').click(function(){
		$('.secondPart1').css('display','none');
		$('.secondPart2').css('display','block');
		$('#Btn1').removeClass('selected-btn');
		$(this).addClass('selected-btn');

	});

	// Initializing arrays with Room Types.

	var threeStar = [
			{ display: "Single Room",value: "Single Room"},
			{ display: "Double Room", value: "Double Room"},
			{ display: "Family Room",value: "Family Room"}
		];
		
		var fiveStar = [
			{ display: "Double Room", value: "Double Room"},
			{ display: "Family Room",value: "Family Room"},
			{ display: "Luxury Room",value: "Luxury Room"},
			{ display: "Deluxe Room",value: "Deluxe Room"}
		];
		
		var sevenStar = [
			{ display: "Double Room", value: "Double Room"},
			{ display: "Family Room",value: "Family Room"},
			{ display: "Luxury Room",value: "Luxury Room"},
			{ display: "Deluxe Room",value: "Deluxe Room"}
		];

		// Function executes on change of first select option field.
		
		$(".Hotel-Type").change(function() {
			var select = $(".Hotel-Type option:selected").val();
			
			switch (select) {
				case "3 Star":
					room(threeStar);
					break;
				case "5 Star":				
					room(fiveStar);
					break;
				case "7 Star":
					room(sevenStar);
					break;
				default:
					$(".Room-Type").empty();
					$(".Room-Type").append("<option>Room Type</option>");
					break;
			}
		});

		// Function To List out Room-Types in Second Select tags
		
		function room(arr) {
			$(".Room-Type").empty();
			$(".Room-Type").append("<option>Room Type</option>");
			
			$(arr).each(function(i) { //to list cities
				$(".Room-Type").append("<option value="+arr[i].value+">" + arr[i].display + "</option>");
			});
		}

});

function lineclamp() {
  var lineheight = parseFloat($('.place-detail').css('line-height'));
  var articleheight = $('article').height(); 
  var calc = parseInt(articleheight/lineheight);
  $(".place-detail").css({"-webkit-line-clamp": "" + calc + ""});
}


$(document).ready(function() {
    lineclamp();
});

$( window ).resize(function() {
 	lineclamp();
});