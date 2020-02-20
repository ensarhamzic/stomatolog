<?php
            $godina = date("Y") + 1 - 1;
            $mesec = date("m") + 1;
            $dan = date("d") + 1 - 1;
            $dun = date("l");
            if($mesec == 13){
                $mesec = 1;
                $godina += 1; 
            }
$podaci = [$godina, $mesec, $dan, $dun];


    header("content-type: application/json");
	echo json_encode($podaci);