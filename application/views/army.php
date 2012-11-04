 <h2>Admáda</h2>
 <table class="gridtable">
 	<tr>
 		<th>Jméno</th>
 		<th>Životy</th>
 		<th>Spotřeba jídla</th>
 		<th>Žold</th>
 		<th>Akce</th>
 	</tr>
 <?php foreach ($owned_units as $unit) {?>
	<tr>
		<td><?= $unit['name']?></td>
		<td><?= $unit['zivoty']?></td>
		<td><?= $unit['food']?></td>
		<td><?= $unit['gold']?></td>
		<td><?= html::anchor('army/disband' . url::query(array('id'=>$unit['id'])), 'Rozpusť')?>
			<?php if ($unit['heal_price'] > 0) echo html::anchor('army/heal'.url::query(array('id'=>$unit['id'])), 'Uzdrav('.$unit['heal_price'].')') ?>
		</td>
	</tr>
 <?php }?>
 </table>
 
<h3>Nákup</h3>
 
 <table class="gridtable">
 	<tr><td class="empty"></td><th>ÚČ</th><th>Zranění</th><th>OČ</th><th>Cena</th><th>Operace</th></tr>
 	<?php foreach ($units as $unit) {?>
 		<tr>
 			<td><?= $unit->name; ?></td>
 			<td><?= $unit->uc?></td>
 			<td><?= $unit->zraneni?></td>
 			<td><?= $unit->oc?></td>
 			<td><?= $unit->price?></td>
 			<td><?= html::anchor('detail/unit' . URL::query(array('id'=>$unit->id)), 'Detail') ?>
 				
 				<?php 
 				if ($user->gold >= $unit->price) echo html::anchor('army/buy_unit' . URL::query(array('id' => $unit->id)), 'Kup');
 				?></td>
 		</tr>	
 	<?php }?>
 </table>
 
<h2>Bojové úkoly</h2>
<table class="gridtable">
	<?php foreach ($quests as $quest) {?>
		<tr>
			<td><?= $quest->name?></td>
			<td><?= html::anchor('detail/quest' . URL::query(array('id'=>$quest->id)), 'Detail')?></td>
			<td><?php if ($user->has_units() && $user->fights_count == 0) echo html::anchor('fight/init' . URL::query(array('id'=>$quest->id)), 'Zaútoč'); ?></td>
		</tr>
	<?php }?>
</table>
