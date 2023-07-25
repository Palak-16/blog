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
    </style>
    <link href="assets/css/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/headers.css" rel="stylesheet">
</head>

<body>
    <main>
        <header class="p-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">

                        <img src="assets/images/logo.jpg" class="bi me-2" width="40" height="32" style="object-fit:cover">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Inventory</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/logo.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        <!--slider-->
        <link rel="stylesheet" href="assets/slider/ism/css/my-slider.css"/>
        <script src="assets/slider/ism/js/ism-2.2.min.js"></script>


        <div class="ism-slider" data-transition_type="fade" data-play_type="loop" id="my-slider">
            <ol>
              <li>
                <img src="assets/slider/ism/image/slides/flower-729514_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
              </li>
              <li>
                <img src="assets/slider/ism/image/slides/beautiful-701678_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
              </li>
              <li>
                <img src="assets/slider/ism/image/slides/summer-192179_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
              </li>
              <li>
                <img src="assets/slider/ism/image/slides/city-690332_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
              </li>
            </ol>
        </div>
        <!--end slider-->
        <main class="p-2">
            <h3>Featured</h3>

            <div class="row mb-2">
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-body-secondary">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                    </div>
                    <div class="col-lg-auto col-12 d-lg-block">
                    <svg class="bd-placeholder-img w-100 w-l-50" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                  </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                 <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-body-secondary">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                    </div>
                    <div class="col-lg-auto col-12 d-lg-block">
                    <svg class="bd-placeholder-img w-100 w-l-50" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                </div>
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
                        </a></li>
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