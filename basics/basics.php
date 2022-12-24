<!DOCTYPE html>
<html lang="en">

<head>
   <title>Web Applications and Technologies</title>
   <!-- <link type="text/css" rel="stylesheet" href="main.css" /> -->
   <style>
      body {
         font-family: verdana, helvetica, arial, sans-serif;
         font-size: 1em;
      }

      a {
         color: red;
         font-size: 20px;
         padding: 10px;
         text-decoration: none;
      }

      a:hover {
         background-color: rgb(174, 184, 184);
         color: black;
      }
   </style>
</head>

<body>

   <header>
      <h1>Paul Doney C123457</h1>
      <hr>
   </header>

   <section id="container">

      <h1>Basics of PHP</h1>
      <?php
      echo 'Name: Jenny' . '<br>' . 'ID: 77297946' . '<br>';

      //“most programmers say it’s better to use ‘echo’ rather than ‘print’” says who?
      echo '<br>' . "\"most programmers say it's better to use 'echo' rather than 'print' \"says who?";
      ?>

      <h2>Variables</h2>
      <?php
      //Hi my name is David and I am 12 years old
      $name = "Jenny";
      $age = 19;
      echo "Using Concatenation: ";
      echo "Hi my name is " . $name . " and I am " . $age . " years old" . '<br>';

      echo "Without Using Concatenation: ";
      echo "Hi my name is {$name} and I am {$age} years old";
      ?>

      <h2>Functions</h2>
      <?php
      //gettype()returns the type of the variable
      echo gettype($name);

      echo '<br />';
      //strlen() returns length of the string
      echo strlen($name);
      echo '<br />';
      //strtoUpper()returns the string in uppercase
      echo strtoUpper($name);

      ?>

      <h2>Arithmetic</h2>
      <?php
      $num1 = 9;
      $num2 = 12;
      echo "First number: " . $num1 . '<br>';
      echo "Second number: " . $num2 . '<br>';
      echo "{$num1} * {$num2} = " . $num1 * $num2 . '<br>';
      echo "{$num1} as a percentage of {$num2} = " . ($num1 / $num2) * 100 . "%" . "<br>";
      echo "{$num2} divided by {$num1} = " . number_format($num2 / $num1, 2);
      ?>

   </section>
   <footer> <br>
      <hr><br>
      <small> <a href="#">Home</a></small>
   </footer>
</body>

</html>