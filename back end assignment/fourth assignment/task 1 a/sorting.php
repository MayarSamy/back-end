<?php

class Sort
{
    public $sampleArray = array(11, -2, 4, 35, 0, 8, -9);
	
    function sortting() 
    {
        $sampleArray = sort($this->sampleArray);
		print_r($this->sampleArray);
    }
}
?>
<?php
$x = new Sort;
$x->sortting();
?>