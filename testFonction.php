<?php

include("/home/anubis/PHP/SAE/test_input.php");

class TestCase extends PHPUnit\Framework\TestCase
{
    public function testInputEspaceDebutEtFinTrim()
    {
        $variable = " expected ";
        $variable = test_input($variable);
 
        $this->assertEquals("expected", $variable);
     }

   public function testInputEspaceMilieuNonTrim()
   {
       $variable = "expec ted";
       $variable = test_input($variable);

       $this->assertEquals("expec ted", $variable);
    }

    public function testInputEsperluete()
    {
        $variable = "&é";
        $variable = test_input($variable);
 
        $this->assertEquals("&amp;é", $variable);
    }
}
?>