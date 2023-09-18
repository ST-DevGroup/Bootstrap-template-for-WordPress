<?php
/*Template Name: Section Hero
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */

$background_image_id = get_field('section_home_hero_background');
$background_image_url = wp_get_attachment_url($background_image_id);

get_header();
?>

<section id="home-hero" class="bg-image" style="background-image: url('<?php echo $background_image_url; ?>');">
    <div class="container-fluid">
        <div class="row">
            <div class="home-hero-content text-center">
                <h2>
                    <?php the_field('section_home_subheading'); ?>
                </h2>
                <h1 class="text-uppercase">
                    <?php the_field('section_home_title'); ?>
                </h1>
                <a class="btn btn-primary btn-xl text-uppercase" href="#" role="button">
                    <?php the_field('section_home_hero_btn'); ?>
                </a>
            </div>
        </div>
    </div>
</section>