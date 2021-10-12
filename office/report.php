<?php
 function fetch_data()  
 {  
      include("conn.php");
      $output = '';  
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $sql = "SELECT * FROM equipment WHERE included_date BETWEEN '$from_date' AND '$to_date' "; 
    
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
  function fetch_data1()  
 {  
      include("conn.php");
      $output = '';  
                                   
  $type = $_GET['Equipment_Type'];
                                   

        $sql1 = "SELECT * FROM equipment WHERE Equipment_Type='$type' "; 
    
      $result = mysqli_query($conn, $sql1);  
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


   if(isset($_POST["create_pdf1"]))  
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
      $content .= fetch_data1();  
      $content .= '</table>';  
      ob_end_clean();
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
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
      $content .= '  
      <h3 align="center">Expired Equipment Details</h3><br /><br />  
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
<?php include('security.php'); ?>

<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>


              <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipment  </h1>
                    <p class="mb-4">
                      Here we are showing Equipment report

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
                            <h6 class="m-0 font-weight-bold text-primary">Equipment Report</h6>
                        </div>
                        <div class="card-body">
										<nav class="navbar navbar-inverse">
										  <div class="container-fluid">
										   
										    <ul class="nav navbar-nav">
										     
										      <li id="using-date"><a href="#using-date">Using Date</a></li>
										      <li><a href="#usingtype">Using Type</a></li>
										     
										    </ul>
										  </div>
								</nav>  
                     <section class="using-date" id="using-date">
                        <div >
                        <div class="card-header">
                        <h4>Generate REport using bwtwen date</h4>
                    </div>
            <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                      </div>

                     </section>

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
                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                                          $id=  $_SESSION['username'];
                                                         $depart = "select * from officer where officer_email='$id'";

                                                          $Q1=mysqli_query($conn,$depart);
                                                           $data1 = mysqli_fetch_assoc($Q1);
                                                           $de=$data1['officer_department'];                                  


                                    $query = "SELECT * FROM equipment WHERE Department='$de' AND included_date BETWEEN '$from_date' AND '$to_date' ";
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

								  <section class="usingtype" id="usingtype">
                        <div >
                        <div class="card-header">
                        <h4>Generate REport using Equipment Type</h4>
                    </div>
                                        <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Equipment Type</label>
                                        <input type="text" name="Equipment_Type" value="<?php if(isset($_GET['Equipment_Type'])){ echo $_GET['Equipment_Type']; } ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                      </div>

                     </section>

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
                                if(isset($_GET['Equipment_Type']))
                                {
                                    $type = $_GET['Equipment_Type'];
                                   
                                   $id=  $_SESSION['username'];
                                                         $depart = "select * from officer where officer_email='$id'";

                                                          $Q1=mysqli_query($conn,$depart);
                                                           $data1 = mysqli_fetch_assoc($Q1);
                                                           $de=$data1['officer_department'];                                  


                                    $query1 = "SELECT * FROM equipment WHERE Department='$de' AND Equipment_Type='$type' ";
                                    $query_run1 = mysqli_query($conn, $query1);

                                    if(mysqli_num_rows($query_run1) > 0)
                                    {
                                        foreach($query_run1 as $data)
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
                                }
                            ?>
                            </tbody>
                        </table>
                          <form method="post">  
                          <input type="submit" name="create_pdf1" class="btn btn-danger" value="Create PDF" />  
                     </form>
                    </div>
                </div>
                     </section>




                   </div>
               </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>