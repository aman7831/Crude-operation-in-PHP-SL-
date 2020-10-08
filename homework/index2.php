
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
        table,th,td{
border:1px solid black;
border-spacing: 0px;
background-color: grey;
 }
 th{
   font:bold;
 }
        
        
        </style>
    </head>
    <body>
     
        
        
  
<form action="" method="POST">
<div class="social-links">
  <h1>Please Select Teacher or Student </h1>
<input type="radio" name="usertype" value="student">Student</button>
<input type="radio" name="usertype" value="teacher">Teacher</button>
<br><br><center>
  <br>
  <h1>Please Fill the Form</h1>
<div class="Form-group">
  <br>
<label for="user">
<input type="text" class="form-control" name="user" placeholder="Enter Your User Name" required></label></div>

<div class="Form-group">
<label for="name"></label>
<input type="text" class="form-control" name="name" placeholder="Enter Your Name " required></label></div>


<div class="Form-group">
<label for="phone">
<input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number" required></label></div>

<div class="Form-group">
<label for="address">
<input type="text" class="form-control" name="address" placeholder="User" required></label></div>

<div class="Form-group">
<label for="email">
<input type="email" class="form-control" name="email" placeholder="Enter Your Email" required></label></div>

<div class="Form-group">
<label for="qualification">
<textarea type="text" class="form-control" name="qualification" placeholder="Your Qualification" required></textarea></label></div>

<div class="Form-group">
<label for="experience">
<extarea type="text" class="form-control" name="experience" placeholder="Your Experience" required></textarea></label></div>


<div class="Form-group">
<label for="about">
<textarea type="text" class="form-control" name="about" placeholder="About You" required></textarea></label></div>

<button class="button">submit</button>

</center>
</div>
</form>



<br><br><center>
<h1>The data of the students are given below</h1>
<?php 

$conn = new mysqli('localhost','root','','blog')
or die("cannot connect");
if(isset($_POST['user'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['email'])&&isset($_POST['qualification'])&&isset($_POST['experience'])&&isset($_POST['about'])&&isset($_POST['usertype']))
{
  $usertype=$_POST['usertype'];
  $user =$_POST['user'];
  $name =$_POST['name'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
  $email =$_POST['email'];
  $qualification =$_POST['qualification'];
  $experience =$_POST['experience'];
  $about =$_POST['about'];
  if($usertype== "student"){
  $sql = "INSERT INTO `student` (`user`,`name`,`phone`,`address`,`email`,`qualification`,`experience`,`about`) VALUES ('$user','$name','$phone','$address','$email','$qualification','$experience','$about') " ;
  }
  if($usertype== "teacher"){
  $sql = "INSERT INTO `teacher` (`user`,`name`,`phone`,`address`,`email`,`qualification`,`experience`,`about`) VALUES ('$user','$name','$phone','$address','$email','$qualification','$experience','$about') " ;
}
  
  
  if(mysqli_query($conn,$sql)){
    
  }
  else{
    echo "error";
    
  }
}


?>
<?php
$conn = new mysqli('localhost','root','','blog')
or die("cannot connect");
$result = mysqli_query($conn,"SELECT * FROM student  ");
?>

<div>


<table >
<caption>Students Details</caption>
<tr>
<th>User Name</th>
<th>Full Name</th>
<th>Phone Number</th>
<th>Address</th>
<th>E-mail Address</th>
<th>Qualification</th>
<th>Experience</th>
<th>About</th>
<th>Delete</th>
<th>Edit</th>
</tr>
<?php
while ($row= mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['user']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['qualification']; ?></td>
<td><?php echo $row['experience']; ?></td>
<td><?php echo $row['about']; ?></td>
<td><a href="delete.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a></td>
<td><a href="edit.php?id=<?php echo $row['id'] ?>"><button>Edit</button></a></td>
</tr>

<?php




}
?>
</table>












</div>


</br>
<br>
<br>
<br>

<div>
<h1>The data of the Teachers are given below</h1>
<table >
<caption>Teachers Details</caption>
<tr>
<th>User Name</th>
<th>Full Name</th>
<th>Phone Number</th>
<th>Address</th>
<th>E-mail Address</th>
<th>Qualification</th>
<th>Experience</th>
<th>About</th>
<th>Delete</th>
<th>Edit</th>
</tr>


<?php
$result = mysqli_query($conn,"SELECT * FROM teacher  ");
while ($row= mysqli_fetch_array($result)){
  ?>
<tr>

<td><?php echo $row['user']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['qualification']; ?></td>
<td><?php echo $row['experience']; ?></td>
<td><?php echo $row['about']; ?></td>
<td><a href="delete2.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a></td>
<td><a href="edit2.php?id=<?php echo $row['id'] ?>"><button>Edit</button></a></td>

</tr>
<?php




}


?>


</table>





</div>


</center>


</body>
</html>

<style type="text/css">
.social-links{
   padding: 30px; 
}

.social-links input{
    height: 40px;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.883);
    border-radius: 3px;
    display: inline-block;
    border: 2px solid rgba(255, 255, 0, 0.897);
    line-height: 28px;
    text-align: center;
    margin: 0 1px;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}
 .social-links input:hover{
    background-color: transparent;
}

.social-links textarea{
    height: 70px;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.883);
    border-radius: 3px;
    display: inline-block;
    border: 2px solid rgba(255, 255, 0, 0.897);
    line-height: 28px;
    text-align: center;
    margin: 0 1px;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}
 .social-links textarea:hover{
    background-color: transparent;
}

.nav_button{
    width: 30%;
    height: 100%;
    float: left;
    padding-top: 8px;
}

.nav_button button{
    width: 180px;
    height: 40px;
    background: transparent;
    border: 1px solid white;
    border-bottom-right-radius: 10%;
    color: #fff;
}
.nav_button :hover{
    background: red;
}

.table th{
    height: 40px;
    width: 400px;
   
    
}
 .table th:hover{
    background-color: transparent;
}
</style>