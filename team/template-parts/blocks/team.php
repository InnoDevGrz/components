<?php
$class_name = 'tsc-block-team ';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];

?>

<div class="<?= esc_attr($class_name); ?>">
    <?php
    $team = new tsc__Team();
    $team->theTeam();
    ?>
</div>


<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Team-Section bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;