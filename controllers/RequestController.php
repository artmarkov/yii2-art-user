<?php

namespace artsoft\user\controllers;

use artsoft\controllers\admin\BaseController;
use artsoft\models\Session;
use yii\data\ArrayDataProvider;

/**
 * RequestsController implements the CRUD actions for Requests model.
 */
class RequestController extends BaseController
{
    /**
     *
     * @inheritdoc
     */
    public $modelClass = 'artsoft\models\Request';
    public $modelSearchClass = 'artsoft\user\models\search\RequestSearch';
    public $disabledActions = ['view','create','update'];
}