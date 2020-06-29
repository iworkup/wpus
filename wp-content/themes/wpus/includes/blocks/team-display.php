<?php if (get_field('team_test_zagolovok_position')) : ?>

    <p><?= get_field('team_test_zagolovok_position') ?></p>

<?php endif; ?>

<?php if (get_field('team_test_podzagolovok_position')) : ?>

    <p><?= get_field('team_test_podzagolovok_position') ?></p>

<?php endif; ?>

<?php if (get_field('team_test_repeater')) : ?>


    <?php foreach (get_field('team_test_repeater') as $item) : ?>

        <?php if ($item['team_test_name']) : ?>
            <p><?= $item['team_test_name'] ?></p>
        <?php endif; ?>

    <?php endforeach; ?>


<?php endif; ?>