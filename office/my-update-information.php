<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn']) && $_FILES['image']){

      $id = $_POST['id'];


		 $name = filter_input(INPUT_POST, 'officer-name');
		
	     $mobile = filter_input(INPUT_POST, 'mobile');
	     $email = filter_input(INPUT_POST, 'email');
       $department =filter_input(INPUT_POST, 'department');
	     $start_Date = filter_input(INPUT_POST, 'start_date');

        $msg="";

       $img_name = $_FILES['image']['name'];
       $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "upload/".$img_name;
  
   $sql = "UPDATE  officer SET officer_id='$id',officer_name='$name',officer_img='$img_name',officer_mobile='$mobile',officer_email='$email',officer_department='$department',office_startdate='$start_Date' WHERE officer_id=$id";

    	mysqli_query($conn, $sql);
	    
	       if (move_uploaded_file($tempname, $folder))  {
              echo '<script language="javascript">';
        
            echo 'alert("Successfully saved"); location.href="myprofile.php"';
            echo '</script>';
             

        }else{
            $msg = "Failed to upload image";
      }

	
				 
// Close connection
mysqli_close($conn);








}
?>
