<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Kreon:light,regular' rel='stylesheet' type='text/css'/>
        <script>
            var myIndex;
            function loadImage(){
                myIndex = 0;
                changeImage();
            }
            function changeImage() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(changeImage, 2000);
            }
        </script>
    </head>  
    <body onload="loadImage()">
        <?php include_once("header.php")?>
        <div class="maindiv">
          <?php require("nav.php")?>
            <main>
               <div id="mainPage">
                    <div>
                        <img class="mySlides" src="images/josh.jpg">
                        <img class="mySlides" src="images/1.png">
                        <img class="mySlides" src="images/JoshThomas.jpg">
                    </div>
                    <div>
                        <p>After making his mark as an award-winning and hugely-successful stand-up comedian and television panellist, Josh Thomas turned his hand to writing, acting and co-executive producing his own television show for ABC TV, inspired by his life and his comedy, called Please Like Me. When Participant Media in the US chose to launch its brand new Pivot television network with Please Like Me and to co-commission a second season with ABC TV, Josh was on his way to being an international success story. He has been awarded by the Australian Academy (AACTA) and the Australian Writers Guild for his writing for Please Like Me, and has been nominated for AACTA and Logie Awards for his performances in the show. In addition, the show itself has won Best Comedy at the AACTA Awards and been nominated as Best Comedy at the International Emmy Awards, Rose d'Or Awards, GLAAD Media Awards and Logie Awards. The show has gained critical acclaim across the globe, and has been named as one of the best TV shows of year by Entertainment Weekly, The New Yorker, Time, The A.V. Club and the Los Angeles Times. Following on from the show's success in both Australia and the US, Please Like Me has also been licensed to air in Germany, France, Sweden, Canada, Finland and Israel.</p>
                    </div>
                </div>
                <div id="iframeDiv">
                    <iframe src="https://www.youtube.com/embed/8UrQm2z9D3M" allowfullscreen ></iframe>
                </div>
                
            </main>
        </div>
        <footer>
            <?php include_once("debug-lite.php");?>
            <?php include_once("footer.php")?>
        </footer>
    </body>
</html>
