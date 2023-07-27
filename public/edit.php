
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/public/ass"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gaurav Bhandari, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Signup</title>

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
    <?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database = "myblog_db";

    $conn = new mysqli($server_name, $username, $password, $database);
    if (!$conn)
        die("connection error");

    $id = $_GET['id'];
    $s = "SELECT * FROM users WHERE id='$id'";
    $query = mysqli_query($conn, $s);
    $row = mysqli_fetch_array($query);
    ?>
    <main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="./assets/images/logo.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Update user info</h1>
    
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
      <input value="<?= old_value('email') ?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <?php if (!empty($errors['email'])): ?>
        <div class="text-danger"><?= $errors['email'] ?></div>
    <?php endif; ?>

    <div class="form-floating">
      <input value="<?= old_value('username') ?>" name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="username">
      <label for="floatingInput">Username</label>
    <?php if(!empty($errors['username'])):?>
      <div class="text-danger"><?=$errors['username']?></div>
    <?php endif;?>
    </div>

    <div class="form-floating">
      <input value="<?= old_value('password') ?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <?php if (!empty($errors['password'])): ?>
        <div class="text-danger"><?= $errors['password'] ?></div>
    <?php endif; ?>

    <div class="form-floating">
      <input value="<?= old_value('retype_password') ?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Retype Password">
      <label for="floatingPassword">Retype Password</label>
    </div>
   

    <button class="btn btn-primary w-100 py-2" type="submit" name='submit'>Update </button>
  </form>
</main>

    <?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $errors = [];
        $email = $_POST['email'];

        $sql = "SELECT email FROM `users` WHERE email='$email'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            $errors['email'] = "Email is already in use";
        }


        if (empty($_POST['email'])) {
            $errors['email'] = "An email is required";
        } else
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Email not valid";
            }
        // else if($email){
        //   $errors['email']= "Email is already in use";
        // }
    
        if (empty($_POST['username'])) {
            $errors['username'] = "A username is required";
        } else if (!preg_match("/^[a-zA-Z]+$/", $_POST['username'])) {
            $errors['username'] = "Username can only have letters and no spaces";
        }

        if (empty($_POST['password'])) {
            $errors['password'] = "A password is required";
        } else if (strLen($_POST['password']) < 8) {
            $errors['password'] = "Password must be 8 character or more";
        } else if ($_POST['password'] !== $_POST['retype_password']) {
            $errors['password'] = "Password do not match";
        }
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pass = md5($pass);


        $sql = "UPDATE users SET username='$username' , email='$email' , password='$pass'  WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result)
            header("location: admin.php");
    }
    ?>
    
<script src="../../public/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>