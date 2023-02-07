<?php

require('src/functions.php');

use PHPUnit\Framework\TestCase;

class Functions extends Testcase
{
    public function testPrintPlease()
    {
        $array = (      (
            [id] => 1
            [name] => Antique
            [origin] => Wales
            [description] => A description of antique
            [year] => 1200
        )
        (
        [id] => 2
        [name] => Also Antique
        [origin] => Belgium
        [description] => A different description of an antique
        [year] => 1200
    )

        )
    }
}