<?php
include('header.php');
session_start();
$data_array = $_SESSION['data'];
$uid = $data_array['id'];
if(!$data_array['role']=='user'){
    header("location: index.php");
}
$sql = "select * from users where id = '$uid'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<div class="container">

    <h2>This is user dashboard Mr <?php echo $row['name'] ?></h2>
    <a href="ulogout.php"><button class="btn btn-danger mt-5" type="submit">Logout</button></a>
</div>