<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contactTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contactTop-pc.jpg"
            alt="ターコイズブルーの浜辺を空から撮った様子">
        </picture>
        <h1 class="page-mv__title">Contact</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <div class="breadcrumb">
    <div class="inner">
      <div id="breadcrumb-text" class="breadcrumb__text">
        <p>TOP</p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/breadcrumb.svg" alt="矢印">
        <p>お問合せ</p>
      </div>
    </div>
  </div>

  <!-- お問い合わせページ -->
  <div class="page-contact layout-page-contact">
    <div class="page-contact__inner inner">
      <div class="page-contact__contents">
        <form action="">
          <ul class="page-contact__lists">
            <li class="page-contact__list">
              <div id="error-message" class="error-message">
                <span class="error-prefix">※必須項目が入力されていません。</span>
                <span class="error-main">入力してください。</span>
              </div>
              <dl class="page-contact__item">
                <dt>お名前<span>必須</span></dt>
                <dd><input type="text" name="お名前" placeholder="沖縄　太郎" class="page-contact__input"></dd>
              </dl>
            </li>
            <li class="page-contact__list">
              <dl class="page-contact__item">
                <dt>メールアドレス<span>必須</span></dt>
                <dd><input type="email" name="メールアドレス" placeholder="aaa000@ggmail.com" class="page-contact__input"></dd>
              </dl>
            </li>
            <li class="page-contact__list">
              <dl class="page-contact__item">
                <dt>電話番号<span>必須</span></dt>
                <dd><input type="tel" name="電話番号" placeholder="000-0000-0000" class="page-contact__input"></dd>
              </dl>
            </li>
            <li class="page-contact__list">
              <dl class="page-contact__item">
                <dt>お問合せ項目<span>必須</span></dt>
                <dd>
                  <fieldset class="page-contact__checkbox">
                    <label>
                      <input type="checkbox" name="page-contact__checkbox" checked />
                      ダイビング講習について
                    </label>
                    <label>
                      <input type="checkbox" name="page-contact__checkbox" />
                      ファンダイビングについて
                    </label>
                    <label>
                      <input type="checkbox" name="page-contact__checkbox" />
                      体験ダイビングについて
                    </label>
                  </fieldset>
                </dd>
              </dl>
            </li>
            <li class="page-contact__list">
              <dl class="page-contact__item">
                <dt>キャンペーン</dt>
                <dd>
                  <label class="page-contact__selectbox">
                    <select>
                      <option>キャンペーン内容を選択</option>
                      <option>ライセンス取得</option>
                      <option>ファンダイビング</option>
                      <option>ダイビング</option>
                    </select>
                  </label>
                </dd>
              </dl>
            </li>
            <li class="page-contact__list">
              <dl class="page-contact__item">
                <dt>お問合せ内容<span>必須</span></dt>
                <dd><textarea name="お問い合わせ内容" class="page-contact__textarea"></textarea></dd>
              </dl>
            </li>
          </ul>
        </form>
        <div class="page-contact__text">
          <fieldset class="page-contact__checkbox page-contact__checkbox--small">
            <label>
              <input type="checkbox" name="page-contact__checkbox page-contact__checkbox--small" />
              個人情報の取り扱いについて同意のうえ<br class="u-mobile">送信します。
            </label>
          </fieldset>
        </div>
        <div class="page-contact__button"><button href="#" class="button" id="submitBtn">Send<span></span></button>
        </div>
      </div>
    </div>
  </div>


</main>

<?php get_footer(); ?>