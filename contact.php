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
                <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
                <form method="post" action="">
                    <div id="formDiv">
                        <fieldset>
                            <legend>Personal Information</legend>
                          <div><label><!--<span class="glyphicon">&#xe008;</span>-->First Name:
                                <text class="compulsory">*</text></label>
                                <input type="text" name="firstName" id="firstName" placeholder="Harry" pattern="[a-zA-Z]{1,15}" required/>
                             </div>
                   <div><label><!--<span class="glyphicon">&#xe008;</span>-->Last Name:
                    <text class="compulsory">*</text></label>
                    <input type="text" name="lastName" id="lastName" placeholder="Potter" pattern="[a-zA-Z]{1,15}" required/>
                  </div>
                  <div><label><!--<span class="glyphicon">&#x2709;</span>-->Email Address:
                    <text class="compulsory">*</text></label>
                     <input type="email" name="emailID" id="emailID" placeholder="abc@example.com" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/><br/>
                  </div>
                   <div><label><!--<span class="glyphicon">&#xe145;</span>-->Phone Number:
                    <text class="compulsory">*</text></label>
                                                <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="+61 470 387 277" pattern="^\+?(?:[0-9] {0,4}-{0,3}){8,16}$" required/><br/>
                  </div>
                  </fieldset>
                  <fieldset>
                      <legend>Event Information</legend>
                      <div><label><!--<span class="glyphicon">&#xe109;</span>-->Event Date:
                        <text class="compulsory">*</text></label>
                        <input type="date" name="eventDate" id="eventDate" required/><br/>
                      </div>
                          <div><label><!--<span class="glyphicon">&#xe023;</span>-->Event Time:</label>
                        
                        <input type="time" name="eventTime" id="eventTime"/><br/>
                        
                      </div>
                       <div><label><!--<span class="glyphicon">&#xe109;</span>-->Date Flexibility:</label>
                        
                                                    <input type="range" id="flexibility" name="flexibility" value="2" min="0" max="2" step="1"/>
                      </div>
                      <div><label><!--<span class="glyphicon">&#xe135;</span>-->Event Location:</label>
                        
                          <textarea name="eventLocation" rows="1" id="eventLocation" placeholder="Melbourne"></textarea><br/>
                      </div>
                        <div><label><!--<span class="glyphicon">&#xe028;</span>-->Event Description:</label>
                        
                        <textarea name="eventDescription" rows="4"  id="eventDescription"></textarea><br/>
                      </div>
                      <div><label><!--<span class="glyphicon">&#xe067;</span>-->Performance required:</label>
                        
                            <select id="performanceRequired">
                                <option value="None">-None-</option>
                                <option value="MC">MC</option>
                                <option value="Comedy Spot">Comedy Spot</option>
                                <option value="Full Show">Full Show</option>
                                <option value="Other">Other</option>
                            </select><br/>
                            </div>
                        </fieldset>
                <div>
                    <label></label>
                    <input class="submitButton" type="submit" value="Submit">
                  </div>  
                </form>
            </main> 
        </div>
        <footer>
           <?php include_once("debug-lite.php");?>
            <?php include_once("footer.php")?>
        </footer>
    </body>
</html>