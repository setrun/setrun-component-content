<?php

/**
 * @author Denis Utkin <dizirator@gmail.com>
 * @link   https://github.com/dizirator
 */

return [
    'components' => [
        'i18n' => [
            'translations' => [
                'setrun/content' => [
                    'class'    => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@setrun/content/messages',
                    'fileMap' => [
                        'setrun/content' => 'content.php',

                    ]
                ]
            ]
        ],
    ],
    'modules' => [
        'content' => 'setrun\content\Module'
    ]
];