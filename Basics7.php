$string = "Hello, World!";
$integer = 42;
$float = 3.14;
$boolean = true;
// Indexed array
$array = array(1, 2, 3, 4);

// Associative array
$assocArray = array("key1" => "value1", "key2" => "value2");
class Car {
    public $color;
    public function __construct($color) {
        $this->color = $color;
    }
}

$myCar = new Car("red");
echo $myCar->color;  // Outputs: red

