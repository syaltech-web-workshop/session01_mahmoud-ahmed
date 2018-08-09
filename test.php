<?php


//$array = [1,2,3];
//
//var_dump($array);

//class Car {
//    function Car() {
//        $this->model = "VW";
//    }
//
//
//}
//
//$herbie = new Car();
//
//echo $herbie->model;

//$x = "Hello world!";
//
//$position = strpos($x, ",");
//
//echo $position;
//
//$y = false;
//
//echo $y;

//$array = array(1, 2, 3, 4, 5);
//
//foreach ($array as $el_value){
//    echo $el_value . "\n";
//}

//function familyName($fname, $year) {
//    echo "$fname Ahmed, born in $year \n.";
//}
//
//familyName("Mahmoud", 1992);

//function setHeight($min_height = 50) {
//    echo "The height is : $min_height \n";
//}
//
//setHeight();

//function sum() {
//    $z = 2 + 5;
//    echo "2 + 5 = $z \n";
//}
//
//var_dump(sum());

$array[2] = 2;
$array[3] = 3;


//var_dump(count($array));
//var_dump($array[0]);
//echo count($array);

$age["peter"] = "35";
$age["Mahmoud"] = "26";
$age["ben"] = "37";

//echo gettype($age) . "\n";
//echo "Peter is {$age["peter"]} years old.\n";
//echo "Mahmoud is {$age["Mahmoud"]} years old.\n";
//echo  "Ben is {$age["ben"]} years old.\n";

$obj = new stdClass();

//echo gettype($obj) . "\n";



class Getter {
    public $got = '';
    public function __construct()
    {
        $this->got = "me";
    }
}

$getter = new Getter();

echo gettype(Getter::class) . "\n";

//echo "result: " . $getter->got;



