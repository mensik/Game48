<h2>Create a New User</h2>
<? if ($message) : ?>
<h3 class="message"> <?= $message; ?> </h3>
<? endif; ?>

<?= Form::open('user/create'); ?>

<table>
    <tr>
        <td> <?= Form::label('username', 'Username'); ?> </td><td>
        <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
        <div class="error">
            <?= Arr::get($errors, 'username'); ?>
        </div></td>
    </tr>
    <tr>
        <td>
        <?= Form::label('email', 'Email Address'); ?>
        </td><td>
        <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
        <div class="error">
            <?= Arr::get($errors, 'email'); ?>
        </div></td>
    </tr>
    <tr>
        <td>
        <?= Form::label('password', 'Password'); ?>
        </td><td>
        <?= Form::password('password'); ?>
        <div class="error">
            <?= Arr::path($errors, '_external.password'); ?>
        </div></td>
    </tr>
    <tr>
        <td>
        <?= Form::label('password_confirm', 'Confirm Password'); ?>
        </td><td>
        <?= Form::password('password_confirm'); ?>
        <div class="error">
            <?= Arr::path($errors, '_external.password_confirm'); ?>
        </div></td>
    </tr>

</table>

<?= Form::submit('create', 'Create User'); ?>
<?= Form::close(); ?>

<p>
    Or <?= HTML::anchor('user/login', 'login'); ?> if you have an account already.
</p>
