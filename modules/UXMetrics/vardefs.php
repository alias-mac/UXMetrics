<?php

$dictionary['UXMetric'] = array(
    'table' => 'uxmetrics',
    'fields' => array(
        // because email would be caught by sugar for emails usage :(
        'email_addr' => array(
            'required' => false,
            'name' => 'email_addr',
            'vname' => 'LBL_EMAIL',
            'type' => 'varchar',
            'len' => 255,
        ),
        'type' => array(
            'required' => false,
            'name' => 'type',
            'vname' => 'LBL_TYPE',
            'type' => 'int',
            'len' => 5,
        ),
        'clicks' => array(
            'required' => false,
            'name' => 'clicks',
            'vname' => 'LBL_CLICKS',
            'type' => 'int',
            'len' => 5,
        ),
        'time' => array(
            'required' => false,
            'name' => 'time',
            'vname' => 'LBL_TIME',
            'type' => 'decimal',
            'len' => '16,2',
        ),
    ),
    'indices' => array(
        array(
            'name' => 'email_test_type',
            'type' => 'index',
            'fields' => array('email_addr', 'type')
        ),
    ),
    'relationships' => array(),
);

VardefManager::createVardef('UXMetrics', 'UXMetric', array('basic',
    'team_security',
));