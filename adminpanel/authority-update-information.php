<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn']) && $_FILES['image']){

      $id = $_POST['id'];


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
  
   $sql = "UPDATE  authority SET autho_id='$id',autho_name='$name',autho_img='$img_name',autho_mobile='$mobile',autho_email='$email',autho_position='$position',autho_office='$office',autho_startdate='$start_Date' WHERE autho_id=$id";

    	mysqli_query($conn, $sql);
	    
	       if (move_uploaded_file($tempname, $folder))  {
              echo '<script language="javascript">';
        
            echo 'alert("Successfully saved"); location.href="autho-details.php"';
            echo '</script>';
             

        }else{
            $msg = "Failed to upload image";
      }

	
				 
// Close connection
mysqli_close($conn);








}
?>
