<?php
include("assets/header_admin.php");
?>

<?php
session_start();
?>

<html>
    <head>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
        <title>Customers</title>
    </head>

<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['email'];

if($userprofile == true){

} else {
  		header('location:login.php');
}

$query = "SELECT * FROM users_table";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if($total != 0)
{
?>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

<section class="menu_section layout_padding2-top">

<h2>Our Customer Details</h2>

<div class="container">
<table class="table layout_padding2-bottom">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Email</th>
      <th scope="col" width="50px">Phone Number</th>
      <th scope="col">Location</th>
      <th scope="col">Handle</th>
      <th scope="col">Role</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

<?php
while($result = mysqli_fetch_assoc($data))
{
    echo "<tr>
    <td>".$result['id']."</td>
    <td><img src = '".$result['image']."' height='75px' width='75px'></td>
    <td>".$result['name']."</td>
    <td>".$result['email']."</td>
    <td>".$result['phone']."</td>
    <td>".$result['location']."</td>
    <td>".$result['handle']."</td>
    <td>".$result['access']."</td>

    <td><a href='update.php?id=$result[id]'><input type='submit' class='btn btn-outline-success' value = 'Update'></a>

    <a href='delete.php?id=$result[id]'><input type='submit' class='btn btn-outline-danger' value = 'Delete' onclick = 'return checkdelete()'></a></td>

    </tr>
    ";
}
}
else{
    echo "No records found";
}
?>
</table>

<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record?');
    }
</script>
</body>
</html>