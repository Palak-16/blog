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
            </main>
            <?php
               
            ?>
            <div class="container-fluid col-lg-10 col-md-8" >
                <div class="row col-lg-10 col-md-12" style="float:right">
                   <div class="col-lg-3 col-md-6 col-sm-8 card text-bg-info mb-2 mx-3" style="max-width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title">Total User</h5>
                         <p class="card-text">12</p>
                       </div>
                    </div>
                   <div class="col-lg-3 col-md-6 col-sm-8  card text-bg-success mb-2 mx-3" style="max-width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title">Active User</h5>
                         <p class="card-text">12</p>
                       </div>
                    </div>
                   <div class="col-lg-3 col-md-6 col-sm-8  card text-bg-warning mb-2 mx-3" style="max-width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title">Total Posts</h5>
                         <p class="card-text"></p>
                       </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid col-12" >   
            <div class="row col-lg-10 col-md-12 col-sm-12" style="float:right;">
            <div class="container-fluid col-lg-7 col-md-12 col-sm-12" style="float:left;"> 
                <script type='text/javascript' src='https://www.google.com/jsapi'></script>
                <div>
                    <div id="visualization">   </div>
                </div>
                <script>
                    google.load('visualization', '1', {'packages': ['geochart']});
                    google.setOnLoadCallback(drawVisualization);
                    function drawVisualization() {
                      var data = google.visualization.arrayToDataTable([
                            ['State Code', 'State', 'Users'],     
                              [ 'IN-UP','Uttar Pradesh', 33],
                        ['IN-MH','Maharashtra', 32],
                        ['IN-BR','Bihar', 31],
                        ['IN-WB','West Bengal', 32],
                        ['IN-MP','Madhya Pradesh', 30],
                        ['IN-TN','Tamil Nadu', 33],
                        ['IN-RJ','Rajasthan', 33],
                        ['IN-KA','Karnataka', 29],
                        ['IN-GJ','Gujarat', 34],
                        ['IN-AP','Andhra Pradesh', 32],
                        ['IN-OR','Orissa', 33],
                        ['IN-TG','Telangana', 33],
                        ['IN-KL','Kerala', 31],
                        ['IN-JH','Jharkhand', 29],
                        ['IN-AS','Assam', 28],
                        ['IN-PB','Punjab', 30],
                        ['IN-CT','Chhattisgarh', 33],
                        ['IN-HR','Haryana', 30],
                        ['IN-JK','Jammu and Kashmir', 20],
                        ['IN-UT','Uttarakhand', 28],
                        ['IN-HP','Himachal Pradesh', 17],
                        ['IN-TR','Tripura', 31],
                        ['IN-ML','Meghalaya', 21],
                        ['IN-MN','Manipur', 22],
                        ['IN-NL','Nagaland', 22],
                        ['IN-GA','Goa', 32],
                        ['IN-AR', 'Arunachal Pradesh', 33],
                        ['IN-MZ','Mizoram', 23],
                        ['IN-SK','Sikkim', 24],
                        ['IN-DL','Delhi', 31],
                        ['IN-PY','Puducherry', 33],
                        ['IN-CH','Chandigarh', 30],
                        ['IN-AN','Andaman and Nicobar Islands', 30],
                        ['IN-DN','Dadra and Nagar Haveli', 30],
                        ['IN-DD','Daman and Diu', 29],
                        ['IN-LD','Lakshadweep', 31]
                      ]);
            
                        var opts = {
                          region: 'IN',
                          domain:'IN',
                          displayMode: 'regions',
                          resolution: 'provinces',
                          /*backgroundColor: '#81d4fa',*/
                          /*datalessRegionColor: '#81d4fa',*/
                          width: 540, 
                          height: 480
                        };
                        var geochart = new google.visualization.GeoChart(
                            document.getElementById('visualization'));
                        geochart.draw(data, opts);
                    };
                </script>   
            </div>
            <div class="container-fluid col-lg-5 col-md-12 col-sm-12 " style="float:right; margin-top:10%;" >
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                
                <script>
                    var xValues = ["male", "female", "others" ];
                    var yValues = [55, 49, 44];
                    var barColors = [
                      "#b91d47",
                      "#2b5797",
                      "#1e7145"
                    ];
                    
                    new Chart("myChart", {
                      type: "pie",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        title: {
                          display: true,
                          text: "Genders"
                        }
                      }
                    });
                </script>
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