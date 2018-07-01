<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Kreon:light,regular' rel='stylesheet' type='text/css'/>
        <script type="text/javascript" src="script.js"></script>"
    </head>  
    <body>
        <?php include_once("header.php")?>
        <div class="maindiv">
            <?php require("nav.php")?>
            <main>
                <!--<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">-->
                <form method="post" action="cart.php">
                <h2 class="shopHeading">DVD</h2>
                <div class="dvd">
                    <div class="clickable dvd1">
                        <h5>Season 1</h5>
                        <div class="season">
                            <img src="images/please_like_me_1.jpg"/>
                            <div class="seasonPriceDiv">
                                <label>Price: </label>
                                $ <input class="price" type="text" value="17.00" readonly/><br/>
                                <label for="plm[s1]">Quantity: </label>
                                <input type="number" id="quantityDVD1" name='plm[s1]' min="0" max="5" onchange="updateDVD1Price()"/><br/>
                                <label for="season1price">Total :</label>
                                $ <input name="season1price" type="text" id="season1price" readonly/><br/>
                            </div>
                        </div>
                        <details>
                            <summary>Inspired by Josh's award-winning stand-up comedy, Please Like Me is a TV comedy about growing up quickly and realising that your parents are not heroes, but dopes with no idea what's going on.</summary>
                            <p>Josh's life is turned upside down when he's dumped by his girlfriend, finds a weird new boyfriend and has to move back in with his mother after she overdoses on painkillers. Inspired by the award-winning standup comedy of Josh Thomas, PLEASE LIKE ME is a charming and bittersweet comedy/drama about cavoodles, custard tarts, boyfriends and girlfriends. Mostly though, it's about growing up quickly and realizing that your parents are not heroes, but big dopes with no idea what's going on - just like you.<br/>
                            Special Features<br/>
                            The Making Of Please Like Me (28 Minutes)</p>
                        </details>
                    </div> 
                    <div class="clickable dvd2">
                        <h5>Season 2</h5>
                        <div class="season">
                            <img src="images/please_like_me_2.jpg"/>
                            <div class="seasonPriceDiv">
                                <label>Price: </label>
                                $ <input class="price" type="text" value="22.50" readonly/><br/>
                                <label for="plm[s2]">Quantity: </label>
                                <input type="number" id="quantityDVD2" name='plm[s2]' min="0" max="5" onchange="updateDVD2Price()"/><br/>
                                <label for="season2price">Total: </label>
                                $ <input name="season2price" type="text" id="season2price" readonly/><br/>
                            </div>
                        </div>
                        <details>
                            <summary>The coming-of-age comedy returns having received critical acclaim in Australia and the USA, where it was hailed as "best new comedy". The award-winning Please Like Me is back for a second season, written by and starring Josh Thomas.</summary>
                            <p>Special Features<br/>
                            Please Like Me: From Script To Screen<br/>
                            The Please Like Me House: A Guided Tour<br/>
                            Josh and Tom: A Special Relationship
                            </p>
                        </details>
                    </div>
                    <div class="clickable dvd3">
                        <h5>Season 3</h5>
                        <div class="season">
                            <img src="images/please_like_me_3.jpg"/>
                            <div class="seasonPriceDiv">
                                <label>Price: </label>
                                $ <input class="price" type="text" value="26.75" readonly/><br/>
                                <label for="plm[s3]">Quantity: </label>
                                <input type="number" id="quantityDVD3" name='plm[s3]' min="0" max="5" onchange="updateDVD3Price()"/><br/>
                                <label for="season3price">Total: </label>
                                $ <input name="season3price" type="text" id="season3price" readonly/><br/>
                                
                            </div>
                        </div>
                        <details>
                            <summary>"Hilariously awkward", "ridiculously funny", "refreshing", "terrific", "incisive", "sweet, sharp, sad, funny and astute", "unlike anything else", "one of the best shows on TV" and "the perfect coming-of-age story for people who'll never grow up". </summary>    
                            <p>That's how critics from Entertainment Weekly to Vogue, Time, The New Yorker, The Atlantic, The Los Angeles Times, The Age, The Sydney Morning Herald and The Australian have raved about the award-winning comedy drama Please Like Me and its creator, writer and star, Josh Thomas. 
                            Kicking off with a half-hour romcom and ending with an unforgettable family Christmas lunch, this season is filled with food, sex, drugs, dancing, singing, secrets and a transgender chicken.<br/>
                            Special Features<br/>
                            13 Behind The Scenes Featurettes</p>
                        </details>
                    </div>
                </div>
                <h2 class="shopHeading">BLURAY</h2>
                <div class="dvd">
                    <div class="clickable dvd1">
                        <h5>Season 1</h5>
                        <div class="season">
                            <img src="images/please_like_me_1.jpg"/>
                            <div class="seasonPriceDiv">
                                <label>Price: </label>
                                $ <input class="price" type="text" value="17.00" readonly/><br/>
                                <label for="plm[s11]">Quantity: </label>
                                <input type="number" id="quantityBluray1" name='plm[s11]' min="0" max="5" onchange="updateBluray1Price()"/><br/>
                                <label for="season11price">Total: </label>
                                $ <input name="season11price" type="text" id="season11price" readonly/><br/>
                            </div>
                        </div>
                        <details>
                            <summary>Inspired by Josh's award-winning stand-up comedy, Please Like Me is a TV comedy about growing up quickly and realising that your parents are not heroes, but dopes with no idea what's going on.</summary>
                            <p>Josh's life is turned upside down when he's dumped by his girlfriend, finds a weird new boyfriend and has to move back in with his mother after she overdoses on painkillers. Inspired by the award-winning standup comedy of Josh Thomas, PLEASE LIKE ME is a charming and bittersweet comedy/drama about cavoodles, custard tarts, boyfriends and girlfriends. Mostly though, it's about growing up quickly and realizing that your parents are not heroes, but big dopes with no idea what's going on - just like you.<br/>
                            Special Features<br/>
                            The Making Of Please Like Me (28 Minutes)</p>
                        </details>
                    </div> 
                    <div class="clickable dvd2">
                        <h5>Season 2</h5>
                        <div class="season">
                            <img src="images/please_like_me_2.jpg"/>
                            <div class="seasonPriceDiv">
                                <label>Price: </label>
                                $ <input class="price" type="text" value="22.50" readonly/><br/>
                                <label for="plm[s12]">Quantity: </label>
                                <input type="number" id="quantityBluray2" name='plm[s12]' min="0" max="5" onchange="updateBluray2Price()"/><br/>
                                <label for="season12price">Total: </label>
                                $ <input name="season12price" type="text" id="season12price" readonly/><br/>
                            </div>
                        </div>
                        <details>
                            <summary>The coming-of-age comedy returns having received critical acclaim in Australia and the USA, where it was hailed as "best new comedy". The award-winning Please Like Me is back for a second season, written by and starring Josh Thomas.</summary>
                            <p>Special Features<br/>
                            Please Like Me: From Script To Screen<br/>
                            The Please Like Me House: A Guided Tour<br/>
                            Josh and Tom: A Special Relationship
                            </p>
                        </details>
                    </div>
                    <div class="clickable dvd3">
                        <h5>Season 3</h5>
                        <div class="season">
                            <img src="images/please_like_me_3.jpg"/>
                            <div class="seasonPriceDiv">
                                <label>Price: </label>
                                $ <input class="price" type="text" value="26.75" readonly/><br/>
                                <label for="plm[s13]">Quantity: </label>
                                <input type="number" id="quantityBluray3" name='plm[s13]' min="0" max="5" onchange="updateBluray3Price()"/><br/>
                                <label for="season13price">Total: </label>
                                $ <input name="season13price" type="text" id="season13price" readonly/><br/>
                            </div>
                        </div>
                        <details>
                            <summary>"Hilariously awkward", "ridiculously funny", "refreshing", "terrific", "incisive", "sweet, sharp, sad, funny and astute", "unlike anything else", "one of the best shows on TV" and "the perfect coming-of-age story for people who'll never grow up". </summary>    
                            <p>That's how critics from Entertainment Weekly to Vogue, Time, The New Yorker, The Atlantic, The Los Angeles Times, The Age, The Sydney Morning Herald and The Australian have raved about the award-winning comedy drama Please Like Me and its creator, writer and star, Josh Thomas. 
                            Kicking off with a half-hour romcom and ending with an unforgettable family Christmas lunch, this season is filled with food, sex, drugs, dancing, singing, secrets and a transgender chicken.<br/>
                            Special Features<br/>
                            13 Behind The Scenes Featurettes</p>
                        </details>
                    </div>
                </div>
                <div>
                    <input class="submitButton" type="submit" value="Buy">
                </div>
                <h2 class="shopHeading">iTunes and Google Play Store</h2>
                <div class="itunesDiv">
                    <div>
                       <h5>Season 1</h5>
                        <div class="clickable dvd1">
                            <a href="https://itunes.apple.com/us/tv-season/please-like-me-season-1/id671267950"><img src="images/itunes.jpg"/></a>
                        </div>
                        <div class="clickable dvd1">
                            <a href="https://play.google.com/store/tv/show?id=RtnabrwLBEs&cdid=tvseason-BJko0zBBVQxuX_8ClWkkUQ"><img src="images/GooglePlay.jpg"></a>
                        </div>
                    </div>
                     <div>
                        <h5>Season 2</h5>
                        <div class="clickable dvd1">
                            <a href="https://itunes.apple.com/au/tv-season/please-like-me-season-2/id906508728"><img src="images/itunes.jpg"/></a>
                        </div>
                        <div class="clickable dvd1">
                            <a href="https://play.google.com/store/tv/show?id=RtnabrwLBEs&cdid=tvseason-9aM7tHsSt5EjPpLQ3AMKhw"><img src="images/GooglePlay.jpg"></a>
                        </div>
                    </div> 
                     <div>
                        <h5>Season 3</h5>
                        <div class="clickable dvd1">
                            <a href="https://itunes.apple.com/au/tv-season/please-like-me-season-3/id1047334958"><img src="images/itunes.jpg"/></a>
                        </div>
                        <div class="clickable dvd1">
                            <a href="https://play.google.com/store/tv/show?id=RtnabrwLBEs&cdid=tvseason-cUcfPF0x2mR-B5A4TXy5Xw"><img src="images/GooglePlay.jpg"></a>
                        </div>
                    </div> 
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