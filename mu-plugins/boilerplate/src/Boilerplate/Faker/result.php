<?php
include_once 'Faker.php';
$object=new Faker();
$object->setInput($_POST['bottom']);
$object->setInput2($_POST['bottom2']);
echo $object->show();

