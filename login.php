<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>LOGIN</title>
    <style>
        .container {
    margin-top: 50px;
    padding: 10px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    max-width: 500px; /* Added maximum width */
    margin: 0 auto; /* Center the box horizontally */
}

h1 {
    color: #333;
    font-size: 20px; /* Reduced font size */
}

table td {
    padding: 5px;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"] {
    width: calc(100% - 10px);
    padding: 5px;
    margin-top: 3px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 50%;
}

#mad,
#mad1,
#mad2,
#mad3,
#bot {
    color: red;
    font-size: 10px; 
}

#cap {
    background-color: #007bff;
    color: #fff;
    padding: 3px 6px;
    border-radius: 3px;
    display: inline-block;
    font-size: 12px; 
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
        

    </style>
</head>
<body>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="Courses.html">Courses</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li style="float:right"><a class="active" href="About.html">About</a></li>
        <li style="float: right;"><a class="active" href="login.php">login</a></li>
    </ul><br><br><br><br>
    <center><h2>LOGIN</h2></center>
    <center>
    <div class="container">
            <form method="post">
                <table>
                    <tr>
                        <td><label>GMAIL:</label></td>
                        <td><input type="email" name="gmail" id="gmail" placeholder="Enter your email"><div id="mad1"></div></td>
                    </tr>
                    <tr>
                        <td><label>PASSWORD:</label></td>
                        <td><input type="password" name="password" id="password"><div id="mad3"></div></td>
                    </tr>
                </table>
                <a href="register.php"><h5>If not have account ?Click her to register</h5></a><br>
                <input type="submit" onclick="check()" value="SUMBIT">
            </form>
        </div>
    </center>
</body>
</html>
    </body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['gmail']) && !empty($_POST['password'])) {
            $flag = 0;
            $gmail = $_POST['gmail'];
            $password = $_POST['password'];
            $file = fopen("database.txt", "r");
            while (!feof($file)) {
                $data1 = fgets($file);
                if (strcmp($gmail, trim($data1)) == 0) {
                    $flag++;
                }
                if(strcmp($password,trim($data1))==0){
                    $flag++;
                }
            }
            fclose($file);
            echo $flag;
            if ($flag == 4) {
                header("Location: home.html");
                exit();
            } else {
                echo "<br><center>FAILED</center>";
            }
        }
    }
?>    
</html>