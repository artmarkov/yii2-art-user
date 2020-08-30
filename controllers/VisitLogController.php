<?php

namespace artsoft\user\controllers;

use artsoft\controllers\admin\BaseController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class VisitLogController extends BaseController
{
    /**
     *
     * @inheritdoc
     */
    public $modelClass = 'artsoft\models\UserVisitLog';

    /**
     *
     * @inheritdoc
     */
    public $modelSearchClass = 'artsoft\user\models\search\UserVisitLogSearch';

    /**
     *
     * @inheritdoc
     */
  
    public $disabledActions = ['update'];

    public $tabMenuId = 'log-tabmenu';

}