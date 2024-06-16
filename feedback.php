<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ad64ff;
            display: block;
        }
        
        li {
            float: left;
        }
        
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 20px 30px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
            background-color: #111;
        }
        
        .active {
            background-color: #000000;
            border-right: 1px solid #bbb;
        }

        form {
            margin-top: 50px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #ad64ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #9349e2;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="Courses.html">Courses</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li style="float:right"><a class="active" href="About.html">About</a></li>
        <li style="float: right;"><a class="active" href="login.html">Login</a></li>
    </ul>
    
        <form method="post">
            <label for="user">Name:</label>
            <input type="text" id="user" placeholder="Enter your Name" name="user">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" resize="yes" placeholder="Enter your feedback" name="feedback"></textarea><center>
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['user']) && !empty($_POST['feedback'])) {
                $user = $_POST['user'];
                $feedback = $_POST['feedback'];
                $file = fopen("future.txt", "a");
                fwrite($file, "Name: $user\n");
                fwrite($file, "Feedback: $feedback\n\n");
                fclose($file);
                echo '<div class="message">Thank you for your feedback!</div>';
            } else {
                echo '<div class="message">Please fill out both Name and Feedback fields.</div>';
            }
        }
        ?>
    </center>
</body>
</html>
