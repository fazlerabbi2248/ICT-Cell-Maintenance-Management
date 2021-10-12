<?php include('security.php'); ?>
<?php

 function fetch_data()  
 {  
      include("conn.php");
      $output = '';  
                                 

                                    $sql = "SELECT * FROM equipment WHERE expire_date < now()";; 
    
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["EquipmentID"].'</td>  
                          <td>'.$row["Label"].'</td>  
                          <td>'.$row["Equipment_Type"].'</td>  
                          <td>'.$row["included_date"].'</td>  
                          <td>'.$row["expire_date"].'</td> 
                          <td>'.$row["Department"].'</td>   
                     </tr>  
                          ';  
      }  
      return $output;  
 }
   if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = ''; 
      $sql2 = "SELECT count(EquipmentID) FROM equipment WHERE expire_date < now()"; 
      $content .= '  
      <h3 align="center">Equipment Details</h3><br /><br /> 
       
       
       
       <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                                          <th>EquipmentID</th>
                                            <th>Label</th>
                                            <th>Equipment Type</th>
                                            <th>Included Date</th>
                                            <th>Expiry Date</th>
                                            <th>Department</th> 
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      ob_end_clean();
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 } 

?>




<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment </h1>
                    <p class="mb-4">
                    	Here we are showing our Equipment Details.

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Equipmnets Details</h6>
                        </div>
                        <div class="card-body">
                     <section class="using-date" id="using-date">
                        <div >
                        <div class="card-header">
                        <h4>Expierd Equipment: </h4>
                    </div>
            <div class="card-body">
                    
                       

                     <section>
                       
                                       <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>EquipmentID</th>
                                            <th>Label</th>
                                            <th>Equipment Type</th>
                                            <th>Included Date</th>
                                            <th>Expiry Date</th>
                                            <th>Department</th>

                                        </tr>
                                    </thead>
                            <tbody>
                            
                            <?php 
                               include("conn.php");
                               
                                
                                    $id=  $_SESSION['username'];
                                                         $depart = "select * from officer where officer_email='$id'";

                                                          $Q1=mysqli_query($conn,$depart);
                                                           $data1 = mysqli_fetch_assoc($Q1);
                                                           $de=$data1['officer_department'];


                                    $query = "SELECT * FROM equipment WHERE Department='$de' AND expire_date < now()";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $data)
                                        {
                                            ?>
                                                      <tr>
                                                      <td><?php echo $data['EquipmentID'];?></td>
                                                      <td><?= $data['Label']; ?></td>
                                                      <td><?= $data['Equipment_Type']; ?></td>
                                                      <td><?= $data['included_date']; ?></td>
                                                      <td><?= $data['expire_date']; ?></td>
                                                      <td><?= $data['Department']; ?></td>
                                                    </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                
                            ?>
                            </tbody>
                        </table>
                          <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>
                    </div>
                </div>
                     </section>
                        </div>
                    </div>

                </div>


<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>