<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;

require_once(__DIR__ . '/test_util.php');

class RuntimeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy\Runtime::debug
     */
    public function testOn_debug() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'debug');
        $this->assertEquals('{{123}}', $method->invokeArgs(null, array_by_ref(array(
            '123', 'miss', array('flags' => array('debug' => Runtime::DEBUG_TAGS), 'runtime' => 'LightnCandy\\Runtime'), ''
        ))));
        $this->assertEquals('<!--MISSED((-->{{#123}}<!--))--><!--SKIPPED--><!--MISSED((-->{{/123}}<!--))-->', $method->invokeArgs(null, array_by_ref(array(
            '123', 'wi', array('flags' => array('debug' => Runtime::DEBUG_TAGS_HTML), 'runtime' => 'LightnCandy\\Runtime'), false, null, false, function () {return 'A';}
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::v
     */
    public function testOn_v() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'v');
        $this->assertEquals(null, $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('prop' => 0, 'method' => 0, 'mustlok' => 0)), 0, array('a', 'b')
        ))));
        $this->assertEquals(3, $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('prop' => 0, 'method' => 0), 'mustlok' => 0), array('a' => array('b' => 3)), array('a', 'b')
        ))));
        $this->assertEquals(null, $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('prop' => 0, 'method' => 0, 'mustlok' => 0)), (Object) array('a' => array('b' => 3)), array('a', 'b')
        ))));
        $this->assertEquals(3, $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('prop' => 1, 'method' => 0, 'mustlok' => 0)), (Object) array('a' => array('b' => 3)), array('a', 'b')
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::ifvar
     */
    public function testOn_ifvar() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'ifvar');
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), null, false
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), 0, false
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), 0, true
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), false, false
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), true, false
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), 1, false
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), '', false
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), array(), false
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), array(''), false
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), array(0), false
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::ifv
     */
    public function testOn_ifv() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'ifv');
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), null, false, array(), null
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), null, false, array(), function () {return 'Y';}
        ))));
        $this->assertEquals('Y', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), 1, false, array(), function () {return 'Y';}
        ))));
        $this->assertEquals('N', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), null, false, array(), function () {return 'Y';}, function () {return 'N';}
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::unl
     */
    public function testOn_unl() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'unl');
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), null, false, array(), null
        ))));
        $this->assertEquals('Y', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), null, false, array(), function () {return 'Y';}
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), 1, false, array(), function () {return 'Y';}
        ))));
        $this->assertEquals('Y', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), null, false, array(), function () {return 'Y';}, function () {return 'N';}
        ))));
        $this->assertEquals('N', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array()), true, false, array(), function () {return 'Y';}, function () {return 'N';}
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::isec
     */
    public function testOn_isec() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'isec');
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), null
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), 0
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), false
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), 'false'
        ))));
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array(), array()
        ))));
        $this->assertEquals(false, $method->invokeArgs(null, array_by_ref(array(
            array(), array('1')
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::raw
     */
    public function testOn_raw() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'raw');
        $this->assertEquals(true, $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 0, 'mustlam' => 0, 'lambda' => 0)), true
        ))));
        $this->assertEquals('true', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1)), true
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 0, 'mustlam' => 0, 'lambda' => 0)), false
        ))));
        $this->assertEquals('false', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1)), false
        ))));
        $this->assertEquals('false', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1)), false, true
        ))));
        $this->assertEquals('Array', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1, 'jsobj' => 0)), array('a', 'b')
        ))));
        $this->assertEquals('a,b', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1, 'jsobj' => 1, 'mustlam' => 0, 'lambda' => 0)), array('a', 'b')
        ))));
        $this->assertEquals('[object Object]', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1, 'jsobj' => 1)), array('a', 'c' => 'b')
        ))));
        $this->assertEquals('[object Object]', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1, 'jsobj' => 1)), array('c' => 'b')
        ))));
        $this->assertEquals('a,true', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1, 'jsobj' => 1, 'mustlam' => 0, 'lambda' => 0)), array('a', true)
        ))));
        $this->assertEquals('a,1', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 0, 'jsobj' => 1, 'mustlam' => 0, 'lambda' => 0)), array('a',true)
        ))));
        $this->assertEquals('a,', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 0, 'jsobj' => 1, 'mustlam' => 0, 'lambda' => 0)), array('a',false)
        ))));
        $this->assertEquals('a,false', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('jstrue' => 1, 'jsobj' => 1, 'mustlam' => 0, 'lambda' => 0)), array('a',false)
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::enc
     */
    public function testOn_enc() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'enc');
        $this->assertEquals('a', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), 'a'
        ))));
        $this->assertEquals('a&amp;b', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), 'a&b'
        ))));
        $this->assertEquals('a&#039;b', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), 'a\'b'
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::encq
     */
    public function testOn_encq() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'encq');
        $this->assertEquals('a', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), 'a'
        ))));
        $this->assertEquals('a&amp;b', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), 'a&b'
        ))));
        $this->assertEquals('a&#x27;b', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), 'a\'b'
        ))));
        $this->assertEquals('&#x60;a&#x27;b', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('mustlam' => 0, 'lambda' => 0)), '`a\'b'
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::sec
     */
    public function testOn_sec() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'sec');
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), false, false, false, function () {return 'A';}
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), null, null, false, function () {return 'A';}
        ))));
        $this->assertEquals('A', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), true, true, false, function () {return 'A';}
        ))));
        $this->assertEquals('A', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 0, 0, false, function () {return 'A';}
        ))));
        $this->assertEquals('-a=', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), array('a'), array('a'), false, function ($c, $i) {return "-$i=";}
        ))));
        $this->assertEquals('-a=-b=', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), array('a','b'), array('a','b'), false, function ($c, $i) {return "-$i=";}
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 'abc', 'abc', true, function ($c, $i) {return "-$i=";}
        ))));
        $this->assertEquals('-b=', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), array('a' => 'b'), array('a' => 'b'), true, function ($c, $i) {return "-$i=";}
        ))));
        $this->assertEquals('1', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 'b', 'b', false, function ($c, $i) {return count($i);}
        ))));
        $this->assertEquals('1', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 1, 1, false, function ($c, $i) {return print_r($i, true);}
        ))));
        $this->assertEquals('0', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 0, 0, false, function ($c, $i) {return print_r($i, true);}
        ))));
        $this->assertEquals('{"b":"c"}', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), array('b' => 'c'), array('b' => 'c'), false, function ($c, $i) {return json_encode($i);}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), array(), 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), array(), 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), false, 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), false, 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), '', 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('cb', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), '', 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 0, 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('cb', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), 0, 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('inv', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), new stdClass, 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('cb', $method->invokeArgs(null, array_by_ref(array(
            array('flags' => array('spvar' => 0, 'mustlam' => 0, 'lambda' => 0)), new stdClass, 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ))));
        $this->assertEquals('268', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('spvar' => 1, 'mustlam' => 0, 'lambda' => 0), 'sp_vars'=>array('root' => 0)), array(1,3,4), 0, false, function ($c, $i) {return $i * 2;}
        ))));
        $this->assertEquals('038', $method->invokeArgs(null, array_by_ref(array(
            array('scopes' => array(), 'flags' => array('spvar' => 1, 'mustlam' => 0, 'lambda' => 0), 'sp_vars'=>array('root' => 0)), array(1,3,'a'=>4), 0, true, function ($c, $i) {return $i * $c['sp_vars']['index'];}
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::wi
     */
    public function testOn_wi() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'wi');
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array(), false, null, false, function () {return 'A';}
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array(), null, null, null, function () {return 'A';}
        ))));
        $this->assertEquals('{"a":"b"}', $method->invokeArgs(null, array_by_ref(array(
            array(), array('a'=>'b'), null, array('a'=>'c'), function ($c, $i) {return json_encode($i);}
        ))));
        $this->assertEquals('-b=', $method->invokeArgs(null, array_by_ref(array(
            array(), 'b', null, array('a'=>'b'), function ($c, $i) {return "-$i=";}
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::ch
     */
    public function testOn_ch() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'ch');
        $this->assertEquals('---', $method->invokeArgs(null, array_by_ref(array(
            array('helpers' => array('a' => function ($i) {return "-$i[0]-";})), 'a', array(array('-'),array()), 'raw'
        ))));
        $this->assertEquals('-&amp;-', $method->invokeArgs(null, array_by_ref(array(
            array('helpers' => array('a' => function ($i) {return "-$i[0]-";})), 'a', array(array('&'),array()), 'enc'
        ))));
        $this->assertEquals('-&#x27;-', $method->invokeArgs(null, array_by_ref(array(
            array('helpers' => array('a' => function ($i) {return "-$i[0]-";})), 'a', array(array('\''),array()), 'encq'
        ))));
        $this->assertEquals('-b-', $method->invokeArgs(null, array_by_ref(array(
            array('helpers' => array('a' => function ($i,$j) {return "-{$j['a']}-";})), 'a', array(array(),array('a' => 'b')), 'raw'
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::chret
     */
    public function testOn_chret() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'chret');
        $this->assertEquals('-&-', $method->invokeArgs(null, array_by_ref(array(
            '-&-', 'raw'
        ))));
        $this->assertEquals('-&amp;&#039;-', $method->invokeArgs(null, array_by_ref(array(
            '-&\'-', 'enc'
        ))));
        $this->assertEquals('-&amp;&#x27;-', $method->invokeArgs(null, array_by_ref(array(
            '-&\'-', 'encq'
        ))));
        $this->assertEquals('-&amp;&#039;-', $method->invokeArgs(null, array_by_ref(array(
            array('-&\'-'), 'enc'
        ))));
        $this->assertEquals('-&amp;&#x27;-', $method->invokeArgs(null, array_by_ref(array(
            array('-&\'-'), 'encq'
        ))));
        $this->assertEquals('-&amp;-', $method->invokeArgs(null, array_by_ref(array(
            array('-&-', false), 'enc'
        ))));
        $this->assertEquals('-&-', $method->invokeArgs(null, array_by_ref(array(
            array('-&-', false), 'raw'
        ))));
        $this->assertEquals('-&-', $method->invokeArgs(null, array_by_ref(array(
            array('-&-', 'raw'), 'enc'
        ))));
        $this->assertEquals('-&amp;&#x27;-', $method->invokeArgs(null, array_by_ref(array(
            array('-&\'-', 'encq'), 'raw'
        ))));
    }
    /**
     * @covers LightnCandy\Runtime::bch
     */
    public function testOn_bch() {
        $method = new \ReflectionMethod('LightnCandy\Runtime', 'bch');
        $this->assertEquals('4.2.3', $method->invokeArgs(null, array_by_ref(array(
            array('blockhelpers' => array('a' => function ($cx) {return array($cx,2,3);})), 'a', array(0, 0), 4, false, function($cx, $i) {return implode('.', $i);}
        ))));
        $this->assertEquals('2.6.5', $method->invokeArgs(null, array_by_ref(array(
            array('blockhelpers' => array('a' => function ($cx,$in) {return array($cx,$in[0],5);})), 'a', array('6', 0), 2, false, function($cx, $i) {return implode('.', $i);}
        ))));
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array('blockhelpers' => array('a' => function ($cx,$in) {})), 'a', array('6', 0), 2, false, function($cx, $i) {return implode('.', $i);}
        ))));
    }
}
?>