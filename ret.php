<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retieving your Index</title>

    <style>

.table-container {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; 
}

table, th, td {
    border: 2px solid #4e944f;
}

th, td {
    padding: 8px;
    text-align: left;
    background-color:white;
    word-wrap: break-word;
}

th {
    background-color: #4e944f;
    color: #F2EE9D;
}

body{
    background-image: linear-gradient(to right, #b4e197, #e9efc0, #b4e197);
    height:600px;
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
}

</style>

</head>
<body>
    <h1 style="color:#4e944f; margin-left:730px; center; font-family:'Times new roman';">Your Details</h1>

<h2><a href="retrieve1.php" class="back-button">Back</a></h2>

<div class="table-container">
    
    <?php

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rough";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("select * from rough where id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();


    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
    
    $ret = $result->fetch_assoc();
    $name=$ret['name'];
    $email=$ret['email'];
    $homenumber=$ret['homenumber'];
    $altnumber=$ret['altnumber'];
    $date=$ret['date'];
    $age=$ret['age'];
    $gender=$ret['gender'];
    $maritalstatus=$ret['maritalstatus'];
    $address=$ret['address'];
    $district=$ret['district'];
    $state=$ret['state'];
    $country=$ret['country'];
    $pincode=$ret['pincode'];
    $bloodgroup=$ret['bloodgroup'];
    $disease=$ret['disease'];
    $since=$ret['since'];
    $guardianname=$ret['guardianname'];
    $guardiancontact=$ret['guardiancontact'];

        echo '<table>';
        
        echo '<tr>
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
        </tr>';

        echo 
        '<tr>
        <td>' . $id . '</td>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $homenumber . '</td>
        <td>' . $altnumber . '</td>
        <td>' . $date . '</td>
        <td>' . $age . '</td>
        <td>' . $gender . '</td>
        <td>' . $maritalstatus . '</td>
        <td>' . $address . '</td>
        <td>' . $district . '</td>
        <td>' . $state . '</td>
        <td>' . $country . '</td>
        <td>' . $pincode . '</td>
        <td>' . $bloodgroup . '</td>
        <td>' . $disease . '</td>
        <td>' . $since . '</td>
        <td>' . $guardianname . '</td>
        <td>' . $guardiancontact . '</td>
        </tr>';

        echo '</table>';

    } else {
        echo "No user found for the given ID.";
    }

    $stmt->close();
    $conn->close();
}
?>
</div>
</body>
</html>