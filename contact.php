<?php
    include 'connect.php';
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    
    $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($connect, $sql);
	if($result===false)
		echo "error: " .mysqli_error($connect);
	else
	{
	    echo "
	    <html>
	        <head>
	            <title>Successfully Submitted</title>
	            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	            <style>
	                body {
    	                font-family: 'Montserrat'; 
    	                text-align:center;
    	                background: #572C01;
    	                color: white;
	                }
	                h1 {
	                    margin: 120px;
	                }
	            </style>
	            <script>
	            setTimeout(
                    function() {
                        window.location = 'http://www.canintreats.in';
                    }, 5000);
                </script>
	        </head>
	        <body>
	                <h1>Successfully Submitted</h1>
	                <p>Redirecting in 5 seconds</p>
	        </body>
	    </hmtl>
	    ";
	}
?>