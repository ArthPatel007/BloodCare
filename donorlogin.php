<?php
session_start();
include('config.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $donorEmail = $_SESSION['email'];
    $sql = "SELECT * FROM donor WHERE EmailId='$email' and password='$password'";
    $result =  mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location:donorpage.php");
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="stylesdr.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="faviconblood.png" type="image/x-icon" />

    <!-- Custom-Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <?php include('header.php'); ?>
    <section class="about py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="login px-4 mx-auto mw-100">
                <h3 class="text-center mb-4" style="color: #c20e0e"> Donor Login</h3>
                <form action="#" method="post" name="login">
                    <div class="form-group">
                        <label>Email ID</label>
                        <input type="email" class="form-control" name="email" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="" required="">
                    </div>
                    <button type="submit" class="btn submit mb-4" name="submit">Login</button>
                    <!--     <p class="forgot-w3ls text-center pb-4">
                                    <a href="#" class="text-white">Forgot your password?</a>
                                </p> -->
                    <p class="account-w3ls text-center pb-4" style="color:#000">
                        Don't have an account?
                        <a href="donor.php">Create one now</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>