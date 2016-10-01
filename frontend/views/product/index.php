<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
?>

<?php

echo ListView::widget([
    'dataProvider' => $listDataProvider,
    'itemView' => '_list',

    'options' => [
        'tag' => 'div',
        'class' => 'col-sm-12 product-list',
        'id' => 'product-list',
    ],

    'itemOptions' => [
        'tag' => 'div',
        'class' => 'col-sm-4 product-item',
    ],

    'emptyText' => 'List is empty.',

    'pager' => [
        'firstPageLabel' => 'First',
        'lastPageLabel' => 'Last',
        'nextPageLabel' => 'Next',
        'prevPageLabel' => 'Previous',
        'maxButtonCount' => 5,
    ],

]);
