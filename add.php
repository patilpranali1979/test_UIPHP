<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id = $_POST['id'];
    $eventname = $_POST['eventname'];
    $date= $_POST['date'];
    $time=$_POST['time'];
    $category=$_POST['category'];
    $location=$_POST['location'];
    $description=$_POST['description'];


    $sql=$conn->prepare("insert into eventmanager(id,eventname,date,time,category,location,description) values(?,?,?,?,?,?,?)");
    $sql->bind_param('issssss',$id,$eventname,$date,$time,$category,$location,$description);

    if($sql->execute())
    {
        header("Location: login.php");
    }
}
?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
           <div
            class="container col-4 mt-4 p-4 border shadow  style-background:liner-gradient(red,yellow,blue)"
           >
          
            <form action="" method="POST">
                 <div class="mb-3">
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
                        
                        
                    </div>
                    
                <label for="" class="form-label">Event Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="eventname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">date</label>
                <input
                    type="text"
                    class="form-control"
                    name="date"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Time</label>
                <input
                    type="text"
                    class="form-control"
                    name="time"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
                
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">category</label>
                <input
                    type="text"
                    class="form-control"
                    name="category"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Location</label>
                <input
                    type="text"
                    class="form-control"
                    name="location"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">description</label>
                <input
                    type="text"
                    class="form-control"
                    name="description"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
                
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
            
            
            </form>
           </div>
           
            
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
