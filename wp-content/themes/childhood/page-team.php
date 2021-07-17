<?php 
/*

Template Name: Наша команда
*/

?>




<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/style.css" />


<?php 

    get_header();

?>
    <div class="specialists">
            <div class="container">
                <div class="title"><?php the_field('team_title'); ?></div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                            <?php 
                                
                                $image = get_field('team_img');

                                if(!empty($image)): ?>
                                    <img
                                        src="<?php echo $image['url']; ?>"
                                        alt="<?php echo $image['alt']; ?>"
                                        class="specialists__img">

                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

<?php 

    get_footer();

?>