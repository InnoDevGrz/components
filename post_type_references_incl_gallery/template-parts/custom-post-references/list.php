<?php
$t_tag = 'h3';

?>
<div class="reference-grid">
    <?php
    while (have_posts()) : the_post();
        get_template_part('template-parts/custom-post-references/item');
    endwhile;
    ?>
</div>