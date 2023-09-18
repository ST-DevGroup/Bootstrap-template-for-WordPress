<?php
/*Template Name: Section Services
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */
?>

<section id="services">
    <div class="container ">
        <div class="row">
            <div class="col-12 services-heading text-center">
                <h2>
                    <?php the_field('section_service_title'); ?>
                </h2>
                <p>
                    <?php the_field('section_service_subtext'); ?>
                </p>
            </div>
            <div class="col-12 services-block d-flex flex-wrap justify-content-center text-center">
                <?php if (have_rows('section_service_icon_block')): ?>
                <?php while (have_rows('section_service_icon_block')):
                        the_row(); ?>
                <?php if (get_sub_field('section_service_icon_block_img')): ?>
                <div class="col-12 col-md-6 col-lg-4 services-block-content">
                    <span class="fa-stack fa-4x">
                        <img class="svg-inline--fa fa-circle fa-stack-2x text-primary"
                            src="<?php the_sub_field('section_service_icon_block_img'); ?>" />
                    </span>
                    <?php endif ?>
                    <h4 class="py-3">
                        <?php the_sub_field('section_service_icon_block_title'); ?>
                    </h4>
                    <p class="px-3">
                        <?php the_sub_field('section_service_icon_block_description'); ?>
                    </p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>