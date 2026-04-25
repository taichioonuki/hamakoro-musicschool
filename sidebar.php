      <aside class="sidebar">
        <div class="sidebar_mail">
          <p class="sidebar_title">無料メールマガジン</p>
          <div class="banner">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/banner.jpg" alt="バナー広告" /></a>
          </div>
        </div>
        <div class="sidebar_search">
          <p class="sidebar_title">ブログ内を検索</p>
          <div class="search_box">
            <form action="search.html" method="GET" class="search-container">
              <input type="search" name="q" class="search-input" placeholder="検索ワード" />
              <div class="search_icon">
                <button type="submit" class="search-button"></button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_posts">
          <p class="sidebar_title">おすすめの記事</p>
          <ul class="post_list">
            <li class="post_item">
              <a href="blog_details.html" class="post_link">
                <div class="post_img_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/side_img.jpg" alt="タイトル" />
                </div>
                <p class="post_item_title">タイトルが入ります。タイトル</p>
              </a>
            </li>
            <li class="post_item">
              <a href="blog_details.html" class="post_link">
                <div class="post_img_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/side_img.jpg" alt="タイトル" />
                </div>
                <p class="post_item_title">タイトルが入ります。タイトル</p>
              </a>
            </li>
            <li class="post_item">
              <a href="blog_details.html" class="post_link">
                <div class="post_img_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/side_img.jpg" alt="タイトル" />
                </div>
                <p class="post_item_title">タイトルが入ります。タイトル</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="sidebar_category">
          <p class="sidebar_title">カテゴリー</p>
          <ul class="category_list">
            <li class="category_item">
              <a href="#" class="category_link">カテゴリー</a>
            </li>
            <li class="category_item">
              <a href="#" class="category_link">カテゴリー</a>
            </li>
            <li class="category_item">
              <a href="#" class="category_link">カテゴリー</a>
            </li>
            <li class="category_item">
              <a href="#" class="category_link">カテゴリー</a>
            </li>
            <li class="category_item">
              <a href="#" class="category_link">カテゴリー</a>
            </li>
          </ul>
        </div>
      </aside>