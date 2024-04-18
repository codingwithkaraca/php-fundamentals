<?php

require 'Constructor.php';

$customer1 = new \constructor\Constructor();

$customer1->_construct("MAcbook");

echo $customer1->getName();

?>
