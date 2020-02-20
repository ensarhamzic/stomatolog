var odabraniMesec = 0;
var odabraniDan = 0;
var odabranoVreme = 0;


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



var sviDani = document.getElementById("sviDani");
var sviDani2 = document.getElementById("sviDani2");
sviDani2.classList.add("hidden");
var objekat = 0;
var mesec = 0;
var godina = 0;
var i = 0;
var tacka = 0;
var h3 = 0;
var kalendar = 0;
var nodes = 0;
var mesecb = 0;
var prosli = 0;

var active = document.getElementById("oz").parentElement;
active.classList.add("active");
var datum = new Date();
var dan1 = datum.getDate();
var dan = "d" + dan1;
var border = document.getElementById(dan);
border.style.cssText = "background: #107F93; border: 3px solid #107F93; color:white;";
$(border).hover(
    function () {
        $(border).css("border", "3px solid black");
    },
    function () {
        $(border).css("border", "3px solid #107F93");
    }
);


for (i = 1; i < dan1; i++) {
    dan = "d" + i;
    prosli = document.getElementById(dan);
    prosli.style.cssText = "border: 3px solid red;";
}

function noviMesec() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var odgovor = xhr.responseText;
            objekat = JSON.parse(odgovor);
            mesecb = objekat[1];
            mesec = objekat[1];
            godina = objekat[0];
            var mjesec = document.getElementById("mjesec");
            switch (mesec) {
                case 1:
                    mesec = "Januar";
                    break;
                case 2:
                    mesec = "Februar";
                    break;
                case 3:
                    mesec = "Mart";
                    break;
                case 4:
                    mesec = "April";
                    break;
                case 5:
                    mesec = "Maj";
                    break;
                case 6:
                    mesec = "Jun";
                    break;
                case 7:
                    mesec = "Jul";
                    break;
                case 8:
                    mesec = "Avgust";
                    break;
                case 9:
                    mesec = "Septembar";
                    break;
                case 10:
                    mesec = "Oktobar";
                    break;
                case 11:
                    mesec = "Novembar";
                    break;
                case 12:
                    mesec = "Decembar";
                    break;
            }
            mjesec.innerHTML = "<i onclick='povratak()' class='fas fa-arrow-circle-left levaS'></i>" + mesec + ", " + godina + ".";

            sviDani.classList.add("hidden");
            sviDani2.classList.remove("hidden");
        }
    }
    xhr.open("get", "ajax.php", true);
    xhr.send(null);
}

function povratak() {
    sviDani2.classList.add("hidden");
    sviDani.classList.remove("hidden");
    mesecb -= 1;
    var mjesec = document.getElementById("mjesec");
    switch (mesecb) {
        case 1:
            mesec = "Januar";
            break;
        case 2:
            mesec = "Februar";
            break;
        case 3:
            mesec = "Mart";
            break;
        case 4:
            mesec = "April";
            break;
        case 5:
            mesec = "Maj";
            break;
        case 6:
            mesec = "Jun";
            break;
        case 7:
            mesec = "Jul";
            break;
        case 8:
            mesec = "Avgust";
            break;
        case 9:
            mesec = "Septembar";
            break;
        case 10:
            mesec = "Oktobar";
            break;
        case 11:
            mesec = "Novembar";
            break;
        case 12:
            mesec = "Decembar";
            break;
    }
    mjesec.innerHTML = mesec + ", " + godina + "." + "<i style='margin-left:20px;' onclick='noviMesec()' class='fas fa-arrow-circle-right'></i>";
}


var i1 = 0;
var i2 = 0;
var i3 = 0;
var i4 = 0;
var naslov1 = 0;
var naslov2 = 0;
var provera = 0;
var izabran = 0;
var polje = 0;
var polja = 0;

var d = 0;
var dn = 0;
var izborid = 0;
var izboroznake = 0;
var ajax = 0;
var yellow = 0;
var yellow2 = 0;
var red = 0;
var red2 = 0;
var ajaxc = 0;
var vremeclick = 0;
var vremeid = 0;
var year = 0;
var datumm = new Date();
var godinaa = datumm.getYear() + 1900;
var mesecc = datumm.getMonth() + 2;



function izbor(izabraniDan) {
    for (i = 9; i <= 20; i++) {
        vremeid = "v" + i;
        vremeclick = document.getElementById(vremeid);
        vremeclick.onclick = oznaci(vremeid, i);
    }
    vremeclick = 0;
    vremeid = 0;
    for (i = 10; i <= 15; i++) {
        vremeid = "vv" + i;
        vremeclick = document.getElementById(vremeid);
        vremeclick.onclick = oznaci(vremeid, i);
    }
    odabraniMesec = 0;
    odabraniDan = 0;
    odabranoVreme = 0;
    for (i = 9; i <= 20; i++) {
        izborid = "v" + i;
        izboroznake = document.getElementById(izborid).style.background = "white";
        izboroznake = document.getElementById(izborid).style.color = "black";
    }
    izboroznake = 0;
    izborid = 0;
    for (i = 10; i <= 15; i++) {
        izborid = "vv" + i;
        izboroznake = document.getElementById(izborid).style.background = "white";
        izboroznake = document.getElementById(izborid).style.color = "black";
    }

    datumm = new Date();
    godinaa = datumm.getYear() + 1900;
    mesecc = datumm.getMonth() + 2;


    d = new Date();
    dn = d.getMonth();

    dn += 1;
    odabraniDan = izabraniDan;
    odabraniMesec = dn;
    switch (dn) {
        case 1:
            dn = "Januar";
            break;
        case 2:
            dn = "Februar";
            break;
        case 3:
            dn = "Mart";
            break;
        case 4:
            dn = "April";
            break;
        case 5:
            dn = "Maj";
            break;
        case 6:
            dn = "Jun";
            break;
        case 7:
            dn = "Jul";
            break;
        case 8:
            dn = "Avgust";
            break;
        case 9:
            dn = "Septembar";
            break;
        case 10:
            dn = "Oktobar";
            break;
        case 11:
            dn = "Novembar";
            break;
        case 12:
            dn = "Decembar";
            break;
    }
    provera = 0;
    izabran = "d" + izabraniDan;
    polja = document.getElementsByClassName("sivi");
    for (i = 0; i < polja.length; i++) {
        polja[i].style.background = "#bbb";
        polja[i].style.color = "black";
    }
    polje = document.getElementById(izabran);
    polje.style.background = "#107F93";
    polje.style.color = "white";

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var odgovor = xhr.responseText;
            objekat = JSON.parse(odgovor);
            duzina = objekat.length;
            for (i = 0; i < objekat.length; i++) {

                if (izabraniDan == objekat[i]) {
                    provera = 1;
                }
                if (provera == 1) {
                    naslov2 = document.getElementById("naslov2");
                    naslov2.innerHTML = izabraniDan + ". " + dn;
                    i1 = document.getElementById("izborv");
                    i1.classList.remove("hidden");
                    i2 = document.getElementById("izbor");
                    i2.classList.add("hidden");
                    return;
                } else {
                    naslov1 = document.getElementById("naslov1");
                    naslov1.innerHTML = izabraniDan + ". " + dn;
                    i3 = document.getElementById("izborv");
                    i3.classList.add("hidden");
                    i4 = document.getElementById("izbor");
                    i4.classList.remove("hidden");
                }

            }
        }

    }
    xhr.open("get", "ajaxizbor.php", true);
    xhr.send(null);



    ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                response = ajax.responseText;
                object = JSON.parse(response);
                for(i=0;i<object.length;i++){
                    yellow = "v"+object[i];
                    yellow2 = document.getElementById(yellow);
                    yellow2.style.cssText = "background: yellow";
                    yellow2.onclick = function(){
                        return false;
                    }
                }
                for(i=0;i<object.length;i++){
                    yellow = "vv"+object[i];
                    yellow2 = document.getElementById(yellow);
                    yellow2.style.cssText = "background: yellow";
                    yellow2.onclick = function(){
                        return false;
                    }
                }
            }
        }
        ajax.open("get","bojaajax.php?mesec="+odabraniMesec+"&dan="+odabraniDan+"&godina="+godinaa,true);
        ajax.send(null);


        ajaxc = new XMLHttpRequest();
        ajaxc.onreadystatechange = function(){
            if(ajaxc.readyState == 4){
                response = ajaxc.responseText;
                object = JSON.parse(response);
                for(i=0;i<object.length;i++){
                    red = "v"+object[i];
                    red2 = document.getElementById(red);
                    red2.style.cssText = "background: red";
                    red2.onclick = function(){
                        return false;
                    }
                }
                for(i=0;i<object.length;i++){
                    red = "vv"+object[i];
                    red2 = document.getElementById(red);
                    red2.style.cssText = "background: red";
                    red2.onclick = function(){
                        return false;
                    }
                }
            }
        }
        ajaxc.open("get","bojaajaxc.php?mesec="+odabraniMesec+"&dan="+odabraniDan+"&godina="+godinaa,true);
        ajaxc.send(null);
}

function izbor2(izabraniDan) {
    vremeid = 0;
    vremeclick = 0;
    for (i = 9; i <= 20; i++) {
        vremeid = "v" + i;
        vremeclick = document.getElementById(vremeid);
        vremeclick.onclick = oznaci(vremeid, i);
    }
    vremeclick = 0;
    vremeid = 0;
    for (i = 10; i <= 15; i++) {
        vremeid = "vv" + i;
        vremeclick = document.getElementById(vremeid);
        vremeclick.onclick = oznaci(vremeid, i);
    }

    for (i = 9; i <= 20; i++) {
        izborid = "v" + i;
        izboroznake = document.getElementById(izborid).style.background = "white";
        izboroznake = document.getElementById(izborid).style.color = "black";
    }
    izboroznake = 0;
    izborid = 0;
    for (i = 10; i <= 15; i++) {
        izborid = "vv" + i;
        izboroznake = document.getElementById(izborid).style.background = "white";
        izboroznake = document.getElementById(izborid).style.color = "black";
    }
    odabraniMesec = 0;
    odabraniDan = 0;
    odabranoVreme = 0;
    naslov1 = 0;
    naslov2 = 0;
    i1 = 0;
    i2 = 0;
    i3 = 0;
    i4 = 0;
    d = 0;
    dn = 0;
    d = new Date();
    dn = d.getMonth();
    dn += 2;
    if(mesecc == 13){
        godinaa += 1;
    }
    odabraniDan = izabraniDan;
    odabraniMesec = dn;
    switch (dn) {
        case 1:
            dn = "Januar";
            break;
        case 2:
            dn = "Februar";
            break;
        case 3:
            dn = "Mart";
            break;
        case 4:
            dn = "April";
            break;
        case 5:
            dn = "Maj";
            break;
        case 6:
            dn = "Jun";
            break;
        case 7:
            dn = "Jul";
            break;
        case 8:
            dn = "Avgust";
            break;
        case 9:
            dn = "Septembar";
            break;
        case 10:
            dn = "Oktobar";
            break;
        case 11:
            dn = "Novembar";
            break;
        case 12:
            dn = "Decembar";
            break;
    }
    provera = 0;
    izabran = "m" + izabraniDan;
    polja = document.getElementsByClassName("sivi");
    for (i = 0; i < polja.length; i++) {
        polja[i].style.background = "#bbb";
        polja[i].style.color = "black";
    }
    polje = document.getElementById(izabran);
    polje.style.background = "#107F93";
    polje.style.color = "white";


    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var odgovor = xhr.responseText;
            objekat = JSON.parse(odgovor);
            duzina = objekat.length;
            for (i = 0; i < objekat.length; i++) {
                if (izabraniDan == objekat[i]) {
                    provera = 1;
                }
                if (provera == 1) {
                    naslov2 = document.getElementById("naslov2");
                    naslov2.innerHTML = izabraniDan + ". " + dn;
                    i1 = document.getElementById("izborv");
                    i1.classList.remove("hidden");
                    i2 = document.getElementById("izbor");
                    i2.classList.add("hidden");
                    return;
                } else {
                    naslov1 = document.getElementById("naslov1");
                    naslov1.innerHTML = izabraniDan + ". " + dn;
                    i3 = document.getElementById("izborv");
                    i3.classList.add("hidden");
                    i4 = document.getElementById("izbor");
                    i4.classList.remove("hidden");
                }
            }
        }

    }
    xhr.open("get", "ajaxizbor2.php", true);
    xhr.send(null);




    ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            response = ajax.responseText;
            object = JSON.parse(response);
            for(i=0;i<object.length;i++){
                yellow = "v"+object[i];
                yellow2 = document.getElementById(yellow);
                yellow2.style.cssText = "background: yellow";
                yellow2.onclick = function(){
                    return false;
                }
            }
            for(i=0;i<object.length;i++){
                yellow = "vv"+object[i];
                yellow2 = document.getElementById(yellow);
                yellow2.style.cssText = "background: yellow";
                yellow2.onclick = function(){
                    return false;
                }
            }
        }
    }
    ajax.open("get","bojaajax.php?mesec="+odabraniMesec+"&dan="+odabraniDan+"&godina="+godinaa,true);
    console.log(godinaa);
    ajax.send(null);

    ajaxc = new XMLHttpRequest();
        ajaxc.onreadystatechange = function(){
            if(ajaxc.readyState == 4){
                response = ajaxc.responseText;
                object = JSON.parse(response);
                for(i=0;i<object.length;i++){
                    red = "v"+object[i];
                    red2 = document.getElementById(red);
                    red2.style.cssText = "background: red";
                    red2.onclick = function(){
                        return false;
                    }
                }
                for(i=0;i<object.length;i++){
                    red = "vv"+object[i];
                    red2 = document.getElementById(red);
                    red2.style.cssText = "background: red";
                    red2.onclick = function(){
                        return false;
                    }
                }
            }
        }
        ajaxc.open("get","bojaajaxc.php?mesec="+odabraniMesec+"&dan="+odabraniDan+"&godina="+godinaa,true);
        ajaxc.send(null);
}
var auto = 0;
var autod = 0;
auto = new Date();
autod = auto.getDate();
window.onload = izbor(autod);



var oznaka = 0;
var oznacen = 0;

var response = 0;
var object = 0;
function oznaci(id, vreme) {
    return function () {
        for (i = 9; i <= 20; i++) {
            vremeid = "v" + i;
            vremeclick = document.getElementById(vremeid).style.background = "white";
            vremeclick = document.getElementById(vremeid).style.color = "black";
        }
        vremeclick = 0;
        vremeid = 0;
        for (i = 10; i <= 15; i++) {
            vremeid = "vv" + i;
            vremeclick = document.getElementById(vremeid).style.background = "white";
            vremeclick = document.getElementById(vremeid).style.color = "black";
        }
        oznaka = document.getElementById(id);
        oznaka.style.background = "#107F93";
        oznaka.style.color = "white";
        oznaka.style.transition = "0.3s";

        odabranoVreme = vreme;

        
        ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                response = ajax.responseText;
                object = JSON.parse(response);
                for(i=0;i<object.length;i++){
                    yellow = "v"+object[i];
                    yellow2 = document.getElementById(yellow);
                    yellow2.style.cssText = "background: yellow";

                }
                for(i=0;i<object.length;i++){
                    yellow = "vv"+object[i];
                    yellow2 = document.getElementById(yellow);
                    yellow2.style.cssText = "background: yellow";
                }
            }
        }
        ajax.open("get","bojaajax.php?mesec="+odabraniMesec+"&dan="+odabraniDan+"&godina="+godinaa,true);
        ajax.send(null);

        ajaxc = new XMLHttpRequest();
        ajaxc.onreadystatechange = function(){
            if(ajaxc.readyState == 4){
                response = ajaxc.responseText;
                object = JSON.parse(response);
                for(i=0;i<object.length;i++){
                    red = "v"+object[i];
                    red2 = document.getElementById(red);
                    red2.style.cssText = "background: red";
                    red2.onclick = function(){
                        return false;
                    }
                }
                for(i=0;i<object.length;i++){
                    red = "vv"+object[i];
                    red2 = document.getElementById(red);
                    red2.style.cssText = "background: red";
                    red2.onclick = function(){
                        return false;
                    }
                }
            }
        }
        ajaxc.open("get","bojaajaxc.php?mesec="+odabraniMesec+"&dan="+odabraniDan+"&godina="+godinaa,true);
        ajaxc.send(null);

    
    }
}

var zakaza = document.getElementById("zakaza");
zakaza.addEventListener("click", slanje);
var ime = 0;
var prezime = 0;
var tel = 0;
var email = 0;
var number = 0;
var greska = 0;

function slanje() {
    number = 0;
    ime = document.getElementById("ime").value;
    prezime = document.getElementById("prezime").value;
    tel = document.getElementById("tel").value;
    email = document.getElementById("email").value;

    if (ime.length == 0) {
        ime = 0;
        number += 1;
    }
    if (prezime.length == 0) {
        prezime = 0;
        number += 1;
    }
    if (tel.length == 0) {
        tel = 0;
        number += 1;
    }
    if (email.length == 0) {
        email = 0;
        number += 1;
    }
    if (odabranoVreme == 0) {
        number += 1;
    }
    if (number == 0) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                greska = document.getElementById("greska");
                greska.innerHTML = "Termin je uspesno zakazan, zubar ce vas pozvati da bi potvrdio Vas termin";
                ime = document.getElementById("ime").value = "";
                prezime = document.getElementById("prezime").value = "";
                tel = document.getElementById("tel").value = "";
                email = document.getElementById("email").value = "";
            }
        }
        xhr.open("get", "terminajax.php?ime=" + ime + "&prezime=" + prezime + "&tel=" + tel + "&email=" + email + "&mesec=" + odabraniMesec + "&dan=" + odabraniDan + "&vreme=" + odabranoVreme+"&godina="+godinaa, true);
        xhr.send(null);
    } else {
        greska = document.getElementById("greska");
        greska.innerHTML = "Prvo izaberite termin i popunite sva polja";
    }

}


	
