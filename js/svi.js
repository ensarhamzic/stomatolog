var imena = [];
var prezimena = [];
var telefoni = [];
var emails = [];
var meseci = [];
var dani = [];
var vremena = [];
var ids = [];
var i;
var odgovor;
var objekat;
var ukupno;
var brojZakazanih;
var number;
var ajax;
window.onload = function(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            odgovor = xhr.responseText;
            objekat = JSON.parse(odgovor);
            
            ukupno = objekat.length;
            brojZakazanih = ukupno / 8;
            
            }

            for(i=0;i<ukupno;i+=8){
                imena.push(objekat[i]);
            };

            for(i=1;i<ukupno;i+=8){
                prezimena.push(objekat[i]);
            };

            for(i=2;i<ukupno;i+=8){
                telefoni.push(objekat[i]);
            };

            for(i=3;i<ukupno;i+=8){
                emails.push(objekat[i]);
            };

            for(i=4;i<ukupno;i+=8){
                meseci.push(objekat[i]);
            };

            for(i=5;i<ukupno;i+=8){
                dani.push(objekat[i]);
            };

            for(i=6;i<ukupno;i+=8){
                vremena.push(objekat[i]);
            };

            for(i=7;i<ukupno;i+=8){
                ids.push(objekat[i]);
            };







            tabela = document.getElementById("tabela");
            

                
                
            for(i=0;i<brojZakazanih;i++){

                
                if(meseci[i] == 1){
                    mesec = "Januar";
                }
                else if(meseci[i]== 2){       
                    mesec = "Februar";
                }
                    else if(meseci[i]== 3){
                    mesec = "Mart";
                }
                    else if(meseci[i]==4 ){
                    mesec = "April";
                }
                    else if(meseci[i]==5 ){
                    mesec = "Maj";
                } 
                    else if(meseci[i]==6 ){
                    mesec = "Jun";
                } 
                    else if(meseci[i]==7 ){
                    mesec = "Jul";
                }
                    else if(meseci[i]== 8){
                    mesec = "Avgust";
                } 
                    else if(meseci[i]== 9){
                    mesec = "Septembar";
                }

                    else if(meseci[i]== 10){
                    mesec = "Oktobar";
                }

                    else if(meseci[i]== 11){
                    mesec = "Novembar";
                }

                    else if(meseci[i]== 12){
                    mesec = "Decembar";
                }
                

                tr = document.createElement("tr");
                tr.id = "tr"+i;
                tabela.appendChild(tr);




                td = document.createElement("td");
                td.innerHTML = imena[i];
                tr.appendChild(td);


                
                
                td = document.createElement("td");
                td.innerHTML = prezimena[i];
                
                tr.appendChild(td);

                
                
                td = document.createElement("td");
                td.innerHTML = telefoni[i];
                
                tr.appendChild(td);

                
                
                td = document.createElement("td");
                td.innerHTML = emails[i];
                
                tr.appendChild(td);

                
                
                

                
                
                td = document.createElement("td");
                td.innerHTML = dani[i]+".";
                
                tr.appendChild(td);

                
                td = document.createElement("td");
                td.innerHTML = mesec;
                
                tr.appendChild(td);


                td = document.createElement("td");
                td.innerHTML = vremena[i]+".00";
                tr.appendChild(td);


                td = document.createElement("td");
                td.innerHTML = "<i class='far fa-times-circle fa-2x'></i>";
                td.addEventListener('click', otkazivanje(i));
                tr.appendChild(td);

                td = document.createElement("td");
                td.innerHTML = ids[i];
                td.id = "id"+i;
                td.style.display = "none";
                tr.appendChild(td);
            }
            
        

        }
    xhr.open("get", "sviajax.php", true);
    xhr.send(null);









    
}
var obrisi;
var tabela;
var noviZ;
var id;
var otkaz;
var oid;

var otkazivanje = function(broj) {
    return function otkazi(br) {
    id = "id"+broj;
    otkaz = document.getElementById(id).innerHTML;
    
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            oid = "tr"+broj;
                obrisi = document.getElementById(oid);
                tabela.removeChild(obrisi);
            }
            
        }
    xhr.open("get", "odluka.php?otkaz=1&id="+otkaz, true);
    xhr.send(null);
    }

    }



