<?php

require_once('../src/functions.php');

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplaySpoonDetails()
    {   $elements = [
            "id" => "1", 
            "name" => "Antique", 
            "origin" => "Wales", 
            "description" => 
            "A description of antique", 
            "year" => "1200", 
            "image" => "image.jpg"
        ];
        $expectedOutput = "<h2>" . "Antique" . "</h2><p>Origin: " . "Wales" . "</p><p>Description: " . "A description of antique" . "</p><p>Year: " . "1200" . "</p>" . "<img src='images/" . "image.jpg" . "' alt='" . "Antique" . "'>";
        $actualOutput = displaySpoonDetails($elements);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureDisplaySpoonDetails_wrongKeys()
    {   
        $elements = [
            "id" => "1", 
            "notname" => "Antique", 
            "origin" => "Wales", 
            "notADescription" => "A description of antique", 
            "year" => "1200", 
            "noImage" => "image.jpg"
        ];
        $this->expectException(Exception::class);
        displaySpoonDetails($elements);
    }
}