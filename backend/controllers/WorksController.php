<?php
namespace backend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class WorksController extends Controller
{
    
    public function index(){
        $this->render('index');
    }

}