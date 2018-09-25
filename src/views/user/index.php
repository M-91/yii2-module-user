<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use marcelodeandrade\UserModule\Module;

/* @var $this yii\web\View */
/* @var $searchModel marcelodeandrade\UserModule\models\search\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Module::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password_hash',
            'email:email',
            'auth_key',
            //'password_reset_token',
            //'status',
            //'superadmin',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
