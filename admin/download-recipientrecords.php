<?php
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == 0) {
    header("Location: index.php"); //
} else { ?>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Age</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>City</th>
                <th>Pincode</th>
            </tr>
        </thead>

        <?php
        $filename = "Recipient list";
        $sql = "SELECT * FROM recipient ";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $cnt = 1;
            header("Content-type: application/octet-stream");
            header("Content-Disposition: attachment; filename=" . $filename . "-report.xls");
            header("Pragma: no-cache");
            header("Expires: 0");
            while ($result = mysqli_fetch_object($query)) {
                echo '<tr>  
						<td>' . $cnt . '</td> 
						<td>' . $complainNumber = $result->FullName . '</td> 
						<td>' . $Gender = $result->Gender . '</td> 
						<td>' . $BloodGroup = $result->BloodGroup . '</td>
						<td>' . $BloodGroup = $result->age . '</td>
						<td>' . $MobileNumber = $result->MobileNumber . '</td> 
						<td>' . $EmailId = $result->email . '</td> 
						<td>' . $BloodGroup = $result->city . '</td>	 
						<td>' . $BloodGroup = $result->pincode . '</td>			
				</tr>';
                $cnt++;
            }
        }
        ?>
    </table>
<?php } ?>