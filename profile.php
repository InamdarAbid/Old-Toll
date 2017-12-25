<?php
    session_start();
    require "connection.php";
    if($_SESSION["u_name"]==null)
        header("location:Sign_up.php");
    $us=$_SESSION["u_name"];
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
        
        <style type="text/css">
            #fileToUpload{
                width: 6.8em;
            }
            #content{
                max-width: 100%;
                width: 100%;
                margin:0 auto;
            }
            .flex-container{
                
                flex-wrap: wrap;
                display: flex;
            }
           
            .box{
                flex-shrink: 1;
                flex-basis: 240px;
                height: 300px;
            }
            .one{
                flex-grow: 1;
                background-color: white;
            }
            .two{
                flex-grow: 3;
                background-color: darkslateblue;
            }
            .three{
                flex-grow: 1;
                background-color:white;
            }
            .box1{
                flex-shrink: 1;
                flex-basis: 240px;
                height: 20em;
            }
            .four{
                flex-grow: 1; 
                background-color:  #1f1f2e;
            }
            .five{
                flex-grow: 1;
                background-color:  #29293d;
            }
           .imgcontainer {
                text-align: center;
                margin: 24px 0px 12px 0;
            }
            img.avatar:hover{
                cursor: pointer;
            }

            img.avatar {
                height: 10em;
                width: 40%;
                border-radius: 50%;
            }
            #txt{
                margin-top: 1.6em;
                
                font-size: 1.5em;
                color: white;
            }
            .blk_head{
                text-decoration: underline;
                color: white;
                margin-left: 11em; 
                font-size: 1.5em;
            }
            .php_con{
                color:white;
                font-size: 1.1em;
                padding: 0.5em;
                line-height: 2em;
            }
            
        </style>

    </head>
    <body>
    
        <div class=".container">

            <?php require 'header.php';?>
            <?php 
                $sql = $conn->query("SELECT user_name,address,state,city,contact,user_img from user_details where user_name='$us'");
                $row = $sql->fetch_assoc();
             ?>
            <div class="nav_section" id="nav">
                <a class="nav"  href="index.php">Home</a>
                <a class="nav" href="payment.php">Payment</a>
                <a class="nav" href="Calc.php">Calculate</a>
                <a class="nav" id="active" href="profile.php">Profile</a>
                <a class="nav" href="logout.php" id="logout">Logout</a>
            </div>

                <div id="content">
                    <div class="flex-container">
                        <div class="box one"></div>
                        <div class="box two">
                            <div class="imgcontainer">
                                <img src="<?php echo $row['user_img'] ?>" alt="Avatar" class="avatar">
                                <form action="upload.php" method="post" enctype="multipart/form-data" style="color: white;">
                                    Select image to upload:
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <input type="submit" value="Upload Image" name="submit">
                                </form>
                                                              
                                <div id="txt"><?php echo $_SESSION['u_name']?></div>
                            </div>
                        </div>
                        <div class="box three"></div>
                    </div>
                    
                    <div class="flex-container">
                        <div class="box1 four">
                            <span class="blk_head">User Details</span>
                            <div class="php_con">
                            <?php 
                                echo "<br>";
                                
                                echo "UserName : " .$row['user_name']. "<br>" ."Address : " .$row['address']. "<br>". 
                                "State : ". $row['state'] ."<br>". "City : " .$row['city']."<br>" . "Contact:" .$row['contact']. "<br>";
                                
                            ?>
                            </div>
                        </div>
                        <div class="box1 five">
                            <span class="blk_head">Vehicle Details</span>
                             <div class="php_con">
                            <?php 
                                echo "<br>";
                                $sql1 = $conn->query("SELECT ud.license_no,vd.plate_no,vd.vehicle_type from vehicle_details as vd,user_details as ud where vd.license_no=ud.license_no and ud.user_name='abcdefgh'");
                                $result = $sql1->fetch_assoc();
                                echo "License_No : " .$result['license_no']. "<br>" ."Plate_no : " .$result['plate_no']. "<br>". 
                                "Vehicle_type : ". $result['vehicle_type'] ."<br>";
                                
                                
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

               
        </div>
        <?php require"footer.php"; ?>
    </body>

</html>