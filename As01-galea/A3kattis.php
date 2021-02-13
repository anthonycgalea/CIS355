<?php
/* this file:   A3kattis.php
 * input file:  input.in
 * output file: output.out
 * author:      Anthony Galea
 * kattis link: https://open.kattis.com/problems/pathtracing
 *
 */

$test = false;
if($test) {
	$infile = "input.in";
    if (!($fp1 = fopen($infile, 'r'))) {
	    echo "error: input file";
        return;
    }
	$outfile = "output.out";
    if (!($fp2 = fopen($outfile, 'w'))) {
	    echo "error: output file";
        return;
    } 
    //variable declarations
    $myinput = array();
    $output = array();
    $s = "";
    $currX = 0;
    $currY = 0;
    $movesX = array();
    $movesY = array();
    array_push($movesX, 0);
    array_push($movesY, 0);
    $maximumX = 0;
    $maximumY = 0;
    $minimumX = 0;
    $minimumY = 0;
    $x = 0;
    while(!fscanf($fp1, "%[^\n]", $line)==0) {
        $val = true;
        $x++;
        $line = trim($line);
        if ($line == "left") {
            $currX -=1;
            if ($currX < $minimumX) {
                $minimumX = $currX;
            }
        }
        elseif($line == "right") {
            $currX +=1;
            if ($currX > $maximumX) {
                $maximumX = $currX;
            }
        }
        elseif($line == "up") {
            $currY -= 1;
            if ($minimumY > $currY) {
                $minimumY = $currY;
            }
        }
        elseif($line == "down") {
            $currY += 1;
            if ($maximumY < $currY) {
                $maximumY = $currY;
            }
        }
        else {
            $val = false;
        }
        if ($val) {
            array_push($movesX, $currX);
            array_push($movesY, $currY);
        }
        
    }
    $xSpan = $maximumX - $minimumX + 1;
    $ySpan = $maximumY - $minimumY + 1;
    for ($i = 0; $i < sizeof($movesX); $i++) {
        $movesX[$i] = $movesX[$i] - $minimumX;
    }
    for ($i = 0; $i < sizeof($movesY); $i++) {
        $movesY[$i] = $movesY[$i] - $minimumY;
    }
    $myMaze = array();
    for ($i = 0; $i < $ySpan; $i++) {
        $array = array();
        for ($j = 0; $j < $xSpan; $j++) {
            array_push($array, " ");
        }
        array_push($myMaze, $array);
    }
    for ($i = 0; $i < $xSpan + 2; $i++) { //create border
        $s.='#';
    }
    fprintf($fp2, "%s\n", $s);
    for ($i = 0; $i < sizeof($movesX); $i++) {
        $myMaze[$movesY[$i]][$movesX[$i]] = '*'; //mark spots in array
    }

    $myMaze[$movesY[0]][$movesX[0]] = "S"; //set start
    $myMaze[$movesY[sizeof($movesY) - 1]][$movesX[sizeof($movesX) - 1]] = "E"; //set end
    for ($i = 0; $i < sizeof($myMaze); $i++) {
        $s2 = "#";
        for ($j = 0; $j < sizeof($myMaze[$i]); $j++) {
            $s2 .= $myMaze[$i][$j];
        }
        $s2 .="#";
        fprintf($fp2, "%s\n", $s2);
    }
    fprintf($fp2, "%s\n", $s);
	echo "done.";
}
else {
     //variable declarations
    $myinput = array();
    $output = array();
    $s = "";
    $currX = 0;
    $currY = 0;
    $movesX = array();
    $movesY = array();
    array_push($movesX, 0);
    array_push($movesY, 0);
    $maximumX = 0;
    $maximumY = 0;
    $minimumX = 0;
    $minimumY = 0;
    $x = 0;
    while(!fscanf(STDIN, "%[^\n]", $line)==0) {
        $val = true;
        $x++;
        $line = trim($line);
        if ($line == "left") {
            $currX -=1;
            if ($currX < $minimumX) {
                $minimumX = $currX;
            }
        }
        elseif($line == "right") {
            $currX +=1;
            if ($currX > $maximumX) {
                $maximumX = $currX;
            }
        }
        elseif($line == "up") {
            $currY -= 1;
            if ($minimumY > $currY) {
                $minimumY = $currY;
            }
        }
        elseif($line == "down") {
            $currY += 1;
            if ($maximumY < $currY) {
                $maximumY = $currY;
            }
        }
        else {
            $val = false;
        }
        if ($val) {
            array_push($movesX, $currX);
            array_push($movesY, $currY);
        }
        
    }
    $xSpan = $maximumX - $minimumX + 1;
    $ySpan = $maximumY - $minimumY + 1;
    for ($i = 0; $i < sizeof($movesX); $i++) {
        $movesX[$i] = $movesX[$i] - $minimumX;
    }
    for ($i = 0; $i < sizeof($movesY); $i++) {
        $movesY[$i] = $movesY[$i] - $minimumY;
    }
    $myMaze = array();
    for ($i = 0; $i < $ySpan; $i++) {
        $array = array();
        for ($j = 0; $j < $xSpan; $j++) {
            array_push($array, " ");
        }
        array_push($myMaze, $array);
    }
    for ($i = 0; $i < $xSpan + 2; $i++) { //create border
        $s.='#';
    }
    fprintf(STDOUT, "%s\n", $s);
    for ($i = 0; $i < sizeof($movesX); $i++) {
        $myMaze[$movesY[$i]][$movesX[$i]] = '*'; //mark spots in array
    }

    $myMaze[$movesY[0]][$movesX[0]] = "S"; //set start
    $myMaze[$movesY[sizeof($movesY) - 1]][$movesX[sizeof($movesX) - 1]] = "E"; //set end
    for ($i = 0; $i < sizeof($myMaze); $i++) {
        $s2 = "#";
        for ($j = 0; $j < sizeof($myMaze[$i]); $j++) {
            $s2 .= $myMaze[$i][$j];
        }
        $s2 .="#";
        fprintf(STDOUT, "%s\n", $s2);
    }
    fprintf(STDOUT, "%s\n", $s);
}