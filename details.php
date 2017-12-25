<!DOCTYPE html>
<html>

    <head>
        <title>Toll Details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="styleDetails.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="script.js"></script>
    </head>

    <body>

        <div class=".container">

            <?php include 'header.php';?>
			
            <div class="nav_section" id="nav">
                <a class="nav" href="index.php">Home</a>
                <a class="nav" href="payment.php">Payment</a>
                <a class="nav" href="Calc.php">Calculate</a>
                <a class="nav" id="active" href="details.php">Toll Details</a>
            </div>

            <div class="content" id="content">
                This Page will contain a map and details about each toll 
                represented on map.
            </div>

            <div class="footer" id="footer">
            </div>

        </div>

    </body>

</html>