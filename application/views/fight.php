<h1>BOJ!!!</h1>
<div style="float: left; width: 320px">
<?php
	foreach ($units as $unit) {
		if (!$unit['is_enemy']) { ?>
			<div  id="<?= $unit['poradi'] ?>" class="unit">
			<img src='<?= url::base() ?>images/u<?= $unit['unit_id'] ?>.png' class="u<?= $unit['id'] ?>">
			<div class="info"></div>
			<p class="zivoty"><?= $unit['zivoty'] ?></p>
			</div>
		<?}
				}
			?>
</div>

<div style="float: right; width: 320px">
<?php
	foreach ($units as $unit) {
		if ($unit['is_enemy']) { ?>
			<div  id="<?= $unit['poradi'] ?>"  class="unit" onclick="attack(<?= $unit['id']?>);" >
			<img src='<?= url::base() ?>images/u<?= $unit['unit_id'] ?>.png' class="u<?= $unit['id'] ?>">
			<div class="info"></div>
			<p class="zivoty"><?= $unit['zivoty'] ?></p>
			</div>
		<?}
				}
			?>
</div>
<div style="clear: both"></div>
 
<?php
	if (!$player_turn) {
		echo html::anchor('fight/turn', 'Tah soupeře');
	}
?>


<script>
		function refresh(data) {
			
			if (data['status'] == 'end') {
				$('div.content').html(data['content']);
			} else {
			
			//var messages = data['messages'];
	    	var units = data['units'];
	    	//$('ul#messages').text("");

			//for (var key in messages) {
			//	$("ul#messages").prepend("<li>"+ messages[key] +"</li>");
			//}

			for (var key in units) {
				$('div#' + key + ' p.zivoty').text(units[key].zivoty);
				if (units[key].zivoty == 0) {
					$('div#' + key + ' div.info').html("<img src='<?= url::base()?>images/skull.png' class='over'>");
					$('div#' + key ).attr('onclick','');
				}
			}
			
			if ('utok' in data) {
				$('div#' + data['utok']['target'] + ' div.info').html("<span class='over'>"+ data['utok']['dmg']+"</span>");
				if (units[data['utok']['target']].zivoty > 0) {
					setTimeout(function() {$('div#' + data['utok']['target'] + ' div.info').html("");},1000);
				} else {
					setTimeout(function() {$('div#' + data['utok']['target'] + ' div.info').html("<img src='<?= url::base()?>images/skull.png' class='over'>");},1000);
				}
			}
			
			$('div').removeClass('to_move');
			$('div#'+ data['unit_to_move']).addClass('to_move');
			
			if (!data['player_turn']) setTimeout(function() {attack();},200);
			}
		}

	    function attack(id) {
	    	
	    	var data = null;
	    	if (id) {
	    		data = {target: id};
	    	}
	    	
	    	$.getJSON("<?= url::site('fight/turn')?>",data, function(data){
	    		refresh(data);
	    	});
	    }
	    
	    function reload() {
	    	$.getJSON("<?= url::site('fight/refresh')?>", null,function(data) {
	    		refresh(data);
		});
	    }
	    
	    reload();
</script>