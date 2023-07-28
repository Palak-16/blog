
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/public/ass"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gaurav Bhandari, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Create Category</title>

    <link rel="canonical" href="./assets/css/signin.css">

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

      .btn-primary {
        --bd-violet-bg: #03DF04;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #2AED2D;
        --bs-btn-hover-border-color: #2AED2D;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #62F163;
        --bs-btn-active-border-color: #62F163;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/css/signin.css" rel="stylesheet">
</head>

<body>
    <main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="./assets/images/logo.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Create new category</h1>
    
    <!-- <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">Please fix the error below</div>
    <?php endif; ?> -->
<?php
function old_value($key)
{
    if (!empty($_POST[$key]))
        return $_POST[$key];
    return "";
}

function old_checked($key)
{
    if (!empty($_POST[$key]))
        return " checked ";
    return "";
}
?>
    <div class="form-floating">
      <input value="<?= old_value('name') ?>" name="name" type="text" class="form-control" id="floatingInput" placeholder="New category name">
      <label for="floatingInput">New Category Name</label>
    </div>
    <?php if (!empty($errors['name'])): ?>
        <div class="text-danger"><?= $errors['name'] ?></div>
    <?php endif; ?>
  

    <button class="btn btn-primary w-100 py-2" type="submit" name='submit'>Create </button>
  </form>
</main>

    <?php
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];
        $name = $_POST['name'];
        

            
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $database = "myblog_db";

         //connection to data base
       $conn = new mysqli($server_name, $username, $password, $database);
        if (!$conn) //to chk connection 
            die("connection error");
            $sql = "SELECT category FROM `categories` WHERE category='$name'";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) > 0) {
                $errors['name'] = "Category already exists";
            }


            if (empty($_POST['name'])) {
                $errors['name'] = "Category name is required";
            }
            // else if($email){
            //   $errors['email']= "Email is already in use";
            // }
        
            $name = $_POST['name'];


            $sql = "insert into categories(category) values('$name')";
            $result = mysqli_query($conn, $sql);
            if($result)
                header("location: categories.php");
        }
        ?>
        
<script src="../../public/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>