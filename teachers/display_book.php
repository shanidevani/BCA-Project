<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/table.css">
    <title>Document</title>
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

      $id = $_GET['b_id'];
      if($id != null)
      {
        // echo $id;
      }
      else
      {
       echo "exit";
      }

      $sql="SELECT * FROM `book` WHERE `id`='$id'";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        $folder = "../assets/documents/book/".$info['file'];
        ?>
       
      <embed type="application/pdf" src="<?php echo $folder; ?>" width="1500px" height="735px">
    <?php
      }

      ?>

    </div>
</body>
</html>