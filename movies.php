<?php 
class Movies {
    public $name;
    public $year;
    public $vote;

    public function __construct($name)
    {
        $this ->name= $name;

    }
    

    public function getTheVote(){
        return $this -> name . ' ' .$this ->year. '  ' .$this ->vote;
    }

}
// esempio movie numero 1
$django = new Movies("Django Unchained");

$django ->year = "(2017)";
$django ->vote = "8.6 IMdB";

// esempio movie numero 2
$titanic = new Movies("Titanic");

$titanic ->year = "(1999)";
$titanic ->vote = "9.2 IMdB";


?>