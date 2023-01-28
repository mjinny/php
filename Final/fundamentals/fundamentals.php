<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Applications and Technologies</title>
    <link type="text/css" rel="stylesheet" href="main.css" />
</head>

<body>
    <header>
        <h1>Paul Doney C123457</h1>
        <hr>
    </header>

    <section id="container">
        <h1>Fundamentals of PHP</h1>
        <?php
        echo "<h2>Selections</h2>";
        $day = date('l');
        echo 'It\'s ' . $day . '<br>';

        if ($day == 'Wednesday') {
            echo '<br>' . "It's midweek" . '<br>';
        } else {
            echo '<br>' . "It's not midweek" . '<br>';
        }

        $hour = date('H');
        $minute = date('i');
        // date_default_timezone_set("Australia/Perth");
        date_default_timezone_set("Asia/Kathmandu");
        echo '<br>' . "Current Time: " . date("H:i:s");
        if ($hour < 12) {
            echo '<br>' . 'Good Morning' . '<br>';
        } else if ($hour > 18) {
            echo '<br>' . 'Good Night' . '<br>';
        } else {
            echo '<br>' . 'Good Afternoon' . '<br>';
        }
        echo "<br>";
        $pass = "password";
        if (strlen($pass) > 4 && strlen($pass) < 10) {
            echo "Password length is valid";
        } else {
            echo "Password length is invalid";
        }

        ?>

        <h2>Ticket</h2>
        <?php
        $price = 25;
        $age = 15;
        $membership  = 'true';
        $discount = 0;

        if ($age < 12) {
            $discount = 0.5;
        } else if ($age > 65) {
            $discount = 0.25;
        } else if ($age < 18) {
            $discount = 0.25;
        }
        if ($membership == 'true') {
            $membership = 'Yes';
            $discount += 0.1;
        }

        echo "Initial Ticket Price: " . $price . '<br>';
        echo "Age: " . $age . '<br>';;
        echo "Member: " . $membership . '<br>';;
        echo "Final Ticket Price: " . $price * $discount;

        ?>

        <h2>Arrays</h2>

        <h3> Simple Arrays</h3>
        <?php
        $product = array('t-shirt', 'cap', 'mug');
        print_r($product);
        echo "<br>";

        $product = array('t-shirt', 'cap', 'mug');
        $product[1] = "shirt";
        print_r($product);
        echo "<br>";

        $product[] = "skirt";
        print_r($product);
        echo "<br>";

        $product1 = array('t-shirt', 'shirt', 'mug', 'skirt');
        echo "The item at index [2] is :" . $product1[2];
        echo "<br>";
        echo "The item at index [3] is :" . $product1[3];
        ?>
        <h3>Associative Arrays</h3>
        <?php
        $customer = array('CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F');
        print_r($customer);
        echo "<br>";
        $customer1 = array('CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F', 'CustEmail' => 'sarah@gamil.com');
        // $customer1 = array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
        // array_push($customer1,"[CustEmail] => sarah@gamil.com");
        print_r($customer1);
        echo "<br>";
        echo "Items in my customer array";
        echo "<br>";
        echo "The item at index [custName] is :" . " " . $customer1['CustName'];
        echo "<br>";
        echo "The item at index [CustEmail] is : " . $customer1['CustEmail'];
        ?>
        <h3>Multi-Dimensional Arrays</h3>
        <?php
        $stock = array(
            "id1" => array("description" => "t-shirt", "price" => 9.99, "stock" => 100, "colour" => array("blue", "green", "red")),
            "id2" => array("description" => "cap", "price" => 4.99, "stock" => 50, "colour" => array("blue", "black", "grey")),
            "id3" => array("description" => "mug", "price" => 6.99, "stock" => 30, "colour" => array("yellow", "green", "pink"))
        );
        echo ("This is my order:<br>");
        echo ($stock['id1']['colour'][1] . " " . $stock['id1']['description'] . "<br>");
        echo ("Price: &pound;" . $stock['id1']['price'] . "<br>");
        echo ($stock['id2']['colour'][2] . " " . $stock['id2']['description'] . "<br>");
        echo ("Price: &pound;" . $stock['id2']['price'] . "<br>");
        ?>
        <?php
        echo "<h3>Loops</h3>";
        echo "<h4> While Loop </h4>";
        $counter = 1;
        while ($counter < 6) {
            echo "counter :" . $counter . '<br>';
            $counter++;
        }
        echo "<br>";
        $shirtprice = 9.99;
        $counter = 1;
        echo "<table border='1' cellpadding='5' cellspacing='1'>";
        echo "<tr>
                <th>Quantity</th>
                <th>Price</th>
                </tr>";

        while ($counter <= 10) {
            $total = number_format($counter * $shirtprice, 2);
            echo "<tr>
                <td>$counter</td>
                <td>&pound $total</td>
                </tr>";
            $counter++;
        }
        echo "</table>";


        ?>
        <?php
        echo "<h4> ForLoops </h4>";
        $names = array('Peter', 'Kat', 'Laure', 'Ali', 'Popacatapetal');
        for ($i = 0; $i < 5; $i++) {
            echo ($names[$i] . '<br/>');
        }

        echo "<h4> Foreach Loops </h4>";
        $names = array('Peter' => 'c123456', 'kat' => 'c654321', 'Laura' => 'c987654', 'Ali' => 'c654987', 'Popacatapetal' => 'c765984');
        foreach ($names as $n => $id) {
            echo ("Name:" . $n . " " . " " . "ID:" . $id . "<br/>");
        }

        echo "<br>";

        $city = array('Peter' => 'LEEDS', 'Kat' => 'bradford', 'Laura' => 'wakeFIeld');
        print_r($city);
        echo "<br>";
        foreach ($city as $name => $values) {
            $city[$name] = strtolower($values);
        }
        foreach ($city as $name => $values) {
            $city[$name] = ucfirst($values);
        }
        print_r($city);






        ?>
    </section>
    <footer> <br>
        <hr><br>
        <small> <a href="../Indexxx.html">Home</a></small>
    </footer>
</body>

</html>