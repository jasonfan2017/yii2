<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
//use yii\web\Request;
include_once("header.php");
?>
<?=Html::jsFile('../../js/jquery.dataTables.min.js')?>
<?=Html::cssFile('../../css/jquery.dataTables.min.css')?>
  <script type="text/javascript" language="javascript" class="init">
	

	$(document).ready(function() {
		//$('#example').DataTable();
		var table = $('#example').DataTable();
	 
	table
		.order( [ 1, 'asc' ] )
		.draw();
	} );


</script>

<div id="page-wrapper" class="page-wrapper">
	<div class="container">
		<section>
		<h3>Manage Historical Reports</h3>
		
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Time</th>
                <th>Unit Type</th>
				<th>Project Name</th>
				<th>Report</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Time</th>
                <th>Unit Type</th>
				<th>Project Name</th>
				<th>Report</th>
            </tr>
        </tfoot>
        <tbody>
<tr><td>bb</td><td>bb</td><td>cc</td><td>dd<td>eee</a></td></tr>
<?php foreach ($countries as $country): ?>
<tr><td><?= Html::encode("{$country->name} ({$country->code})") ?>:</td>
    <td><?= $country->population ?></td><td>cc</td><td>dd<td>eee</td>
</tr>
<?php endforeach; ?>           
        </tbody>
    </table>
	
		</section>
	</div>

</ul>
<form action="?r=site/getdata" method="post">  
<input type="text" class="form-control col-lg-2" name="belongs_to" />

<input type="submit" class="btn btn-primary" value="提交" /> 
</form>

<?php 
$aaa=Yii::$app->request->get('belongs_to');
echo $aaa;
//var_dump($aaa);
$query = new \yii\db\Query();
$query->select('id, username') 
      ->from('user')
      ->limit(10);

$command = $query->createCommand();
$sql = $command->sql;
$rows = $command->queryAll(); 
//echo $rows[0]['username'];
//var_dump($rows);
?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

</body>

</html>
