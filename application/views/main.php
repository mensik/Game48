    <h1>Náčelník <?= $user->username ?></h1>
    
    <div class="left_block">
    <h3>Přehled</h3>
    <table>
        <tr><td><strong>Populace:</strong></td><td><?= $user->population; ?></td></tr>
        <tr><td><strong>Hlad/blahobyt:</strong></td><td><?= $user->pop_change; ?></td></tr>
        <tr><td><strong>TU:</strong></td><td><?= $user->tu; ?></td></tr>
        <tr><td><strong>Zlato:</strong></td><td><?= $user->gold; ?></td></tr>
        
    </table>
    </div>
    
    <div class="right_block"> 
    <h3>Výhled do příštího kola</h3>
    <table>
    	<tr><td><strong>Výdělek: </strong></td><td id='vydelek'></td></tr>
    	<tr><td><strong>Přebytek jídla: </strong></td><td id='diffFood'></td></tr>
    </table>
    </div>
    
    <div style="clear: both"></div>
    
    <h2>Dělba práce</h2>
    <?=  Form::open('main/turn'); ?>
        <table class="big_zebra">
            <tr><td style="width: 125px">Volná síla</td><input id='freePopulation' name='freePopulation' type="hidden" size=2 readonly="readonly" value="<?= $user->population; ?>"/><td style="width: 20px"></td>
                <td>
            			    <?php 
								for ($i = 0; $i < $user->population; $i++) {?>
                			    <img src="<?= url::base() ?>images/man_1.png" id="freePop">
              				<?php } ?>
            				</td>
            </tr>
            <tr class="sberBobuli"><td>Sběr bobulí</td>
                <?= Form::input('sberBobuli', 0, array('type' => 'hidden', 'readonly' => 'readonly', 'id' => 'sberBobuli', 'size' => 2)); ?>
                <td>
                            <img class="plus" src="<?= url::base() ?>images/plus.png" onclick="changeQuantity('sberBobuli',1);">
                  
                            <img class="minus" src="<?= url::base() ?>images/minus.png" onclick="changeQuantity('sberBobuli',-1);">
                </td>
                <td><?php 
								for ($i = 0; $i < $user->population; $i++) {?>
                			    <img src="<?= url::base() ?>images/sberBobuli_0.png" id="sberBobuli">
              				<?php } ?></td></tr>
            <tr class="sberKamenu"><td>Sběr drahých kamenů</td><?= Form::input('sberKamenu', 0, array('type' => 'hidden', 'readonly' => 'readonly', 'id' => 'sberKamenu', 'size' => 2)); ?><td>
                            <img class="plus" src="<?= url::base() ?>images/plus.png" onclick="changeQuantity('sberKamenu',1);">
                            <img class="minus" src="<?= url::base() ?>images/minus.png" onclick="changeQuantity('sberKamenu',-1);"></td>
                            <td>
            			    <?php 
								for ($i = 0; $i < $user->population; $i++) {?>
                			    <img src="<?= url::base() ?>images/sberKamenu_0.png" id="sberKamenu">
              				<?php } ?>
            				</td>
                            </tr>
            <?php foreach($built_structures as $s) {?>
            <tr class="s<?= $s['id'] ?>"><td><?= $s['budova'] ?></td><input id="s<?= $s['id'] ?>" name="s<?= $s['id'] ?>"value=0 type="hidden" readonly="readonly" ><td>
                            <img class="plus" src="<?= url::base() ?>images/plus.png" onclick="changeQuantity('s<?= $s['id'] ?>',1);">
                            <img class="minus" src="<?= url::base() ?>images/minus.png" onclick="changeQuantity('s<?= $s['id'] ?>',-1);"></td>
                            
                            <td>
            			    <?php
            			    	
								
								for ($i = 0; $i < $s['pocet']; $i++) {?>
                			    <img src="<?= url::base() ?>images/s<?= $s['id'] ?>_0.png" id="s<?= $s['id'] ?>">
              				<?php } ?>
            				</td>
                            </tr>
       
                            <?php } ?>
        </table>
        <?php
		if ($user->tu > 0)
			echo Form::submit('index', 'Proveď kolo');
 ?>
        <?= Form::close(); ?>
    </form>
   
    <h2>Obchod</h2>
    
    <h3>Budovy</h3>
    <table class="gridtable">
        <tr><td class="empty"></td><th>Jídlo</th><th>Zlato</th><th>Cena</th><th>Operace</th></tr>
    <?php foreach ($structures as $struct) {?>
        <tr>
            <td><?= $struct->name; ?></td>
            <td><?= $struct->food_prod; ?></td>
            <td><?= $struct->gold_prod; ?></td>
            <td><?= $struct->price; ?></td>
            <td> <?php
			if ($user->gold >= $struct->price)
				echo html::anchor('main/buy_structure' . URL::query(array('id' => $struct->id)), 'Postav');
            ?></td>
        </tr>
    <?php } ?>
 </table>
 
 <script>
 
 	$.fn.serializeObject = function()
	{
    	var o = {};
    	var a = this.serializeArray();
	    $.each(a, function() {
	        if (o[this.name] !== undefined) {
            	if (!o[this.name].push) {
            	    o[this.name] = [o[this.name]];
        	    }
    	        o[this.name].push(this.value || '');
	        } else {
    	        o[this.name] = this.value || '';
	        }
    	});
    	return o;
	};

    function setup() {
		document.structures = new Object();
		document.structures.sberBobuli = 1000000;
		document.structures.sberKamenu = 1000000;
		
		$("tr img.minus").css("visibility","hidden");
		
		<?php foreach ($structures as $struct) {?>document.structures.s<?= $struct->id; ?>=0;
		<?php } ?>
		<?php foreach ($built_structures as $struct) {?>
        document.structures['s<?= $struct['id'] ?>']=<?= $struct['pocet'] ?>;
        <?php } ?>
        <?php
		
		$peopleAdded = 0;
		foreach ($lastgames as $game) {
			if ($game->amount + $peopleAdded <= $user->population) {
				echo 'changeQuantity("' . $game->field . '",' . $game->amount . ', false);';
				$peopleAdded += $game->amount;
			}
		}
		?>
		
		getTurnChange();
		
	}

	function changeQuantity(variable, quantity, refresh) {
		freePop = document.getElementById('freePopulation').value;

		if (quantity > 0) {
			if (quantity <= freePop) {
				if (parseInt(document.getElementById(variable).value) + quantity <= document.structures[variable]) {
					$("img#" + variable).attr('src', '<?= url::base() ?>images/'+ variable +'_0.png');
					$("img#freePop").attr('src', '<?= url::base() ?>images/man_0.png');
			
					document.getElementById('freePopulation').value = freePop - quantity;
					document.getElementById(variable).value = parseInt(document.getElementById(variable).value) + quantity;

					$("img#"+variable+":lt("+ document.getElementById(variable).value +")").attr('src', '<?= url::base() ?>images/'+variable+'_1.png');
					$("img#freePop:lt("+ document.getElementById('freePopulation').value+")").attr('src', '<?= url::base() ?>images/man_1.png');
					
					
					if (document.getElementById('freePopulation').value == 0) {
						$("tr img.plus").css("visibility","hidden");
					}
					
					if (parseInt($('#'+variable).attr('value')) > 0) {
						$("tr."+variable+" img.minus").css("visibility","visible");
					}
					

				} else {
					alert('Nejsou kapacity');
				}
			} else {
				alert('Nejsou lidi');
			}
		} else {
			if (-quantity <= parseInt(document.getElementById(variable).value)) {
				$("img#" + variable).attr('src', '<?= url::base() ?>images/'+ variable +'_0.png');

				document.getElementById(variable).value = parseInt(document.getElementById(variable).value) + quantity;
				document.getElementById('freePopulation').value = freePop - quantity;

				$("img#"+variable+":lt("+ document.getElementById(variable).value +")").attr('src', '<?= url::base() ?>images/'+variable+'_1.png');
				$("img#freePop:lt("+ document.getElementById('freePopulation').value+")").attr('src', '<?= url::base() ?>images/man_1.png');

				if (parseInt($('#'+variable).attr('value')) == 0) {
					$("tr."+variable+" img.minus").css("visibility","hidden");
				}
				
				if (document.getElementById('freePopulation').value != 0) {
						$("tr img.plus").css("visibility","visible");
				}
			} else {
				alert('Nejsou lidi');
			}
		}
		
		if (refresh == null || refresh == true){
			getTurnChange();
		}
		
	}

	function getTurnChange() {
		$.getJSON("<?= url::site('main/test')?>", $('form').serializeObject(),function($data) {
			$('td#vydelek').text($data['vydelek']);
			$('td#diffFood').text($data['diffJidla']);
		});
	}
	
    $(document).ready(setup());
</script>

