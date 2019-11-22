<?php

$numbers = [1, "teste", 4, 7];
$result = '';

foreach($numbers as $index => $number) {
    $result .= "$index => $number\n";
}

//var_dump($result);

//--------------------------------------------------------

class Post
{
    public $title;
    public $text;

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

}

$post = new Post('Lorem ipsum dolor', 'Nunc accumsan in ipsum a mattis...');

var_dump($post);



?>