<?php
// Constants
define('HOSTNAME', '<h1>localhost</h1>');
echo HOSTNAME;

// Variables
$user = 'John doe';
$num = 5;
echo $user .' has '.$num. ' donuts.';

// Array
$users = Array('Mike', 'Jake', 'Jose');
$users = ['Mike', 'Jake', 'Jose'];
print_r($users);
$users[3] = 'Micheal';
echo $users[3];
$ages = Array(
'Karen' => 34,
'Larry' => 44,
'Jeff' => 37
);
echo $ages['Larry']; // 44

// Functions
function writeMsg($msg = 'Hello world'){
    return $msg;
}
echo writeMsg();

// Conditionals
$num1 = 40;
$num2 = 21;
if($num1 > 30 && $num2 == 20){
    echo 'Yes it is';
} else {
    echo 'No it is not';
}

// Loops
for($i = 0;$i<10;$i++){
    echo 'Number '. $i.'<br>';
}

// While Loops
$i = 0;
while($i < 10){
    echo 'Number '. $i.'<br>';
    $i++;
}

// Foreach
$users = Array('Mike', 'John', 'Daniel');
foreach($users as $user){
    echo $user.'<br>';
}
?>