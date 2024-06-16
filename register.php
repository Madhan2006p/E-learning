<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
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
        
        h2 {
            margin-top: 30px;
        }
        
        .container {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            max-width: 500px; /* Added maximum width */
            margin: 0 auto; /* Center the box horizontally */
        }
        
        table {
            width: 100%;
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
            width: 25%; 
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
    <center><h2>REGISTER</h2></center>
    <center>
        <div class="container">
            <form method="post" onsubmit="return check()">
                <table>
                    <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="name" placeholder="Enter your name"><div id="mad"></div></td>
                    </tr>
                    <tr>
                        <td><label>GMAIL:</label></td>
                        <td><input type="email" id="gmail" name="gmail" placeholder="Enter your email"><div id="mad1"></div></td>
                    </tr>
                    <tr>
                        <td><label>AGE:(18>)</label></td>
                        <td><input type="number" id="age"><div id="mad2"></div></td>
                    </tr>
                    <tr>
                        <td><label>PASSWORD:</label></td>
                        <td><input type="password" id="password" name="password"><div id="mad3"></div></td>
                    </tr>
                </table>
                <input type="submit" value="SUBMIT">
            </form>
        </div>
    </center>

    <script>
        function check() {
            var name = document.getElementById("name").value;
            var mad = document.getElementById("mad");
            var gmail = document.getElementById("gmail").value;
            var mad1 = document.getElementById("mad1");
            var age = document.getElementById("age").value;
            var mad2 = document.getElementById("mad2");
            var password = document.getElementById("password").value;
            var mad3 = document.getElementById("mad3");
            var alb = /^[a-zA-Z ]+$/;
            
            var count = 0;
            
            if (!alb.test(name)) {
                mad.innerHTML = "Name should not contain special characters";
                count++;
            } else {
                mad.innerHTML = "";
            }
            
            if (!(gmail.includes("@"))) {
                mad1.innerHTML = "Email should contain '@'";
                count++;
            } else {
                mad1.innerHTML = "";
            }
            
            if (age < 18) {
                mad2.innerHTML = "Age should be greater than or equal to 18";
                count++;
            } else {
                mad2.innerHTML = "";
            }
            
            if (password.length < 10) {
                mad3.innerHTML = "Password should be at least 10 characters long";
                count++;
            } else {
                mad3.innerHTML = "";
            }
            
            console.log(count);
            
            if (count === 0) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['gmail']) && !empty($_POST['password'])) {
            $gmail = $_POST['gmail'];
            $password = $_POST['password'];
            $file=fopen("database.txt","a");
            fwrite($file,"$gmail\n");
            fwrite($file,"$password\n");
        }
    }
    ?>
</body>
</html>
