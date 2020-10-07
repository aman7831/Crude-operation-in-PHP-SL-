<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>edit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     
<?php
$conn = new mysqli('localhost','root','','blog')
or die("cannot connect");

if (isset($_GET['id'])) 
{
$id = $_GET['id'];

$result= mysqli_query($conn,"SELECT * FROM teacher where id=$id ");
$data= mysqli_fetch_array($result)

?>

<form action="" method="POST">
<div class="Form-group">
<label for="user">user</label>
<input type="text" class="form-control" name="user"  value="<?php echo $data['user']; ?>" required></div>

<div class="Form-group">
<label for="name">name</label>
<input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required></div>


<div class="Form-group">
<label for="phone">phone</label>
<input type="number" class="form-control" name="phone" value="<?php echo $data['phone']; ?>" required></div>

<div class="Form-group">
<label for="address">address</label>
<input type="text" class="form-control" name="address" value="<?php echo $data['address']; ?>" required></div>

<div class="Form-group">
<label for="email">email</label>
<input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" required></div>

<div class="Form-group">
<label for="qualification">qualification</label>
<input type="text" class="form-control" name="qualification" value="<?php echo $data['qualification']; ?>" required></div>

<div class="Form-group">
<label for="experience">experience</label>
<input type="text" class="form-control" name="experience" value="<?php echo $data['experience']; ?>" required></div>


<div class="Form-group">
<label for="about">about</label>
<input type="text" class="form-control" name="about" value="<?php echo $data['about']; ?>" required></div>



<button class="btn" type="submit" name="update">update</button>

</form>





<?php


if(isset($_POST['user'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['email'])&&isset($_POST['qualification'])&&isset($_POST['experience'])&&isset($_POST['about']))
{
  $user =$_POST['user'];
  $name =$_POST['name'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
  $email =$_POST['email'];
  $qualification =$_POST['qualification'];
  $experience =$_POST['experience'];
  $about =$_POST['about'];
  
  $sql = "UPDATE  `teacher` SET  user ='$user', name ='$name', phone ='$phone', address ='$address', email ='$email', qualification ='$qualification', experience = '$experience', about= '$about' WHERE id=$id " ;
  if(mysqli_query($conn,$sql)){
    echo "updated";
    header ('location:index2.php');
  }
  else{
    echo "error".$id;
    
  }
}

}

?>