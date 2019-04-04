<?php

namespace artsoft\user\widgets\dashboard;

use artsoft\models\User;
use artsoft\models\UserVisitLog;
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
           
            $visits = UserVisitLog::find()->all();
           
            foreach ($visits as $visit) {
                if (!empty($visit->browser))
                {
                    $values[] = $visit->browser;
                }                
            }
                 $total_count = count($values);
                 
           foreach (array_count_values($values) as $label => $count) {
                $labels[] = $label;
                $data[] = $count;
                $transparent = round($count/$total_count, 2);
                $backgroundColor[] = 'rgba(77, 117, 133, ' . $transparent . ')';
            }
//                 echo '<pre>' . print_r($backgroundColor, true) . '</pre>';
            return $this->render('users-browser', [
                        'height' => $this->height,
                        'width' => $this->width,
                        'position' => $this->position,
                        'backgroundColor' => $backgroundColor,
                        'data' => $data,
                        'labels' => $labels,
            ]);
        }
    }
}