<?php

namespace app\controllers;

use app\forms\RequestForm;
use app\models\Request;

class RequestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new RequestForm();

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {

            $request = new Request();
            $request->city = $model->city;
            $request->second_name = $model->second_name;
            $request->name = $model->name;
            $request->patronymic = $model->patronymic;
            $request->phone = $model->phone;
            $request->email = $model->email;
            $request->birthday = $model->birthday;
            $request->subscription = $model->subscription;
            $request->accept_conditions = $model->accept_conditions;

            $request->date_request = date("Y-m-d H:i:s");
            $request->ip = $_SERVER['REMOTE_ADDR'];
            $request->headers = json_encode($_SERVER);


            $request->save();
            return 'OK';
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        $request = Request::findOne($id);
        echo ($request->getHeader('REMOTE_ADDR'));die;
    }

}
