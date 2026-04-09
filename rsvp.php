<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"]) && !empty($_POST["name"] != !empty($_POST["Phone"]))){
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $name = filter_var(trim($_POST["name"]));
            $entry = date("Y-m-d H:i:s") . " - " . $name . " - " . $email . "\n";
            file_put_contents("March_18th_RSVP.txt", $entry, FILE_APPEND | LOCK_EX);
    $message = "TRANSCENDENTAL THANKS FOR REGISTERING";
    }else {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"]) && !empty($_POST["name"])&& !empty($_POST["Phone"])) {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $name = filter_var(trim($_POST["name"]));
    $tel = filter_var(trim($_POST["Phone"]));
    
    $entry = date("Y-m-d H:i:s") . " - " . $name . " - " . $email . "-" . $tel ."\n";
    file_put_contents("March_18th_RSVP.txt", $entry, FILE_APPEND | LOCK_EX);
    $message = "TRANSCENDENTAL THANKS FOR REGISTERING";
} else
    $message = "Invalid submission. Please go back and try again.";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RSVP Received</title>
 <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #FFFFFF;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: Affigere-Regular,tanpnav, sans-serif;
    }
    .container {
      text-align: center;
      max-width: 1000px;
      padding: 20px;
      background-color: #FFFFFF;
    }
    .input-group {
      margin-top: 20px;
    }
    input[type="email"] {
      padding: 10px;
      width: 70%;
      font-size: 16px;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
    }
    p {
        font-size: 40px;
    }
    h1 {
        font-size: 40px;
    }
    .red-button {
        background-color: red;
        color: black;
        border: none;
        padding: 10px 20px;
        font-size: 24px;
        font-family: Affigere-Regular,tanpnav, sans-serif;
        cursor: pointer;
        border-radius: 4px;
    }
    @font-face {
        font-family: "Affigere-Regular";
        src: url("https://makingtimeisrad.com/css/font/Affigere-Regular.woff") format("woff");
    }
    a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: underline;
      font-family: Affigere-Regular,tanpnav, sans-serif;
      color: blue;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><?php echo $message; ?></h1>
    <a href="index.html">Making Time</a>
  </div>
</body>
</html>
