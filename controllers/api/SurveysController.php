<?php

namespace kouosl\survey\controllers\api;

use kouosl\survey\models\Surveys;
use Yii;

class SurveysController extends DefaultController {
	
	public $modelClass = 'kouosl\survey\models\Surveys';
	
	public function actions() {
		$actions = parent::actions ();
	
		return $actions;
	}
	
	public function actionView($id){

		$model = Surveys::findOne($id);
		
		if(!$model)
			return ['status' => '404','message' => 'Not Found'];

		return $model;
	}
	
	public function actionIndex(){
		return Surveys::find()->all();
	}
	
	public function actionCreate(){

		$postParams = yii::$app->request->post();
		
		$model = new Surveys();
	
		
		if($model->load($postParams,'') && $model->validate()){
			if($model->save())
			    return ['status' => 1];
			else
			    return ['status' => 500];
		}
		else
			return ['status' => 100,'message' => 'Parametre Hatası'];
		
	}
	
	public function actionUpdate($id){

		$postParams = yii::$app->request->post();
		
		$model = Surveys::findOne($id);

		if($model = $this->LoadModel($model, $postParams)){
				if($model->save())
					return ['status' => 1];
				else 
					return ['status' => 101,'message' => $model->errors];
		}else
		    return ['status' => 100];
	}
	
	public function actionDelete($id){
		
		if(Surveys::findOne($id)->delete())
			return ['status' => 1];
		else
			return ['stauts' => 100];
	}
	
	public function LoadModel($model,$params)
	{
		foreach ($params as $key => $value)
			$model->hasAttribute($key) ? $model->$key = $value : " "; 
			
		return $model;
	}
	
	
	
	
	
	
	
	
	
	
}