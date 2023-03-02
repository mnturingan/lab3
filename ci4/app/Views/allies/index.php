<div class="wrapper">
<h2><?= esc($title) ?></h2>

<?php if (! empty($allies) && is_array($allies)): ?>

    <?php foreach ($allies as $allies_item): ?>
        
        <h3><?= esc($allies_item['id']) ?> - <?= esc($allies_item['firstname']) ?> <?= esc($allies_item['lastname']) ?></h3>
        <div class="main">
        <p>Email: <?= esc($allies_item['email']) ?> <br>
        <p>Website: <?= esc($allies_item['website']) ?> <br>
        <p>Gender: <?= esc($allies_item['gender']) ?> <br>
        </div>
        

    <?php endforeach ?>

<?php else: ?>

    <h3>No Registered Allies</h3>

    <p>Unable to find any Allies list for you.</p>

<?php endif ?>
</div>
