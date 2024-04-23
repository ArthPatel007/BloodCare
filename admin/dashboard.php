<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
  header('location:index.php');
} else {
?>
  <!DOCTYPE html>
  <html lang="en" class="no-js">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="theme-color" content="#3e454c" />
    <title>BloodCare | Admin Dashboard</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css" />
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css" />
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css" />
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="faviconblood.png" type="image/x-icon" />
  </head>

  <body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
      <?php include('includes/leftbar.php'); ?>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Dashboard</h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-body bk-primary text-light">
                          <div class="stat-panel text-center">
                            <?php
                            $sql = "SELECT id from bloodgroup ";
                            $query =  mysqli_query($conn, $sql);
                            if ($query) {
                              // Fetching results
                              $results = [];
                              while ($row = mysqli_fetch_object($query)) {
                                $results[] = $row;
                              }
                              // Getting the number of rows
                              $bg = mysqli_num_rows($query);
                              // Freeing the result set
                              mysqli_free_result($query);
                            } else {
                              // Handle query execution error
                              echo "Error executing the query: " . mysqli_error($conn);
                            } ?>
                            <div class="stat-panel-number h1">
                              <?php echo htmlentities($bg); ?>
                            </div>
                            <div class="stat-panel-title text-uppercase">
                              Listed Blood Groups
                            </div>
                          </div>
                        </div>
                        <a href="manage-bloodgroup.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-body bk-success text-light">
                          <div class="stat-panel text-center">
                            <?php
                            $sql1 = "SELECT id from donor ";
                            $query1 =  mysqli_query($conn, $sql1);
                            if ($query1) {
                              // Fetching results
                              $results1 = [];
                              while ($row1 = mysqli_fetch_object($query1)) {
                                $results1[] = $row1;
                              }
                              // Getting the number of rows
                              $regbd = mysqli_num_rows($query1);
                            } else {
                              // Handle query execution error
                              echo "Error executing the query: " . mysqli_error($conn);
                            } ?>
                            <div class="stat-panel-number h1">
                              <?php echo htmlentities($regbd); ?>
                            </div>
                            <div class="stat-panel-title text-uppercase">
                              Registered DONORS
                            </div>
                          </div>
                        </div>
                        <a href="donor-list.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <!------------------------>
                    <div class="col-md-4">
                      <div class="panel panel-danger">
                        <div class="panel-body bk-info text-light">
                          <div class="stat-panel text-center">
                            <?php
                            $sql4 = "SELECT id  from recipient ";
                            $query4 =  mysqli_query($conn, $sql4);
                            if ($query4) {
                              // Fetching results (if needed)
                              $results4 = [];
                              while ($row4 = mysqli_fetch_object($query4)) {
                                $results4[] = $row4;
                              }
                              // Getting the number of rows
                              $totalreuqests = mysqli_num_rows($query4);
                            } else {
                              // Handle query execution error
                              echo "Error executing the query: " . mysqli_error($conn);
                            } ?>
                            <div class="stat-panel-number h1">
                              <?php echo htmlentities($totalreuqests); ?>
                            </div>
                            <div class="stat-panel-title text-uppercase">
                              REGISTERED RECIPIENT
                            </div>
                          </div>
                        </div>
                        <a href="managerecipient.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <!-- ---------------------- -->
                    <div class="col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-body bk-danger  text-light">
                          <div class="stat-panel text-center">
                            <?php
                            $sql1 = "SELECT id from staff ";
                            $query1 =  mysqli_query($conn, $sql1);
                            if ($query1) {
                              // Fetching results
                              $results1 = [];
                              while ($row1 = mysqli_fetch_object($query1)) {
                                $results1[] = $row1;
                              }
                              // Getting the number of rows
                              $regbd = mysqli_num_rows($query1);
                            } else {
                              // Handle query execution error
                              echo "Error executing the query: " . mysqli_error($conn);
                            } ?>
                            <div class="stat-panel-number h1">
                              <?php echo htmlentities($regbd); ?>
                            </div>
                            <div class="stat-panel-title text-uppercase">
                              Registered Staff
                            </div>
                          </div>
                        </div>
                        <a href="managestaff.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    <script>
      window.onload = function() {
        // Line chart from swirlData for dashReport
        var ctx = document.getElementById("dashReport").getContext("2d");
        window.myLine = new Chart(ctx).Line(swirlData, {
          responsive: true,
          scaleShowVerticalLines: false,
          scaleBeginAtZero: true,
          multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
        });
        // Pie Chart from doughutData
        var doctx = document.getElementById("chart-area3").getContext("2d");
        window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
          responsive: true,
        });
        // Dougnut Chart from doughnutData
        var doctx = document.getElementById("chart-area4").getContext("2d");
        window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
          responsive: true,
        });
      };
    </script>
  </body>

  </html>
<?php } ?>