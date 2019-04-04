<?php

namespace artsoft\user\widgets\dashboard;

use artsoft\models\User;
use artsoft\user\models\search\UserSearch;
use artsoft\widgets\DashboardWidget;
use Yii;

class UsersBrowser extends DashboardWidget
{
   
    /**
     * Post index action
     */
    public $indexAction = 'user/default/index';

   
    public function run()
    {
       
        if (User::hasPermission('viewUsers')) {

           
            return $this->render('users-browser', [
                'height' => $this->height,
                'width' => $this->width,
                'position' => $this->position
            ]);


        }
    }
}