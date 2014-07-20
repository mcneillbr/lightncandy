<?php
/**
 * Generated by build/gen_test
 */
require_once('src/lightncandy.php');

class LightnCandyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy::buildHelperTable
     */
    public function testOn_buildHelperTable() {
        $method = new ReflectionMethod('LightnCandy', 'buildHelperTable');
        $method->setAccessible(true);
        $this->assertEquals(Array(), $method->invoke(null,
            Array(), Array()
        ));
        $this->assertEquals(Array('flags' => Array('exhlp' => 1)), $method->invoke(null,
            Array('flags' => Array('exhlp' => 1)), Array('helpers' => Array('abc'))
        ));
        $this->assertEquals(Array('error' => Array('Can not find custom helper function defination abc() !'), 'flags' => Array('exhlp' => 0)), $method->invoke(null,
            Array('error' => Array(), 'flags' => Array('exhlp' => 0)), Array('helpers' => Array('abc'))
        ));
        $this->assertEquals(Array('flags' => Array('exhlp' => 1), 'helpers' => Array('LCRun3::raw' => 'LCRun3::raw')), $method->invoke(null,
            Array('flags' => Array('exhlp' => 1), 'helpers' => Array()), Array('helpers' => Array('LCRun3::raw'))
        ));
        $this->assertEquals(Array('flags' => Array('exhlp' => 1), 'helpers' => Array('test' => 'LCRun3::raw')), $method->invoke(null,
            Array('flags' => Array('exhlp' => 1), 'helpers' => Array()), Array('helpers' => Array('test' => 'LCRun3::raw'))
        ));
    }
    /**
     * @covers LightnCandy::buildCXFileext
     */
    public function testOn_buildCXFileext() {
        $method = new ReflectionMethod('LightnCandy', 'buildCXFileext');
        $method->setAccessible(true);
        $this->assertEquals(Array('.tmpl'), $method->invoke(null,
            Array()
        ));
        $this->assertEquals(Array('test'), $method->invoke(null,
            Array('fileext' => 'test')
        ));
        $this->assertEquals(Array('test1'), $method->invoke(null,
            Array('fileext' => Array('test1'))
        ));
        $this->assertEquals(Array('test2', 'test3'), $method->invoke(null,
            Array('fileext' => Array('test2', 'test3'))
        ));
    }
    /**
     * @covers LightnCandy::buildCXBasedir
     */
    public function testOn_buildCXBasedir() {
        $method = new ReflectionMethod('LightnCandy', 'buildCXBasedir');
        $method->setAccessible(true);
        $this->assertEquals(Array(), $method->invoke(null,
            Array()
        ));
        $this->assertEquals(Array(), $method->invoke(null,
            Array('basedir' => Array())
        ));
        $this->assertEquals(Array('src'), $method->invoke(null,
            Array('basedir' => Array('src'))
        ));
        $this->assertEquals(Array('src'), $method->invoke(null,
            Array('basedir' => Array('src', 'dir_not_found'))
        ));
        $this->assertEquals(Array('src', 'tests'), $method->invoke(null,
            Array('basedir' => Array('src', 'tests'))
        ));
    }
    /**
     * @covers LightnCandy::getPHPCode
     */
    public function testOn_getPHPCode() {
        $method = new ReflectionMethod('LightnCandy', 'getPHPCode');
        $method->setAccessible(true);
        $this->assertEquals('function($a) {return;}', $method->invoke(null,
            function ($a) {return;}
        ));
        $this->assertEquals('function($a) {return;}', $method->invoke(null,
               function ($a) {return;}
        ));
    }
    /**
     * @covers LightnCandy::handleError
     */
    public function testOn_handleError() {
        $method = new ReflectionMethod('LightnCandy', 'handleError');
        $method->setAccessible(true);
        $this->assertEquals(true, $method->invoke(null,
            Array('level' => 1, 'stack' => Array('X'), 'flags' => Array('errorlog' => 0, 'exception' => 0), 'error' => Array())
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array('level' => 0, 'error' => Array())
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array('level' => 0, 'error' => Array('some error'), 'flags' => Array('errorlog' => 0, 'exception' => 0))
        ));
    }
    /**
     * @covers LightnCandy::getBoolStr
     */
    public function testOn_getBoolStr() {
        $method = new ReflectionMethod('LightnCandy', 'getBoolStr');
        $method->setAccessible(true);
        $this->assertEquals('true', $method->invoke(null,
            1
        ));
        $this->assertEquals('true', $method->invoke(null,
            999
        ));
        $this->assertEquals('false', $method->invoke(null,
            0
        ));
        $this->assertEquals('false', $method->invoke(null,
            -1
        ));
    }
    /**
     * @covers LightnCandy::getFuncName
     */
    public function testOn_getFuncName() {
        $method = new ReflectionMethod('LightnCandy', 'getFuncName');
        $method->setAccessible(true);
        $this->assertEquals('LCRun3::test(', $method->invoke(null,
            Array('flags' => Array('standalone' => 0, 'debug' => 0)), 'test', ''
        ));
        $this->assertEquals('LCRun3::test2(', $method->invoke(null,
            Array('flags' => Array('standalone' => 0, 'debug' => 0)), 'test2', ''
        ));
        $this->assertEquals("\$cx['funcs']['test3'](", $method->invoke(null,
            Array('flags' => Array('standalone' => 1, 'debug' => 0)), 'test3', ''
        ));
        $this->assertEquals('LCRun3::debug(\'abc\', \'test\', ', $method->invoke(null,
            Array('flags' => Array('standalone' => 0, 'debug' => 1)), 'test', 'abc'
        ));
    }
    /**
     * @covers LightnCandy::getArrayStr
     */
    public function testOn_getArrayStr() {
        $method = new ReflectionMethod('LightnCandy', 'getArrayStr');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array()
        ));
        $this->assertEquals('[a]', $method->invoke(null,
            Array('a')
        ));
        $this->assertEquals('[a][b][c]', $method->invoke(null,
            Array('a', 'b', 'c')
        ));
    }
    /**
     * @covers LightnCandy::getArrayCode
     */
    public function testOn_getArrayCode() {
        $method = new ReflectionMethod('LightnCandy', 'getArrayCode');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array()
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            Array('a')
        ));
        $this->assertEquals("['a']['b']['c']", $method->invoke(null,
            Array('a', 'b', 'c')
        ));
    }
    /**
     * @covers LightnCandy::getVariableNames
     */
    public function testOn_getVariableNames() {
        $method = new ReflectionMethod('LightnCandy', 'getVariableNames');
        $method->setAccessible(true);
        $this->assertEquals(Array('Array(Array($in),Array())', Array('this')), $method->invoke(null,
            Array(null), Array('flags'=>Array('spvar'=>true))
        ));
        $this->assertEquals(Array('Array(Array($in,$in),Array())', Array('this', 'this')), $method->invoke(null,
            Array(null, null), Array('flags'=>Array('spvar'=>true))
        ));
        $this->assertEquals(Array('Array(Array(),Array(\'a\'=>$in))', Array('this')), $method->invoke(null,
            Array('a' => null), Array('flags'=>Array('spvar'=>true))
        ));
    }
    /**
     * @covers LightnCandy::getVariableName
     */
    public function testOn_getVariableName() {
        $method = new ReflectionMethod('LightnCandy', 'getVariableName');
        $method->setAccessible(true);
        $this->assertEquals(Array('$in', 'this'), $method->invoke(null,
            Array(null), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('true', 'true'), $method->invoke(null,
            Array('true'), Array('flags'=>Array('spvar'=>true,'debug'=>0)), true
        ));
        $this->assertEquals(Array('false', 'false'), $method->invoke(null,
            Array('false'), Array('flags'=>Array('spvar'=>true,'debug'=>0)), true
        ));
        $this->assertEquals(Array(2, '2'), $method->invoke(null,
            Array('2'), Array('flags'=>Array('spvar'=>true,'debug'=>0)), true
        ));
        $this->assertEquals(Array('((is_array($in) && isset($in[\'@index\'])) ? $in[\'@index\'] : null)', '[@index]'), $method->invoke(null,
            Array('@index'), Array('flags'=>Array('spvar'=>false,'debug'=>0,'prop'=>0))
        ));
        $this->assertEquals(Array('$cx[\'sp_vars\'][\'index\']', '@index'), $method->invoke(null,
            Array('@index'), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('$cx[\'sp_vars\'][\'key\']', '@key'), $method->invoke(null,
            Array('@key'), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('$cx[\'sp_vars\'][\'first\']', '@first'), $method->invoke(null,
            Array('@first'), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('$cx[\'sp_vars\'][\'last\']', '@last'), $method->invoke(null,
            Array('@last'), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('$cx[\'scopes\'][0]', '@root'), $method->invoke(null,
            Array('@root'), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('\'a\'', '"a"'), $method->invoke(null,
            Array('"a"'), Array(), Array('flags'=>Array('spvar'=>true,'debug'=>0))
        ));
        $this->assertEquals(Array('((is_array($in) && isset($in[\'a\'])) ? $in[\'a\'] : null)', '[a]'), $method->invoke(null,
            Array('a'), Array('flags'=>Array('spvar'=>true,'debug'=>0,'prop'=>0))
        ));
        $this->assertEquals(Array('((is_array($cx[\'scopes\'][count($cx[\'scopes\'])-1]) && isset($cx[\'scopes\'][count($cx[\'scopes\'])-1][\'a\'])) ? $cx[\'scopes\'][count($cx[\'scopes\'])-1][\'a\'] : null)', '../[a]'), $method->invoke(null,
            Array(1,'a'), Array('flags'=>Array('spvar'=>true,'debug'=>0,'prop'=>0))
        ));
        $this->assertEquals(Array('((is_array($cx[\'scopes\'][count($cx[\'scopes\'])-3]) && isset($cx[\'scopes\'][count($cx[\'scopes\'])-3][\'a\'])) ? $cx[\'scopes\'][count($cx[\'scopes\'])-3][\'a\'] : null)', '../../../[a]'), $method->invoke(null,
            Array(3,'a'), Array('flags'=>Array('spvar'=>true,'debug'=>0,'prop'=>0))
        ));
        $this->assertEquals(Array('((is_array($in) && isset($in[\'id\'])) ? $in[\'id\'] : null)', 'this.[id]'), $method->invoke(null,
            Array(null, 'id'), Array('flags'=>Array('spvar'=>true,'debug'=>0,'prop'=>0))
        ));
        $this->assertEquals(Array('LCRun3::v($cx, $in, Array(\'id\'))', 'this.[id]'), $method->invoke(null,
            Array(null, 'id'), Array('flags'=>Array('prop'=>true,'spvar'=>true,'debug'=>0))
        ));
    }
    /**
     * @covers LightnCandy::getExpression
     */
    public function testOn_getExpression() {
        $method = new ReflectionMethod('LightnCandy', 'getExpression');
        $method->setAccessible(true);
        $this->assertEquals('[a].[b]', $method->invoke(null,
            0, false, Array('a', 'b')
        ));
        $this->assertEquals('@root', $method->invoke(null,
            0, true, Array()
        ));
        $this->assertEquals('this', $method->invoke(null,
            0, false, null
        ));
        $this->assertEquals('this.[id]', $method->invoke(null,
            0, false, Array(null, 'id')
        ));
        $this->assertEquals('@root.[a].[b]', $method->invoke(null,
            0, true, Array('a', 'b')
        ));
        $this->assertEquals('../../[a].[b]', $method->invoke(null,
            2, false, Array('a', 'b')
        ));
        $this->assertEquals('../[a\'b]', $method->invoke(null,
            1, false, Array('a\'b')
        ));
    }
    /**
     * @covers LightnCandy::fixVariable
     */
    public function testOn_fixVariable() {
        $method = new ReflectionMethod('LightnCandy', 'fixVariable');
        $method->setAccessible(true);
        $this->assertEquals(Array('this'), $method->invoke(null,
            'this', Array('flags' => Array('advar' => 0, 'this' => 0))
        ));
        $this->assertEquals(Array(null), $method->invoke(null,
            'this', Array('flags' => Array('advar' => 0, 'this' => 1))
        ));
        $this->assertEquals(Array(1, null), $method->invoke(null,
            '../', Array('flags' => Array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(1, null), $method->invoke(null,
            '../.', Array('flags' => Array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(1, null), $method->invoke(null,
            '../this', Array('flags' => Array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(1, 'a'), $method->invoke(null,
            '../a', Array('flags' => Array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(2, 'a', 'b'), $method->invoke(null,
            '../../a.b', Array('flags' => Array('advar' => 0, 'this' => 0, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(2, '[a]', 'b'), $method->invoke(null,
            '../../[a].b', Array('flags' => Array('advar' => 0, 'this' => 0, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(2, 'a', 'b'), $method->invoke(null,
            '../../[a].b', Array('flags' => Array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array('"a.b"'), $method->invoke(null,
            '"a.b"', Array('flags' => Array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
        $this->assertEquals(Array(null, 'id'), $method->invoke(null,
            'this.id', Array('flags' => Array('advar' => 1, 'this' => 1, 'parent' => 1), 'usedFeature' => Array('parent' => 0))
        ));
    }
    /**
     * @covers LightnCandy::parseTokenArgs
     */
    public function testOn_parseTokenArgs() {
        $method = new ReflectionMethod('LightnCandy', 'parseTokenArgs');
        $method->setAccessible(true);
        $this->assertEquals(Array(false, Array(Array(null))), $method->invoke(null,
            Array(0,0,0,0,0,0,''), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(true, Array(Array(null))), $method->invoke(null,
            Array(0,0,0,'{{{',0,0,''), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('b'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a  b'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('"b'), Array('c"'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a "b c"'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('"b c"'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a "b c"'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('[b'), Array('c]'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('[b'), Array('c]'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('b c'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('b c'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), 'q' => Array('b c'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a q=[b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('q=[b c'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a [q=[b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), 'q' => Array('[b'), Array('c]'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a q=[b c]'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), 'q' => Array('b'), Array('c'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a [q]=b c'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), 'q' => Array('"b c"'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'a q="b c"'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('(foo bar)'))), $method->invoke(null,
            Array(0,0,0,0,0,0,'(foo bar)'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
    }
    /**
     * @covers LightnCandy::tokenString
     */
    public function testOn_tokenString() {
        $method = new ReflectionMethod('LightnCandy', 'tokenString');
        $method->setAccessible(true);
        $this->assertEquals('b', $method->invoke(null,
            Array('a', 'b', 'c'), 1
        ));
        $this->assertEquals('c', $method->invoke(null,
            Array('a', 'b', 'c', 'd', 'e')
        ));
    }
    /**
     * @covers LightnCandy::validateStartEnd
     */
    public function testOn_validateStartEnd() {
        $method = new ReflectionMethod('LightnCandy', 'validateStartEnd');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invoke(null,
            array_fill(0, 8, ''), Array(), true
        ));
        $this->assertEquals(true, $method->invoke(null,
            range(0, 7), Array(), true
        ));
    }
    /**
     * @covers LightnCandy::validateOperations
     */
    public function testOn_validateOperations() {
        $method = new ReflectionMethod('LightnCandy', 'validateOperations');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invoke(null,
            Array(0, 0, 0, 0, 0, ''), Array(), Array()
        ));
        $this->assertEquals(2, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '^', '...'), Array('usedFeature' => Array('isec' => 1), 'level' => 0), Array(Array('foo'))
        ));
        $this->assertEquals(3, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '!', '...'), Array('usedFeature' => Array('comment' => 2)), Array()
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '/'), Array('stack' => Array(1), 'level' => 1), Array()
        ));
        $this->assertEquals(4, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('sec' => 3), 'level' => 0), Array(Array('x'))
        ));
        $this->assertEquals(5, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('if' => 4), 'level' => 0), Array(Array('if'))
        ));
        $this->assertEquals(6, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('with' => 5), 'level' => 0, 'flags' => Array('with' => 1)), Array(Array('with'))
        ));
        $this->assertEquals(7, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('each' => 6), 'level' => 0), Array(Array('each'))
        ));
        $this->assertEquals(8, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('unless' => 7), 'level' => 0), Array(Array('unless'))
        ));
        $this->assertEquals(9, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('blockhelpers' => Array('abc' => ''), 'usedFeature' => Array('bhelper' => 8), 'level' => 0), Array(Array('abc'))
        ));
        $this->assertEquals(10, $method->invoke(null,
            Array(0, 0, 0, 0, 0, ' ', '...'), Array('usedFeature' => Array('delimiter' => 9), 'level' => 0), Array()
        ));
        $this->assertEquals(11, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '#', '...'), Array('hbhelpers' => Array('abc' => ''), 'usedFeature' => Array('hbhelper' => 10), 'level' => 0), Array(Array('abc'))
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(0, 0, 0, 0, 0, '>', '...'), Array('basedir' => Array('.'), 'fileext' => Array('.tmpl'), 'usedFeature' => Array('unless' => 7), 'level' => 0), Array('test')
        ));
    }
    /**
     * @covers LightnCandy::addUsageCount
     */
    public function testOn_addUsageCount() {
        $method = new ReflectionMethod('LightnCandy', 'addUsageCount');
        $method->setAccessible(true);
        $this->assertEquals(1, $method->invoke(null,
            Array('usedCount' => Array('test' => Array())), 'test', 'testname'
        ));
        $this->assertEquals(3, $method->invoke(null,
            Array('usedCount' => Array('test' => Array('testname' => 2))), 'test', 'testname'
        ));
        $this->assertEquals(5, $method->invoke(null,
            Array('usedCount' => Array('test' => Array('testname' => 2))), 'test', 'testname', 3
        ));
    }
}
?>