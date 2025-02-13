<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style/styles.css">
        <title>Login Page</title>
    </head>
<body>
    <div class="container">
        <div class="box form-box">
                <header>Login</header>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" class="btn" value="Login">Login</button>
                <div class="links">
                    <p>Don't have an account ? </p><a href="register.php"> Sign Up Here ! </a>
                </div>
            </form>
            
        </div>
    </div>
    
    

</body>
</html>