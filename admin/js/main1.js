$(document).ready(function(){
// alert('hey');

	$('.todo-btn').hover(function() {
		$(this).toggleClass('active-btn');
	});

	$('.todo-btn').mouseenter(function() {
		$(this).find('.angle').removeClass('fa fa-angle-right').addClass('fa fa-angle-down');
	});

	$('.todo-btn').mouseleave(function() {
		$(this).find('.angle').removeClass('fa fa-angle-down').addClass('fa fa-angle-right');
	});

	$('.todo-btn').click(function() {
		$('.todo-btn').removeClass('selected');
		$(this).addClass('selected');
		$(this).find('.sign').toggleClass('minus plus');
	});

	$('.dropdown-toggle').click(function() {

		$(this).css('backgroundColor','#2695bc');

	});


		$('.dashboard-btn').click(function(event) {
			$('.all-package').css('display','none');
			$('.add-package').css('display','none');
			$('.all-hotels').css('display','none');
			$('.add-hotel').css('display','none');
			$('.all-users').css('display','none');
			$('.add-user').css('display','none');
			$('.all-guide').css('display','none');
			$('.add-guide').css('display','none');
			$('.booking').css('display','none');
			$('.feedback').css('display','none');
			$('.cpw').css('display','none');
			$('.edit-package').css('display','none');
			$('.edit-hotel').css('display','none');
			$('.edit-guide').css('display','none');
			$('.dashboard').css('display','block');
		});

	$('.all-package-btn').click(function() {
		$('.dashboard').css('display','none');
		$('.add-package').css('display','none');
		$('.all-hotels').css('display','none');
		$('.add-hotel').css('display','none');
		$('.all-users').css('display','none');
		$('.all-guides').css('display','none');

		$('.all-package').css('display','block');
	});

		$('.add-package-btn').click(function() {
			$('.all-package').css('display','none');
			$('.dashboard').css('display','none');
			$('.all-hotels').css('display','none');
			$('.add-hotel').css('display','none');
			$('.all-users').css('display','none');
			$('.all-guides').css('display','none');

			$('.add-package').css('display','block');
		});

		$('.all-hotels-btn').click(function() {
			$('.all-package').css('display','none');
			$('.dashboard').css('display','none');
			$('.add-package').css('display','none');
			$('.add-hotel').css('display','none');
			$('.all-users').css('display','none');
			$('.all-guides').css('display','none');

			$('.all-hotels').css('display','block');
		});

		$('.add-hotel-btn').click(function() {
			$('.all-package').css('display','none');
			$('.dashboard').css('display','none');
			$('.add-package').css('display','none');
			$('.all-hotels').css('display','none');
			$('.all-users').css('display','none');
			$('.all-guides').css('display','none');

			$('.add-hotel').css('display','block');
		});

				$('.all-users-btn').click(function() {
					$('.all-package').css('display','none');
					$('.dashboard').css('display','none');
					$('.add-package').css('display','none');
					$('.all-hotels').css('display','none');
					$('.add-hotel').css('display','none');
					$('.all-guides').css('display','none');
					$('.all-users').css('display','block');
				});

				$('.all-guides-btn').click(function() {
					$('.all-package').css('display','none');
					$('.dashboard').css('display','none');
					$('.add-package').css('display','none');
					$('.all-hotels').css('display','none');
					$('.add-hotel').css('display','none');
					$('.all-users').css('display','none');
					$('.all-guides').css('display','block');

				});


});
