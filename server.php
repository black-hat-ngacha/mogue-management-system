<?php
$con=mysqli_connect('localhost','root','','mogue');

session_start();

// register pathologist
if(isset($_POST['pathologist_register']))
{

  $name=$_POST['pname'];
  $id=$_POST['id_number'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $rank=$_POST['rank'];
  

  $sql="INSERT INTO `pathologist`(`pathologist_name`, `pathologist_id_number`, `pathologist_phone_number`) 
  VALUES ('$name','$id','$phone')";

  $query=mysqli_query($con,$sql);

  if($query)
  {
    $pathologist=$con->insert_id;

    $sql="INSERT INTO `login`(`login_username`, `login_password`, `login_rank`, `login_pathologist_id`, `login_diener_id`)
    VALUES ('$name','$password','$rank','$pathologist',1)";

    $query=mysqli_query($con,$sql);

    if($query)
    {
      if($rank=='pathologist')
      {
        header('location: reporting.php');
      }
    }


  }

}

if(isset($_POST['diener_register']))
{

  $name=$_POST['dname'];
  $id=$_POST['id_number'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $rank=$_POST['rank'];

  $sql="INSERT INTO `diener`(`diener_name`, `diener_id_number`, `diener_phone_number`)
  VALUES ('$name','$id','$phone')";

  $query=mysqli_query($con,$sql);

  if($query)
  {
  
    $diener=$con->insert_id;

    $sql="INSERT INTO `login`(`login_username`, `login_password`, `login_rank`, `login_pathologist_id`, `login_diener_id`)
    VALUES ('$name','$password','$rank',1,'$diener')";

    $query=mysqli_query($con,$sql);

    if($query)
    {
      if($rank=='diener')
      {
        header('location: bodies.php');
      }
    }


  }

}



if(isset($_POST['deceased_register']))
{
  $relative=$_POST['relative_name'];
  $body=$_POST['bname'];
  $diener_id=1;
 $feedback=$_POST['feedback'];

  $sql="INSERT INTO `relatives`(`relative_name`) VALUES ('$relative')";

  $query=mysqli_query($con,$sql);

  
  if($query)
  {
//echo "success";
    $relative_id=$con->insert_id;
//echo $body;

    $sql="INSERT INTO `body`(`body_name`, `body_relative_id`, `body_diener_id`) 
    VALUES ('$body','$relative_id','$diener_id')";

    $query=mysqli_query($con,$sql);

   
if($query)
{
echo "success";

  $sql="INSERT INTO `feedback`(`feedback_details`) VALUES ('$feedback')";

  $query2=mysqli_query($con,$sql);

if($query2)
{
  //echo "salama";
  header('location: payment.php');
}
}

  }
  else
  {
    echo "error";
   // header('location: login.php');
  }

}

if(isset($_POST['report_btn']))
{


    $id=$_POST['report_id'];
    $repo=$_POST['repo'];

    $sql5="INSERT INTO `report`(`report_body_id`, `report_pathologist_id`,`repo`) 
    VALUES ($id,1,'$repo')";

    $query5=mysqli_query($con,$sql5);
 header('location: reporting.php');

}
           
if(isset($_POST['pay']))
{
  $amount=$_POST['amount'];
  $ref=$_POST['transaction'];
  $mode=$_POST['mode'];

  $sql="INSERT INTO `payment`(`payment_amount`, `payment_ref`, `payment_type`)
  VALUES ('$amount','$ref','$mode')";

$query=mysqli_query($con,$sql);

if($query)
{
 // header('location: bodies.php'); 

print '<script>alert("report updated"); window.location.assign("reporting.php")</script>';
}

}

if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * from login where login_username='$username' and login_password='$password'";

  $query=mysqli_query($con,$sql);

  while($row=mysqli_fetch_assoc($query))
  {
 if($row['login_rank']=='pathologist')
 {
   $_SESSION['username']=$username;
   $_SESSION['id']=$row['login_id'];
  header('location: reporting.php');
 }
 else if($row['login_rank']=='diener')
 {
  $_SESSION['username']=$username;
   header('location: bodies.php');
 }
 else
 {
   header('location: login.php');
 }

  }
}


      
    

      

    
          ?>
