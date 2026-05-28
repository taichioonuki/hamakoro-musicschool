<?php
$post_type = get_post_type(); // 投稿タイプを取得
$post_id = get_the_ID();

// 投稿タイプに応じて使うタクソノミーを定義（必要に応じて追加可能）
$taxonomy_map = [
  'blog' => 'blog_cate',
  'result' => 'genre',

];

// 投稿タイプに対応するタクソノミーが定義されているか確認
if (!isset($taxonomy_map[$post_type])) {
  return;
}

$taxonomy = $taxonomy_map[$post_type];
$terms = get_the_terms($post_id, $taxonomy);

if (!empty($terms)):
  $term_ids = wp_list_pluck($terms, 'term_id');

  $args = [
    'posts_per_page' => 3,
    'post_type' => $post_type,
    'post__not_in' => [$post_id],
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [
      [
        'taxonomy' => $taxonomy,
        'field' => 'term_id',
        'terms' => $term_ids,
      ],
    ],
  ];

  $the_query = new WP_Query($args);

  if ($the_query->have_posts()):
    ?>
    <div class="related">
      <div class="related_content_box">
        <h2>関連記事</h2>
        <div class="related_content">
          <ul> <?php while ($the_query->have_posts()):
            $the_query->the_post(); ?>
              <?php
              // 投稿の最初のタームの名前を取得
              $post_terms = get_the_terms(get_the_ID(), $taxonomy);
              $term_name = (!empty($post_terms)) ? $post_terms[0]->name : '';
              ?>
              <li class="related_content_item"> <a href="<?php the_permalink(); ?>">
                  <div class="related_content_item_left">
                    <div class="related_img">
                      <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_pc_03.jpg" alt="No image" />
                      <?php endif; ?>
                    </div>
                    <span class="img_title related_img_title">
                      <?php echo esc_html($term_name); ?>
                    </span>
                  </div>
                  <div class="related_content_textbox">
                    <h3><?php echo wp_trim_words(get_the_title(), 15, '...'); ?></h3>
                    <p class="time">
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </p>
                  </div>
                </a>
              </li>
            <?php endwhile;
          wp_reset_postdata(); ?>
          </ul>
        </div>
      </div>
    </div>
    </div>
    <?php
  endif;
endif;
?>