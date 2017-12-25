<?php
session_start();
if($_SESSION["u_name"]==null)
    header("location:Sign_up.php");
require "connection.php";
?> 

<!DOCTYPE html>
<html>

    <head>
        <title>Toll Payment</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="styleIndex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="script.js"></script>
        <script src="jquery.flip.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    </head>
    <body>
    
        <div class=".container">

            <?php require 'header.php';?>
            <div class="nav_section" id="nav">
                <a class="nav" id="active" href="index.php">Home</a>
                <a class="nav" href="payment.php">Payment</a>
                <a class="nav" href="Calc.php">Calculate</a>
                <a class="nav" href="profile.php">Profile</a>
                <a class="nav" href="logout.php" id="logout">Logout</a>
            </div>

            <div class="content" id="content">
                <div class="card_section">
                    <div class="card" id="box1">
                        <div class="front" id="card1"> <i  class="material-icons" style="font-size: 2.5em;">computer</i><br>Toll Calculator </div>
                        <div class="back" id="card1back">
                            <strong>Calculate the toll for your car</strong> when 
                            travelling between two stations.
                        </div>
                    </div>
                    <div class="card" id="box2">
                        <div class="front" id="card2"> <i class="material-icons" style="font-size: 2.5em;">payment</i><br>Toll Payment</div>
                        <div class="back" id="card2back">
                            <strong>Pay the toll online</strong> and drive faster through tolls
                            <br>Support Cashless India!
                        </div>
                    </div>
                    <div class="card" id="box3">
                        <div class="front" id="card3"> <i class="material-icons" style="font-size: 2.5em;">account_box</i><br>My Account</div>
                        <div class="back" id="card3back">
                            Go to your account page.
                            <br><i>Note: You need to <b>sign in</b> to access this feature.</i>
                        </div>
                    </div>
                    <div class="card" id="box4">
                        <div class="front" id="card4"> <i class="material-icons" style="font-size: 2.5em;">map</i><br>Maps & Rates</div>
                        <div class="back" id="card4back">
                            <strong>Details about different tolls</strong> on National highways in India.
                        </div>
                    </div>
                </div>
				

                <div class="main">
                    <div>
                        India's First Online Toll Payment Portal
                        <div id="text">
                            Pay online with the Sitename online toll payment portal,
                            reduce the toll traffic, go faster! help India to go cashless.
                        </div>
                    </div>

                    <a href="payment.php"><input id="pay_now" type="button" value="Pay Now"></a>
                </div>
            </div>

            <div class="bottom_content">

                <div class="left_bottom" style="justify:right;">
                    <strong style="font-size: 1.5em;">About Us</strong><br><br><br>
                    <p align="justify">We have developed a real-time online toll payment monitoring web application, designed for advance and ontime online toll payment usage of public as well as privately owned highways.It’s certainly very tedious and cumbersome to wait in a long queue on highways for paying toll when you are highly excited and thrilled for whatever entertainment you are approaching for.Also it’s becomes very tedious to maintain the timestamp of journeys if  you are probably a frequent commuter.
                    Toll payment site actually makes user feel a bit free from the aforementioned   
                    cumbersomes.It provide user to remotely login to his/her account with previously
                    Mentioned credentials,with an open source,cross-platform and full support for Unicode character set.A toll calculator for making you interface with the actual toll on the respective highways to be paid as toll fee.
                    </p>
                </div>

                <div class="right_bottom">
                    <strong style="font-size: 1.5em;">Driving History</strong><br><br><br>
                    <?php
                    $sql = "SELECT * FROM user_journey";
                    $result = $conn->query($sql);
                    echo "<table>";
                            echo "<tr>                    
                            <th>Source</th>
                            <th>Destnation</th>
                            <th>Date</th>
                            <th>Route</th>
                            <th>Amount</th>
                            <th>Way</th>
                            </tr>";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row['source']."</td><td>".$row['destination']."</td><td>".$row['date1']."</td><td>".$row['route']."</td><td>".$row['amount']."</td><td>".$row['way']."</td></tr>"; 
                        }
                    }
                    echo "</table>"; 
                    
                    $conn->close();
                    ?>
                </div>

            </div>
            

            <?php require"footer.php"; ?>

        </div>

    </body>

</html>