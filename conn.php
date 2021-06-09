<?php
$mysqli = new mysqli("remotemysql.com","qz5SfLgaac","jsRZm3bRN2","qz5SfLgaac");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Yep! Database Connected...";
}

// Gather all table names into an array.

$query = "select * from demo";

$result = $mysqli->query($query);
print_r($result['name']);
/*
$tables = $result->fetch_all();

// Step through the array, only accessing the first element (the table name)
// and gather the column names in each table.
foreach($tables as $table)
{
    echo "<h2>" . $table[0] . "</h2>";

    $query = "DESCRIBE " . $table[0];
    $result = $mysqli->query($query);

    $columns = $result->fetch_all();

    foreach($columns as $column)
    {
        echo $column[0] . "<br />";
    }
}
*/
$mysqli->close();
?>
