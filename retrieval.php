<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Form</title>

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
  color: #F2EE9D;;
}

body{
    background-image: linear-gradient(to right, #b4e197, #e9efc0, #b4e197);
    height: 90vh;
    font-family:'Lucida sans';
}

form {
    background: linear-gradient(to right, #4e944f, #a0c49d, #4e944f);
    padding: 20px;
    margin-top: 280px;
    margin-left:330px;
    width:1100px;
    border-radius: 30px;
    box-shadow: 0 2px 5px rgba(63, 63, 63, 0.1);
}
.container{
  position:relative;
  display: flex;
  margin: 20px;
  padding: 5px;
}

button[type='button'], button[type='button']{
    margin: 20px;
    padding: 8px;
    width: 300px;
    height: 100px;
    background-color: #557A46;
    color: #F2EE9D;
    font-weight: bold;
    box-sizing: border-box;
    border-radius: 18px;
    border-color: #557A46;
    font-size: 22px;
}
button[type="button"]:hover, button[type="button"]:hover{
    background-color: #F2EE9D;
    color: #557A46;
    cursor: pointer;
    transform: scale(1.3);
    box-shadow: 0 0 10px rgba(242, 238, 157, 0.7);
}
button[type="button"]{
    float: left;
}

</style>



</head>
<body>

<div class="container">
    <form action="connect.php" method="post">
    <div style="align:left;">  
    <h1> Whose information do you want to see?</h1>
    <div class="btn">
        <button type="button" name="retrieveAll" onclick="window.location.href = 'index.php';">BACK</button>  
    </div>
    <div class="rbtn">
        <button type="button" name="personal" onclick="window.location.href = 'retrieve1.php';">PERSONAL RECORD</button>
        <button type="button" name="retrieveAll" onclick="window.location.href = 'retrieve0.php';">SEE ALL RECORDS</button>
    </div>
    </form>
<div id="output"></div>

  <script src="script.js"></script>
</div>    
</body>
</html>