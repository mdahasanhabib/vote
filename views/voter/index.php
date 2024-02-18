<?php

use app\models\Voter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VoterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Voters';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-header-left">
						<h3><?= Html::encode($this->title) ?></h3>
						</br>
						<p>
							<?= Html::a('Create Voter', ['create'], ['class' => 'btn btn-success']) ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->

	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="user-status table-responsive latest-order-table">
							<?= GridView::widget([
								'dataProvider' => $dataProvider,
								'filterModel' => $searchModel,
								'columns' => [
									['class' => 'yii\grid\SerialColumn'],

									'id',
									'company',
									'name',
									'ispab_member',
									'voter_no',
									[
										'label' => 'Call Done',
										'headerOptions' => ['style' => 'color:#ff4c3b'],
										'content' => function ($model) {
											return ($model->call_done)?'Yes':'Call';
										}
									],
									[
										'label' => 'Visit Done',
										'headerOptions' => ['style' => 'color:#ff4c3b'],
										'content' => function ($model) {
											return ($model->visit_done)?'Yes':'Visit';
										}
									],
									//'mobile1',
									//'mobile2',
									//'email:email',
									//'thana',
									//'district',
									//'address',
									//'license',
									//'date',
									[
										'class' => ActionColumn::className(),
										'urlCreator' => function ($action, Voter $model, $key, $index, $column) {
											return Url::toRoute([$action, 'id' => $model->id]);
										 }
									],
								],
							]); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
