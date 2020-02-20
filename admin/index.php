<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dentist</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
<div id="nav">
            <a href="index.php">
                <div class="left">
                    <img src="../images/logo.png" alt="Logo" width="40" id="logo">
                    <img src="../images/whitetext.png" alt="Text" width="90" id="text1">
                </div>
            </a>

            <div class="right ulk">
                <ul id="pacijentiNav">
                    <li><a id="dodajP" href="dodaj.php">
                            <h4>Dodaj pacijenta</h4>
                        </a></li>
                    <li><a id="sviZ" href="svi.php">
                            <h4>Potvrdjeni zakazani</h4>
                        </a></li>
                    <li class="active"><a id="pocetna" href="index.php">
                            <h4 id="noviZ">Novi zakazani</h4>
                        </a></li>
                </ul>
            </div>
        </div>

        <div id="main">
        <table id="tabela">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Dan</th>
                <th>Mesec</th>
                <th>Vreme</th>
                <th>Da</th>
                <th>Ne</th>
                <th style="display: none;">ID</th>
            </tr>
        </table>
        </div>

</body>
</html>
<script src="../js/admin.js"></script>



