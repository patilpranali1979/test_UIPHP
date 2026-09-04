<?php
session_start();
include "db.php";

if(!isset($_SESSION['name']))
{
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar Start -->




<!-- Navbar End -->

<br>

<div class="container">

<table class="table table-bordered table-hover">

<tr>
    <th>ID</th>
    <th>Event Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>category</th>
    <th>Location</th>
    <th>Description</th>
</tr>

<?php

$sql = "select * from eventmanager";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
?>

<tr>

<td><?php echo $row['ID']; ?></td>

<td><?php echo $row['eventname']; ?></td>

<td><?php echo $row['date']; ?></td>

<td><?php echo $row['time']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['location']; ?></td>

<td><?php echo $row['description']; ?></td>



<td>

<a href="add.php" class="btn btn-success btn-sm">Add</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>