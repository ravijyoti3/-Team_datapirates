<?php
session_start();
include'database.php';
include'nav_std.php';

$query=mysql_query("SELECT * from hackathon ");




 ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <center><h1>Internships For You!</h1></center>
   <?php while ($row=mysql_fetch_assoc($query)) {

   ?>
    <div class="card border-primary mb-3" style="max-width: 50rem;">
  <div class="card-header"><?php echo $row['iname']; ?></div>
  <div class="card-body text-primary">
    <h5 class="card-title"><?php echo $row['cname']; ?></h5>
    <p class="card-text">Work Location: <br> <?php echo $row['location'] ?> </p>
    <div class="b_detail" style="display:flex;justify-content:space-around; ">
      <p class="card-text">Duration: <br> <?php echo "<b>From</b> : ".$row['stdur']."<br><b>To</b> : ".$row['endur']; ?> </p>
      <p class="card-text">Stipend: <br> <?php echo $row['stipend']; ?></p>
      <p class="card-text">Apply Till: <br> <?php echo $row['appdate']; ?></p>
    </div>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
<?php } ?>
  </body>
</html>
