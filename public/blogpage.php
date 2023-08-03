<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home</title>

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        @media screen and (max-width: 400px) {
           .myimg {
             height: 8%;
            }
         }
        @media screen and (min-width: 401px) {
           .myimg {
             height: 12%;
            }
         }
    </style>
    <link href="assets/css/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/headers.css" rel="stylesheet">
</head>
<?php
session_start();
if(isset($_SESSION['name']))
  $user = $_SESSION['name'];
else 
   $user = "user";  
?>
<body>
    <main>
        <header class="p-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-right justify-content-right justify-content-lg-start">
                    

                    <ul class="nav col-10 me-lg-auto mb-2 justify-content-left mb-md-0">
                        <li><a href="../public/home.php" class="d-flex mb-2 mb-lg-0 link-body-emphasis text-decoration-none">

                           <img src="assets/images/logo.jpg" class="mt-2 me-5 bi me-2" width="40" height="32" style="object-fit:cover">
                           </a></li>
                        <li><a href="./home.php" class="nav-link px-2 link-secondary">Home</a></li>
                        <li><a href="./blogs.php" class="nav-link px-2 link-body-emphasis">Blog</a></li>
                        <li><a href="./contactus.php" class="nav-link px-2 link-body-emphasis">Contact Us</a></li>
                        <!-- <li><div class="dropdown text-end mt-2">
                        <a href=",/home.php" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/images/logo.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#"><?php echo $user ?></a></li>
                            <li><a class="dropdown-item" href="./admin.php">Admin</a></li>
                            <li><a class="dropdown-item" href="./login.php">login</a></li>
                            <li><a class="dropdown-item" href="../../blog/apps/pa">Signup</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
                        </ul>
                    </div></li> -->
                    </ul>
                    <div class="mt-2 ml-4 col-2 me-lg-auto dropdown text-end justify-content-rightmb-md-0 ">
                        <a class="link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/images/logo.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#"><?php echo $user ?></a></li>
                            <li><a class="dropdown-item" href="./admin.php">Admin</a></li>
                            <li><a class="dropdown-item" href="./login.php">login</a></li>
                            <li><a class="dropdown-item" href="../../blog/apps/pa">Signup</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        
        <link href="assets/css/blog.css" rel="stylesheet">
        <link href="assets/css/blog.rtl.css" rel="stylesheet">

        <main class="p-2">
        <?php
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $database = "myblog_db";

        //connection to data base
        $conn = new mysqli($server_name, $username, $password, $database);
        if (!$conn) //to chk connection 
            die("connection error");

        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $blogId = $_GET['id'];
            $sql = "SELECT * FROM posts WHERE id='$blogId'";
            $result = mysqli_query($conn, $sql);
            $total_row = mysqli_num_rows($result);
            if ($total_row != 0)
                $row = mysqli_fetch_assoc($result);
            else
                echo "row not found";
        } else
            echo "id not found";

         $sql1 = "SELECT * FROM posts";
         $result1 = mysqli_query($conn, $sql1);
         $total_row1 = mysqli_num_rows($result1);    
            
        ?>

        <div class="container-fluid"></div>
         <div class="row m-2 px-2 ">
            <div class="main-content col-lg-9 col-sm-12 col-md-12">
               <img class="mb-2 mying" width="100%" src="./assets/images/<?php echo $row["image"] ?>">
                <h1><?php echo $row["title"] ?></h1>
                <p><?php echo $row["content"] ?></p>
            </div>
            <div class="related-blogs col-lg-3 col-sm-12 col-md-12">
                <h3>Creat Your Qwn Blog :</h3>
                <button class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-1" type="submit" name='submit'><a href="./create-post.php">Create new Post</a> </button>
                <br>
               <h3>Related blogs :</h3> 
               <?php
               if ($total_row1 != 0) {
                   while ($row = mysqli_fetch_assoc($result1)) {
                       echo "<a class='' href='blogpage.php?id=".$row['id']."'>".$row['title']."</a>";
                   }
               }
               ?>
            </div>
         </div>
        </main>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="text-body-secondary" href="#">
                            <i class="bi-twitter"></i>
                        </a>
                    </li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </footer>
        </div>
    </main>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>