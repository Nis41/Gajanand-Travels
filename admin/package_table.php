<?php

include('../includes/config.php');
$package_info = "SELECT pi.Package_Id, pi.Package_Name,pi.State,pd.Start,pd.End,pd.Price,( SELECT Image from package_image where Package_Id = pi.Package_Id   limit 1 ) as Image FROM package_info pi
          JOIN package_detail pd ON pd.Id = pi.Detail_Id
          ";

$package_info_rs = mysqli_query($con,$package_info);

$package_detail = "SELECT pi.Package_Name,pi.State,pd.End,pd.Price FROM package_info pi
                    JOIN package_detail pd ON pd.Id = pi.Detail_Id  ORDER BY pd.ID DESC LIMIT 5";
          $package_detail_rs = mysqli_query($con,$package_detail);




if(isset($_POST['addPackage'])) {

    $tourName = $_POST['tourName'];
    $tourState = $_POST['packageState'];
    $tourCity = $_POST['packageCity'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $duration = $_POST['duration'];
    $tourPrice = $_POST['price'];
    $tourDetail = $_POST['tourDetail'];
    $tourMap = $_POST['map'];
// var_dump($_FILES);
	// Count total files
	 $countfiles = count($_FILES['image']['name']);
	 
	 
		  $package_detail_insert = "INSERT into package_detail values (null,'$startDate','$endDate','$duration','$tourPrice','$tourDetail','$tourState','$tourMap') ";
          $package_detail_rs = mysqli_query($con,$package_detail_insert);

          if($package_detail_rs) {
			$package_info_insert = "INSERT into package_info values (null,'$tourName','$tourState','$tourCity',(SELECT Id from package_detail where State = '$tourState')) ";
            $package_insert_rs = mysqli_query($con,$package_info_insert);

            if($package_insert_rs) {
					
				   for($i=0;$i<$countfiles;$i++){
				   		$filename = $_FILES['image']['name'][$i];
				   		$upload_location1 = 'location_hd/'.$filename;
				   		$upload_location2 = '../location_hd/'.$filename; 

					   // Upload file

				   		$tmpFile = $_FILES['image']['tmp_name'][$i];

				   		
					      move_uploaded_file($tmpFile, $upload_location2);


	      			   $package_image_insert = "INSERT into package_image values (null,'$upload_location1','$tourState',(SELECT Package_Id from package_info where State = '$tourState')) ";
		               $package_image_rs = mysqli_query($con,$package_image_insert);

		               
            	 }
            		 if($package_image_rs) {
          					
          					echo "<script>alert('Tour Package Added...');</script>";

		               }
		               else {
          				
          					echo "<script>alert('package_image error');</script>";

		               }


            }
            else {
          		
          		echo "<script>alert('package_info error');</script>";

          }

      }
          else {
          	echo "<script>alert('package_detail error');</script>";
          }



}





?>
