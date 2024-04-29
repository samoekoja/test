<?php
$jsonData = file_get_contents(__DIR__."/pie.json");

// Decode JSON data to PHP array
$newArray = json_decode($jsonData, true);

$arrayLength = count($newArray['Pie']);

//status key 3=done 2=progress 1=pending

$done = $progress = $pending = 0;

for ($i = 0; $i < $arrayLength ; $i++) { 
    $status = $newArray['Pie'][$i]['Status'];
    //add each based on status
    if ($status == 3) {
        $done += 1;
    }elseif($status == 2){
        $progress += 1;
    }else{
        $pending += 1;
    }
}

//calculate portion of circle

$degree = 360 / $arrayLength;
$doneDegree = 0;
$donedeg = $doneDegree. "deg";
$progressDegree = $degree * $done;
$prog = $progressDegree. "deg";
$pendingDegree = $progressDegree + ($degree * $progress);
$pend = $pendingDegree."deg";
//render html code

//Completion Rates

$doneArray = $progArray = $pendArray = [];

for ($i = 0; $i < $arrayLength ; $i++) { 
    $status = $newArray['Pie'][$i]['Status'];
    $standard = $newArray['Pie'][$i]['Standard'];
    //add each based on status
    if ($status == 3) {
        array_push($doneArray, $standard);
    }elseif($status == 2){
        array_push($progArray, $standard);
    }else{
        array_push($pendArray, $standard);
    }
}


?>