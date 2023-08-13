<!DOCTYPE html>
<html>
<head>
    <title>Retrieve User Details</title>
</head>
<body>
<div style="display: flex;  justify-content: center; align-items: center; height: 90vh;">
    <form action="ret.php" method="post" style="width: 1000px; height:550px; background: linear-gradient(to right, #4e944f, #a0c49d, #4e944f);
 padding-top: 30px; border-radius: 20px; box-shadow: 0 2px 5px rgba(63, 63, 63, 0.1);">
        <div style="text-align: center;">
            <label for="id" required>ENTER USER ID:</label>
            <div class="centerContainer">
                <input type="text" name="id" id="id" placeholder="Enter the ID" required>
            </div>
            <div style="text-align: center; margin-top: 10px;">
                <button type="button" name="retrieveAll" onclick="window.location.href = 'retrieval.php';">BACK</button>  
                <button type="submit">RETRIEVE DETAILS</button>
            </div>
        </div>
</div>
    </form>
</body>
</html>

<style>

body {
    background-image: linear-gradient(to right, #b4e197, #e9efc0, #b4e197);
}

label {
    display: inline-block;
    font-size: 42px;
    color: #F2EE9D;
    margin-top:190px;
    margin-right: 10px;
    font-weight:bold;
}
::placeholder{
    font-style: italic;
    font-size:30px;
}

.centerContainer {
    display: inline-block;
    /*width: 400px;
    height: 60px;*/  
    margin-top: 0px;
    border: 2px solid #F2EE9D;
    border-radius: 10px;
}

input[type="text"] {
    /*width: 80%;
    height: 100%;*/
    border: none;
    outline: none;
    font-size: 33px;
    /*font-family: 'Times New Roman', serif;*/
    padding: 5px 50px;
    border-radius: 10px;
}

button[type='submit']{
    margin: 10px;
    padding: 5px 50px; 
    border: 2px solid #F2EE9D;
    border-radius: 10px;
    background-color: #557A46;
  color: #F2EE9D;
    font-size: 41px;
    font-weight:bold;
    cursor: pointer;
}
button[type='button'] {
    margin: 10px;
    padding: 5px 115px; 
    border: 2px solid #F2EE9D;
    border-radius: 10px;
    background-color: #557A46;
  color: #F2EE9D;
    font-size: 42px;
    font-weight:bold;
    cursor: pointer;
}

button[type="submit"]:hover, button[type='button']:hover {
    background-color: #F2EE9D;
  color:#557A46;
  cursor: pointer;
    transform: scale(1.3);
    box-shadow: 0 0 10px rgba(242, 238, 157, 0.7);
}
</style>
