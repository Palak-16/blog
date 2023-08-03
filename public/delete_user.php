<?php
 $server_name = "localhost";
 $username = "root";
 $password = "";
 $database = "myblog_db";

 $conn = new mysqli($server_name, $username, $password, $database);
 if (!$conn) 
     die("connection error");
  
$id = $_GET['id'];   
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard Template · Bootstrap v5.3</title>
    
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstap-icons.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
        @media screen and (max-width: 400px) {
           .myrow {
            float: right;
             overflow: hidden;
             width: 130%;
           }
        }
        @media screen and (min-width: 400px) {
           .myrow {
             float: right;
           }
}
       
    </style>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Custom styles for this template -->
    <link href="assets/css/font/bootstrap-icons.css" rel="stylesheet"> 
     <!-- Custom styles for this template -->
<link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/dashboard.rtl.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
   
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Zedi Esports</a>

    <ul class="navbar-nav flex-row d-md-none m-auto">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                <a href="./home.php" style="color: black; text-decoration:none;">Home Page</a>
                </button>
            </li>
            
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="./admin.php">
                                    <i class="bi bi-house-door-fill"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 " aria-current="page" href="./users.php">
                                    <i class="bi bi-people-fill "></i>
                                    User
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 " aria-current="page" href="./categories.php">
                                    <i class="bi bi-bookmarks-fill"></i>
                                    Category
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 " aria-current="page" href="./posts.php">
                                    <i class="bi bi-file-post-fill"></i>
                                    Posts
                                </a>
                            </li>
                        </ul>

                

                        <hr class="my-3">

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#door-closed" />
                                    </svg>
                                    Home Page
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#door-closed" />
                                    </svg>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="./users.php" style="color: black; text-decoration:none;">users</a></button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="./categories.php" style="color: black; text-decoration:none;">categories</a></button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="./users.php" style="color: black; text-decoration:none;">posts</a></button>
                        </div>
                    </div>
                </div>
            </main>
           
            <div class="container-fluid col-lg-10 col-md-8" >
               <h2 style="float:CENTER">DO YOU WANT TO DELETE ?</h2>
                <div class="row col-lg-10 col-md-12" style="float:right">
                   <div class="col-lg-3 col-md-6 col-sm-8 card text-bg-info mb-2 mx-3" style="max-width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title"><a href="./users.php">NO</a></h5>
                       </div>
                    </div>
                   <div class="col-lg-3 col-md-6 col-sm-8  card text-bg-success mb-2 mx-3" style="max-width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title"><a href="del_user.php?id=<?php echo $_GET['id']?>">YES</a></h5>
   
                       </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asses/js/tdashboard.js"></script>
    <script>   
    
  </script>  
</body>

</html>

 