<?php
include "./includes/addContact.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<title>Contact Us</title>
<style>
    /* CSS styles for the contact form */
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8; 
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button:hover {
        background-color: #45a049;
    }
#back {
    padding: 4px 10px; /* Add padding for better spacing */
    background-color: #4CAF50; /* Set background color */
    border: none; /* Remove border */
    border-radius: 5px; /* Add border radius for rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover */
    color: white; /* Set text color */
    font-size: 16px; /* Set font size */
    transition: background-color 0.3s; /* Smooth transition for background */
}

#back:hover {
    background-color: darkolivegreen; /* Darken background color on hover */
}

</style>
</head>
<body>

<div class="container">

 <button id="back">Back</button>
    <h1>Add Contact</h1>
    <form action="addContact.php" method="post">
        <div class="form-group">
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" >
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" >
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" >
        </div>
        <button type="submit" name="submit">Submit</button>
        <?php if(isset($message)):?>
            <p class="form-message"><?php Result: echo $message ?></p>
        <?php endif ?>
    </form>
</div>
<script>
          $('#back').click(() => {
        history.back();
      });
</script>

</body>
</html>
