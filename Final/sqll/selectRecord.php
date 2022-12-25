<?php

//Make connection to database

include 'connection.php';

//Display heading

echo '<h2>Select ALL from the Customer Table</h2>';

//run query to select all records from customer table

$query="SELECT * FROM customer";

//store the result of the query in a variable called $result

$result=mysqli_query($com, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

}

echo '<h2>Select ALL from the Customer Table with Age>22</h2>';
$query = "SELECT * FROM customer WHERE age>22";
$result = mysqli_query($com, $query);
while ($row = mysqli_fetch_assoc($result)) {

    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . '<br />';
}

echo '<h2>Select Females from the Customer Table with Age>=22</h2>';
$query = "SELECT * FROM customer WHERE gender ='F' AND age>=22";
$result = mysqli_query($com, $query);
while ($row = mysqli_fetch_assoc($result)) {

    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . '<br />';
}

echo '<h2>Select Males from the Customer Table list by age descending</h2>';
$query = "SELECT * FROM customer WHERE gender ='M' ORDER BY age DESC";
$result = mysqli_query($com, $query);
while ($row = mysqli_fetch_assoc($result)) {

    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . '<br />';
}

echo '<h2>Select All from the Customer Table with "a" in the first name</h2>';
$query = "SELECT * FROM customer WHERE FirstName LIKE'%a%'";
$result = mysqli_query($com, $query);
while ($row = mysqli_fetch_assoc($result)) {

    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . '<br />';
}
?>