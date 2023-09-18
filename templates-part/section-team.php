<?php
/*Template Name: Section Our Amazing Team
 * @author: Wiesław Tarkowski wieslaw.tarkowski@innhouse.pl    
 */
?>

<section id="team">
    <div class="container ">
        <div class="row">
            <div class="col-12 our-team-heading text-center mb-5">
                <h2>
                    <?php the_field('section_our_team_title'); ?>
                </h2>
                <p>
                    <?php the_field('section_our_team_subtext'); ?>
                </p>
            </div>
            <div class="col-12 our-team-member-block d-flex flex-wrap justify-content-center text-center ">
                <?php if (have_rows('section_our_team_member_block')): ?>
                <?php while (have_rows('section_our_team_member_block')):
                        the_row(); ?>
                <?php if (get_sub_field('section_our_team_member_img')): ?>
                <div class="col-12 col-md-6 col-lg-4 our-team-member-block-content mb-5">
                    <span class="">
                        <img class="img-fluid mx-auto rounded-circle"
                            src="<?php the_sub_field('section_our_team_member_img'); ?>" />
                    </span>
                    <?php endif ?>
                    <h4 class="py-2">
                        <?php the_sub_field('section_our_team_member_name'); ?>
                    </h4>
                    <p class="px-3">
                        <?php the_sub_field('section_our_team_member_position'); ?>
                    </p>
                    <div class="col-12 d-flex justify-content-center gap-1">
                        <?php if (have_rows('section_our_team_member_social_profil')): ?>
                        <?php while (have_rows('section_our_team_member_social_profil')):
                                        the_row(); ?>
                        <a class="btn btn-dark btn-social mx-2"
                            href="<?php the_sub_field('section_our_team_member_social__profil_url'); ?>">
                            <?php $section_our_team_member_social_profil_sosial_icon = get_sub_field('section_our_team_member_social__profil_sosial_icon'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($section_our_team_member_social_profil_sosial_icon): ?>
                            <?php echo wp_get_attachment_image($section_our_team_member_social_profil_sosial_icon, $size); ?>
                            <?php endif; ?>
                            <?php endwhile; ?>

                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>