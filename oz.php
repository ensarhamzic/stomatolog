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
        <?php include("nav.php");
        require("kalendar.php");
        ?>
        <div id="main" class="main">
            <div id="kalendar">
                <div id="traka">
                    <h2 id="mjesec"><?php echo $mjesec.", ".$godina."."."<i onclick='noviMesec()' class='fas fa-arrow-circle-right'></i>"; ?>
                    </h2>
                    <h3 class="dan">P</h3>
                    <h3 class="dan">U</h3>
                    <h3 class="dan">S</h3>
                    <h3 class="dan">Č</h3>
                    <h3 class="dan">P</h3>
                    <h3 class="dan">S</h3>
                    <h3 class="dan">N</h3>
                </div>
                <div id="sviDani">
            <?php
            for($i = 1; $i<$prviDan; $i++){
                echo "<div class='tacka'><h3 class='sivibroj'>&nbsp;</h3></div>";
            }
            for($i=1;$i<$dan;$i++){
                echo "<div id='d".$i."' class='tacka sivi'><h3 class='sivibroj'>$i</h3></div>";
            }
            for($i;$i<=$brojDana;$i++){
                echo "<div id='d".$i."' onclick='izbor(".$i.")' class='tacka sivi'><h3 class='sivibroj'>$i</h3></div>";
            }

            
            ?>
                </div>
                <div id="sviDani2">
                <?php
            for($i = 1; $i<$brojDana2; $i++){
                echo "<div class='tacka'><h3 class='sivibroj'>&nbsp;</h3></div>";
            }
            for($i=1;$i<=$brojDana1;$i++){
                echo "<div onclick='izbor2(".$i.")' id='m".$i."' class='tacka sivi'><h3 class='sivibroj'>$i</h3></div>";
            }
            ?>
                </div>
            </div>

            <div id="izbor" class="hidden">
                <div id="naslov1d">
                    <h2 id="naslov1"></h2>
                </div>
                <div class="izbord" id="v9">09:00</div>
                <div class="izbord" id="v10">10:00</div>
                <div class="izbord" id="v11">11:00</div>
                <div class="izbord" id="v12">12:00</div>
                <div class="izbord" id="v13">13:00</div>
                <div class="izbord" id="v14">14:00</div>
                <div class="izbord" id="v15">15:00</div>
                <div class="izbord" id="v16">16:00</div>
                <div class="izbord" id="v17">17:00</div>
                <div class="izbord" id="v18">18:00</div>
                <div class="izbord" id="v19">19:00</div>
                <div class="izbord" id="v20">20:00</div>
            </div>

            <div id="izborv" class="hidden">
                <div id="naslov2d">
                    <h2 id="naslov2"></h2>
                </div>
                <div class="izborvd" id="vv10">10:00</div>
                <div class="izborvd" id="vv11">11:00</div>
                <div class="izborvd" id="vv12">12:00</div>
                <div class="izborvd" id="vv13">13:00</div>
                <div class="izborvd" id="vv14">14:00</div>
                <div class="izborvd" id="vv15">15:00</div>
            </div>


<div class="form-style-9">
    <ul>
        <li>
            <input id="ime" type="text" class="field-style field-split align-left" placeholder="Ime" />
            <input id="prezime" type="text" class="field-style field-split align-right" placeholder="Prezime" />

        </li>
        <li>
            <input id="tel" type="text" class="field-style field-split align-left" placeholder="Telefon" />
            <input id="email" type="email" class="field-style field-split align-right" placeholder="Email" />
        </li>
        <li>
            <input id="zakaza" type="button" value="Zakazi termin" />
        </li>
        <li>
            <h3 id="greska">

            </h3>
        </li>
    </ul>
        </div>
</div>
<div class="clear"></div>
<div class="clear footer" id="footer">
    <h3>Copyright &copy; Ordinacija Hamzic | 2020.</h3>
</div>
</div>
</body>

</html>
<script src="js/script.js"></script>