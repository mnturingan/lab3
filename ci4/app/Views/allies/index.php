<div class="wrapper">
<h2><?= esc($title) ?></h2>

<?php if (! empty($allies) && is_array($allies)): ?>

    <?php foreach ($allies as $allies_item): ?>

        <h3><?= esc($allies_item['title']) ?></h3>

        <div class="main">
            <h3><?= esc($allies_item['firstname']) ?> <?= esc($allies_item['lastname']) ?> </h3>
            <p><? = esc($allies_item['email']) ?> </p>
            <p><? = esc($allies_item['website']) ?> </p>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Registered Allies</h3>

    <p>Unable to find any Allies list for you.</p>

<?php endif ?>
</div>
