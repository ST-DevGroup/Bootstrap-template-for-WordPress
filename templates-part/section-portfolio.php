<?php
/*Template Name: Section Portfolio
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */
?>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12 portfolio-heading text-center mb-5">
                <h2>
                    <?php the_field('section_portfolio_title'); ?>
                </h2>
                <p>
                    <?php the_field('section_portfolio_subtext'); ?>
                </p>
            </div>
            <?php if (have_rows('section_portfolio_items')): ?>
            <div class="col-12 portfolio-block d-flex flex-wrap justify-content-center gap-4 text-center">
                <?php
                    $row_count = 0;

                    while (have_rows('section_portfolio_items')):
                        the_row();
                        $row_count++;
                        ?>

                <div class="col-12 col-md-6 col-lg-4 mb-4 portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?= $row_count; ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z">
                                    </path>
                                </svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                        <?php if (get_sub_field('section_portfolio_item_img')): ?>
                        <img class="img-fluid" src="<?php the_sub_field('section_portfolio_item_img'); ?>" />
                        <?php endif ?>
                    </a>
                    <div class="portfolio-caption mt-3">
                        <h4>
                            <?php the_sub_field('section_portfolio_item_client'); ?>
                        </h4>
                        <p>
                            <?php the_sub_field('section_portfolio_item_category'); ?>
                        </p>
                    </div>

                </div>
                <div class="portfolio-modal modal fade" id="portfolioModal<?= $row_count; ?>" tabindex="-1"
                    role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal">
                                <img src="/wp-content/uploads/2023/09/icons8-close.svg" alt="Close modal">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->

                                            <h2 class="text-uppercase">
                                                <?php the_sub_field('section_portfolio_item_project_name'); ?>
                                            </h2>
                                            <p class="item-intro text-muted">
                                                <?php the_sub_field('section_portfolio_item_project_subtext'); ?>
                                            </p>

                                            <img class="img-fluid d-block mx-auto"
                                                src="<?php the_sub_field('section_portfolio_item_img'); ?>" alt="...">

                                            <p class="mt-4">
                                                <?php the_sub_field('section_portfolio_item_project_description'); ?>
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Client:</strong>
                                                    <?php the_sub_field('section_portfolio_item_client'); ?>
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    <?php the_sub_field('section_portfolio_item_category'); ?>
                                                </li>
                                            </ul>

                                            <button class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal" type="button">
                                                <svg class="svg-inline--fa fa-xmark me-1" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="xmark" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fas fa-xmark me-1"></i> Font Awesome fontawesome.com -->
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>