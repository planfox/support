<?php
/**
 * @author Liao Gengling <liaogling@gmail.com>
 */
class MacroTest extends PHPUnit_Framework_TestCase
{
    use Planfox\Component\Support\Traits\Macroable;

    public function testCall()
    {

        $this->macro('macroHandle', function ($a) {
            return $a;
        });

        $this->assertEquals(true, $this->hasMacro('macroHandle'));
        $this->assertEquals(false, $this->hasMacro('macroHandleNotExists'));

        $this->assertEquals('123', $this->macroHandle('123'));

        $this->assertEquals('123', self::macroHandle('123'));
    }
}