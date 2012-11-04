<h1><?= $unit->name?></h1>

<div class="left_block">

    <table>
        <tr><td><strong>ÚČ</strong></td><td><?= $unit->uc?></td></tr>
        <tr><td><strong>Zranění</strong></td><td><?= $unit->zraneni ?></td></tr>
        <tr><td><strong>OČ</strong></td><td><?= $unit->oc ?></td></tr>
        <tr><td><strong>Životy</strong></td><td><?= $unit->zivoty ?></td></tr>
        <tr><td><strong>Iniciativa</strong></td><td><?= $unit->iniciativa ?></td></tr>
        <tr><td><strong>Žold</strong></td><td><?= $unit->upkeep_gold ?></td></tr>
        <tr><td><strong>Strava</strong></td><td><?= $unit->upkeep_food ?></td></tr>
    </table>
    </div>
    
<div class="right_block"> 
    <img src="<?= url::base() ?>images/u<?= $unit->id ?>.png">
    </div>
    
    <div style="clear: both; margin-top: 50px"> </div>
<h3>Popis jednotky</h3>
<p><?= $unit->description?></p>