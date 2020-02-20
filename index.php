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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper">
        <?php include("nav.php"); ?>
        <div id="kaver"></div>
        <div id="main">
            <h1 id="naziv">ORDINACIJA HAMZIĆ</h1>
            <div id="podaci">
                <div id="first">
                    <div class="dot prvi levo"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                    <div id="lokacija" class="levo">
                        <h2>Rajka Ackovica 51</h2>
                        <h2>Novi Pazar, Srbija</h2>
                        <h2>36300</h2>
                    </div>
                </div>

                <div id="second">
                    <div class="dot drugo levo"><i class="fas fa-tooth fa-2x"></i></div>
                    <div id="zubar" class="levo">
                        <h2>Dr Džemila Hamzić</h2>
                        <h2>25 godina iskustva</h2>
                    </div>
                </div>

                <div id="third">
                    <div class="dot drugo levo"><i class="fas fa-star fa-2x"></i></div>
                    <div id="oprema" class="levo">
                        <h2>Brzo zakazivanje</h2>
                        <h2>Najnovija oprema</h2>
                    </div>
                </div>

            </div>

            
            <div id="pregled" class="levo clear">
                <h2 id="mn1" class="n1">Lorem, ipsum dolor</h2>
                <img class="desno" id="pregledsm" src="images/pcelica.jpg" width="330" alt="pregled">
                <h3 id="pcelica">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa maxime eligendi quidem
                    quisquam
                    molestias aspernatur recusandae minus alias laudantium necessitatibus, veritatis esse optio fuga
                    sunt aut aliquid iste nihil natus numquam neque suscipit voluptatum perspiciatis explicabo. Officiis
                    quas a voluptatem, ad ea autem, sapiente architecto, expedita doloribus ab porro eius! Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Perferendis, doloribus impedit est, officiis.</h3>
                    
            </div>
            <img class="desno" id="pregleds" src="images/pcelica.jpg" width="400" alt="pregled">
            
            <div class="clear"></div>
            <div id="rad">
                <img class="levo" id="rads" src="images/dentist.jpg" width="400" alt="Popravka">
                <h2 id="radnaslov" class="n1">Lorem, ipsum dolor</h2>
                <img class="levo" id="radsm" src="images/dentist.jpg" width="330" alt="Popravka">
                <h3 id="radt" class="desno">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa maxime
                    eligendi quidem quisquam
                    molestias aspernatur recusandae minus alias laudantium necessitatibus, veritatis esse optio fuga
                    sunt aut aliquid iste nihil natus numquam neque suscipit voluptatum perspiciatis explicabo. Officiis
                    quas a voluptatem, ad ea autem, sapiente architecto, expedita doloribus ab porro eius! Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Perferendis, doloribus impedit est, officiis maxime
                    velit voluptas cum blanditiis modi inventore iure. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Lorem ipsum dolor sit.</h3>

                    <h3 style="display: none;" id="radtm" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa maxime
                    eligendi quidem quisquam
                    molestias aspernatur recusandae minus alias laudantium necessitatibus, veritatis esse optio fuga
                    sunt aut aliquid iste nihil natus numquam neque suscipit voluptatum perspiciatis explicabo. Officiis
                    quas a voluptatem, ad ea autem, sapiente architecto, expedita doloribus ab porro eius! Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Perferendis, doloribus impedit est, officiis maxime
                    velit voluptas cum blanditiis modi inventore iure. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Lorem ipsum dolor sit.</h3>

                    <img id="radsm6" src="images/dentist.jpg" width="400" alt="Popravka">
            </div>

            <div id="zubid" class="levo clear">
                <h2 class="n1">Nase usluge</h2>
                <h3 id="zubi">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, error. Corporis quo reiciendis
                    deserunt quaerat quia placeat nam, a ut? Lorem ipsum dolor sit amet consectetur adipisicing. Lorem
                    ipsum, dolor sit amet consectetur adipisicing.
                </h3>
                <ul class="zubi jedan">
                    <li id="u11"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Popravka</li>
                    <li id="u12"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Vadjenje</li>
                    <li id="u13"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Proteze</li>
                </ul>
                <ul class="zubi dva">
                    <li id="u21"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Svasta</li>
                    <li id="u22"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Sve</li>
                    <li id="u23"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Vadjenje</li>
                </ul>
                <ul class="zubi tri">
                    <li id="u31"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Popravka</li>
                    <li id="u32"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Vadjenje</li>
                    <li id="u33"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Vadjenje</li>
                </ul>
            </div>
            <img src="images/pregled.png" alt="pregled" width="400" class="desno" id="zubis">

            <div class="clear"></div>
            <div id="doktor" class="clear">
                <img class="levo" id="doktors" src="images/zubarka.png" width="230" alt="Zubar">
                <h2 id="dnm" class="n1">Lorem, ipsum dolor</h2>
                <h3 id="zubar1" class="desno">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa maxime
                    eligendi quidem quisquam
                    molestias aspernatur recusandae minus alias laudantium necessitatibus, veritatis esse optio fuga
                    sunt aut aliquid iste nihil natus numquam neque suscipit voluptatum perspiciatis explicabo. Officiis
                    quas a voluptatem, ad ea autem, sapiente architecto, expedita doloribus ab porro eius! Lorem ipsum.</h3>
                    <img id="doktorsm" src="images/zubarka.png" width="230" alt="Zubar">
            </div>
        </div>
        <?php include("fo.php") ?>
    </div>


</body>

</html>
<script>
    var sirina;
    var active = document.getElementById("pocetna").parentElement;
    active.classList.add("active");

    var wrapper = document.getElementById("wrapper");
    $(document).ready(function() {
		
        var respmenu 		= $('#respmenu');
        var	menu 			= $('#navul');
    
        $(respmenu).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        
        $(window).resize(function(){
            sirina = $(window).width();
            if(sirina > 768 && menu.is(':hidden')) {
                menu.removeAttr('style');
                
            }	
        });
        
    });
       
</script>