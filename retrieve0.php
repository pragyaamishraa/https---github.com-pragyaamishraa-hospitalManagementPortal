<?php

$con = mysqli_connect("localhost","root","","rough");

if(!$con){
    die("Connection Error");
}


$query = "select * from rough";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Information from Index</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div style="text-align:center;">
                        <h1 style="color : #4e944f;">Retrieved Information</h1>
                    </div>
                    <h2><a href="retrieval.php" class="back-button">Back</a></h2>
                    <div class="card-body">
                        <table class="table">
                            <tr class="table-header">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Home Number</th>
                                <th>Alternate Number</th>
                                <th>Date of Birth</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Marital Status</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Pin-Code</th>
                                <th>Blood Group</th>
                                <th>Disease</th>
                                <th>Since</th>
                                <th>Guardian Name</th>
                                <th>Guardian Contact</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['homenumber'];?></td>
                                <td><?php echo $row['altnumber'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['age'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['maritalstatus'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['district'];?></td>
                                <td><?php echo $row['state'];?></td>
                                <td><?php echo $row['country'];?></td>
                                <td><?php echo $row['pincode'];?></td>
                                <td><?php echo $row['bloodgroup'];?></td>
                                <td><?php echo $row['disease'];?></td>
                                <td><?php echo $row['since'];?></td>
                                <td><?php echo $row['guardianname'];?></td>
                                <td><?php echo $row['guardiancontact'];?></td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    body {
        background-image: linear-gradient(to right, #b4e197, #e9efc0, #b4e197);
        height: 700px;
        width:100%;
    }

    .container {
        width: 100%;
    }

    .table {
        width: 200%;
        border-collapse: collapse;
        background-color: #f8f8f8;
    }

    .table th,
    .table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #4e944f;
    }

    .table-header th {
        background-color: #4e944f;
        color: #F2EE9D;
        font-weight: bold;
        font-size: 18px;
    }

    .table tr:hover {
        background-color: #f7f4c0;
    }

    .btn {
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        color: #fff;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #2c542d;
    }

    .btn-danger {
        background-color: #85bf86;
    }

    .btn:hover {
        opacity: 0.6;
        cursor: pointer;
    transform: scale(1.3);
    box-shadow: 0 0 10px rgba(242, 238, 157, 0.7);
    }
    
    .back-button-container {
        margin: 20px;
    }

    .back-button {
        display: inline-block;
        padding: 16px 30px;
        font-size: 31px;
        background-color: #4e944f;
        color: #F2EE9D;
        border-radius: 6px;
        text-decoration: none;
        font-weight:bold;
    }

    .back-button:hover {
        color: #acd3ac;
        background-color:#2c542d;
        cursor: pointer;
        transform: scale(1.3);
        box-shadow: 0 0 10px rgba(242, 238, 157, 0.7);
    }
</style>
