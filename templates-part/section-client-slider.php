<?php
/*Template Name: Section Client Slider
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */
?>

<?php if (have_rows('section_slider_images')): ?>
<section id="client-slider" class="splide" aria-label="Splide Basic HTML Example">
    <div class="container py-5">
        <div class="row">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while (have_rows('section_slider_images')):
                            the_row(); ?>
                    <li class="splide__slide">
                        <div class="splide-img text-center">
                            <?php $section_slider_image_img = get_sub_field('section_slider_image_img'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($section_slider_image_img): ?>
                            <?php echo wp_get_attachment_image($section_slider_image_img, $size); ?>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>