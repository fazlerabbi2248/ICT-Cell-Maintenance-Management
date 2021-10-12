<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

	


   $id = $_POST['id'];

     $name = filter_input(INPUT_POST, 'name');
      $department= filter_input(INPUT_POST, 'department');
       $desc = filter_input(INPUT_POST, 'notice-des');
      
       $notice_date = filter_input(INPUT_POST, 'notice_date');

    $update="UPDATE notice set notice_id=$id, notice_name='$name', notice_department='$department', notice_desc='$desc' ,notice_date='$notice_date' WHERE notice_id=$id"; 

if (mysqli_query($conn,$update)) {

    	    
	     	echo '<script language="javascript">';
            echo 'alert("updated successfully"); location.href="notice-update.php"';
            echo '</script>';
             
  
} else {
	echo $id;
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);





}
?> 
