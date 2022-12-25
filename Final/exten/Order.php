<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .formm{
            display: flex;
            
        }
    </style>
</head>
<body>
    <h2>Order Form</h2>
    <p>Please fill out this form to place your order.
<div class="formm">
<form action="yourorder.php" method="POST">
        <fieldset>
            <legend>Enter your login details</legend>
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </fieldset>
        <fieldset>
            <legend>Pizza Selection</legend>
            <p>
                <label for="size">Size:</label>
                <input type="radio" id="small" name="size" value="small">
                <label for="small">small</label>
                <input type="radio" id="medium" name="size" value="medium">
                <label for="medium">medium</label>
                <input type="radio" id="large" name="size" value="large">
                <label for="large">large</label></p>

            <p><label for="topping">Topping:</label>
            <select name="topping" id="topping">
                <option value="p_select">Please select</option>
                <option value="mushroom">Mushroom</option>
                <option value="cheese">Extra Cheese</option>
                <option value="mushroom">Mushroom</option>
                <option value="pineapple">Pineapple</option>
                <option value="pepper">Green Peppers</option>
            </select></p>

            <p><label for="extras">Extras:</label>
                <input type="checkbox" id="Parmesan" name="extras" value="Parmesan">
                <label for="Parmesan">Parmesan</label>
                <input type="checkbox" id="Olives" name="extras" value="Olives">
                <label for="Olives">Olives</label>
                <input type="checkbox" id="Capers" name="extras" value="Capers">
                <label for="Capers">Capers</label></p>
                <input type="hidden" name="form_submitted" value="1" />
        </fieldset>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
</div>
</body>
</html>