<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';                      
?> 	
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
<style>
table {
  background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:#424242 ;
	font-size:40px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Pay Payment</title>
    <style>
        /* Add your preferred styling to the payment container */
         .payment-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            background-color: #f0f0f0;
        } 

        /* Style the Google Pay button */
         .google-pay-button {
            background-color: #5f7cff;
            border-radius: 4px;
            padding: 12px 24px;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        } 

        .google-pay-button:hover {
            background-color: #4463cc;
        }

        .scanner img{
            position: relative;
            margin:10%;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <button class="google-pay-button" id="google-pay-button-container">Pay with Google Pay</button>
    </div>
    <div class="scanner">
    <center><img src="assets\images\Scanner.jpg"></center>
    </div>
</body>
</html>
