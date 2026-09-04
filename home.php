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

<nav class="navbar ">
    <div class="container-fluid">

        <span class="navbar-brand">
            Hello <?php echo $_SESSION['name']; ?>!
        </span>

       
         <a href="Home.php" class="btn btn-danger">
            Home
        </a>

         <a href="dashboard.php" class="btn btn-danger">
            dashboard
        </a>

         <a href="register.php" class="btn btn-danger">
            Register
        </a>

         <a href="add.php" class="btn btn-danger">
            Add Events
        </a>

        <a href="logout.php" class="btn btn-danger">
           
        Logout
        </a>

        


    </div>
</nav>

<!-- Navbar End -->
<main>
    <div
        class="container"
    >

    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li
                data-bs-target="#https://plus.unsplash.com/premium_photo-1682123973193-e087937a9de9?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dGVjaCUyMGV2ZW50fGVufDB8fDB8fHww"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="First slide"
            ></li>
            <li
                data-bs-target="#https://www.shutterstock.com/image-photo/video-camera-recording-live-event-260nw-2759933989.jpg"
                data-bs-slide-to="1"
                aria-label="Second slide"
            ></li>
            <li
                data-bs-target="#https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-YHi0fmjwamgS8l0-uA0jHTT21Z7gWUUdplB8uNhEWA&s=10"
                data-bs-slide-to="2"
                aria-label="Third slide"
            ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img
                    src="https://plus.unsplash.com/premium_photo-1682123973193-e087937a9de9?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dGVjaCUyMGV2ZW50fGVufDB8fDB8fHww"
                    class="w-100 d-block"
                    alt="First slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="https://www.shutterstock.com/image-photo/video-camera-recording-live-event-260nw-2759933989.jpg"
                    class="w-100 d-block"
                    alt="Second slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-YHi0fmjwamgS8l0-uA0jHTT21Z7gWUUdplB8uNhEWA&s=10"
                    class="w-100 d-block"
                    alt="Third slide"
                />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
       <br>
    
       <table>
        <tr>
            <td><div class="card">
                <img class="card-img-top" src="https://c8.alamy.com/comp/W3MC06/event-management-concept-event-management-flowchart-event-management-related-items-mixed-media-business-W3MC06.jpg" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Tech Events</h4>
                    <p class="card-text">Information Technology (IT) events broadly refer to organized gatherings where industry professionals, developers, and tech enthusiasts share knowledge, network, and showcase innovations.</p>
                </div>
            </div>
            </td>

            <td><div class="card">
                <img class="card-img-top" src="https://informationage-production.s3.amazonaws.com/uploads/2022/10/tech-events-diary.jpg" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Tech Events</h4>
                    <p class="card-text">Depending on your context, "IT related events" can mean two entirely different things: Professional Tech Events (conferences/hackathons) or System & Security Events (technical logs).</p>
                </div>
            </div>
            </td>

            <td><div class="card">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5D0rvfwz4OrcTKeOyQHb6R4yKfhxBGYkUYNy_g4WeK5x2r2485dGQd0Mw&s=10" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Tech Events</h4>
                    <p class="card-text"> (Sept 16, 2026 | Mumbai) India's largest professional Audio Visual (AV) and Information and Communications Technology (ICT) trade show, held at the Jio World Convention Centre</p>
                </div>
            </div>
            </td>
        </tr>
       </table>
    
    </div>
    
</main>






</body>
</html>