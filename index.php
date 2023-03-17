<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <html>

    <body>

    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        } ?>
        <?php
        // This is a single-line comment

        # This is also a single-line comment

        $color = "red";
        echo "Hello World " . $color . "<br>";

        $x = 5 /* + 15 */ + 5;
        echo $x . "<br>";

        $txt = "W3Schools.com";
        echo "I love $txt! <br>";


        $txt = "W3Schools.com";
        echo "I love " . $txt . "!<br>";

        $x = 5; // global scope

        function myTesting()
        {
            // using x inside this function will generate an error
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTesting();

        echo "<p>Variable x outside function is: $x</p>";

        $x = 5;
        $y = 10;

        function myTest()
        {
            global $x, $y;
            $y = $x + $y;
        }

        myTest();
        echo $y;

        $x = 5;
        $y = 10;

        function moreTesting()
        {
            // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
            $GLOBALS['y']  = $GLOBALS['x'] + $GLOBALS['y'];
        }

        moreTesting();
        echo "<br>" . $y;


        // Static keeps the local variable
        function staticTest()
        {
            static $x = 0;
            echo  "<br>" . $x;
            $x++;
        }

        staticTest();
        staticTest();
        staticTest();

        // "More on Echo"

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        /// Some print
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!<br>";

        /* **DATA TYPES**
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
    */

        // Return Datatype var_dump(<item>)

        $x = 5985;
        var_dump($x);

        echo "<br>";

        $x = 10.365;
        var_dump($x);

        echo "<br>";

        $x = true;
        $y = false;
        var_dump($x);

        echo "<br>";

        //Array
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);

        echo "<br>";
        // Objec Class

        class Car
        {
            public $color;
            public $model;

            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model = $model;
            }

            public function message()
            {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar->message();
        echo "<br>";

        $myCar = new Car("red", "Toyota");
        echo $myCar->message();

        echo "<br>";

        $x = 5985;
        var_dump(is_int($x));

        $x = 59.85;
        var_dump(is_int($x));

        echo "Hello", is_int($x);

        echo "<br>";
        $x = 1.9e411;
        var_dump($x);

        echo "<br>";

        $x = 5985;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "5985";
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "59.85" + 100;
        var_dump(is_numeric($x));

        $x = "Hello";
        var_dump(is_numeric($x));

        echo "<br>";

        // Cast float to int
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;

        echo "<br>";

        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;

        echo "<br>";


        echo (rand());
        echo "<br>";

        // Cotnstants

        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;

        echo "<br>";

        define("carsz", [
            "Alfa Romeo",
            "BMW",
            "Toyota"
        ]);
        echo carsz[0];

        echo "<br>";

        function globalConstants()
        {
            echo GREETING;
        }

        globalConstants();

        echo "<br>";
        $x = 5;
        $y = 10;
        echo $y <=> $x;

        echo "<br>";

        echo $x++;

        echo "<br>";

        // Array operators

        $z = array("b" => "hello", "z" => "World");

        print_r($cars + $z);

        echo "<br>";


        // Conditions //

        $t = date("H");

        if ($t < "20") {
            echo "$t Have a good day!";
        }

        echo "<br>";
        // PHHP Switch

        $favcolor = null;

        switch ($favcolor) {
            case "red":
                echo "YOur favourite color is red";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

        echo "<br>";

        /// Loops while
        $x = 1;

        while ($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        }

        echo "<br>";
        echo "<br>";

        $x = 0;

        while ($x <= 100) {
            echo "The number is: $x <br>";
            $x += 10;
        }

        echo "<br>";
        ///  Do while loop

        while ($x < 100) {
            echo "The number is: $x <br>";
            $x += 10;
        }
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
        echo "<br>";

        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $x => $value) {
            echo "$x => $value <br>";
        }
        echo "<br>";

        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

        foreach ($age as $x => $val) {
            echo "$x = $val<br>";
        }
        echo "<br>";

        /// Functions
        function writeMsg()
        {
            echo "Hello world!";
        }

        writeMsg();

        echo "<br>";
        // Arguments
        function familyName($fname)
        {
            echo "$fname Refsnes.<br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        echo "<br>";
        // Tow Arguments
        function familyNames($fname, $year)
        {
            echo "$fname Refsnes. Born in $year <br>";
        }

        familyNames("Hege", "1975");
        familyNames("Stale", "1978");
        familyNames("Kai Jim", "1983");
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";



        ?>

    </body>

    </html>