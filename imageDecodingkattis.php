<?php
/* this file:   A1kattis.php
 * input file:  input.in
 * output file: output.out
 * author:      Anthony Galea
 */

$test = true;
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
    $pictures = array();
    $result = "";
    $firstTime = true;
    while(true) {
        fscanf($fp1, '$s', $lines);
        if ($lines == 0) {
            break;
        }
        if (!$firstTime) {
            array_push($pictures,"");
        }
        $data = array();
        for ($i = 0; $i < $lines; $i++) {
            fscanf($fp1, '%s', $currLine);
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
                $sum += $data[$i][$j+1];
                if ($j%2 == 0) {
                    $currKey = $key;
                } else {
                    $currKey = $altKey;
                }
                for ($k = 0; $k < $data[$i][$j+1]; $k++) {
                    $str+=$currKey;
                }
            }
            if (!$maxsum == -1) {
                if (!$maxsum == $sum) {
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
        $result+=$pictures[$i] + "\n";
    }
    fprintf($fp2, "%0.0f\n", $result);
	echo "done.";
}
else {
	// Solution from: 
	// https://open.kattis.com/contests/cw28iv/help/php
    while (fscanf(STDIN, '%d%d', $number1, $number2) === 2) {
        $res = abs($number1 - $number2);
        fprintf(STDOUT, "%d\n", $res);
    }
}