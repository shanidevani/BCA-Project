<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
      <link rel="stylesheet" href="../assets/css/table.css">
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }

      
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      include "../application/config/config.php";

      $id = $_GET['s_id'];
      if($id != null)
      {
        // echo $id;
      }
      else
      {
       echo "exit";
      }

      $sql="SELECT * FROM `submit_homework` WHERE `id`='$id'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        $folder = "../assets/documents/submited homework/".$info['file'];
        ?>
       
      <embed type="application/pdf" src="<?php echo $folder; ?>" width="1500px" height="735px">
    <?php
      }

      ?>

    </div>

  </body>
</html>
