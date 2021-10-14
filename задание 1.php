function foo($a) {
    echo $a++ ."<br>";
    if ($a <= 15) foo($a);
}
foo($a);