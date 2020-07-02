<?php if (get_field('field_team_title')) : ?>

    <p><?= get_field('field_team_title') ?></p>

<?php endif; ?>

<?php if (get_field('field_team_subtitle')) : ?>

    <p><?= get_field('field_team_subtitle') ?></p>

<?php endif; ?>

<?php if (get_field('field_team_items')) : ?>


    <?php foreach (get_field('field_team_items') as $item) : ?>

        <?php if ($item['field_team_name']) : ?>
            <p><?= $item['field_team_name'] ?></p>
        <?php endif; ?>

        <?php if ($item['field_team_publish_no']) : ?>
            <p><?= $item['field_team_publish_no'] ?></p>
        <?php endif; ?>

        <?php if ($item['field_team_publish_yes']) : ?>
            <p><?= $item['field_team_publish_yes'] ?></p>
        <?php endif; ?>

    <?php endforeach; ?>


<?php endif; ?>