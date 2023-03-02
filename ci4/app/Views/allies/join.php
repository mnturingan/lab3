<div class="wrapper">
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="join" method="post">
    <?= csrf_field() ?>

    <label for="firstname">First Name</label>
    <input type="input" name="firstname" value="<?= set_value('firstname') ?>">
    <br>

    <label for="lastname">Last Name</label>
    <input type="input" name="lastname" value="<?= set_value('lastname') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label for="gender">Gender</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
    <br>

    <input class="primary-cta" type="submit" name="submit" value="Join the alliance">
    <br>
</form>
</div>
