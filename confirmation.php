<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Kreon:light,regular' rel='stylesheet' type='text/css'/>
    </head>  
    <body>
        <?php include_once("header.php")?>
        <div class="maindiv">
          <?php require("nav.php")?>
            <main>
                <h2>Receipt</h2>
                <div id="receipt">
                <table id="shippingTable">
                    <tr>
                        <th>Shipping to:</th>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION["user"]["firstName"] . ' ' . $_SESSION["user"]["lastName"]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION["user"]["streetAddress"]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION["user"]["phoneNumber"]; ?></td>
                </table>
                <table>
                    <tr>
                        <td>Date: </td>
                        <td><?php echo date("Y-m-d"); ?></td>
                    </tr>
                </table>
                <br/>
                <h3>Order Summary : </h3>
               <table class="productTable">
                    <?php   echo "<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Amount</th></tr>";
                    foreach($_SESSION as $key)
                    {
                        if(isset($key["quantity"]))
                        {
                            echo "<tr><td>" . $key["title"] . "</td><td> $".$key["price"]."</td><td>". $key["quantity"]." </td><td>$". $key["subTotal"] ;
                        }
                    }
                ?>
                </table>
                <br/>
                <table class="productTable totalTable" >
                <tr>
                    <th> SubTotal </th>
                    <td>  $ <?php echo $_SESSION["total"]["amount"]; ?> </td>
                </tr>
                <tr>
                    <th> Delivery Chargers </th>
                    <td> $ <?php echo $_SESSION["total"]["delivery"]; ?> </td>
                </tr>
                <tr>
                    <th> Total </th>
                    <td> $ <?php echo $_SESSION["total"]["totalamount"]; ?> </td>
                </tr>
                </table>
                <h4>Thank you for shopping with us!!!</h4>
                <?php 
                    $file = fopen("order.csv","a");
                    foreach ($_SESSION as $array)
                    {
                        fputcsv($file, $array);
                    }
                    fclose($file);
                    session_destroy(); 
                ?>
                </div>
            </main>
        </div>
        <footer>
            <?php include_once("debug-lite.php");?>
            <?php include_once("footer.php")?>
        </footer>
    </body>
</html>
