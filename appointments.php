<?php
include 'demo.html';
include_once 'database.php';

session_start();
if(!(isset($_SESSION['email'])))
{
    header("location:index_student.php");
}
else
{
    
    $email = $_SESSION['email'];
    include_once 'database.php';
}
$id=@$_GET['id'];
$pemail=@$_GET['profmail'];
$abcd=@$_GET['stumail'];
date_default_timezone_set('Asia/Kolkata');
$currentdate = date('Y-m-d');
$res=mysqli_query($con, "SELECT * FROM `appointment` WHERE `d_id`= $id AND`date`='$currentdate' ");
      while($row=mysqli_fetch_array($res))
      { 
          
        $umail=$row['u_mail'];
        $doc_id=$row["d_id"];
        $atimef=$row["timef"];
        $atimet = $row["timet"];
        $date= $row["date"];
      }
      $abc=mysqli_query($con, "SELECT * FROM `prof_name` WHERE `id`= $doc_id");
      while($row=mysqli_fetch_array($abc))
      { 
          
        $name=$row['p_name'];
      }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    
<div class="col-lg-9 container">
            <div class="card">

                <div class="card-header">
                    
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped">
  <h3>Appointment History:</h3>
  <thead>
      <tr>
          <th scope="col">Date</th>
          <th scope="col">User Email</th>
          <th scope="col">Time From</th>
          <th scope="col">Time To</th>
          
          </th>
          

      </tr>
  </thead>
  
  <tbody>
  <tr>
              
              <td>
                  <?php echo $date;?></td>
              <td><?php echo $umail;?></td>    
              <td><?php echo $atimef;?></td>
              <td><?php echo $atimet;?></td>
              
    </tr>
    </table>
    <br>
    </div>
</body>
</html>