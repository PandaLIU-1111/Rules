<?php


use RuleX\RuleX\Rules;

class RulesTest
{
    public function testRules()
    {
        $rule = new Rules();
        $ruleFile = BASE_PATH . '/test/Cases/drl/test.drl';
        $rule->initRulesMap($ruleFile);
        $data = [
            'user' => [
                'age' => '1',
                'name' => '小明',
            ],
            'des' => ''
        ];


        var_dump($data);
        var_dump('===============before');
        $rule->import($data);
        $rule->execute('testRule');
        var_dump('===============after');
        var_dump($rule->getData());
    }
}
