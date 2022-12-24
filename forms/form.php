<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form>
    <h3>Form</h3>
    <form method="POST" name="form" action="process.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Enter your login details</legend><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="DOB">DOB:</label>
            
            <select name="dd" id="dd" size="1">
                <option value="dd">day</option>
                <option value="dd">1</option>
                <option value="dd">2</option>
                <option value="dd">3</option>
            </select>

            <select name="mm" id="mm" size="1">
                <option value="mm">month</option>
                <option value="mm">Jan</option>
                <option value="mm">Feb</option>
                <option value="mm">March</option>
            </select>

            <select name="year" id="year" size="1">
                <option value="year">year</option>
                <option value="year">2000</option>
                <option value="year">2001</option>
                <option value="year">2002</option>
            </select><br><br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" >
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" >
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other" >
            <label for="other">Other</label><br><br>

            <label for="course">Course:</label>
            <input type="checkbox" id="php" name="php[]" value="php" >
            <label for="php">PHP</label>
            <input type="checkbox" id="mysql" name="mysql[]" value="mysql" >
            <label for="mysql">MySQL</label>
            <input type="checkbox" id="Java" name="Java[]" value="Java" >
            <label for="Java">Java</label>
            <input type="checkbox" id="Asp" name="Asp[]" value="Asp" >
            <label for="Asp">Asp</label><br><br>

            <label for="photo">Photo:</label>
            <input type="file" name="photo">
            <br><br>

            <label for="message">Message:</label>
            <textarea name="message" rows="1" cols="40"></textarea>
            <br><br>

            <input type="checkbox" id="check" name="check" value="check" >
            <label for="check">I agree to submit this</label>
            <br><br>

            <input type="submit" value="Register">
            <input type="reset" value="Clear">
        </fieldset>
        
    </form>
</body>
</html>