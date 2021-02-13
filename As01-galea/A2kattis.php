<?php
/* this file:   A2kattis.php
 * input file:  input.in
 * output file: output.out
 * author:      Anthony Galea
 * kattis link: https://open.kattis.com/problems/musicalchairs
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
    $professorIndex = array();
    fscanf($fp1, "%[^\n]", $amount); //read line 1 for number of professors
    fscanf($fp1, "%[^\n]", $line2); //read line 2
    $chairs = explode(' ', $line2);
    for ($i = 1; $i <= $amount; $i++) {
        array_push($professorIndex, $i);
    }
    $x = 0;
    while(sizeof($chairs) > 1) {
        $x = ($x + $chairs[$x] - 1) % sizeof($chairs);
        unset($chairs[$x]);
        unset($professorIndex[$x]);
        $chairs = array_merge($chairs);
        $professorIndex = array_merge($professorIndex);
        while ($x >= sizeof($chairs)) {
            $x -= sizeof($chairs);
        }
    }
    fprintf($fp2, "%s\n", $professorIndex[0]);
    echo "done.";
}
else {
    $professorIndex = array();
    fscanf(STDIN, "%[^\n]", $amount); //read line 1 for number of professors
    fscanf(STDIN, "%[^\n]", $line2); //read line 2
    $chairs = explode(' ', $line2);
    for ($i = 1; $i <= $amount; $i++) {
        array_push($professorIndex, $i);
    }
    $x = 0;
    while(sizeof($chairs) > 1) {
        $x = ($x + $chairs[$x] - 1) % sizeof($chairs);
        unset($chairs[$x]);
        unset($professorIndex[$x]);
        $chairs = array_merge($chairs);
        $professorIndex = array_merge($professorIndex);
        while ($x >= sizeof($chairs)) {
            $x -= sizeof($chairs);
        }
    }
    fprintf(STDOUT, "%s\n", $professorIndex[0]);
}