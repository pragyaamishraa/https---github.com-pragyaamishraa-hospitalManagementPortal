<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Page</title>

    <style>
        
        .submit-button {
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

        /* Hover effect for the buttons */
        .submit-button:hover {
            background-color: #F2EE9D;
            color: #557A46;
            cursor: pointer;
    transform: scale(1.3);
    box-shadow: 0 0 10px rgba(242, 238, 157, 0.7);
        }
    </style>
    
</head>

<body style="background-image: linear-gradient(to right, #b4e197, #e9efc0, #b4e197);
    height:100px;
    font-family:'Lucida sans';">
    
<form style="margin: 15px;
    background: linear-gradient(to right, #4e944f, #a0c49d, #4e944f);
    padding-left: 100px;
    padding-top:20px;
    margin-left:450px;
    margin-top:281px;
    width: 785px;
    height: 350px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(63, 63, 63, 0.1);">

<h1 style="font-family:'Times New Roman'; color: #F2EE9D;">DATA HAS BEEN SUBMITTED!</h1>
    <p style="font-family:'Times New Roman'; font-size:25px; color: #F2EE9D;">Would you like to retrieve your details or go back?</p>


    <button type="button" class="submit-button" onclick="goBack()">BACK</button>
    <button type="button" class="submit-button" onclick="goToRetrieve()">RETRIEVE</button>
</form>
<div id="success-message" style="display: none;">
  <?php
    
    if (isset($_GET['success']) && isset($_GET['inserted_id'])) {
      if ($_GET['success'] === 'true') {
        
        echo "Your details have been successfully submitted. Your ID is: " . $_GET['inserted_id'];
      }
    }
    ?>
  </div>

  <script>
  function submitForm() {

    document.getElementById("success-message").style.display = "block";
    document.getElementById("success-message").innerText = "Your details have been successfully submitted. Your ID is: " + <?php echo $inserted_id; ?>;
    
  }

    function goBack() {

        window.location.href = 'index.php';
    }

    function goToRetrieve() {

        window.location.href = 'retrieval.php';
    }
    </script>
</body>
</html>
