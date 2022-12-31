<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="logincss.css">

</head>
<body>
    <p class="top"></p>
    <div class="container">
    <div class="rightside">
        <div class="img">
                <div class="img_text">
                <h2>New here?</h2><br>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                
                <div class="img__btn">
                    <a href="register.php">
                        <button type="button" class="submitr" name="regist">Register</button>
                    </a>
                    
                   
                    
                </div>
            </div>
        </div>
        <div class="leftside">
            <div class="formm">
            <h2>Sign In</h2>
            <form method="POST">
                
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                

                <button type="button" class="submit" name="submit">Log in</button>

            </form>
            </div>
        </div>
        
    </div>
</body>
</html>