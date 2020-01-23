<?php
    use yii\grid\GridView;
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' =>"mostrando {begin} - {end} de {totalCount} elementos",
    'columns' =>[
        ['class'=>'Yii\grid\SerialColumn'],
        'id,',
        'texto',
    ],
]);?>