<?php get_header(); ?>
<main>
  <nav class="breadcrumb">
    <div class="breadcrumb_container inner">
      <ul class="breadcrumb_list">
        <li>
          <a class="breadcrumb_link" href="index.html">ホーム</a>
        </li>
        <li class="breadcrumb_item">
          <a class="breadcrumb_link" href="blog_list.html">ブログ</a>
        </li>
        <li class="breadcrumb_item">
          <a class="breadcrumb_link" href="blog_list.html">ギター</a>
        </li>
        <li class="breadcrumb_item">
          アルペジオが劇的に向上する３つの習慣
        </li>
      </ul>
    </div>
  </nav>
  <?php
  if (have_posts()):
    while (have_posts()):
      the_post();
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
            <div class="related">
              <div class="related_content_box">
                <h2>関連記事</h2>
                <div class="related_content">
                  <ul>
                    <li class="related_content_item">
                      <a href="blog_list.html">
                        <div class="related_content_item_left">
                          <div class="related_img">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/blog/blog_sp_03.jpg"
                                media="(max-width: 767px)" />
                              <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_pc_03.jpg"
                                alt="歌う女性の画像" />
                            </picture>
                          </div>
                          <span class="img_title related_img_title">ギター</span>
                        </div>
                        <div class="related_content_textbox">
                          <h3 class="pc_only">
                            タイトルが入ります。タイトルが入ります。タイトルが入ります。
                          </h3>
                          <h3 class="sp_only">タイトルが入ります。タイトル</h3>
                          <p class="time">
                            <time datetime="2025-12-25">0000.00.00</time>
                          </p>
                        </div>
                      </a>
                    </li>
                    <li class="related_content_item">
                      <a href="blog_list.html">
                        <div class="related_content_item_left">
                          <div class="related_img">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/blog/blog_sp_03.jpg"
                                media="(max-width: 767px)" />
                              <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_pc_03.jpg"
                                alt="歌う女性の画像" />
                            </picture>
                          </div>
                          <span class="img_title related_img_title">ギター</span>
                        </div>
                        <div class="related_content_textbox">
                          <h3 class="pc_only">
                            タイトルが入ります。タイトルが入ります。タイトルが入ります。
                          </h3>
                          <h3 class="sp_only">タイトルが入ります。タイトル</h3>
                          <p class="time">
                            <time datetime="2025-12-25">0000.00.00</time>
                          </p>
                        </div>
                      </a>
                    </li>
                    <li class="related_content_item">
                      <a href="blog_list.html">
                        <div class="related_content_item_left">
                          <div class="related_img">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/blog/blog_sp_03.jpg"
                                media="(max-width: 767px)" />
                              <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_pc_03.jpg"
                                alt="歌う女性の画像" />
                            </picture>
                          </div>
                          <span class="img_title related_img_title">ギター</span>
                        </div>
                        <div class="related_content_textbox">
                          <h3 class="pc_only">
                            タイトルが入ります。タイトルが入ります。タイトルが入ります。
                          </h3>
                          <h3 class="sp_only">タイトルが入ります。タイトル</h3>
                          <p class="time">
                            <time datetime="2025-12-25">0000.00.00</time>
                          </p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
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