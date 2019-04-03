<?php

namespace artsoft\user\widgets\dashboard;

use artsoft\models\User;
use artsoft\user\models\search\UserSearch;
use artsoft\widgets\DashboardWidget;
use Yii;

class UsersVisitMap extends DashboardWidget
{ 
 /**
     * Most recent post limit
     */
    public $recentLimit = 5;

    /**
     * Post index action
     */
    public $indexAction = 'user/default/index';

    /**
     * Total count options
     *
     * @var array
     */
    public $options;

    public function run()
    {
      
        if (User::hasPermission('viewUsers')) {

            $searchModel = new UserSearch();
            $formName = $searchModel->formName();

            $recent = User::find()->orderBy(['id' => SORT_DESC])->limit($this->recentLimit)->all();

            return $this->render('users-visit-map', [
                'height' => $this->height,
                'width' => $this->width,
                'position' => $this->position,
                'users' => $this->options,
                'recent' => $recent,
            ]);

        }
    }

}