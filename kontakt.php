<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dentist</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper">
        <div id="nav">
            <a href="index.php">
                <div class="left mobile">
                    <img src="images/logo.png" alt="Logo" id="logo1">
                    <img src="images/whitetext.png" alt="Text" id="text1">
                </div>
            </a>

            <div class="right ulk">
                <a href="#" class="respmenu" id="respmenu"><i class="fa fa-bars fa-2x"></i></a>
                <div id="mobileClear"></div>
                <ul id="navul">
                    <li><a id="pocetna" href="index.php">
                            <h4>Početna</h4>
                        </a></li>
                    <li><a id="kontakt" href="kontakt.php">
                            <h4>Kako do nas?</h4>
                        </a></li>

                    <li><a id="oz" href="oz.php">
                            <h4>Online zakazivanje</h4>
                        </a></li>

                </ul>
            </div>

        </div>
        <div id="main" class="clear kontaktirati">
            <h1 id="kako">Kako do nas?</h1>
            <div class="mapouter levo"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=rajka%20ackovica&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
            </div>
                <div id="clearm"></div>
            <div id="ikonicem" class="levo kontakt">
                <i class="fas fa-phone fa-3x"></i><br>
                <i class="fas fa-mobile-alt fa-3x"></i> <br>
                <i class="far fa-clock fa-3x"></i> <br>
                <i class="fas fa-map-marked-alt fa-3x"></i> <br>
                <i class="far fa-envelope fa-3x"></i>  <br>    
            </div>
            
             
            <div class="levo kontakt" id="bas">
                <h2 id="fiksni">020/111-222</h2>
                <h2 id="tel1">064/122456</h2>
                <h2 id="radno">Radni dani: 09.00-21.00 <br> Vikend: 10.00-16.00</h2>
                <h2 id="lok">Rajka Ackovica 51, Novi Pazar, <br> Srbija, 36300 </h2>
                <h2 id="mail">ordinacija@mail.com</h2>
                
            </div>
            <div class="desno drmreze">
                <h2 id="drt">Pronadjite nas i na drustvenim mrezama: </h2>
                <a target="_blank" class="drf" href="https://www.facebook.com/ordinacijahamzic"><i class="fab fa-facebook fa-2x"><span id="m"> Ordinacija Hamzic</span></i></a> <br> 
                <a target="_blank" class="drf" href="https://www.instagram.com/ordinacija.hamzic/"><i class="fab fa-instagram fa-2x"><span id="n"> ordinacija.hamzic</span></i></a> 
            </div>

        </div>
        <?php include("fo.php") ?>
    </div>
</body>
</html>
<script>
    var active = document.getElementById("kontakt").parentElement;
    active.classList.add("active");
    
    $(document).ready(function() {
		
        var respmenu 		= $('#respmenu');
        var	menu 			= $('#navul');
    
        $(respmenu).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        
        $(window).resize(function(){
            var sirina = $(window).width();
            if(sirina > 768 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }	
        });
        
    });
</script>