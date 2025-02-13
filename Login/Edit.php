<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Your Profile</title>
        <link rel="stylesheet" href="style/styles.css">
        <title>Edit Profile</title>
    </head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="Home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="Home.php">Go back to home </a> <a href="logout.php"> 
                <button class="btn">log out</button> </a> 
        </div>
    </div>

<!-- new sectoin-->
<div class="container">
    <div class="box form-box">
            <header>Update your profile: </header>
        <form action="update_profile.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn" value="Update">Login</button>
            <div class="links">
                <p>Don't have an account ? </p><a href="register.php"> Sign Up Here ! </a>
            </div>
        </form>
        
    </div>
</div>
 </main>
</body>
</html>