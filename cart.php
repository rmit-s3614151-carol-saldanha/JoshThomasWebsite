<?php 
    session_start();
    $_SESSION["total"]["amount"] = 0;
    if(isset($_POST["plm"]))
    {
        foreach ($_POST["plm"] as $key => $value) {
            if(is_numeric($value))
            {
                if($key == "s1")
                {
                    $_SESSION[$key]["title"] = "Season 1 DVD";
                    $_SESSION[$key]["quantity"] = $value;
                    $_SESSION[$key]["price"] = 17.00;
                    $_SESSION[$key]["subTotal"] = 17.00 * $value;
                    $_SESSION[$key]["code"] = "s1";
                }
                if($key == "s2")
                {
                    $_SESSION[$key]["title"] = "Season 2 DVD";
                    $_SESSION[$key]["quantity"] = $value;
                    $_SESSION[$key]["price"] = 22.50;
                    $_SESSION[$key]["subTotal"] = 22.50 * $value;
                    $_SESSION[$key]["code"] = "s2";
                }
                if($key == "s3")
                {
                    $_SESSION[$key]["title"] = "Season 3 DVD";
                    $_SESSION[$key]["quantity"] = $value;
                    $_SESSION[$key]["price"] = 26.75;
                    $_SESSION[$key]["subTotal"] = 26.75 * $value;
                    $_SESSION[$key]["code"] = "s3";
                }
                if($key == "s11")
                {
                    $_SESSION[$key]["title"] = "Season 1 Bluray";
                    $_SESSION[$key]["quantity"] = $value;
                    $_SESSION[$key]["price"] = 17.00;
                    $_SESSION[$key]["subTotal"] = 17.00 * $value;
                    $_SESSION[$key]["code"] = "s11";
                }
                if($key == "s12")
                {
                    $_SESSION[$key]["title"] = "Season 2 Bluray";
                    $_SESSION[$key]["quantity"] = $value;
                    $_SESSION[$key]["price"] = 22.50;
                    $_SESSION[$key]["subTotal"] = 22.50 * $value;
                    $_SESSION[$key]["code"] = "s12";
                }
                if($key == "s13")
                {
                    $_SESSION[$key]["title"] = "Season 3 Bluray";
                    $_SESSION[$key]["quantity"] = $value;
                    $_SESSION[$key]["price"] = 26.75;
                    $_SESSION[$key]["subTotal"] = 26.75 * $value;
                    $_SESSION[$key]["code"] = "s13";
                }
            }
        }
    }
    if(isset($_POST["remove"]))
    {
        foreach ($_POST["remove"] as $key => $value)
        {
            unset($_SESSION[$key]);
        }
    }
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
                <h2>CART</h2>
                <table class="productTable">
                <?php
                    function validRange($qty)
                    {
                        //$min = 1;
                        //$max = 5;
                        //if (filter_var($qty, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === true)
                        //   return true;
                        if(is_numeric($qty) && $qty>=1 && $qty<=5)
                            return true;
                        else
                            return false;
                    }
                                  
                    echo "<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Sub total</th><th>Remove Item</th></tr>";
                    foreach($_SESSION as $key)
                    {
                        if(isset($key["quantity"]))
                        {
                            if(validRange($key["quantity"]))
                            {
                                echo "<tr><td>" . $key["title"] . "</td><td> $".$key["price"]."</td><td>". $key["quantity"]." </td><td>$". $key["subTotal"] . "</td><td><form method='post' action='cart.php'><input type='submit' value='remove' name='remove[".$key["code"]."]'></form></td></tr>";
                                $_SESSION["total"]["amount"] = $_SESSION["total"]["amount"] + $key["subTotal"];
                            }
                            else
                            {
                                header("Location: shop.php");
                            }
                        }
                    }
                ?>

            </table>
            <br/>
            <table class="productTable totalTable">
                <tr>
                    <th> Total </th>
                    <td>  $ <?php echo $_SESSION["total"]["amount"]; ?> </td>
                </tr>
            </table>
            <table class="totalTable">                        
                <tr><td><button class="submitButton" value="Checkout" onClick="document.location.href='checkout.php'">Checkout</button></td></tr>
            </table>
            </main>
        </div>
        <footer>
            <?php include_once("debug-lite.php");?>
            <?php include_once("footer.php")?>
        </footer>
    </body>
</html>
