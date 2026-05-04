<?php get_header(); ?>
<main>
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <section class="profile_card">
    <div class="profile inner">
      <div class="profile_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/result_details/result_details_sp01.jpg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/result_details/result_details_pc_01.jpg" alt="ギター" />
        </picture>
        <span class="img_title">ポップス</span>
      </div>
      <div class="profile_card_body">
        <h1 class="profile_card_title">
          タイトルが入ります。タイトルが入ります。タイトルが入ります。
        </h1>
        <div class="resultdeta_time">
          <time datetime="2025-12-25">0000.00.00</time>
        </div>
        <div class="profile_card_content">
          <div class="profile_card_table-wrapper">
            <table class="profile_card_table">
              <tr>
                <th>名前</th>
                <td>丸山</td>
              </tr>
              <tr>
                <th>職業</th>
                <td>証券会社勤務</td>
              </tr>
              <tr>
                <th>ジャンル</th>
                <td>入力欄</td>
              </tr>
              <tr>
                <th>実績</th>
                <td>入力欄</td>
              </tr>
              <tr>
                <th>SNS</th>
                <td>入力欄</td>
              </tr>
            </table>
          </div>
          <p class="profile_card_comment">
            昔やっていた音楽活動で、副収入が得られるように<br class="pc_only" />なったので、毎日充実するようになりました。
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/single-pagination'); ?>
  <?php get_template_part('template-parts/related-articles'); ?>
  </div>
  </div>
  </section>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>