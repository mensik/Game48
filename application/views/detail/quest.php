<h1><?= $quest->name?></h1>
<p><?= $quest->description ?></p>

<div class="left_block">
<h2>Nepřátelé</h2>
<table>
<?php foreach ($enemies as $enemy) {
	?>
		<tr>
			<td><strong>
				<?= $enemy['amount'] ?> x
			</strong></td>
			<td>
				<img src="<?= url::base() ?>images/u<?= $enemy['units_id'] ?>.png">
			</td>
		</tr>
	<?php } ?>
</table>
</div>

<div class="right_block">
<h2>Odměna</h2>
<table>
	<?php if ($quest->reward_gold > 0) {?>
		<tr>
			<td><strong>Zlato: </strong></td>
			<td><?= $quest->reward_gold?></td>
		</tr>	
	<?php } 
	
	foreach ($structures as $structure) {
	?>
		<tr>
			<td><strong>
				<?= $structure['amount'] ?> x
			</strong></td>
			<td>
				<img src="<?= url::base() ?>images/s<?= $structure['id'] ?>_1.png">
			</td>
		</tr>
	<?php } 
	
	foreach ($units as $unit) {
	?>
		<tr>
			<td><strong>
				<?= $unit['amount'] ?> x
			</strong></td>
			<td>
				<img src="<?= url::base() ?>images/u<?= $unit['id'] ?>.png">
			</td>
		</tr>
	<?php } ?>
</table>
</div>
