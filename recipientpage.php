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
    <style>
        #ac {
            text-decoration: none;
            margin-right: 50px;
        }

        ul li a:hover {
            text-decoration: underline;
        }

        /* Dropdown styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 100px;
            z-index: 1;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 8px 0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
            text-align: left;
            /* margin-top: 100px; */
        }

        .dropdown-content a:hover {
            background-color: white;
        }

        .dropdown-content a:first-child {
            margin-top: 10px;
            /* Space between Account and Change Password */
        }
    </style>
    <div>
        <ul id="ac">
            <li class="right">
                <div class="dropdown">
                    <a href="#" style="color: #de1f26;">Account</a>
                    <div class="dropdown-content">

                        <a href="recipientlogin.php">Log Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <br><br>

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
            <br>
            <h1>Compatible Blood Type Donors & Receivers</h1>
            <div class="table-container">
                <table style="
            border-collapse: collapse;
            width: 70%;
            margin-top: 20px;
            margin-left: 170px;
            background-color: #f2f2f2;">
                    <tr>
                        <th class="blood-type">Blood Type</th>
                        <th class="blood-type">Donate Blood To</th>
                        <th class="blood-type">Receive Blood From</th>
                    </tr>
                    <tr>
                        <td>A+</td>
                        <td>A+ AB+</td>
                        <td>A+ A- O+ O-</td>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td>O+ A+ B+ AB+</td>
                        <td>O+ O-</td>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td>B+ AB+</td>
                        <td>B+ B- O+ O-</td>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td>AB+</td>
                        <td>Everyone</td>
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td>A+ A- AB+ AB-</td>
                        <td>A- O-</td>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td>Everyone</td>
                        <td>O-</td>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td>B+ B- AB+ AB-</td>
                        <td>B- O-</td>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td>AB+ AB-</td>
                        <td>AB- A- B- O-</td>
                    </tr>
                </table>
            </div>
            <br><br><br>
            <!-- Search Donor -->
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
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
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
    }
    ?>
    <br>
    <br><br><br>
    <?php include('footer.php'); ?>
</body>

</html>