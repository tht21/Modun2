<?php require_once APPROOT . '/views/includes/header.php';?>
<div class="container">
    <a class="btn green" href="<?= URLROOT ?>/Home/create">
        Create
    </a>

    <?php 
    if(!empty($data['user'])):
    foreach ($data['user'] as $user) : extract($user); ?>
        <div class="container-item">

            <a class="btn red" href="<?= URLROOT ?>/Home/delete/<?= $id ?>">
                Delete
            </a>

            <a class="btn orange" href="<?= URLROOT ?>/Home/update/<?= $id ?>">
                Update
            </a>

            <h2>
                <?= $name ?>
            </h2>

            <h3>
                <?= $email ?>
            </h3>

            <p>
                <?= $address ?>
            </p>
        </div>
    <?php endforeach; endif; ?>

</div>