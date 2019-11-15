<?php
class SortArray{
    private $arr_sort;

public function __construct(array $asort){
$this->arr_sort = $asort; 
}

public function sortArray(){
	$sorted = $this->arr_sort;
sort($sorted);
return $sorted;
}
}

$objetoArray = new SortArray( array(11, -2, 4, 0, 8, -9) );
$arr = $objetoArray->sortArray();
foreach ($arr as $value) {
	echo $value . "\n";
}
?>
