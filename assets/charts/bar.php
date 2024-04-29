<?php

$jsonData = file_get_contents(__DIR__."/bar.json");

// Decode JSON data to PHP array
$newArray = json_decode($jsonData, true);

$arrayLength = count($newArray['Bars']);

// Iterate through the array 
for ($i = 0; $i < $arrayLength; $i++) {
    $standard = $newArray['Bars'][$i]['Standard'];
    $gap = $newArray['Bars'][$i]['Gap'];
    $Audit = $newArray['Bars'][$i]['Audit'];
    
    //echo html
     
    echo "<div class='col-md-4'>
            <span class='chart-label'>$standard</span>
        </div>
        <div class='col-md-6'>
            <div class='bar fill-1' style=\"width:$gap.%\">$gap%</div><div class='bar fill-2' style=\"width:$Audit%\">$Audit%</div>
        </div>";
}

?>