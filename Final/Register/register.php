<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="rstyles.css">

</head>
<body>
    <p class="top"></p>
    <div class="container">
        <div class="leftside">
        <h2>Create an Account</h2>
            <form method="POST">
                <label>
                    <span>Username</span>
                    <input type="text" name="username" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                <label>
                    <span id="age">Age Range&emsp;</span>
                    <select name="range" id="agerange">
                        <option class="options">Teen</option>
                        <option class="options">Adult</option>
                        <option class="options">Old</option>
                        <option selected class="option">Age Range</option>
                    </select>
                </label>
                <label>
                <input type="checkbox" name="terms" id="terms">
                <span id="term_span">I agree to the terms and conditions</span>
                </label>

                <button type="button" class="submit" name="submit">Register</button>

            </form>
        </div>
        <div class="rightside">
        <div class="img">
                <div class="img_text">
                <h2>One of Us?</h2><br>
                    <p>If you already has an account,<br> Just sign in!</p>
                </div>
                
                <div class="img__btn">
                    <a href="login.php">
                        <button type="button" class="submit" name="login">Log in</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>