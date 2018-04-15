<?php
    $zoo = array (
        "North_America" => array ("Crocodile","Dasypus Novemcinctus"),
        "Africa" => array('Elephant','Monkey'),
        "Eurasia" => array('White Bear', 'Black Wolf'),
        "Australia" => array('Camel', 'Rabbit'),
        "Antarctica" => array('Penguin', 'Seal')
    );

    $double_name = [];
    $first_world = [];
    $second_word = [];

    foreach ($zoo as $continents_key => $animals) {
        $continent[] = $continents_key;

        foreach ($animals as $two) {
            $rows_two = explode(" ", $two);
            if (count($rows_two) == 2) {
                $double_name[] = $two;
                $first_world[] = $rows_two[0];
                $second_word[] = $rows_two[1];
            }
        }
    }
    echo "list <br>";
    foreach ($double_name as $item) {
        echo "$item<br>";}

    echo "<br>";
    echo "shuffles words <br>";
    shuffle($second_word);

    foreach ($second_word as $last) {
        $first = array_shift($first_world);
        echo $first . ' ' . $last . '<br>';
    }


?>