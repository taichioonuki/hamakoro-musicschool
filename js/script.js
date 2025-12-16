/* ハンバーガーメニュー開閉
 ***************************************************************/
// メニュー開閉
document.querySelector(".toggle_menu").addEventListener("click", function () {
  this.classList.toggle("open");
  document.querySelector("header").classList.toggle("open");
});

// 選択状態の切り替え & メニュー閉じる処理を追加
document.querySelectorAll(".header_item a").forEach((link) => {
  link.addEventListener("click", function () {
    // 選択状態切り替え
    document
      .querySelectorAll(".header_item a")
      .forEach((l) => l.classList.remove("selected"));
    this.classList.add("selected");

    // ハンバーガーメニューを閉じる
    document.querySelector(".toggle_menu").classList.remove("open");
    document.querySelector("header").classList.remove("open");
  });
});

const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 35,
  centeredSlides: true,
  loopedSlides: 6,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  effect: "slide",
  speed: 800,

  // ▼ レスポンシブ設定
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 35,
    },
    0: {
      slidesPerView: 1,
      spaceBetween: 20, // 必要なら調整
      centeredSlides: true,
    },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  // HTMLでIDを付けた要素を取得
  const element = document.getElementById("my-simplebar-container");

  if (element) {
    // SimpleBarを初期化し、autoHideオプションをfalseに設定
    new SimpleBar(element, {
      autoHide: false,
    });
  }
});

//アコーディオン
// アコーディオン開閉機能
document.addEventListener("DOMContentLoaded", function () {
  // 質問と回答の両方（.faq-question と .faq-answer）にイベントを設定
  // これにより、QまたはAのどこをクリックしても開閉がトリガーされます。
  const toggleElements = document.querySelectorAll(
    ".faq-question, .faq-answer"
  );

  // CSSのトランジション時間に合わせて調整してください
  const TRANSITION_DURATION = 350;

  toggleElements.forEach((element) => {
    element.addEventListener("click", function () {
      // QまたはAのどちらがクリックされても、親要素の .faq-item を取得
      const faqItem = this.closest(".faq-item");
      const answer = faqItem.querySelector(".faq-answer");

      // Q要素と矢印アイコンを取得 (A要素がクリックされた場合でもQ要素が必要です)
      const questionElement = faqItem.querySelector(".faq-question");
      const arrowIcon = questionElement.querySelector(".arrow-icon");

      // アニメーション中はクリックを無視（多重動作防止）
      if (faqItem.classList.contains("is-animating")) {
        return;
      }

      // アニメーション中フラグを立てる
      faqItem.classList.add("is-animating");

      if (faqItem.classList.contains("open")) {
        // --- 閉じる動作 ---

        answer.style.maxHeight = answer.scrollHeight + "px";

        setTimeout(() => {
          answer.style.maxHeight = "0";
        }, 10);

        setTimeout(() => {
          faqItem.classList.remove("open");
          arrowIcon.classList.remove("open");
          faqItem.classList.remove("is-animating");
        }, TRANSITION_DURATION);
      } else {
        // --- 開く動作 ---

        faqItem.classList.add("open");
        arrowIcon.classList.add("open");

        // 正確な高さを取得するための一時的な準備
        answer.style.transition = "none";
        answer.style.maxHeight = "none";

        answer.style.position = "absolute";
        answer.style.visibility = "hidden";
        const contentHeight = answer.scrollHeight;

        answer.style.position = "";
        answer.style.visibility = "";

        answer.style.maxHeight = "0";

        requestAnimationFrame(() => {
          answer.style.transition = "";
          answer.style.maxHeight = contentHeight + "px";

          setTimeout(() => {
            if (faqItem.classList.contains("open")) {
              answer.style.maxHeight = "none";
            }
            faqItem.classList.remove("is-animating");
          }, TRANSITION_DURATION);
        });
      }
    });
  });
});


// 固定ボタンの表示・非表示を制御
document.addEventListener("DOMContentLoaded", function () {
  const pageTop = document.querySelector("#page-top");
  const scrollThreshold = 800;

  // トップへ戻るスムーススクロール
  function scrollTop() {
    window.scroll({
      top: 0,
      behavior: "smooth",
    });
  }

  // 表示・非表示の制御（ふわっと）
  function scrollEvent() {
    if (window.scrollY > scrollThreshold) {
      pageTop.classList.add("is-visible");
    } else {
      pageTop.classList.remove("is-visible");
    }
  }

  // フッター手前で止まるように位置調整
  function Position() {
    const scrollHeight = document.documentElement.scrollHeight;
    const scrollPosition = window.innerHeight + window.scrollY;
    const footHeight = document.querySelector("footer").offsetHeight;

    if (scrollHeight - scrollPosition <= footHeight) {
      pageTop.style.position = "absolute";
      pageTop.style.bottom = footHeight + "px";
      pageTop.style.right = "0";
    } else {
      pageTop.style.position = "fixed";
      pageTop.style.bottom = "0";
      pageTop.style.right = "0";
    }
  }

  pageTop.addEventListener("click", scrollTop);
  window.addEventListener("scroll", scrollEvent);
  window.addEventListener("scroll", Position);
});
