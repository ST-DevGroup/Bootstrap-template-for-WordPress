<?php
/*Template Name: Section Contact Us
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */
?>

<section id="contact-us">
    <div class="container ">
        <div class="row">
            <div class="col-12 contact-us-heading text-center mb-5">
                <h2>
                    <?php the_field('section_contact_title'); ?>
                </h2>
                <p>
                    <?php the_field('section_contact_subtext'); ?>
                </p>
            </div>
        </div>
        <div class="contact-form-container">
            <?php echo do_shortcode( get_field( 'contact_form_shortcode' ) ); ?>
        </div>
    </div>
</section>