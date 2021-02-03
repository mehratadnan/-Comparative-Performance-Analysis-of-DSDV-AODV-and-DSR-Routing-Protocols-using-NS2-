<?php
    $method=$_GET['method'];
    $file_s=$_GET['file_s'];
    $dataRatio = array();
    $dataDelay = array();
    $dataEnergy = array();
    $dataThrough = array();
    $method = strtolower($method);
    $method = $method .'_'.$file_s;
    $myfile = fopen($method, "r") or die("Unable to open file!");
    $line = fgets($myfile) ;
    while(!feof($myfile) && $line != null) {
        $sdata = explode(",",$line);
     
        $dataRatio1 = explode(" ",$sdata[0]);  
        $dataDelay1 = explode(" ",$sdata[1]);  
        $dataEnergy1 = explode(" ",$sdata[2]);  
        $dataThrough1 = explode(" ",$sdata[3]); 

        array_push($dataRatio, $dataRatio1[1]);
        array_push($dataDelay, $dataDelay1[1]);
        array_push($dataEnergy, $dataEnergy1[1]);
        array_push($dataThrough, $dataThrough1[1]);
        $line = fgets($myfile) ;
    }
        $myObj = new \stdClass();
        $myObj->ratio = $dataRatio;
        $myObj->delay = $dataDelay;
        $myObj->energy = $dataEnergy;
        $myObj->through = $dataThrough;
        $myJSON = json_encode($myObj);
        echo $myJSON;
?>

