<?php
  $DBUSER = "root";
  $DBPASS = "";
  $DBNAME = "myblog_db";
  $DBHOST = "localhost"; 
  $conn = new mysqli($DBHOST,$DBUSER,$DBPASS,$DBNAME,);

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $errors=[];
    $email = $_POST['email'];

    $sql="SELECT email FROM `users` WHERE email='$email'";
    $res= mysqli_query($conn,$sql);

    if (mysqli_num_rows($res) > 0){
      $errors['email']= "Email is already in use";
    }
      

    if(empty($_POST['email']))
    {
      $errors['email']= "An email is required";
    }else
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
      $errors['email'] = "Email not valid";
    }
    // else if($email){
    //   $errors['email']= "Email is already in use";
    // }

    if(empty($_POST['username']))
    {
      $errors['username']= "A username is required";
    }
    else if(!preg_match("/^[a-zA-Z]+$/", $_POST['username'])){
      $errors['username']= "Username can only have letters and no spaces";
    }

    if(empty($_POST['password']))
    {
      $errors['password']= "A password is required";
    }
    else if(strLen($_POST['password']) < 8){
      $errors['password']= "Password must be 8 character or more";
    }
    else if($_POST['password'] !== $_POST['retype_password']){
      $errors['password']= "Password do not match";
    }

    if(empty($errors))
    {
      //if no errors save to database
      $data=[];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $pass = md5($pass);

      $sql="insert into users(username,email,password) values ('$username','$email','$pass')";
      $result=mysqli_query($conn,$sql);

      if($result)
         header("location: ../../public/login.php");
    }
  }
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/public/ass"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gaurav Bhandari, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Signup</title>

    <link rel="canonical" href="/public/assets/css/signin.css">

    <link href="../../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../../public/assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>
    
<main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="../../public/assets/images/logo.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
    <!-- <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">Please fix the error below</div>
    <?php endif;?> -->
<?php
function old_value($key)
{
    if(!empty($_POST[$key]))
        return $_POST[$key];
    return "";
}

function old_checked($key)
{
    if(!empty($_POST[$key]))
        return " checked ";
    return "";
}
?>
    <div class="form-floating">
      <input value="<?=old_value('email')?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <?php if(!empty($errors['email'])):?>
      <div class="text-danger"><?=$errors['email']?></div>
    <?php endif;?>

    <div class="form-floating">
      <input value="<?=old_value('username')?>" name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>
    <?php if(!empty($errors['username'])):?>
      <div class="text-danger"><?=$errors['username']?></div>
    <?php endif;?>
    <div class="form-floating">
      <select  value="<?=old_value('gender')?>" name="gender" type="text" class="form-control mb-2" id="floatingInput" placeholder="gender">
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="others">others</option>
      </select>
      <label for="floatingInput">gender</label>  
    </div>

    <div class="form-floating">
      <input value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">password</label>
    </div>
    <?php if(!empty($errors['password'])):?>
      <div class="text-danger"><?=$errors['password']?></div>
    <?php endif;?>

    <div class="form-floating">
      <input value="<?=old_value('retype_password')?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Retype Password">
      <label for="floatingPassword">Retype Password</label>
    </div>
    <div class="my-2">
      Don't have an account?
      <a href="../../public/login.php">Login here</a>
     </div>

    <div class="form-check text-start my-3">
      <input <?=old_checked('terms')?> name="terms" class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Accept terms and conditions
      </label>
    </div>
    <?php if(!empty($errors['terms'])):?>
      <div class="text-danger"><?=$errors['terms']?></div>
    <?php endif;?>

    <button class="btn btn-primary w-100 py-2" type="submit" name='submit'>Create </button>
  </form>
</main>
<script src="../../public/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
