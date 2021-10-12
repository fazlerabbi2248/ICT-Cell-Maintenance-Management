<?php  include("conn.php"); ?>

<?php 
if(isset($_POST['send_btn'])){

   	$id = $_POST['id'];
   	$email = filter_input(INPUT_POST, 'email');
   	$sub = filter_input(INPUT_POST, 'sub');
   	 $msg = filter_input(INPUT_POST, 'msg');



   $office= "select * from officer where officer_id=$id"; 
    $Q=mysqli_query($conn,$office);
    $data = mysqli_fetch_assoc($Q);

     if(mail($email, $sub, $msg)){

	     	echo '<script language="javascript">';
            echo 'alert("Successfully send"); location.href="officerDetails.php"';
            echo '</script>';
     } 


mysqli_close($conn);





}
?> 