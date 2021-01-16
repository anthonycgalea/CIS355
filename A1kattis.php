<?php
/* this file:   A1kattis.php
 * input file:  input.in
 * output file: output.out
 * author:      Anthony Galea
 * kattis problem: https://open.kattis.com/problems/imagedecoding
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
    $pictures = array(); //create array for pictures
    $firstTime = true; //for spacing line
    while(true) {
        fscanf($fp1, '%d', $lines); //read file
        if ($lines == 0) { //0 signifies EOF
            break;
        }
        if (!$firstTime) { //don't put a spacing line first time through
            array_push($pictures,"");
        }
        $data = array(); //create another array
        for ($i = 0; $i < $lines; $i++) { //for the amount of lines specified
            fscanf($fp1, "%[^\n]", $currLine); //read lines
            array_push($data,explode(' ', $currLine)); //split data by spaces
        }
        $error = false; //for error in image decoding later
        $maxsum = -1; //checking maximum sum
        for ($i = 0; $i < sizeof($data); $i++) {
            $key = '#';
            $altKey = '.';
            $str = "";
            if ($data[$i][0] == '.') { //alternate keys
                $key = '.';
                $altKey = '#';
            }
            $sum = 0;
            for ($j = 0; $j < sizeof($data[$i]) - 1; $j++) {
                $sum += (int)$data[$i][$j+1];
                if ($j % 2 == 0) {
                    $currKey = $key;
                } else {
                    $currKey = $altKey;
                }
                for ($k = 0; $k < $data[$i][$j+1]; $k++) {
                    $str.=$currKey;
                }
            }
            if (!($maxsum == -1)) { //check for error
                if (!($maxsum == $sum)) {
                    $error = true;
                }
            }
            else {
                $maxsum = $sum;
            }
            array_push($pictures, $str);
        }
        if($error) {
            array_push($pictures, "Error decoding image"); //for checking errors
        }
        if ($firstTime) {
            $firstTime = false;
        }
    }
    for ($i = 0; $i<sizeof($pictures); $i++) { //print pictures
        $result=$pictures[$i]."\n";
        fprintf($fp2, "%s", $result);
    }
	echo "done.";
}
else { //see above for comments
    $pictures = array();
    $firstTime = true;
    while(true) {
        fscanf(STDIN, '%d', $lines);
        if ($lines == 0) {
            break;
        }
        if (!$firstTime) {
            array_push($pictures,"");
        }
        $data = array();
        for ($i = 0; $i < $lines; $i++) {
            fscanf(STDIN, "%[^\n]", $currLine);
            array_push($data,explode(' ', $currLine));
        }
        $error = false;
        $maxsum = -1;
        for ($i = 0; $i < sizeof($data); $i++) {
            $key = '#';
            $altKey = '.';
            $str = "";
            if ($data[$i][0] == '.') {
                $key = '.';
                $altKey = '#';
            }
            $sum = 0;
            for ($j = 0; $j < sizeof($data[$i]) - 1; $j++) {
                $sum += (int)$data[$i][$j+1];
                if ($j % 2 == 0) {
                    $currKey = $key;
                } else {
                    $currKey = $altKey;
                }
                for ($k = 0; $k < $data[$i][$j+1]; $k++) {
                    $str.=$currKey;
                }
            }
            if (!($maxsum == -1)) {
                if (!($maxsum == $sum)) {
                    $error = true;
                }
            }
            else {
                $maxsum = $sum;
            }
            array_push($pictures, $str);
        }
        if($error) {
            array_push($pictures, "Error decoding image");
        }
        if ($firstTime) {
            $firstTime = false;
        }
    }
    for ($i = 0; $i<sizeof($pictures); $i++) {
        $result=$pictures[$i]."\n";
        fprintf(STDOUT, "%s", $result);
    }
}