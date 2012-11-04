<ul>
    <li>
    	<?= html::anchor('main','Správa města') ?>
    </li>
    <li>
    	<?= html::anchor('army','Armáda') ?>
    </li>
    <li>
    	<?= html::anchor('chart','Srovnání') ?>
    </li>
    <li>
        <?= html::anchor('user/logout','Logout') ?>
    </li>
    <?php if (isset($user) && $user->is_tester == 1) { ?>
    <li>
        <?= html::anchor('main/reset','Reset') ?>
    </li>
    <li>
        <?= html::anchor('main/addTU','Doplň kola') ?>
    </li>
    <?php } ?>
</ul>