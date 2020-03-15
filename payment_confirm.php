<!DOCTYPE html>
<html>
<head>
	<title>Payment Confirmation</title>
	<link rel="icon" href="logo/favicon.ico" type="image/gif" >
	
</head>
<body onload="confirm()">



    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    	function confirm() {
    		swal("Payment Done", "Your Booking is Confirmed!", "success");
    		return false;
    	}
    </script>

</body>
</html>