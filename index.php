<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Blood Care</title>
  <!-- <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon" /> -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="assets/images/fav.jpg" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawsom-all.min.css" />
  <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link rel="shortcut icon" href="faviconblood.png" type="image/x-icon" />
</head>

<body>
  <header class="continer-fluid">
    <div class="header-top">
      <div class="container">
        <div class="row col-det">
          <div class="col-lg-6 d-none d-lg-block">
            <ul class="ulleft">
              <li>
                <i class="far fa-envelope"></i>
                bloodcareforu@gmail.com
                <span>|</span>
              </li>
              <li>
                <i class="far fa-clock"></i>
                Service Time : 24/7
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-12">
            <ul class="ulright">
              <!-- <li>
                  <i class="fas fa-cloud-upload-alt"></i>
                  Upload Video
                  <span>|</span>
                </li> -->
              <!-- <li>
                <i class="fas fa-user"></i>
                Login
              </li> -->
              <li class="nav-item mx-lg-4 my-lg-0 my-3">
                <a class="nav-link text-light" href="admin/index.php">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="menu-jk" class="header-bottom">
      <div class="container">
        <div class="row nav-row">
          <div class="col-md-3 logo">
            <a href="index.php">
              <img src="assets/images/logo bloodcare.png" alt="" /></a>
          </div>
          <div class="col-md-9 nav-col">
            <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#searchdonor">Search Donor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#process">Process</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="donorlogin.php">Donor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="recipientlogin.php">Recipient</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ################# Slider Starts Here#######################--->

  <div class="slider-detail">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h5 class="bounceInDown">Donate Blood & Save a Life</h5>
            <p class="bounceInLeft">
              Be a hero - donate blood and save lives. Your generosity can
              make an incredible impact on someone's journey to recovery.
              <br />
              Join us today and be the reason someone smiles again.
            </p>

            <!-- <div class="vbh">
              <div class="btn btn-success bounceInUp">Book Appointment</div>
              <div class="btn btn-success bounceInUp">Contact US</div>
            </div> -->
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide" />
          <div class="carousel-caption vdg-cur d-none d-md-block">
            <h5 class="bounceInDown">Donate Blood & Save a Life</h5>
            <p class="bounceInLeft">
              Donate blood, save a life. Your simple act of kindness can be a
              lifeline for those in need., <br />
              Join us in making a life-saving difference today - because a
              single donation can create a world of hope.
            </p>
            <!-- <div class="vbh">
              <div class="btn btn-danger bounceInUp">Donate Now</div>
              <div class="btn btn-danger bounceInUp">Contact US</div>
            </div> -->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div>
    <br>
    <!-- <br> -->
  </div>
  <br>
  <br>
  <!-- Search Donor -->
  <section id="searchdonor">
    <div>
      <style>
        label {
          font-size: large;
          color: #000000;
        }

        select {
          width: 200px;
        }

        select option {
          width: 200px;
        }
      </style>
      <h1 style="text-align: center;color:#ee2929">Search Blood Donor </h1>
      <form method="post" action="" style="margin: auto; width: 220px;">
        <label for="city">Select City:</label>
        <select id="city" name="city">
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Amreli">Amreli</option>
          <option value="Anand">Anand</option>
          <option value="Deesa">Deesa</option>
          <option value="Bharuch">Bharuch</option>
          <option value="Bhavnagar">Bhavnagar</option>
          <option value="Dahod">Dahod</option>
          <option value="Dahegam">Dahegam-Gandhinagar</option>
          <option value="Jamnagar">Jamnagar</option>
          <option value="Junagadh">Junagadh</option>
          <option value="Bhuj">Bhuj-Kutch</option>
          <option value="Kheda">Kheda</option>
          <option value="Mehsana">Mehsana</option>
          <option value="Kevadia">Kevadia -Narmada</option>
          <option value="Navsari">Navsari</option>
          <option value="Godhra">Godhra -Panchmahal </option>
          <option value="Patan">Patan</option>
          <option value="Porbandar">Porbandar</option>
          <option value="Rajkot">RajKot</option>
          <option value="Modasa">Modasa -Aravalli</option>
          <option value="Surat">Surat</option>
          <option value="Surendranagar">Surendranagar</option>
          <option value="Dang">Dang</option>
          <option value="Vadodara">Vadodara</option>
          <option value="Valsad">Valsad</option>
          <!-- Add more cities here -->
        </select>

        <label for="bloodGroup">Select Blood Group:</label>
        <select id="bloodGroup" name="bloodGroup">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
        <br>
        <br>
        <p style="text-align: center;">
          <style>
            input[type=button],
            input[type=submit],
            input[type=reset] {
              background-color: #ee2929;
              border: none;
              color: white;
              padding: 16px 32px;
              text-decoration: none;
              margin: 4px 2px;
              cursor: pointer;
            }

            table {
              border-collapse: collapse;
              width: 100%;
              color: #d9645a;
              font-family: monospace;
              font-size: 25px;
              text-align: left;
            }

            th {
              background-color: #d9645a;
              color: white;
            }

            tr:nth-child(even) {
              background-color: #f2f2f2
            }

            tr:hover {
              background-color: #ddd;
            }
          </style>
          <input type="submit" value="Search" name="submit" />
        </p>
      </form>
    </div>
  </section>

  <!-- Data Display -->
  <br>
  <br>
  <?php
  // Database connection settings
  // $username = "root"; // Replace with your database username
  // $password = ""; // Replace with your database password
  // $server = "localhost"; // Replace with your database server hostname
  // $database = "donor"; // Replace with your database name

  // // Create a database connection
  // $conn = mysqli_connect($server, $username, $password, $database);

  // // Check connection
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }
  include('config.php');

  if (isset($_POST['city']) && isset($_POST['bloodGroup'])) {
    // Retrieve form data
    $city = $_POST['city'];
    $bloodGroup = $_POST['bloodGroup'];

    // Prepare and execute the SQL query
    $sql = "SELECT  * FROM donor WHERE city = '$city' AND BloodGroup = '$bloodGroup'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No</th>
            </tr>"; // Modify these headers according to your database structure

      // Output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["FullName"] . "</td>";
        echo "<td>" . $row["MobileNumber"] . "</td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "No data found.";
    }


    $conn->close();
  }
  // Retrieve form data
  // $city = $_POST['city'];
  // $bloodGroup = $_POST['bloodGroup'];

  // // Prepare and execute the SQL query
  // $sql = "SELECT  * FROM donors WHERE city = '$city' AND b_type = '$bloodGroup'";
  // $result = $conn->query($sql);
  // if ($result->num_rows > 0) {
  //   echo "<table>";
  //   echo "<tr>
  //               <th>ID</th>
  //               <th>Name</th>
  //               <th>Phone No</th>
  //           </tr>"; // Modify these headers according to your database structure

  //   // Output data of each row
  //   while ($row = $result->fetch_assoc()) {
  //     echo "<tr>";
  //     echo "<td>" . $row["id"] . "</td>";
  //     echo "<td>" . $row["fname"] . "</td>";
  //     echo "<td>" . $row["phone"] . "</td>";
  //     echo "</tr>";
  //   }

  //   echo "</table>";
  // } else {
  //   echo "No data found.";
  // }


  // $conn->close();
  ?>
  <!--*************** About Us Starts Here ***************-->
  <section id="about" class="contianer-fluid about-us">
    <div class="container">
      <div class="row session-title">
        <h2 style="color: #6a6a6a">About Us</h2>
        <p style="color: rgb(238, 41, 41); font-size: 30px">
          Donate Blood And Become A Life-Saving Hero
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 text">
          <h2>About Blood Doners</h2>
          <p>
            Welcome to Blood Care your dedicated platform for saving lives
            through blood donation. Our mission is to bridge the gap between
            those in need and the compassionate individuals who can make a
            difference.
          </p>
          <section>
            <h2>Our Mission:</h2>
            <p>
              Our mission is simple yet powerful: to save lives by ensuring a
              steady and reliable supply of blood products through voluntary
              donations. We strive to spread awareness about the critical need
              for blood donation, inspire compassion, and create a network of
              donors and recipients who share in the spirit of giving.
            </p>
          </section>
          <section>
            <h2>Why Blood Donation Matters:</h2>
            <p>
              Blood is a lifeline that connects us all. Every donation has the
              potential to save multiple lives, offering hope to patients
              undergoing surgery, cancer survivors, accident victims, and
              those living with chronic illnesses. By donating blood, you
              become a guardian of life.
            </p>
          </section>
        </div>
        <div class="col-md-6 image">
          <img src="assets/images/about.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- ################# Gallery Start Here #######################--->
  <div id="gallery" class="gallery container-fluid">
    <div class="container">
      <div class="row session-title">
        <h2>Checkout Our Gallery</h2>
      </div>
      <div class="container">
        <div id="gg-screen"></div>
        <div class="gg-box">
          <div class="gg-element">
            <img src="assets/images/gallery/g1.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g2.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g3.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g4.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g5.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g6.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g7.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g8.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g9.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g10.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g11.jpg" />
          </div>
          <div class="gg-element">
            <img src="assets/images/gallery/g12.jpg" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ################# Donation Process Start Here #######################--->

  <section id="process" class="donation-care">
    <div class="container">
      <div class="row session-title">
        <h2>Donation Process</h2>
        <p>
          The donation process from the time you arrive center until the time
          you leave
        </p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 vd">
          <div class="bkjiu">
            <img src="assets/images/gallery/g1.jpg" alt="" />
            <h4><b>1 - </b>Registration</h4>
            <p>
              Register online or on-site, complete health questionnaire, and
              provide consent. Check eligibility, have vital signs assessed,
              and donate blood.
            </p>
            <button class="btn btn-sm btn-danger">
              Readmore <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 vd">
          <div class="bkjiu">
            <img src="assets/images/gallery/g2.jpg" alt="" />
            <h4><b>2 - </b>Health Check</h4>
            <p>
              Health check includes history review and tests like hemoglobin
              to ensure donor eligibility for safe donation.
            </p>
            <button class="btn btn-sm btn-danger">
              Readmore <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 vd">
          <div class="bkjiu">
            <img src="assets/images/gallery/g3.jpg" alt="" />
            <h4><b>3 - </b>Donation</h4>
            <p>
              A sterile needle is inserted into a vein, usually in your arm,
              and blood is collected into a sterile bag.
            </p>
            <button class="btn btn-sm btn-danger">
              Readmore <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 vd">
          <div class="bkjiu">
            <img src="assets/images/gallery/g4.jpg" alt="" />
            <h4><b>4 - </b>Save Life</h4>
            <p>
              The culmination of this entire process occurs when the donated
              blood, now a lifeline of essential components, is given to a
              patient in need.
            </p>
            <button class="btn btn-sm btn-danger">
              Readmore <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
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
                <input type="submit" value="Send Request" name="submitm" class="btn btn-sm btn-primary w-100" />
              </div>
            </form>
            <?php
            include('config.php');
            if (isset($_POST['submitm'])) {
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

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>

</html>