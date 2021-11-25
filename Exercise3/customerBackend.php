<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<link href='style.css' rel='stylesheet' type='text/css'/>";


// set default time zone
date_default_timezone_set('America/Chicago');


// get shipping option information
$shipPrice = (int)$_POST["shipping"];
$shipDays  = 0;

if ($shipPrice == 0)      $shipDays = 7;
else if ($shipPrice == 5) $shipDays = 3;
else                      $shipDays = 1;


// item quantity, price, and total
$chNum = (int)$_POST["chance_cap"];
$kuNum = (int)$_POST["ku_cap"];
$kcNum = (int)$_POST["kc_cap"];

$chPrice = 10;
$kuPrice = 15;
$kcPrice = 20;

$chTotal = $chNum * $chPrice;
$kuTotal = $kuNum * $kuPrice;
$kcTotal = $kcNum * $kcPrice;


// calculate total
$total = $shipPrice + $chTotal + $kuTotal + $kcTotal;


// echo receipt information on page
echo "<title>Receipt</title>";

echo "<header>
        <div class='company-name'>Andrew's Cap Store</div>
        <div class='receipt'>Receipt</div>
      </header>


      <div class='body'>

        <p class='address'> Eaton Hall <br> 1520 W 15th St <br> Lawrence, KS 66045 </p>

        <p>
          <b>Merchant's Note: </b><br>
          Thanks for shopping at Andrew's Cap Store! <br>
          Purchase details below, feel free to print page.<br>
          You can expect your purchase to arrive in " . $shipDays . " day(s).<br>
          Password: " . $_POST["password"] . "<br><br><br>


        Date: " . date('m/d/Y') . " (CT)<br>
        Receipt #: " . rand(10000, 99999) . "<br><br>
        Bill to: 123 Example Ave, Lawrence, KS 66045<br>
        Ship to: 123 Example Ave, Lawrence, KS 66045<br>

        <table class='receiptTable'>
          <tr>
            <th>Qty</th>
            <th>Description</th>
            <th>Unit Price</th>
            <th>Cost</th>
          </tr>
          <tr>
            <td>" . $chNum . "</td>
            <td>Chance 3 Cap</td>
            <td>$" . $chPrice . "</td>
            <td>$" . $chTotal . "</td>
          </tr>
          <tr>
            <td>" . $kuNum . "</td>
            <td>University of Kansas Jayhawk Cap</td>
            <td>$" . $kuPrice . "</td>
            <td>$" . $kuTotal . "</td>
          </tr>
          <tr>
            <td>" . $kcNum . "</td>
            <td>Kansas City Royals Cap</td>
            <td>$" . $kcPrice . "</td>
            <td>$" . $kcTotal . "</td>
          </tr>
          <tr>
            <td colspan='2'></td>
            <td>" . $shipDays . "-Day Shipping</td>
            <td>$" . $shipPrice . "</td>
          </tr>
          <tr>
            <td colspan='2'></td>
            <td><b>TOTAL</b></td>
            <td>$" . $total . "</td>
          </tr>
        </table>

      </div>";

?>
