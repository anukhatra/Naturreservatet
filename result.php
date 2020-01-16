

<?php

$animal = array("giraff"=>"10","elephant"=>"30","monkey"=>"40","tiger"=>20);


$no_of_apes = $_POST["ape"];
$no_of_giraff = $_POST["giraff"];
$no_of_elephant = $_POST["elephant"];
$no_of_tiger = $_POST["tiger"];
echo $no_of_apes;
echo $no_of_giraff;
echo $no_of_elephant;
echo $no_of_tiger;

 #echo $animal["giraff"];
    abstract class Animal {
        public $name;
        public $url;
        protected $sound;

        abstract public function makeSound();

    }

    class Giraff extends Animal{
        function __construct($name) {
            $this->name = $name;
            $this->url = "giraffe.jfif";
            $this->sound ="hum";
        }

        function makeSound(){
            return $this->sound;
        }
    }

    class Elephant extends Animal{
        function __construct($name) {
            $this->name = $name;
            $this->url = "elephant.jfif";
            $this->sound ="roar";
        }
 
         function makeSound(){
            return $this->sound;
        } 
    }
    class Ape  extends Animal{
        function __construct($name) {
            $this->name = $name;
            $this->url = "ape.jfif";
            $this->sound ="gibber";
        }
 
         function makeSound(){
            return $this->sound;
        } 

    }
    class Tiger  extends Animal{
        function __construct($name) {
            $this->name = $name;
            $this->url = "tiger.jfif";
            $this->sound ="growl";
        }
 
         function makeSound(){
            return $this->sound;
        } 

    }
    echo "<br>";
    $myGiraff = new Giraff("Johan");
    $myTiger = new Tiger("Johan");
    echo "<br>";

    echo $myGiraff->makeSound(); echo "<br>";
    echo $myGiraff->name; echo "<br>";
    echo $myGiraff->url;
    
    echo "<br>";
    echo "<br>";
    echo $myTiger->makeSound();

?>