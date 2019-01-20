<?php

namespace EuclideanDistance;

class Worker {
    public static function calculateDistanceInMiles($x1, $y1, $x2, $y2) {
        $theta = $y1 - $y2;
        $dist = sin(deg2rad($x1)) * sin(deg2rad($x2)) +  cos(deg2rad($x1)) * cos(deg2rad($x2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        return $miles;
    }
}
