<?php 
    session_start();
    function validateName($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      return preg_match("/[a-zA-Z]{1,15}/",$value);
    }
    function validateAddress($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      return preg_match("/[A-Za-z 0-9]/",$value);
    }
    function validateEmail($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      return preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$value); 
    }
    function validatePhone($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      return preg_match("#^\+?(?:[0-9] {0,4}-{0,3}){8,16}$#",$value);
    }
    function validateCardNumber($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      return preg_match("/^[0-9{13,16} {0,3}]{13,19}$/",$value);
    }
     function validateExpiry($value1, $value2)
    {
      $input_time = mktime(0,0,0,$_POST['expiryMonth'],0,$_POST['expiryYear']); 
      if ($input_time < time()){
        return false;
      }
      return true;
    }
     function validateCvv($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      return preg_match("/^[0-9]{3,3}$/",$value);
    }
   
     
   
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Kreon:light,regular' rel='stylesheet' type='text/css'/>
        <script>
          function rememberMe() {
            if(document.getElementById("rememberMeCheckBox").checked){
              if(typeof(Storage) !== "undefined") {
                if (!localStorage.firstName) {
                  localStorage.firstName = document.getElementById("firstName").value;
                }
                if(!localStorage.lastName){
                  localStorage.lastName = document.getElementById("lastName").value;
                }
                if (!localStorage.streetAddress) {
                  localStorage.streetAddress = document.getElementById("streetAddress").value;
                }
                if(!localStorage.emailID){
                  localStorage.emailID = document.getElementById("emailID").value;
                }
                if (!localStorage.phoneNumber) {
                  localStorage.phoneNumber = document.getElementById("phoneNumber").value;
                }
              }
            }
            else{
              if(typeof(Storage) !== "undefined") {
                if (localStorage.firstName) {
                  localStorage.removeItem("firstName");
                }
                if(!localStorage.lastName){
                  localStorage.removeItem("lastName");
                }
                if (!localStorage.streetAddress) {
                  localStorage.removeItem("streetAddress");
                }
                if(!localStorage.emailID){
                  localStorage.removeItem("emailID");
                }
                if (!localStorage.phoneNumber) {
                  localStorage.removeItem("phoneNumber");
                }
              }
            }
          }
          function populate(){
            if(typeof(Storage) !== "undefined") {
              if (localStorage.firstName) {
                document.getElementById("firstName").value = localStorage.getItem("firstName");
              }
              if(localStorage.lastName){
                document.getElementById("lastName").value = localStorage.getItem("lastName");
              }
              if (localStorage.streetAddress) {
                document.getElementById("streetAddress").value = localStorage.getItem("streetAddress");
              }
              if(localStorage.emailID){
                document.getElementById("emailID").value = localStorage.getItem("emailID");
              }
              if(localStorage.phoneNumber){
                document.getElementById("phoneNumber").value = localStorage.getItem("phoneNumber");
              }
            }
          }
      </script>
    </head>  
    <body onload="populate()">
        <?php include_once("header.php")?>
        <div class="maindiv">
          <?php require("nav.php")?>
          <main>
            <!--<div class="body-text"></div>-->
            <div class="form-container">
              <div class="personal-information">
                <h2>Payment Information</h2>
              </div> 
              <div id="formDiv">
                <form method="post" action="checkout.php">
                  <fieldset>
                    <legend>Personal Information</legend>
                  <div>
                    <label>First Name<text class="compulsory">*</text>:</label>
                    <input type="text" name="firstName" id="firstName" placeholder="Harry" pattern="[a-zA-Z]{1,15}" required/>
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateName($_POST["firstName"]))
                        {
                           ?> 
                          <span style="color:red">Invalid first name</span>
                    <?php 
                          $errorfirstName = true;
                        }
                        else
                        {
                          $_SESSION["user"]["firstName"] = $_POST["firstName"];
                          $errorfirstName = false;
                        }
                      }
                    ?>
                  </div>
                  <div>
                    <label>Last Name<text class="compulsory">*</text>:</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Potter" pattern="[a-zA-Z]{1,15}"  required/>
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateName($_POST["lastName"]))
                        {
                           ?> 
                          <span style="color:red">Invalid last name</span>
                    <?php 
                          $errorlastName = true;
                        }
                        else
                        {
                          $_SESSION["user"]["lastName"] = $_POST["lastName"];
                          $errorlastName = false;
                        }
                      }
                    ?>
                  </div>
                  <div>
                    <label>Address<text class="compulsory">*</text>:</label>
                    <textarea name="streetAddress" rows="5"  id="streetAddress" placeholder="140 Humingbird Boulevard" required="required" autocomplete="on" pattern="[A-Za-z 0-9]"></textarea><br/>
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateAddress($_POST["streetAddress"]))
                        {
                          ?> 
                          <span style="color:red">Invalid street Address</span>
                    <?php 
                          $errorstreetAddress = true;
                          
                        }
                        else
                        {
                          $_SESSION["user"]["streetAddress"] = $_POST["streetAddress"];
                          $errorstreetAddress = false;
                        }
                      }
                    ?>
                  </div>
                  <div>
                    <label>Email Address<text class="compulsory">*</text>:</label>
                    <input type="email" name="emailID" id="emailID" placeholder="abc@example.com" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/><br/>
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateEmail($_POST["emailID"]))
                        {
                           ?> 
                          <span style="color:red">Invalid email ID</span>
                    <?php 
                          $erroremailID = true;
                          
                        }
                        else
                        {
                          $_SESSION["user"]["emailID"] = $_POST["emailID"];
                          $erroremailID = false;
                        }
                      }
                    ?>
                  </div>
                  <div>
                    <label>Phone Number<text class="compulsory">*</text>:</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="+61 470 387 277" pattern="^\+?(?:[0-9] {0,4}-{0,3}){8,16}$" required/><br/>
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validatePhone($_POST["phoneNumber"]))
                        {
                         ?> 
                          <span style="color:red">Invalid phone Number</span>
                    <?php 
                          $errorphoneNumber = true;
                          
                        }
                        else
                        {
                          $_SESSION["user"]["phoneNumber"] = $_POST["phoneNumber"];
                          $errorphoneNumber = false;
                        }
                      }
                    ?>
                  </div>
                  <div>
                    <input type="checkbox" name="rememberMeCheckBox" id="rememberMeCheckBox" onclick="rememberMe()"/>Remember Me                  </div>
                  <div>
                  </fieldset>
                  <fieldset>
                    <legend>Card Details</legend>
                  <div>
                    <label>Card Number<text class="compulsory">*</text>:</label>
                    <input type="text" name="cardNumber" id="cardNumber" required="required" pattern="^[0-9{13,16} {0,3}]{13,19}$"  >
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateCardNumber($_POST["cardNumber"]))
                        {
                           ?> 
                          <span style="color:red">Invalid cardNumber</span>
                    <?php 
                          $errorcardNumber = true;
                          
                        }
                        else
                        {
                          $errorcardNumber = false;
                        }
                      }
                    ?>
                  </div>
            			<div>
            			  <label>Expiry<text class="compulsory">*</text>:</label>
                    <input type="text" name="expiryMonth" id="expiryMonth" required="required" placeholder="MM" pattern="\d{2}">
                    <input type="text" name="expiryYear" id="expiryYear" required="required" placeholder="YYYY" pattern="\d{4}">
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateExpiry($_POST["expiryMonth"], $_POST["expiryYear"])){
                    ?> 
                          <span style="color:red">Invalid Expiry Date </span>
                    <?php 
                          $errorexpiry = true;
                        }
                        else
                          $errorexpiry = false;
                      }
                    ?>
                  </div>
            			<div>
            			  <label>CVV<text class="compulsory">*</text>:</label>
                    <input type="password" name="cvv" id="cvv" required="required" maxlength="3">
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                      {
                        if(!validateCvv($_POST["cvv"]))
                        {
                         ?> 
                          <span style="color:red">Invalid Cvv</span>
                    <?php 
                          $errorcvv = true;
                          
                        }
                        else
                          $errorcvv = false;
                      }
                    ?>
                  </div>
                  </fieldset>
                  <fieldset>
                    <legend>Delivery Options</legend>
                    <div>
                      <input type="radio" class="delivery" name="delivery" value="0.00" required/>Regular Delivery : Free</br>
                      <input type="radio" class="delivery" name="delivery" value="7.00" required/>Regular Courier : $7.00</br>
                      <input type="radio" class="delivery" name="delivery" value="10.50" required/>Express Courier : $10.50</br>
                      <?php
                          if(isset($_POST["delivery"]))
                          {
                            $_SESSION["total"]["delivery"] = $_POST["delivery"];
                            $_SESSION["total"]["totalamount"] = $_SESSION["total"]["amount"] + $_SESSION["total"]["delivery"];
                          }
                      ?>
                    </div>
                  </fieldset>
                  <div>
                    <label></label>
                    <input class="submitButton" name="submit" type="submit" value="Pay"/>
                    <?php
                      if(isset($_POST["submit"]))
                        if(!$errorfirstName && !$errorlastName && !$errorstreetAddress && !$erroremailID && !$errorphoneNumber && !$errorcardNumber && !$errorexpiry && !$errorcvv)
                        {
                          echo "<script>window.top.location='confirmation.php'</script>";
                        }
                    ?>
                  </div>
                </form>
              </div>
            </main>
          </div>
        <footer>
            <?php include_once("debug-lite.php");?>
            <?php include_once("footer.php")?>
        </footer>
    </body>
</html>
