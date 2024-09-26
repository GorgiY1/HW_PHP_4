<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        body {
            background: linear-gradient(135deg, #000428, #004e92); /* Gradient background */
            color: #fff; /* White text */
            font-family: 'Roboto', sans-serif; /* Modern font */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height */
            overflow: hidden; /* Hide overflow */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            padding: 30px; /* Larger padding */
            border: 2px solid lightblue;
            box-shadow: 0 0 75px rgba(0, 255, 255, 0.5);
            border-radius: 20px; /* More rounded corners */
            
            max-width: 400px; /* Max width */
            width: 100%; /* Full width */
            text-align: center; /* Center text */
        }
        form {
            display: flex;
            flex-direction: column; /* Stack form elements vertically */
        }
        label {
            margin: 10px 0 5px; /* Spacing between labels and inputs */
            font-size: 14px; /* Smaller font size for labels */
            text-align: left; /* Align labels to the left */
            color: #ddd; /* Light gray text for labels */
        }
        input[type="text"], input[type="password"] {
            padding: 10px; /* Padding for inputs */
            margin: 5px 0 20px; /* Spacing between inputs */
            border: none; /* Remove borders */
            border-radius: 5px; /* Rounded corners */
            background-color: rgba(255, 255, 255, 0.1); /* Light background */
            color: #fff; /* White text */
            font-size: 16px; /* Larger font size for inputs */
        }
        input[type="text"]::placeholder, input[type="password"]::placeholder {
            color: #bbb; /* Light gray placeholder text */
        }
        input[type="submit"] {
            padding: 12px; /* Padding for submit button */
            border: none; /* Remove border */
            border-radius: 5px; /* Rounded corners */
            background-color: #28a745; /* Green background */
            color: #fff; /* White text */
            font-size: 18px; /* Larger font size */
            cursor: pointer; /* Pointer cursor */
            transition: background-color 0.3s; /* Smooth transition */
        }
        input[type="submit"]:hover {
            background-color: #218838; /* Darker green on hover */
        }
        input[type="text"]:focus, input[type="password"]:focus {
            outline: none; /* Remove outline */
            background-color: rgba(255, 255, 255, 0.2); /* Slightly brighter background */
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="username">Username:</label> 
            <input type="text" name="username" placeholder="username: admin"/><br>

            <label for="password">Password:</label>
            <input type="password" name="pass" placeholder="password: admin"/><br>

            <input type="submit" name="submit" value="Log in"/>
        </form>

        <div>
            <?php 
                if(isset($_POST['submit'])) {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['pass']);
                    if ($username == "admin" && $password == "admin") {
                        // Redirect to index.php
                        header("Location: index.php");
                        exit();
                    }
                    else {
                        echo "<br><label for=\"text\">Wrong username or password!</label>";
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>