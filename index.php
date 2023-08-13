<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>

<style>

*{
  box-sizing: border-box;
  border-radius: 8px;
  border-color:#4E944F;
}

h1{
  text-align: center;
  font-family:'Times New Roman';
  font-size:50px;
}
.registration-heading {
  color: #4E944F;
}

body{
  background-image: linear-gradient(to right, #b4e197, #e9efc0, #b4e197);
  height: 90vh;
}

form {
  background: linear-gradient(to right, #4e944f, #a0c49d, #4e944f);
  padding: 20px;
  position:center;
  margin-left:130px;
  width:1530px;
  border-radius: 30px;
  box-shadow: 0 2px 5px rgba(63, 63, 63, 0.1);
}

.container{
  position:relative;
  display: flex;
  margin: 20px;
  padding: 5px;
}

label{
  flex: 1;
  font-weight: bold;
  font-size: 23px;
  color: #E9EFC0; 
  width:190px;
  font-family:'Times New Roman';
}

.form-container{
  position: absolute;
  top: 114px;
  right: 50px;
}

input{
  padding: 10px;
  margin:10px;
  border: 1.8px #a17a69;
  font-size: 18px;
  border-radius:5px;
}
::placeholder{
  text-align:left;
  font-style: italic;
}

.genderContainer
{
  display: flex;
  align-items: center;
  margin-left: 0px;
}

.genderContainer input[type="radio"] {
  width: 23px;
  height: 23px;
  border-radius: 50%;
  border: 2px solid #000;
  margin-left: 0px;
}

.statusContainer {
  display: flex;
  align-items: center;
  margin-left: 0px;
}

.statusContainer input[type="radio"] {
  width: 23px;
  height: 23px;
  border-radius: 50%;
  border: 2px solid #000;
  margin-left: 0px;
}

button[type='submit'], button[type='button']{
  margin: 15px;
  margin-left:73px;
  padding: 15px;
  width: 42%;
  border-radius: 10px;
  background-color: #557A46;
  color: #F2EE9D;
  /*font-weight: bold;*/
  font-size: 22px;
  font-family: 'Times New Roman';
}
button[type="submit"]:hover, button[type="button"]:hover{
  background-color: #F2EE9D;
  color:#557A46;
  cursor: pointer;
    transform: scale(1.3);
    box-shadow: 0 0 10px rgba(242, 238, 157, 0.7);
}

</style>


</head>
<body>
<h1 class="registration-heading">PATIENT'S REGISTRATION FORM</h1>
<div class="container">
    
  <form action="connect.php" method="post">

    <div style="display: flex; justify-content: space-between;">
      <div style="display: flex; align-items: center;">

        <label style="width: 350px;">Patient's Full Name:</label>
        <input type="text" name="name" style="width: 500px;" placeholder="Enter Patient's name">

        <label style="width: 50px;">Email:</label>
        <input type="email" name="email" style="width: 550px;" placeholder="Enter your email">
      </div>
        
    </div>


    <div style="display: flex; justify-content: space-between;">
      <div style="display: flex; align-items: center;">

        <label for="homenumber" style="width: 181px;">Home Number:</label>
        <input type="text" id="homenumber" name="homenumber" style="width: 500px;" placeholder="Enter Patient's contact number">
    

        <label style="width:220px;">Alternate Number:</label>
        <input type="text" name="altnumber" style="width: 550px;" placeholder="Enter Patient's contact number">

      </div>
    </div>

    <div  style="display: flex; justify-content: space-between;">

      <div style="display: flex; align-items: center;">

        <label style="width: 210px;">Date Of Birth:</label>
        <input type="date" name="date" style="width: 500px;">

        <label>Age:</label>
        <input type="age" name="age" style="width: 550px;" placeholder="Enter the patient's age">

      </div>
    </div>
<br>
    <div class="genderContainer">

      <label>Gender</label>

      <label for="male">
        <input type="radio" id="male" name="gender" value="male">
          Male
        </label>
  
      <label for="female">
        <input type="radio" id="female" name="gender" value="female">
          Female
      </label>
    
      <label for="other">
        <input type="radio" id="other" name="gender" value="other">
          Other
      </label>
    </div>
<br>
    <div class="statusContainer">

      <label>Marital Status</label>

      <label for="Married">
        <input type="radio" id="Married" name="maritalstatus" value="Married">
          Married
      </label>
    
      <label for="Single">
        <input type="radio" id="Single" name="maritalstatus" value="Single">
          Single
      </label>
    
      <label for="Divorced/Widowed">
        <input type="radio" id="Divorced/Widowed" name="maritalstatus" value="Divorced/Widowed">
          Divorced/Widowed
      </label>
    </div><br>

    <div  style="display: flex; justify-content: space-between;">

      <div style="display: flex; align-items: center;">

        <label for="address" style="width: 200px;">Permanent Address:</label>
        <input type="text" name="address" id="address" style="width: 1270px;" placeholder="Enter your address">

      </div>

    </div>

    <div style="display: flex; justify-content: space-between;">
      <div style="display: flex; align-items: center;">

        <label for="district" style="width:400px;">District:</label>
        <input type="text" name="district" style="width: 150px;" id="district" placeholder="District">

        <label for="state" style="width: 10px;">State:</label>
        <input type="text" name="state" style="width: 150px; margin-right:50px;" id="state" placeholder="State">

        <label for="country">Country:</label>
        <input type="text" name="country" style="width: 142px;" id="country" placeholder="Country">

        <label for="pincode">Pin Code:</label>
        <input type="text" name="pincode" style="width: 140px;" id="pincode" placeholder="Pin Code">

      </div>
    </div>
    <br>

    <div style="display: flex; justify-content: space-between;">      
      <div style="display: flex; align-items: center;">

        <label for="bloodgroup" style="width:213px;">Blood Group:</label>
        <input type="text" name="bloodgroup" id="bloodgroup" style="width: 280px;" placeholder="Blood type">

        <label for="disease">Disease:</label>
        <input type="text" name="disease" id="disease" style="width: 280px;" placeholder="Disease">

        <label for="since">Since:</label>
        <input type="date" name="since" id="since" style="width: 280px;" placeholder="Since When">

      </div>
    </div>

    <div style="display: flex; justify-content: space-between;">
      <div style="display: flex; align-items: center;">
        <label for="guardianname" style="width:205px;">Guardian Name:</label>
        <input type="text" name="guardianname" id="guardianname" style="width: 528px;" placeholder="Name">
<br>
        <label for="guardiancontact">Guardian Contact:</label>
        <input type="text" name="guardiancontact" id="guardiancontact" style="width: 528px;" placeholder="Number">

      </div>
    </div>
<br>
    <div class="btn">

      <button type="submit" name="submitbtn" value="submit">SUBMIT</button>
      <button type="button" name="retrievebtn" onclick="window.location.href = 'retrieval.php';">RETRIEVE</button>
                
    </div>
  </form>
</div>
</body>
</html>