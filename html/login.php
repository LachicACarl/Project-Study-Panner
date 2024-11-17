

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLM Login</title>
    <style>
       body {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-image: url(student.jfif);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; /* Vertically center */
    height: 100vh; /* Full viewport height */
    position: relative; /* Required for the overlay */
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(57, 36, 103, 0.5); /* Semi-transparent overlay */
    z-index: -1; /* Ensures the content stays above the overlay */
}

.study-plan {
    width: 133px;
    height: 32px;
    position: absolute; /* To position it relative to the parent */
    top: 22px; /* Vertical positioning */
    left: 91px; /* Horizontal positioning */
    font-family: 'Poppins', sans-serif;
    font-size: 21px;
    font-weight: 700;
    line-height: 31.5px;
    text-align: center;
    color: white; /* White text color */
    text-decoration: none; /* Remove underline */
    background: transparent; /* Fully transparent background */
    display: flex; /* Flexbox for centering text */
    justify-content: center; /* Center text horizontally */
    align-items: center; /* Center text vertically */
    cursor: pointer; /* Adds a pointer on hover */
    transition: all 0.3s ease; /* Smooth hover effect */
}

.study-plan:hover {
    color: rgba(200, 200, 255, 1); /* Slightly lighter white on hover */
    text-shadow: 0px 4px 6px rgba(255, 255, 255, 0.6); /* Adds glow effect */
}

        .login-container {
            text-align: center;
            background-color: #ffffff; /* White background for the form */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            width: 660px;
height: 399px;
top: 275px;
left: 412px;
gap: 0px;
border-radius: 15px;


        }

        .login-container h2 {
            margin-bottom: 30px;
            font-size: 28px;
            color: #333333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"], .login-btn {
            width: 100%;
            padding: 10px;
            background-color:#7EAED3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover, .login-btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .login-btn {
            display: block;
            text-decoration: none;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Log in</h2>
        <nav class="top-nav">
    <a href="#" class="study-plan">Study Plan</a>
</nav>

        <form action="yawa.php" method="post">
            <label for="username">Identification No.</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
