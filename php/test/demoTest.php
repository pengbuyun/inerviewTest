<?php

require_once '../vendor/Autoload.php';
$suite = new PHPUnit_Framework_TestSuite();
$suite->addTestFile('MyGreeter_Client_Test.php');
PHPUnit_TextUI_TestRunner::run($suite);
