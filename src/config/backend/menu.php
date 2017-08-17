<?php

/**
 * @author Denis Utkin <dizirator@gmail.com>
 * @link   https://github.com/dizirator
 */

return [
    'content' => [
        'label' => Yii::t('setrun/content', 'Content'),
        'url'   => '#',
        'icon'  => 'sticky-note',
        'items' => [
            [
                'label'      => Yii::t('setrun/content', 'Categoties'),
                'url'        => ['/content/backend/category/index'],
                'controller' => 'backend/content-category',
            ],
            [
                'label'      => Yii::t('setrun/content', 'Pages'),
                'url'        => ['/content/backend/page/index'],
                'controller' => 'backend/content-page',
            ],
            [
                'label'      => Yii::t('setrun/content', 'Custom fields'),
                'url'        => ['/content/backend/custom-fields/index'],
                'controller' => 'backend/content-fields',
            ],

        ]
    ]
];