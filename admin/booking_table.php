
<?php

include('../includes/config.php');
$booking_detail = "SELECT bi.* , pi.Package_Name, hi.Hotel_Name ,pi.State , ui.Email , bi.Booking_Date
						from booking_info bi 
						JOIN package_info pi ON bi.Package_Id = pi.Package_Id
                        JOIN user_info ui ON bi.User_Id = ui.Id
						JOIN hotel_info hi on bi.Hotel_Id = hi.Id";

$booking_detail_rs = mysqli_query($con,$booking_detail);


?>
