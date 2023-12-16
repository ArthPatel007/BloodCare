<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>footer</title>
        <!-- <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon" /> -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="assets/images/fav.jpg" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/fontawsom-all.min.css" />
        <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="shortcut icon" href="faviconblood.png" type="image/x-icon" />
    </head>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>
                                Ahmedabad Blood Bank, Department of IHBT, C/o.The Civil Hospital, Asarwa, Ahmedabad- 380016

                            </p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>
                                bloodcareforu@gmail.com <br />
                                support@bloodcare.com
                            </p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>
                                +91 9751791203 <br />
                                +91 9159669599
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                    <div class="row no-margin mt-2">
                        <h2>Quick Links</h2>
                        <ul>
                            <a href="index.php">
                                <li style="color: #ffffff;">Home</li>
                            </a>
                            <a href="#about">
                                <li style="color: #ffffff;">About Us</li>
                            </a>
                            <a href="#process">
                                <li style="color: #ffffff;">Process</li>
                            </a>
                            <a href="#gallery">
                                <li style="color: #ffffff;">Gallery</li>
                            </a>
                            <a href="#searchdonor">
                                <li style="color: #ffffff;">Search Donor</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <form action="" method="post">
                            <div class="form-body">
                                <input type="text" placeholder="Enter Name" name="name" class="form-control" required />
                                <input type="tel" placeholder="Enter Mobile no" name="mobile" class="form-control" required />
                                <input type="email" placeholder="Enter Email Address" name="email" class="form-control" required />
                                <input type="text" placeholder="Your Message" name="message" class="form-control" required />
                                <input type="submit" value="Send Request" name="submitmsg" class="btn btn-sm btn-primary w-100" />
                            </div>
                        </form>
                        <?php
                        include('config.php');
                        if (isset($_POST['submitmsg'])) {
                            $fullname = $_POST['name'];
                            $mobile = $_POST['mobile'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            $insertquery = "insert into quickmessage(name,MobailNo,Email,Message) values
    ('$fullname','$mobile','$email','$message')";

                            $result =  mysqli_query($conn, $insertquery);
                            if ($result) {
                                echo "<script>alert('Your Message Has Been Sent Successfully');</script>";
                            } else {
                                echo "<script>alert('Something went wrong.Please try again');</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>
                            Copyright ©
                            <a href="http://localhost:8080/bloodcaresystem/">Blood Care</a>
                            | All right reserved.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li>
                                <a href="https://github.com/ArthPatel007"><i class="fab fa-github"></i></a>
                            </li>
                            <li>
                                <a><i class="fab fa-google"></i></a>
                            </li>
                            <li>
                                <a><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li>
                                <a><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a><i class="fab fa-facebook-f"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>