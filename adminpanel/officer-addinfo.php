<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn']) && $_FILES['image']){

		 $name = filter_input(INPUT_POST, 'name');
		
	     $mobile = filter_input(INPUT_POST, 'mobile');
	     $email = filter_input(INPUT_POST, 'email');
	     $department = filter_input(INPUT_POST, 'department');
	    
	     $start_Date = filter_input(INPUT_POST, 'start_date');
	      $pass= filter_input(INPUT_POST, 'pass');
	         $img_name = $_FILES['image']['name'];
          $tempname = $_FILES["image"]["tmp_name"];    
         $folder = "upload/".$img_name;
         $pass=md5($pass);


	     $autho = "INSERT INTO officer (officer_name,officer_img, officer_mobile, officer_email,officer_department,office_startdate,password) VALUES ('$name','$img_name','$mobile', '$email','$department','$start_Date','$pass')";


	     if(mysqli_query($conn, $autho)){

	     	move_uploaded_file($tempname, $folder);

	     	echo '<script language="javascript">';
            echo 'alert("Successfully added"); location.href="officer-add.php"';
            echo '</script>';
             
			} else{
				    echo "ERROR: Could not able to execute $autho. " . mysqli_error($conn);
		     }
				 
// Close connection
mysqli_close($conn);








}
?>
