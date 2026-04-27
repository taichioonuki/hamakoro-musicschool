<?php get_header(); ?>
<main>
  <section class="page_fv">
    <div class="page_fv_container">
      <div class="page_fv_overlay"></div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/sp/plan/plan_fv_sp.jpg"
          media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/plan/plan_fv_pc.jpg" alt="ギター" />
      </picture>
      <h1 class="page_fv_title">プラン・料金</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <section class="plan_sec1">
    <div class="plan sec1 inner">
      <div class="sec_title">
        <h2>料金体系</h2>
      </div>
      <div class="plan_breakdown">
        <div class="plan_fee_box">
          <p>入会金 39,000円</p>
        </div>
        <div class="plan_fee_icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/plan/plus_icon.svg" alt="プラス" />
        </div>
        <div class="plan_fee_box">
          <p>月額料金</p>
        </div>
      </div>
      <p>
        きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。
      </p>
    </div>
  </section>
  <section class="plan_sec2">
    <div class="plan_sec2 inner">
      <div class="plan_sec2_container">
        <div class="sec_title">
          <h2>プラン内容・月額料金</h2>
        </div>
        <div class="plan_table_wrapper">
          <div class="scroll-area" data-simplebar data-simplebar-auto-hide="false">
            <table class="plan_table">
              <tr>
                <th class="plan_head-title blank"></th>
                <th class="plan_head-title basic">
                  <div class="plan-head__inner">
                    <p>ベーシック<br class="sp_only" />プラン</p>
                  </div>
                </th>
                <th class="plan_head-title standard">
                  <div class="plan-head__inner_red">
                    <p>
                      <span class="plan_recommend">おすすめ</span><br />スタンダード<br class="sp_only" />プラン
                    </p>
                  </div>
                </th>
                <th class="plan_head-title premium">
                  <div class="plan-head__inner">
                    <p>プレミアム<br class="sp_only" />プラン</p>
                  </div>
                </th>
              </tr>
              <tr>
                <th class="plan_title_price">月額料金</th>
                <td class="plan_title_price_basic">39,000円</td>
                <td class="plan_title_price_standard_red">59,000円</td>
                <td class="plan_title_price_premium">128,000円</td>
              </tr>
              <tr>
                <th class="plan_title">マンツーマン授業</th>
                <td class="plan_text_plan_circle">
                  <span class="plan_circle"></span>
                  <p>週１回</p>
                </td>
                <td class="plan_text_plan_circle_red">
                  <span class="plan_circle_red"></span>
                  <p>週２回</p>
                </td>
                <td class="plan_text_plan_circle">
                  <span class="plan_circle"></span>
                  <p>無制限</p>
                </td>
              </tr>
              <tr>
                <th class="plan_title">ビジネス基本講座</th>
                <td class="plan_text_circle_plan_circle">
                  <span class="plan_circle"></span>
                </td>
                <td class="plan_text_circle_plan_circle_red">
                  <span class="plan_circle_red"></span>
                </td>
                <td class="plan_text_circle_plan_circle">
                  <span class="plan_circle"></span>
                </td>
              </tr>
              <tr>
                <th class="plan_title">練習ROOM利用</th>
                <td class="plan_text_plan_circle">
                  <span class="plan_circle"></span>
                  <p>月10時間</p>
                </td>
                <td class="plan_text_plan_circle_red">
                  <span class="plan_circle_red"></span>
                  <p>月20時間</p>
                </td>
                <td class="plan_text_plan_circle">
                  <span class="plan_circle"></span>
                  <p>無制限</p>
                </td>
              </tr>
              <tr>
                <th class="plan_title">ビジネスコンサル</th>
                <td class="plan_text_plan_border"></td>
                <td class="plan_text_plan_circle_red">
                  <span class="plan_circle_red"></span>
                  <p>月２回</p>
                </td>
                <td class="plan_text_plan_circle">
                  <span class="plan_circle"></span>
                  <p>月３回</p>
                </td>
              </tr>
              <tr class="border_bottom">
                <th class="plan_title">
                  コミュニティ<br class="sp_only" />参加資格
                </th>
                <td class="plan_text_plan_border"></td>
                <td class="plan_text_plan_border"></td>
                <td class="plan_text_plan_circle last">
                  <span class="plan_circle"></span>
                </td>
              </tr>
            </table>
          </div>
          <p class="plan_last_text">
            ※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_template_part('template-parts/fix-area'); ?>
<?php get_footer(); ?>