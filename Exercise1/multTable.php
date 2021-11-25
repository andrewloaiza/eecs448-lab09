<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// define number of rows and columns
$rows = 100;
$cols = 100;

// create table
echo "<table border=\"1\">";

for ($i = 0; $i <= $rows; $i++)
{
  // add row
  echo "<tr>";

  for ($j = 0; $j <= $cols; $j++)
  {
    // add column in row
    if ($i == 0 && $j == 0) {echo "<td></td>";} // empty corner
    else if ($i == 0)       {echo "<th> $j </th>";} // row header
    else if ($j == 0)       {echo "<th> $i </th>";} // column header
    else                    {echo "<td>" . $i*$j . "</td>";} // product of row*col headers
  }

  echo "</tr>";

}

echo "</table>";

?>
