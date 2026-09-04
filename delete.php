<?php
include "db.php";

$id=$_GET['id'];

$sql=$conn->prepare("delete from eventmanager where id=?");
$sql->bind_param("i",$id);

if($sql->execute())
{
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div
    class="container"
   >
   <form action="home.php" method="POST">
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input
            type="text"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
       
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
    </div>
    
   </form>
   </div>
   
</body>
</html>