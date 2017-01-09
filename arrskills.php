<?php
//array initialization skills;
$special = ['Strength',
    'Perception',
    'Endurance',
    'Charisma',
    'Intelligence',
    'Agility',
    'Luck'];
while (true) {
    //initialize an array of skill points random;
    $mas = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];
    //the total number of skills not more than 40 points;
    $a = array_sum($mas);
    //the formation of an array of random skill points;
    if (($a == 40)) {
        $c = array_combine($special, $mas);
        print_r($c);
        break;
    }
}
