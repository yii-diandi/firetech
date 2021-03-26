<?php

 return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => ['diandi_task/task'],//模块名称/控制器方法
        'pluralize' => false,
        'extraPatterns' => [
            'POST uptable' => 'uptable',//请求方式 请求方法，映射方法
        ],
    ]
 ];
