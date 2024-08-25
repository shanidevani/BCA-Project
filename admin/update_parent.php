<?php
// error_reporting(0);
//  $id = $_GET['s_id'];
include '../application/config/config.php';


    //data stor in variable's
    if(isset($_POST['update']))
    {
        
    echo "yes";
    $p_id = $_POST['p_id'];
  //  echo $s_id;
    $pname = $_POST['p_name'];
//  echo $pname;
    $relation = $_POST['relation'];
 // echo $relation;
    $father = $_POST['father'];
  // echo $father;
    $mother = $_POST['mother'];
 // echo $mother;
    $occu = $_POST['occu'];
///   echo $occu;
    $income = $_POST['income'];
  // echo $income;
    $education = $_POST['education'];
 //  echo $education;
        $m_no =$_POST['m_no'];
  //      echo $m_no;

  echo "enter";
  $qry = "UPDATE `parent` SET `name`='$pname',`relation`='$relation', `father_name`='$father', `mother_name`='$mother', `occupation`='$occu', `income`='$income', `education`='$education',`mobile_no`='$m_no' WHERE `parent_id`='$p_id'";
  $data = mysqli_query($con, $qry);
  if($data)
  {
    echo '<script>alert("data updated into database.")</script>';
  }
  else
  {
    echo '<script>alert("data not updated into database.")</script>';
  }

}else{
echo "nore";
}

header("Location: all_parent.php");
exit();
  ?>