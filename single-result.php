<?php get_header(); ?>
<main>
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <?php
  if (have_posts()):
    while (have_posts()):
      the_post();
      ?>
      <section class="profile_card">
        <div class="profile inner">
          <div class="profile_img">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('large'); ?>
            <?php else: ?>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/result_details/result_details_sp01.jpg"
                  media="(max-width: 767px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/result_details/result_details_pc_01.jpg"
                  alt="ギター" />
              </picture><?php endif; ?>
            <span class="img_title"><?php
            $terms = get_the_terms(get_the_ID(), 'genre');
            if (!empty($terms) && !is_wp_error($terms)) {
              echo $terms[0]->name;
            }
            ?></span>
          </div>
          <div class="profile_card_body">
            <h1 class="profile_card_title">
              <?php the_title(); ?>
            </h1>
            <div class="resultdeta_time">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <div class="profile_card_content">
              <div class="profile_card_table-wrapper">
                <table class="profile_card_table">
                  <tr>
                    <th>名前</th>
                    <td><?php the_field('name'); ?></td>
                  </tr>
                  <tr>
                    <th>職業</th>
                    <td><?php the_field('job'); ?></td>
                  </tr>
                  <tr>
                    <th>ジャンル</th>
                    <td>
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'genre');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                      }
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th>実績</th>
                    <td><?php the_field('achievements'); ?></td>
                  </tr>
                  <tr>
                    <th>SNS</th>
                    <td><?php the_field('sns'); ?></td>
                  </tr>
                </table>
              </div>
              <?php the_content(); ?>
            </div>
          </div>
          <?php get_template_part('template-parts/single-pagination'); ?>
          <?php get_template_part('template-parts/related-articles'); ?>
        </div>
      </section>
      <?php
    endwhile;
  endif;
  ?>
  </div>
  </div>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>