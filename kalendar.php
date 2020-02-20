<?php
$godina = date("Y") + 1 - 1;
        $mesec = date("m") + 1 - 1;
        $dan = date("d") + 1 - 1;
        $dun = date("l");
        switch($mesec){
            case 1;
            case 3;
            case 5;
            case 7;
            case 8;
            case 10;
            case 12;
                $brojDana = 31;
                break;
            case 4;
            case 6;
            case 9;
            case 11;
                $brojDana = 30;
                break;
            default:
                if($godina == 2020 || $godina == 2024 || $godina == 2028 || $godina == 2032){
                    $brojDana = 29;
                }
                else {
                    $brojDana = 28;
                }
        }
        switch($dun){
            case "Monday":
                $bdun = 1;
            break;
            case "Tuesday":
                $bdun = 2;
            break;
            case "Wednesday":
                $bdun = 3;
            break;
            case "Thursday":
                $bdun = 4;
            break;
            case "Friday":
                $bdun = 5;
            break;
            case "Saturday":
                $bdun = 6;
            break;
            case "Sunday":
                $bdun = 7;
            break;
        }





        $godina1 = date("Y") + 1 - 1;
        $mesec1 = date("m") + 1;
        $dan1 = date("d") + 1 - 1;
        $dun1 = date("l");
        switch($mesec1){
            case 1;
            case 3;
            case 5;
            case 7;
            case 8;
            case 10;
            case 12;
                $brojDana1 = 31;
                break;
            case 4;
            case 6;
            case 9;
            case 11;
                $brojDana1 = 30;
                break;
            default:
                if($godina1 == 2020 || $godina1 == 2024 || $godina1 == 2028 || $godina1 == 2032){
                    $brojDana1 = 29;
                }
                else {
                    $brojDana1 = 28;
                }
        }
        switch($dun1){
            case "Monday":
                $bdun1 = 1;
            break;
            case "Tuesday":
                $bdun1 = 2;
            break;
            case "Wednesday":
                $bdun1 = 3;
            break;
            case "Thursday":
                $bdun1 = 4;
            break;
            case "Friday":
                $bdun1 = 5;
            break;
            case "Saturday":
                $bdun1 = 6;
            break;
            case "Sunday":
                $bdun1 = 7;
            break;
        }

















        switch($mesec){
            case 1:
                $mjesec = "Januar";
            break;
            case 2:
                $mjesec = "Februar";
            break;
            case 3:
                $mjesec = "Mart";
            break;
            case 4:
                $mjesec = "April";
            break;
            case 5:
                $mjesec = "Maj";
            break;
            case 6:
                $mjesec = "Jun";
            break;
            case 7:
                $mjesec = "Jul";
            break;
            case 8:
                $mjesec = "Avgust";
            break;
            case 9:
                $mjesec = "Septembar";
            break;
            case 10:
                $mjesec = "Oktobar";
            break;
            case 11:
                $mjesec = "Novembar";
            break;
            case 12:
                $mjesec = "Decembar";
            break;
        }

        switch($bdun){
            case 1:
                if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
                break;
            case 2:
                if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
            break;

            case 3:
                if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
            break;

            case 4:
                if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
            break;

            case 5:
                if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
            break;

            case 6:
                if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
            break;

            case 7:
                if($dan == 7 || $dan == 14 || $dan == 21 || $dan == 28){
                    $prviDan = 1;
                    if($brojDana == 28){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 4;
                    }
                }
                else if($dan == 6 || $dan == 13 || $dan == 20 || $dan == 27){
                    $prviDan = 2;
                    if($brojDana == 28){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 5;
                    }
                }
                else if($dan == 5 || $dan == 12 || $dan == 19 || $dan == 26){
                    $prviDan = 3;
                    if($brojDana == 28){
                        $brojDana2 = 3;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 6;
                    }
                }
                else if($dan == 4 || $dan == 11 || $dan == 18 || $dan == 25){
                    $prviDan = 4;
                    if($brojDana == 28){
                        $brojDana2 = 4;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 7;
                    }
                }
                else if($dan == 3 || $dan == 10 || $dan == 17 || $dan == 24 || $dan == 31){
                    $prviDan = 5;
                    if($brojDana == 28){
                        $brojDana2 = 5;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 1;
                    }
                }
                else if($dan == 2 || $dan == 9 || $dan == 16 || $dan == 23 || $dan == 30){
                    $prviDan = 6;
                    if($brojDana == 28){
                        $brojDana2 = 6;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 2;
                    }
                }
                else if($dan == 1 || $dan == 8 || $dan == 15 || $dan == 22 || $dan == 29){
                    $prviDan = 7;
                    if($brojDana == 28){
                        $brojDana2 = 7;
                    }
    
                    else if($brojDana == 29){
                        $brojDana2 = 1;
                    }
    
                    else if($brojDana == 30){
                        $brojDana2 = 2;
                    }
    
                    else if($brojDana == 31){
                        $brojDana2 = 3;
                    }
                }
            break;

        }


        switch($prviDan){
            case 1:
                $sn = [6,7,13,14,20,21,27,28];
            break;
            case 2:
                $sn = [5,6,12,13,19,20,26,27];
            break;
            case 3:
                $sn = [4,5,11,12,18,19,25,26];
            break;

            case 4:
                $sn = [3,4,10,11,17,18,24,25,31];
            break;

            case 5:
                $sn = [2,3,9,10,16,17,23,24,30,31];
            break;

            case 6:
                $sn = [1,2,8,9,15,16,22,23,29,30];
            break;

            case 7:
                $sn = [1,7,8,14,15,21,22,28,29];
            break;
        }

        switch($brojDana2){
            case 1:
                $sn1 = [6,7,13,14,20,21,27,28];
            break;
            case 2:
                $sn1 = [5,6,12,13,19,20,26,27];
            break;
            case 3:
                $sn1 = [4,5,11,12,18,19,25,26];
            break;

            case 4:
                $sn1 = [3,4,10,11,17,18,24,25,31];
            break;

            case 5:
                $sn1 = [2,3,9,10,16,17,23,24,30];
            break;

            case 6:
                $sn1 = [1,2,8,9,15,16,22,23,29];
            break;

            case 7:
                $sn1 = [1,7,8,14,15,21,22,28,29];
            break;
        }
        
        
        ?>