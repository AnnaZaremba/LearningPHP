<center><br><br>TABLICE<br><br></center>

<div>
    <?php
    $fruits = array('bananas', 'apples', 'pears');
    echo 'I love eating ' . $fruits [1] . ' too!';
    ?>
</div>
<br><br>
<div>
    <?php

    $myArray = array(2012, 'blue', 5, 'BMW');


    $myAssocArray = [
        'year' => 2012,
        'colour' => 'blue',
        'doors' => 5,
        'make' => 'BMW'
    ];


    echo $myArray[1];
    echo '<br />';


    echo 'I have a ' . $myAssocArray['year'] . ' ' . $myAssocArray['make'] . '. It is ' . $myAssocArray['colour'] . ' and has ' . $myAssocArray['doors'] . ' doors.'
    ?>
</div>
<br><br>
<div>
    <?php
    $food = array('pizza', 'salad', 'burger');
    $salad = array('lettuce' => 'with',
        'tomato' => 'without',
        'onions' => 'with');

    // Looping through an array using "for".
    // First, let's get the length of the array!
    $length = count($food);

    // Remember, arrays in PHP are zero-based:
    for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
    }

    echo '<br /><br />I want my salad:<br />';

    // Loop through an associative array using "foreach":
    foreach ($salad as $ingredient => $include) {
        echo $include . ' ' . $ingredient . '<br />';
    }

    echo '<br /><br />';

    // Create your own array here and loop
    // through it using foreach!
    $imiona = array('Marcin' => 'maz',
        'Adam' => 'syn',
        'Kasia' => 'siostra');
    foreach ($imiona as $imie => $status) {
        echo $imie . ' to ' . $status . '<br />';
    }
    ?>
</div>
<br><br>
<div>
    <?php
    $deck = array(
        array('2 of Diamonds', 2),
        array('5 of Diamonds', 5),
        array('7 of Diamonds', 7)
    );

    // Imagine the first chosen card was the 7 of Diamonds.
    // This is how we would show the user what they have:
    echo 'You have the ' . $deck[2][0] . '!' . '<br />';

    $deck2 = array(array('3 of Diamonds', 3),
        array('4 of Diamonds', 4));

    echo 'You have the ' . $deck2[0][1] . '!';
    ?>
</div>
<br><br>
<?php
$myArray = array('Ania', 'Marcin', 'Adam');
$myAssocArray = array('zona' => 'Ania',
    'maz' => 'Marcin',
    'syn' => 'Adam');

$length = count($myArray);

echo 'Czlonkowie rodziny: ' . '<br />';

for ($i = 0; $i < $length; $i++) {
    echo $myArray[$i] . '<br />';
}
?>


<center><br><br>KLASY<br><br></center>

<br><br>
<div>
    <?php

    class Person
    {

        public $isAlive = true;
        public $firstname;
        public $lastname;
        public $age;
    }

    $teacher = new Person();
    $student = new Person();

    echo $teacher->isAlive;
    ?>
</div>
<br><br>
<div>
    <?php

    class Person2
    {

        public $isAlive = true;
        public $firstname;
        public $lastname;
        public $age;

        public function __construct($firstname, $lastname, $age)
        {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;
        }

        public function greet()
        {
            return "Hello, my name is " . $this->firstname . " " . $this->lastname . " . Nice to meet you! :) ";
        }
    }

    $teacher = new Person2("boring", "12345", 12345);
    $student = new Person2("koles", "kupa", 30);

    echo $student->age . '<br />';

    echo $teacher->greet();
    echo $student->greet();
    ?>
</div>
<br><br>
<div>
    <?php

    class Dog
    {
        public $numLegs = 4;
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function bark()
        {
            return "Woof!";
        }

        public function greet()
        {
            return "Some text " . $this->name . " some further text";
        }
    }

    $dog1 = new Dog("Amigo");
    $dog2 = new Dog("Barker");

    echo $dog1->bark();
    echo $dog2->greet();

    ?>
</div>
<br><br>
<div>
    <?php

    // Your code here
    class Cat
    {
        public $isAlive = true;
        public $numLegs = 4;
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function meow()
        {
            return "Meow meow";
        }
    }

    $cat1 = new Cat("CodeCat");

    echo $cat1->meow();
    ?>
</div>
<br><br>
<div>
    <?php

    class Person3
    {
        public $isAlive = true;

        function __construct($name)
        {
            $this->name = $name;
        }

        public function dance()
        {
            return "I'm dancing!";
        }
    }

    $me = new Person3("Shane");
    if (is_a($me, "Person")) {
        echo "I'm a person, ";
    }
    if (property_exists($me, "name")) {
        echo "I have a name, ";
    }
    if (method_exists($me, "dance")) {
        echo "and I know how to dance!";
    }
    ?>
</div>
<br><br>
<div>
    <?php

    class Shape
    {
        public $hasSides = true;
    }

    class Square extends Shape
    {

    }

    $square = new Square();
    if (property_exists($square, "hasSides")) {
        echo "I have sides!";
    }
    ?>
</div>
<br><br>
<div>
    <?php

    class Vehicle
    {
        public function honk()
        {
            return "HONK HONK!";
        }

//        final public function honk() {
//            return "HONK HONK!";
//
//        }
    }

    class Bicycle extends Vehicle
    {
        public function honk()
        {
            return "Beep beep!";
        }
    }

    $bicycle = new Bicycle();
    echo $bicycle->honk();
    ?>
</div>
<br><br>
<div>
    <?php

    class Person4
    {

    }

    class Ninja extends Person4
    {

        const stealth = "MAXIMUM";
    }

    if (Ninja::stealth) {
        echo "MAXIMUM";
    }
    ?>
</div>
<br><br>
<div>
    <?php

    class King
    {
        public static function proclaim()
        {
            echo "A kingly proclamation!";
        }
    }

    King::proclaim();
    ?>
</div>
<br><br>

<div>
    <?php

    class Person5
    {

    }

    class Blogger2 extends Person5
    {
        const cats = 50;
        static public $cats = "cats";

        static public function say()
        {
            echo "Here are my thoughts!";
        }
    }

    if (Blogger2::cats) {
        echo 50;
    }

    $cats = new Blogger2();
    Blogger2::$cats;
    Blogger2::say();

    ?>
</div>

<center><br><br>FUNKCJE<br><br></center>
<div>
    <?php
    $ilosc_liter = strlen("ania");                           //wyświetla ilość liter
    print $ilosc_liter;
    ?>
</div>

<br><br>STRING<br><br>
<div>
    <?php
    $myname = "Ania";
    $partial = substr($myname, 0, 3);                       //wyświetla wybrane litery
    print $partial;
    ?>
</div>

<div>
    <?php
    $uppercase = strtoupper($myname);                       //wielkie litery
    print $uppercase;
    ?>
</div>
<div>
    <?php
    $lowercase = strtolower($uppercase);                    //małe litery
    print $lowercase;
    ?>
</div>
<br><br>

<div>
    <?php
    echo strpos("ania", "a");                               // 0   wyświetla kolejność liter
    echo strpos("ania", "n");                               // 2
    echo strpos("ania", "ia");                              // 2
    echo strpos("ania", "zxc");                             // false
    ?>
</div>

<div>
    <?php //sprawdza czy dana litera zawiera sie w słowie
    if (strpos("ania", "h") === false) {
        print "Sorry, no 'h' in 'ania'";
    }
    ?>
</div>

<br><br>MATH<br><br>
<div>
    <?php
    $round = round(M_PI);                                   //wyświetla liczbę całkowitą (zaokrągla)
    print $round . '<br />';

    $round_decimal = round(M_PI, 3);                        //wyświetla do trzech miejsc po przecinku
    print $round_decimal;
    ?>
</div>
<br>
<div>
    <?php
    print rand() . '<br />';                                //losuje liczbę między 0 a 32767
    print rand(1, 9) . '<br />';                            //losuje liczbę pomiedzy 1 a 9

    $name = "ani";
    $len = strlen($name);

    $sub = substr($name, -1);                               //wyświetla określoną literę (tutaj ostatnią)
    print $sub . '<br />';

    $sub = substr($name, 1);                                //wyświetla litery od drugiej
    print $sub . '<br />';
    ?>
</div>

<br><br>ARRAY<br><br>
<div>
    <?php

    $piosenki = array();
    array_push($piosenki, "Witajcie w naszej bajce");
    array_push($piosenki, "Kaczka dziwaczka");
    array_push($piosenki, "Len");
    array_push($piosenki, "Ksiezyc raz odwiedzil staw");
    array_push($piosenki, "Meluzyna");

    $n = count($piosenki);
    print $n . '<br />' . '<br />';

    for ($i = 0; $i < $n; $i++)
        echo $piosenki[$i] . '<br />';
    ?>


</div>
<br><br>
<div>
    <?php

    $muzyczka = array("witajcie", "kaczka", "len");
    $n = count($muzyczka);
    for ($i = 0; $i < $n; $i++)
        echo $muzyczka[$i] . '<br />';

    ?>
</div>
<br><br>
<div>
    <?php

    $array = array(5, 4, 9);
    sort($array);                                               //sortuje od najmniejszej do największej
    print join(",", $array) . '<br />';                         // dalaczego dajemy ","?

    rsort($array);                                              //sortuje od największej do najmniejszej
    print join(",", $array);

    ?>
</div>

<br><br>ZASTOSOWANIE FUNKCJI<br><br>
<div>
    <?php
    // Create an array and push on the names
    // of your closest family and friends
    $names = array();
    array_push($names, "Marcin");
    array_push($names, "Adas");
    array_push($names, "Maria");
    array_push($names, "Kasia");
    array_push($names, "Wiki");
    // Sort the list

    sort($names);
    print join(",", $names) . '<br />';

    // Randomly select a winner!
    $n = count($names);
    print $n . '<br />' . '<br />';

    for ($i = 0; $i < $n; $i++)
        echo $names[$i] . '<br />';

    $round = round($n);
    print $n . '<br />';

    $rand = print rand(0, 5) . '<br />';

    print strtoupper($names[4]);
    ?>
</div>
<br><br><br>
<div>
    <?php
    function helloWorld()
    {
        echo "Hello world!";
    }

    helloWorld();
    ?>
</div>
<br><br><br>
<div>
    <?php
    function displayName()
    {
        echo "Ania!";
    }

    displayName();
    ?>
</div>
<br><br>RETURN<br><br>
<div>
    <?php
    //Return powoduje, że wartość zwróconą przez funkcję możesz przypisać do zmiennej.
    //Dalsze operacje po return nie beda przeprowadzane bo funkcja zakonczyla dzialanie w tym miejscu
    function returnName()
    {
        return "Ania!";
    }

    returnName(); //nic nie wyświetla
    echo $returnName = returnName() . '<br />';
    ?>
</div>
<br>
<div>
    <?php
    function first()
    {
        $var = 2 * 2;
        echo $var;
    }

    first(); // wyświetli 4

    //$zmienna = first(); // tak zrobić nie możesz
    ?>
</div>
<br>
<div>
    <?php
    function second()
    {
        $var = 2 * 2;
        return $var;
    }

    second(); // nic nie pokaże

    $zmienna = second(); // tak możesz zrobić, potem tą zmienną możesz podstawić do zapytania/innej zmiennej/innej funkcji czy po prostu wyświetlić
    echo $zmienna;

    ?>
</div>
<br><br>
<div>
    <?php
    function greetings($name)
    {
        echo "Greetings, " . $name . "!";
    }

    $name = "Ania";

    greetings($name);
    ?>
</div>
<br><br>
<div>
    <?php
    function aboutMe($name, $age)
    {
        echo "Hello! My name is $name, and  am $age years old.";
    }

    $name = "Ania";
    $age = "30";

    aboutMe($name, $age);
    ?>
</div>



