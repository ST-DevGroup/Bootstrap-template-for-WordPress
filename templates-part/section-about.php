<?php
/*Template Name: Section About Us
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */
?>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 about-heading text-center">
                <h2>
                    <?php the_field('section_about_title'); ?>
                </h2>
                <p>
                    <?php the_field('section_about_subtext'); ?>
                </p>
            </div>
        </div>
        <div class="container position-relative timeline mt-5">
            <?php if (have_rows('section_about_history')): ?>
            <?php while (have_rows('section_about_history')):
                    the_row();

                    $row_index = get_row_index();
                    
                    ?>
            <div
                class="row d-flex <?= $row_index % 2 == 0 ? '' : 'flex-row justify-content-start text-start flex-md-row-reverse justify-content-md-end text-md-end'; ?>">
                <div
                    class="col-3 col-sm-2 col-md-2 about-img-conteiner text-center p-0 <?= $row_index % 2 == 0 ? 'offset-0 offset-md-5' : ''; ?>">
                    <?php if (get_sub_field('section_about_history_image')): ?>
                    <img class="rounded-circle" src="<?php the_sub_field('section_about_history_image'); ?>" />
                    <?php endif ?>
                </div>
                <div
                    class="col-9 col-sm-10 col-md-5 about-content ps-4 pe-3 <?= $row_index % 2 == 0 ? 'ps-md-3 pe-md-5' : 'ps-md-5 pe-md-3'; ?>">
                    <h4>
                        <?php the_sub_field('section_about_history_period_data'); ?>
                    </h4>
                    <h4 class="subheading">
                        <?php the_sub_field('section_about_history_title'); ?>
                    </h4>
                    <p>
                        <?php the_sub_field('section_about_history_description'); ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div
                class="row d-flex <?= $row_index % 2 == 0 ? '' : 'flex-row justify-content-start text-start flex-md-row-reverse justify-content-md-end text-md-end'; ?>">
                <div
                    class="col-3 col-sm-2 col-md-2 about-img-container text-center p-0 <?= $row_index % 2 == 0 ? 'offset-0 offset-md-5' : ''; ?>">
                    <div
                        class="btn btn-primary rounded-circle be-part-of-our-story d-flex justify-content-center align-items-center align-self-center">
                        <h4>
                            Be Part</br>
                            Of Our</br>
                            Story!
                        </h4>
                    </div>
                </div>
                <div class="col-9 col-sm-10 col-md-5 about-content"></div </div>
            </div>
        </div>
</section>