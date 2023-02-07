<?php

require('src/functions.php');

use PHPUnit\Framework\TestCase;

class Functions extends Testcase
{
    public function testDetailsString()
    {
        $elements = (
            [id] => 1, [name] => Antique, [origin] => Wales, [description] => A description of antique, [year] => 1200, [image] => image.jpg;
        )
       $expectedOutput = "<h2>Name: " . "Antique" . "</h2><p>Origin: " . "Wales" . "</p><p>Description: " . "A description of antique" . "</p><p>Year: " . "1200" . "</p>" . "<img src='images/" . "image.jpg" . "' alt='Photo of " . "Antique" . "' width='200'>";
       $actualOutput = detailsString($elements);
       $this->assertEquals($expectedOutput, $actualOutput);
    }
}