<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform the login validation
    $username = $_POST["username"];
    $password = $_POST["password"];

    // If the login is successful, store the username in the session and redirect to the selection page
    if ($username === "admin" && $password === "123") {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit;
    } else {
        // Login failed, store the error message in a session variable
        $_SESSION["error_message"] = "Invalid username or password";
    }
}

// Check if there's an error message in the session
if (isset($_SESSION["error_message"])) {
    // Output JavaScript code to display a dialog box with the error message
    echo "<script>alert('" . $_SESSION["error_message"] . "');</script>";

    // Clear the error message from the session to avoid displaying it again on page refresh
    unset($_SESSION["error_message"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your CSS styles here -->
</head>
<body>

<!-- Your existing HTML form goes here -->

</body>
</html>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jaikranti</title>
    <link rel="icon" href="http://jaikranticollege.com/Design/extra-images/logo_2.png" type="image/png" />
    <style>
        body {
            min-height: 100vh;
            overflow: hidden;
             background: linear-gradient(to bottom right, hwb(195 28% 4%) 22%, #fa56a8 100%); 
           /*background-color: rgb(75, 155, 247);*/
            /* background-color:#00ff55a0; */

        }

        .admincon {
            display: block;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            width: 400px;
            height: 400px;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            background-color: white;
            margin-top: 100px;
        }

        .img {
            height: 45px;
            width: 45px;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        h2 {
            font-size: 30px;
            color: #555;
            text-align: center;
        }

        .input-group {
            position: relative;
            width: 320px;
            margin: 30px 0;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #333;
            padding: 0 5px;
            pointer-events: none;
            transition: .5s;
        }

        .input-group input {
            width: 100%;
            height: 40px;
            font-size: 16px;
            color: #333;
            padding: 0 10px;
            background: transparent;
            border: 1px solid #333;
            outline: none;
            border-radius: 5px;
        }

        .input-group input:focus~label,
        .input-group input:valid~label {
            top: 0;
            font-size: 12px;
            background: #fff;
        }

        .btn {
            position: relative;
            top: 0;
            left: 0;
            width: 320px;
            height: 40px;
            /*background: linear-gradient(to right, #2196f3, #e91e63);*/
            background-color: black;
            
            box-shadow: 0 2px 10px rgba(0, 0, 0, .4);
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        @media screen and (min-device-width:310px) and  (max-device-width:770px){
            .admincon{
                width: 300px;
                height: 400px;
            }
            .input-group,input{
                width: 250px;
            }
            .btn{
                width: 250px;
            }
        }
    </style>
</head>

<body>



    <!--Nav Bar -->
    <link rel="stylesheet" href="nav.css">
    <header>
        <div class="containe">
            <nav class="navbar">
                <a href="" class="nav-branding"><img class="navimg"
                        src="http://jaikranticollege.com/Design/extra-images/logo_2.png" alt="jkc" /></a>
                <h1>
                    <b><a href="#" class="name"><u>Jaikranti College</u></a></b>
                </h1>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html"><i class="fa-solid fa-house fa-sm"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="streams.html"><i
                                class="fa-sharp fa-solid fa-graduation-cap fa-sm"></i>Stream</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="addmission.html"><i
                                class="fa-solid fa-building-columns fa-sm"></i>Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.html"><i class="fa-solid fa-calendar-week fa-sm"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.html"><i class="fa-solid fa-comment fa-sm"></i> Feedback</a>
                    </li>
                    <li class="nav-item">
                        <div class="about">
                          <a class="nav-link" href="about.html"><i class="fa-sharp fa-solid fa-circle-info fa-sm"></i>
                            About</a>
                            <div class="inner">
                              <a href="FACULTY.html"> <i class="fa-solid fa-users"></i> Faculty</a>
                              <a href="feature.html"> <i class="fa-solid fa-star"></i> Features</a>
                            </div>
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"><i class="fa-solid fa-phone fa-sm"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html"><i class="fa-solid fa-user fa-sm"></i>Admin</a>
                    </li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    <script src="./script.js"></script>



    <form method="POST" action="login.php">
        <center>            
            <div class="admincon">
                <div class="head"><img src="http://jaikranticollege.com/Design/extra-images/logo_2.png" alt="jkc"
                        class="img">
                </div><br>
                <h2> Admin Login</h2>
                <form method="POST" action="">
                    <div class="input-group">
                        <input type="text" id="username" name="username" required="">
                        <label for="">Username</label>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" required=""><br>
                        <label for="">Password</label>
                    </div>
                    <button type="submit" class="btn">Login</button>
            </div>
    </form>
</body>

</html>