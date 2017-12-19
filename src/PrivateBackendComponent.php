<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 11.03.2017
 */
namespace skeeks\cms\personal;
use skeeks\cms\backend\BackendComponent;
use yii\base\Theme;

/**
 * Class PrivateBackendComponent
 * @package common\components
 */
class PrivateBackendComponent extends BackendComponent
{
    /**
     * @var string
     */
    public $controllerPrefix    = "personal";

    /**
     * @var array
     */
    public $urlRule             = [
        'urlPrefix' => '~personal'
    ];

    /**
     * Default pjax options
     *
     * @var array
     */
    public $pjax                        =
    [
        'timeout' => 30000
    ];

    protected $_menu = [
        'data' => [


            'services' =>
            [
                'name' => 'Услуги',

                'items' => [
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Хостинг',
                    ],
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Домены',
                    ],
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Продвижение',
                    ],
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Разработка',
                    ],
                ],
            ],

            'pay' =>
            [
                'name' => 'Оплата и анкеты',

                'items' => [
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Анкеты',
                    ],
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Оплаты',
                    ],
                ],
            ],

            'personal' =>
            [
                'name' => 'Настройки',

                'items' => [
                    [
                        'url'   => ['/personal-info/index'],
                        'name'   => 'Личные настройки',
                    ],
                ],
            ],
        ]
    ];

    public function run()
    {
        \Yii::$app->view->theme = new Theme([
            'pathMap' =>
            [
                '@app/views' =>
                [
                    '@frontend/templates/backend',
                    '@frontend/templates/default',
                ]
            ]
        ]);

        if ($this->pjax)
        {
            \Yii::$container->set('yii\widgets\Pjax', $this->pjax);
        }

        parent::run();
    }


}