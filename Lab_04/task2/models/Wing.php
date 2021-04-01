<?php

require_once(__DIR__ . '/../interfaces/Payment.php');
require_once(__DIR__ . '/../controls/DataControl.php');

class Wing extends DataControl implements Payment
{
    public function getSales(){
        return parent::fetchData('Wing');
    }
}

?>