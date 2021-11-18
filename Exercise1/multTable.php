<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$rows = 100;
$cols = 100;

// create table
echo "<table border=\"1\">";

for ($i = 0; $i <= $rows; $i++)
{
  // create row
  echo "<tr>";

  for ($j = 0; $j <= $cols; $j++)
  {
    // column in row
    if ($i == 0 && $j == 0) {echo "<td></td>";} // empty corner
    else if ($i == 0)       {echo "<td> <b> $j </b> </td>";} // row header
    else if ($j == 0)       {echo "<td> <b> $i </b> </td>";} // column header
    else                    {echo "<td>" . $i*$j . "</td>";} // product of row*col headers
  }

  echo "</tr>";

}

echo "</table>";





?>
