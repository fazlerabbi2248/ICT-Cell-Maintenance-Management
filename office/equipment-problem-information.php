<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['send_btn'])){

	


   $id = $_POST['id'];

     
      
       $desc = filter_input(INPUT_POST, 'problem-desc');
      
       $issue_date = filter_input(INPUT_POST, 'issue-date');

     $problem = "INSERT INTO equipmmentproblem (EquipmentID, prob_desc, issue_date) VALUES ('$id', '$desc', '$issue_date')";

 $pending = "INSERT INTO pendingproblem (EquipmentID, prob_desc, issue_date) VALUES ('$id', '$desc', '$issue_date')";

       if(mysqli_query($conn, $problem)){
            mysqli_query($conn,$pending); 
        echo '<script language="javascript">';
        
            echo 'alert("Successfully send "); location.href="sending-problem.php"';

            echo '</script>';
             
      } else{
            echo "ERROR: Could not able to execute $problem. " . mysqli_error($conn);
         }
mysqli_close($conn);





}
?> 
