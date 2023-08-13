<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $homenumber=$_POST['homenumber'];
    $altnumber=$_POST['altnumber'];
    $date=$_POST['date'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $maritalstatus=$_POST['maritalstatus'];
    $address=$_POST['address'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];
    $bloodgroup=$_POST['bloodgroup'];
    $disease=$_POST['disease'];
    $since=$_POST['since'];
    $guardianname=$_POST['guardianname'];
    $guardiancontact=$_POST['guardiancontact'];


$con = new mysqli('localhost','root','','rough');

$inserted_id = mysqli_insert_id($con); 

if($con){
    echo "Connection Successful";

    $sql="insert into `rough` (name, email, homenumber, altnumber, date, age, gender, maritalstatus, address, district, state, country, pincode, bloodgroup, disease, since, guardianname, guardiancontact) values('$name','$email', '$homenumber', '$altnumber','$date','$age','$gender','$maritalstatus', '$address', '$district', '$state', '$country', '$pincode', '$bloodgroup', '$disease', '$since', '$guardianname', '$guardiancontact')";
    
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: http://localhost/roughtry/confirmation.php', true, $code);
        exit;
    }elseif (isset($_POST["retrievebtn"])) {
        
        $retrieveValue = $_POST["retrievebtn"];
        echo $retrieveValue;

    }else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}

}
mysqli_close($con);
?>