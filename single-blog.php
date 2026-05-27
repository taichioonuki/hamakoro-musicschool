<?php get_header(); ?>
<main>
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <?php
  if (have_posts()):
    while (have_posts()):
      the_post();
      $url = get_permalink();
      $title = get_the_title();
      ?>
      <section class="sec1_blog_details">
        <div class="sec1_blog_details inner">
          <div class="sec1_left_content">
            <div class="sec1_left_img">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else: ?>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/blog_details/blog_sp_01.jpg"
                    media="(max-width: 767px)" />
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/blog_pc_01.jpg" alt="ギター" />
                </picture>
              <?php endif; ?>
            </div>
            <span class="img_title"><?php
            $terms = get_the_terms(get_the_ID(), 'blog_cate');
            if (!empty($terms) && !is_wp_error($terms)) {
              echo esc_html($terms[0]->name);
            }
            ?></span>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <div class="sns_content">
              <ul class="sns_list">
                <li class="sns_item">
                  <div class="sns_img_fb">
                    <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>" target="_blank"
                      rel="noopener noreferrer">
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/icon_logo/facebook_sp.svg"
                          media="(max-width: 767px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/facebook.svg" alt="フェイスブック" />
                      </picture>
                    </a>
                  </div>
                </li>
                <li class="sns_item">
                  <div class="sns_img_tw">
                    <a href="<?php echo esc_url('https://twitter.com/intent/tweet?text=' . get_the_title() . '&url=' . $url); ?>"
                      target="_blank" rel="noopener noreferrer">
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/icon_logo/twitter_sp.svg"
                          media="(max-width: 767px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/twitter.svg" alt="ツイッター" />
                      </picture>
                    </a>
                  </div>
                </li>
                <li class="sns_item">
                  <div class="sns_img_hatana">
                    <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>"
                      target="_blank" rel="noopener noreferrer">
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/icon_logo/hatena_sp.svg"
                          media="(max-width: 767px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/hatena.svg" alt="はてな" />
                      </picture>
                    </a>
                  </div>
                </li>
                <li class="sns_item">
                  <div class="sns_img_line">
                    <a href="<?php echo esc_url('https://line.me/R/msg/text/?' . get_the_title() . ' ' . $url); ?>"
                      target="_blank" rel="noopener noreferrer">
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/icon_logo/line_sp.svg"
                          media="(max-width: 767px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/line.svg" alt="ライン" />
                      </picture>
                    </a>
                  </div>
                </li>
                <li class="sns_item">
                  <div class="sns_img_pocket">
                    <a href="<?php echo esc_url('https://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>"
                      target="_blank" rel="noopener noreferrer">
                      <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/icon_logo/pocket_sp.svg"
                          media="(max-width: 767px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/pocket.svg" alt="ポケット" />
                      </picture>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="blog_details_content">
              <?php the_content(); ?>
            </div>
            <?php get_template_part('template-parts/single-pagination'); ?>
            <?php get_template_part('template-parts/related-articles'); ?>
            <?php get_sidebar(); ?>
          </div>
      </section>
      <?php
    endwhile;
  endif;
  ?>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>