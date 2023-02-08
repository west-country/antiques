<?php

require_once('../src/functions.php');

use PHPUnit\Framework\TestCase;

class testFunctions extends Testcase
{
    public function testDetailsString()
    {
        $elements = array("id" => "1", "name" => "Antique", "origin" => "Wales", "description" => "A description of antique", "year" => "1200", "image" => "image.jpg");
        $expectedOutput = "<h2>Name: " . "Antique" . "</h2><p>Origin: " . "Wales" . "</p><p>Description: " . "A description of antique" . "</p><p>Year: " . "1200" . "</p>" . "<img src='images/" . "image.jpg" . "' alt='Photo of " . "Antique" . "' width='200'>";
        $actualOutput = detailsString($elements);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testWrongKeys()
    {
        $elements = array(
        "id" => "1", "notname" => "Antique", "origin" => "Wales", "notADescription" => "A description of antique", "year" => "1200", "noImage" => "image.jpg");
        $this->expectException(Exception::class);
        detailsString($elements);
    }
}