<?php
$page_id = get_the_ID();
$video_url = "";
$video_url = get_field('shooting_video', $page_id);
?>
<?php get_header(); ?>

    <div id="content" class="container">
        <main role="main">

            <div class="wp-block-columns single-header-wrapper">
                <div class="wp-block-column title-area has-text-align-center">
                    <?php
                    the_title('<h1 class="title has-text-align-center">', '</h1>');
                   echo tsc_create_html('<p>', '</p>', 'by');
                    the_custom_logo('', '');
                    ?>


                </div>
                <div class="wp-block-column">
                    <?php if (!empty($video_url)): ?>
                        <div class="video-wrapper">
                            <video controls>
                                <source src="<?php echo $video_url; ?>" type="video/mp4">
                            </video>
                        </div>
                    <?php else:
                        echo '<figure class="is-style-portrait-image">';
                        the_post_thumbnail();
                        echo '</figure>';
                    endif; ?>
                </div>

            </div>
            <section class="container-min">
            <?php include(locate_template('template-parts/content.php')); ?>
            </section>

            <?php include(locate_template('template-parts/post-type-shooting/gallery.php')); ?>

        </main>
        <?php include(locate_template('template-parts/post-type-shooting/similar.php')); ?>

    </div>
<?php get_footer(); ?>