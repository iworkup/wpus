<?php if (get_field('team_title')) : ?>

    <p><?= get_field('team_title') ?></p>

<?php endif; ?>

<?php if (get_field('team_subtitle')) : ?>

    <p><?= get_field('team_subtitle') ?></p>

<?php endif; ?>

<?php if (get_field('team_items')) : ?>

    <?php foreach (get_field('team_items') as $item) : ?>

        <?php if ($item['team_name']) : ?>
            <p><?= $item['team_name'] ?></p>
        <?php endif; ?>

        <?php if ($item['team_publish'] === 'no') : ?>

            <?php if ($item['team_publish_no']) : ?>
                <p><?= $item['team_publish_no'] ?></p>
            <?php endif; ?>

        <?php endif; ?>

        <?php if ($item['team_publish'] === 'yes') : ?>

            <?php if ($item['team_publish_yes']) : ?>
                <p><?= $item['team_publish_yes'] ?></p>
            <?php endif; ?>

        <?php endif; ?>

    <?php endforeach; ?>


<?php endif; ?>