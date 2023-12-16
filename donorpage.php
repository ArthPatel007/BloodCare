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
    <style>
        /* Reset default browser styles */
        body,
        h1,
        h2,
        p,
        ul,
        li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .blood-banner {
            background-color: #FC3D39;
            /* Blood red color */
            color: #fff;
            text-align: center;
            padding: 20px;
            font-weight: bold;
            /* Set font weight to bold */
        }

        .blood-banner h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }


        header h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.1em;
        }

        main {
            width: 80%;
            margin: 20px auto;
        }

        section {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        h1 {
            text-align: center;
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-bottom: 10px;
        }

        .table-container {
            width: 80%;
            /* Set the width of the container */
            margin: 0 auto;
            /* Center the container horizontally */
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 20px;
            margin-left: 170px;
            background-color: #f2f2f2;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th.blood-type {
            background-color: #ff0000;
            /* Red color for Blood Type header */
            color: white;
        }

        tr:hover td {
            background-color: #ddd;
            /* Change background color on hover */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Alternate row color */
        }

        /* hader css */
    </style>
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
                        <a href="logoutdonor.php">Log Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <h1>Compatible Blood Type Donors & Receivers</h1>
    <div class="table-container">
        <table>
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
    <br><br>
    <div class="blood-banner">
        <h1>Why Become a Blood Donor</h1>
        <p>Discover the reasons and benefits of becoming a blood donor.</p>
    </div>

    <main>
        <section class="reasons">
            <h2>Reasons to Donate Blood</h2>
            <ul>
                <li>Save lives in emergencies</li>
                <li>Support patients with medical conditions</li>
                <li>Contribute to community health</li>
                <li>Receive health benefits from donation</li>
                <!-- Add more reasons -->
            </ul>
        </section>

        <section class="benefits">
            <h2>Benefits of Donating Blood</h2>
            <ul>
                <li>Helps save lives and improves community health</li>
                <li>May reduce the risk of certain diseases</li>
                <li>Offers a free health checkup during donation</li>
                <!-- Add more benefits -->
            </ul>
        </section>

        <center><iframe width="560" height="315" src="https://www.youtube.com/embed/Af0gk_kiGac?si=IA46bbNEdW3gar7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
    </main>
    <?php include('footer.php'); ?>

</body>

</html>