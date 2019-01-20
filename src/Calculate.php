<?php

require_once '../vendor/autoload.php';

use EuclideanDistance\Worker;
//use League\Csv\Reader;

//$stream = fopen('../storage/in.csv', 'r');
// $input->setHeaderOffset(0);

// $headers = $input->getHeader();
// $coordiantes = $input->getRecords();

// echo '<pre>' . print_r($headers, 1) . '</pre>';
// echo '<pre>' . print_r($coordiantes, 1) . '</pre>';

//$input = Reader::createFromStream($stream);
//$input->setDelimiter('')

// Reading From File.
$worker = new Worker();

$inputCoordiantes = fopen('../storage/in.txt', 'r');
$outputCoordinates = [];

/**
 * @TODO: Validation, Handle Exception.
 */
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

fclose($inputCoordinate);

if (empty($outputCoordinates)) {
    throw new Exception('No Output coordiantes');
}

//Writing to a file.
$outputFile = fopen('../storage/out.txt', 'w');

foreach($outputCoordinates as $outputCoordinate) {
    fputcsv($outputFile, explode(',', $outputCoordinate));
}

fclose($outputFile);
