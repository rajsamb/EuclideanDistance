<?php
require_once '../vendor/autoload.php';

use EuclideanDistance\Worker;

$worker = new Worker();
$outputCoordinates = [];

// Reading From File.

/**
 * @TODO: Validation, Handle Exception.
 */
if (($inputCoordiantes = fopen('../storage/in.txt', 'r')) !== false) {
    while(!feof($inputCoordiantes)) {
        $inputCoordinate = fgetcsv($inputCoordiantes);

        $calculatedCoordinate = $worker->calculateDistance(
            $inputCoordinate[0],
            $inputCoordinate[1],
            $inputCoordinate[2],
            $inputCoordinate[3]
        );

        array_push($outputCoordinates, $calculatedCoordinate);
    }


    fclose($inputCoordiantes);
}

if (empty($outputCoordinates)) {
    throw new Exception('No Output coordiantes');
}

//Writing to a file.
if (($outputFile = fopen('../storage/out.txt', 'w')) !== false) {
    foreach($outputCoordinates as $outputCoordinate) {
        fputcsv($outputFile, explode(',', $outputCoordinate));
    }

    fclose($outputFile);
}
