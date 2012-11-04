<h1>Vítězství</h1>
Tvá armáda smetla protivníka z povrchu země. Přitom ukořistila <?php
	if ($gold > 0)
		echo '<strong>' . $gold . '</strong> zlata a';
?>

<p>

<?php
	foreach ($structures as $str) {?>
	<img src="<?= url::base().'images/s'.$str['id'].'_1.png'?>"> <br>	
<?php		
	}
?>

<?php
	foreach ($units as $u) {?>
	<img src="<?= url::base().'images/u'.$u['id'].'.png'?>"> <br>	
<?php		
	}
?>

</p>