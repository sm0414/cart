<?php

namespace app\controllers;

use app\models\Products;

class StoreController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $products = Products::find()->all();

        return $this->render('index', ['products' => $products]);
    }

    public function actionAddToCart($id)
    {
        return $this->render('index');
    }

}
