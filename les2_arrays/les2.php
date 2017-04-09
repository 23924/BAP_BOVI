<?php

$numbers = array(2,4,6,1,3,5);
$numbers[5] = 15;

array_push($numbers, 31, 49);

$numberslength = count($numbers);
for ($i=0;$i<$numberslength;$i++){
    echo '<p>' . $numbers[$i] . '</p>';
}

echo "--------------------------------";

$mixed =array(4,"januari","februari",12,"maart",11,"april");
$mixed[0] = "fietspomp";
$mixed[1] = "ventiel";
$mixed[2] = "lucht";
array_push($mixed, 'mei','juni',8);
$mixedlength = count($mixed);
for ($i=0;$i<$mixedlength;$i++){
    echo '<p>' . $mixed[$i] . '</p>';
}

echo "--------------------------------";

$subject = array("PHP" => "Ingrid",
                 "JavaScript" => "Ed",
                 "Engels" => "Paul");

echo "<br>";
echo $subject['PHP'];
echo "<br>";
echo $subject['JavaScript'];


//$teachers = array('ingrid', 'theo', 'joey');
//echo $teachers [2]; //begint bij 0 met tellen!

//$teachers[1] = 'ed';
//echo $teachers[1];

//var_dump($teachers);  //array zien
//print_r($teachers);   //ook aray zien

/*for ($i = 0;$i <3;$i++){
    echo '<p>' . $teachers[$i] . '</p>';
}*/

/*$teachers [] = 'jelle'; //1 iemand er bij

array_push($teachers, 'hugo', 'paul', 'birgit', 'olga'); //meerdere er bij

foreach($teachers as $one_teacher){
    echo '<p>' . $one_teacher . '</p>';
}*/


//$subjects = array ('ingrid' => 'bap', 'joey' => 'pro', 'jelle' => 'fro');//associative array
/*
//echo $subjects['ingrid']; //dan krijg je: bap
foreach($subjects as $teachers => $subject){
    echo $teachers . ' teaches ' . $subject . '<br>';
}
*/
?>