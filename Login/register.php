<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style/styles.css">
        <title>Register</title>
    </head>
<body>
    <div class="container">
        <div class="box form-box">
                <header>Register</header>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="user-email">Email Address:</label>
                    <input type="email" name="user-email" id="user-email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="user-pass">Password:</label>
                    <input type="password" name="user-pass" id="user-pass" placeholder="Enter your password" required>
                </div>
                <div class="input-group">
                    <label for="text">Age</label>
                    <input type="number" name="user-age" id="user-age" placeholder="Enter age" min="18" max="65" required>
                </div>
                <div class="input-group">
                    <label for="user-company">Password</label>
                    <input type="text" name="user-company" id="user-company" placeholder="What company do you work for ?" required>
                </div>
                <button type="submit" class="btn" value="create">Create</button>
                <div class="links">
                    <p>Already a member ? </p><a href="index.php"> Return to login page </a>
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>