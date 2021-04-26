<?php

$con=mysqli_connect('localhost','root','','mogue');




if(isset($_POST['delete_btn']))
{


    $id=$_POST['delete_id'];

    $query="DELETE body,relatives FROM relatives inner join body on relatives.relative_id=body.body_relative_id WHERE body_id='$id' ";

    $run=mysqli_query($con,$query);

    if($run)
    {
       $_SESSION['success']="deleted successfully";
       Print '<script>alert("body dispatched successfully.");window.location.assign("bodies.php");</script>';
    }
    else{
        $_SESSION['status']="no delete";
        Print '<script>alert("sorry, an error occured.");window.location.assign("bodies.php");</script>';
    }

}


if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    
  $update=true;

    $sql="SELECT * FROM user inner join login on user.user_login_id=login.login_id where user_id='$id'";

    $res=mysqli_query($con,$sql);

}

if(isset($_POST['set_diet']))
{
    $id=$_POST['id'];

    $first_name=$_POST['first_name'];
    $middle_name=$_POST['middle_name'];
    $last_name=$_POST['last_name'];
    $national_id=$_POST['national_id'];
    $occupation=$_POST['occupation'];
    $phone=$_POST['phone'];
    $rank=$_POST['rank'];
    $account_no=$_POST['account_no'];
    $gender=$_POST['gender'];
    $location=$_POST['location'];
    $email=$_POST['email'];

    $sql="UPDATE users,login set user_first_name='$first_name',user_middle_name='$middle_name',user_last_name='$last_name',user_national_id='$national_id',
         user_occupation='$occupation',user_phone='$phone',login_rank='$rank',user_account_no='$account_no',user_gender='$gender',user_location='$location',user_email='$email'
          WHERE user_id='$id' ";

$res=mysqli_query($con,$sql);
$_SESSION['message']="Record updated successfully";
$_SESSION['msg_type']="warning";

header('location: admin_creditor_query.php');
}

?>