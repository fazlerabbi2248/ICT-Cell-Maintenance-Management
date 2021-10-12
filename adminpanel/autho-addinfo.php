<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn']) && $_FILES['image']){

		 $name = filter_input(INPUT_POST, 'autho-name');
		
	     $mobile = filter_input(INPUT_POST, 'mobile');
	     $email = filter_input(INPUT_POST, 'email');
	     $position = filter_input(INPUT_POST, 'position');
	     $office= filter_input(INPUT_POST, 'office');
	     $start_Date = filter_input(INPUT_POST, 'start_date');

        $msg="";

       $img_name = $_FILES['image']['name'];
       $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "upload/".$img_name;
  

   $sql = "INSERT INTO authority (autho_name,autho_img, autho_mobile, autho_email,autho_position,autho_office,autho_startdate) VALUES ('$name','$img_name', '$mobile', '$email','$position','$office','$start_Date')";

    	mysqli_query($conn, $sql);
	    
	       if (move_uploaded_file($tempname, $folder))  {
              echo '<script language="javascript">';
            echo 'alert("Successfully added"); location.href="autho-details.php"';
            echo '</script>';
             

        }else{
            $msg = "Failed to upload image";
      }

	
				 
// Close connection
mysqli_close($conn);








}
?>
