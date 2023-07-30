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
        
        .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:15px;   
        color: black;  
        padding: 7px 10px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: greenyellow;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
    </style>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Custom styles for this template -->
    <link href="assets/css/font/bootstrap-icons.css" rel="stylesheet"> 
     <!-- Custom styles for this template -->
<link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/dashboard.rtl.css" rel="stylesheet">
</head>

<body>
   
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Company name</a>

    <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="./admin.php">
                                    <i class="bi bi-house-door-fill"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="./users.php">
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

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <span>Saved reports</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <svg class="bi">
                                    <use xlink:href="#plus-circle" />
                                </svg>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    Current month
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
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                            <svg class="bi">
                                <use xlink:href="#calendar3" />
                            </svg>
                            This week
                        </button>
                    </div>
                </div>
                <?php

                $server_name = "localhost";
                $username = "root";
                $password = "";
                $database = "myblog_db";

                //connection to data base
                $conn = new mysqli($server_name, $username, $password, $database);

                $per_page_record = 2; // Number of entries to show in a page.   
                // Look for a GET variable page if not found default is 1.        
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                } else {
                    $page = 1;
                }

                $start_from =( ($page - 1) * $per_page_record);

                $query = "SELECT * FROM users LIMIT $start_from, $per_page_record";
                $result = mysqli_query($conn, $query);
                ?> 
        <!-- user section -->
        <div class="container-fluid" id="user">
                    <h3 class="mx-3">Users : </h3>
                    <table class="table table-bordered table-hover" >
                       <thead>
                         <tr>
                            <th>EMAIL</th>
                            <th>USERNAME</th>
                            <th>ROLE</th>
                            <th>DATE</th>
                            <th>ACTION</th>
                         </tr>
                       </thead>
                        <?php

                        if (!$conn) //to chk connection 
                            die("connection error");
                        else {
                            $total_row = mysqli_num_rows($result);

                            if ($total_row > 0) {
                                while ($single_row = mysqli_fetch_assoc($result)) {
                                    echo "
                                           <tr>
                                              <td>" . $single_row['username'] . "</td>
                                              <td>" . $single_row['email'] . "</td>
                                              <td>" . $single_row['role'] . "</td>
                                              <td>" . $single_row['date'] . "</td>
                                              <td>
                                                 <button class='btn btn-warning text-white btn-sm'><a href='edit.php?id=" . $single_row['id'] . "'><i class='bi bi-pencil-square'></i></a></button>
                                                 <button class='btn btn-danger text-white btn-sm'><a href='delete.php?id=" . $single_row['id'] . "'><i class='bi bi-trash-fill'></i></button>
                                              </td>
                                           </tr>
                                           ";
                                }
                            }
                        }
                        ?>
                    </table>
                    <div class="pagination mx-20" >    
                        <?php
                            $query = "SELECT COUNT(*) FROM users";
                            $rs_result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_row($rs_result);
                            $total_records = $row[0];
                    
                            echo "</br>";
                            $total_pages = ceil($total_records / $per_page_record);
                            $pagLink = "";
                    
                            if ($page >= 2) {
                                echo "<a href='./users.php?page=" . ($page - 1) . "'>  Prev </a>";
                            }
                    
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $page) {
                                    $pagLink .= "<a class = 'active' href='./users.php?page="
                                        . $i . "'>" . $i . " </a>";
                                } else {
                                    $pagLink .= "<a href='./users.php?page=" . $i . "'>   
                                                                      " . $i . " </a>";
                                }
                            }
                            ;
                            echo $pagLink;
                    
                            if ($page < $total_pages) {
                                echo "<a href='./users.php?page=" . ($page + 1) . "'>  Next </a>";
                            }
                        ?>    
                    </div> 
                    <div class="inline my-3 mx-auto" >   
                        <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
                        placeholder="<?php echo $page."/".$total_pages; ?>" required>   
                        <button onClick="go2Page();">Go</button>   
                    </div>   
            </div>

       </main>
   </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asses/js/tdashboard.js"></script>
    <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = './admin.php?page='+page;   
    }   
  </script>  

</html>