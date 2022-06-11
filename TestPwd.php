<?php

include("/home/anubis/PHP/SAE_INFO/test_passwd.php");

class TestPwd extends PHPUnit\Framework\TestCase
{

    private function initialiserTest()
    {   
        $registerOK = Null;
        $password = Null;
    }

    public function testPwdsDifferents()
    {
        global $password1, $password2, $password, $registerOK;
        $this->initialiserTest();

        $pwd1 = "colin1305";
        $pwd2 = "iris2909";
        $resultat = test_pass($pwd1, $pwd2);
 
        $this->assertNull($password);
        $this->assertNull($registerOK);
    }
    
    public function testPwdsEgaux()
    {
        global $password1, $password2, $password, $registerOK;
        $this->initialiserTest();

        $pwd1 = "colin1305";
        $pwd2 = "colin1305";
        test_pass($pwd1, $pwd2);
 
        $this->assertEquals("colin1305", $password);
        $this->assertTrue($registerOK);
    }

}
?>