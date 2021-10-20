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
$id1=@$_GET['id'];
$pemail=@$_GET['profmail'];
$abcd=@$_GET['stumail'];


      $res=mysqli_query($con, "select * from doctors_schedule ");
      while($row=mysqli_fetch_array($res))
      { 
          
          $did=$row['doctor_id'];
          $day=$row["day"];
          $timef=$row["time_from"];
          $timet = $row["time_to"];
         
          date_default_timezone_set('Asia/Kolkata');
          $currentdate = date('Y-m-d');
      }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="examp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-9 container">
            <div class="card">

                <div class="card-header">
                    
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped">
  <h3>Schedule:</h3>
  <thead>
      <tr>
          <th scope="col">Day</th>
          <th scope="col">Time From</th>
          <th scope="col">Time To</th>
          
          </th>
          

      </tr>
  </thead>
  
  <tbody>
  <tr>
              
              <td>
                  <?php echo $day;?></td>
              <td><?php echo $timef;?></td>
              <td><?php echo $timet;?></td>
              
    </tr>
    </table>
    <br>
    <?php

$que=mysqli_query($con, "select * from appointment ");
while($row=mysqli_fetch_array($que))
{ 
    
    $umail=$row['u_mail'];
    $doc_id=$row["d_id"];
    $atimef=$row["timef"];
    $atimet = $row["timet"];
    $date= $row["date"];
    
}
    ?>
    <div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="date" placeholder="Date" name="date" value="<?php echo $date; ?>" required>
			</div>

			<div class="input-group">
				<input type="time" placeholder="Time From" name="atimef" value="<?php echo $atimef; ?>" required>
			</div>
			<div class="input-group">
				<input type="time" placeholder="Time To" name="atimet" value="<?php echo $atimet; ?>" required>
            </div>
            <br>
			<div class="input-group">
				<button name="submit" class="btn" style=" background-color: #a02929;">Register</button>
			</div>
			
		</form>
	</div>
    <?php


if (isset($_POST['submit'])) {
	$date = $_POST['date'];
	$atimef = $_POST['atimef'];
    $atimet = $_POST['atimet'];
    $umail= $abcd;
    $doc_id =$id1;
    $sql = "INSERT INTO appointment (`u_mail`, `d_id`, `date`, `timef`, `timet`) VALUES ('$umail','$doc_id','$date','$atimef','$atimet')";
	if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
      }



}
    ?>
</body>
</html>


