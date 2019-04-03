<?php

namespace artsoft\user\widgets\dashboard;

use artsoft\models\User;
use artsoft\models\UserVisitLog;
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

            $users = UserVisitLog::find()->all();
           
            foreach ($users as $user) {
                 //echo '<pre>' . print_r($user->geoLocation, true) . '</pre>';
                $values[] = $user->geoLocation['country']['iso'];
                $markers[] = [
                    'latLng' => [ 
                        $user->geoLocation['city']['lat'], 
                        $user->geoLocation['city']['lon']
                    ],
                    'name' => empty($user->geoLocation['city']['name_en']) ? $user->geoLocation['country']['name_en'] : $user->geoLocation['city']['name_en'], 
                ];
            }
           // echo '<pre>' . print_r($markers, true) . '</pre>';
            return $this->render('users-visit-map', [
                'height' => $this->height,
                'width' => $this->width,
                'position' => $this->position,
                'users' => $users,
                'values' => array_count_values($values),
                'markers' => $markers,
            ]);

        }
    }

}