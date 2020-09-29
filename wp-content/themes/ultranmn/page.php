<?php get_header();?>
<div class="step-bar">
        <div class="inner">
            <img src="<?php echo get_template_directory_uri()?>/images/progress.svg" class="progress-pc" alt="" srcset="">
            <img src="<?php echo get_template_directory_uri()?>/images/progress-sp.svg" class="progress-sp" alt="" srcset="">
        </div>
    </div>
    <section class="form-input">
        <div class="inner">
            <div class="section-title">
                <h2>モニター申し込みフォーム入力</h2>
                <p>限定100名様のみのモニター募集となりますので、品切れの際はご容赦ください。</p>
            </div>
            <div class="form-wrapper">
            <?php echo do_shortcode( '[contact-form-7 id="39" title="モニター申し込みフォーム入力"]' ); ?>
                <!-- <form class="contact-form">
                    <div class="contact-agreement">
                        <h3>モニター調査へのご協力のお願い</h3>
                        <dl class="contact-dl">
                            <div>
                                <div class="checkbox-error"></div>
                                <dt class="contact-label contact-label-input"><label><input type="checkbox" name="your-checkbox"><span class="contact-required your-checkbox-required">必須</span></label></dt>
                                <dd class="contact-input agreement-description">
                                    ご使用後（ご購入から約1ヶ月後）、お電話にて5分程、ご感想を伺う予定です。尚、メールアドレス宛にお送りする、同等のオンライン調査にご回答いただいた際にはお電話は差し上げません。
                                </dd>
                            </div>
                            <div>
                                <div id="contact-label-pc">
                                    <dt class="contact-label"></dt><dd class="contact-input"><div class="tel-error"></div></dd>
                                </div>
                                <dt class="contact-label">電話番号<span class="contact-required">必須</span></dt>
                                <div id="contact-label-sp">
                                    <dt class="contact-label"></dt><dd class="contact-input"><div class="tel-error"></div></dd>
                                </div>
                                <dd class="contact-input">
                                    <input class="agreement-number" name="num1" type="number" id="tel-1" size="3" class="required" min="0">
                                    <span>-</span>
                                    <input class="agreement-number" name="num2" type="number" id="tel-2" size="3" class="required" min="0">
                                    <span>-</span>
                                    <input class="agreement-number" name="num3" type="number" id="tel-3" size="4" class="required" min="0">
                                    <span class="monitor-warning">※モニター調査以外の用途での電話は一切差し上げません。</span>
                                </dd>
                            </div>
                            <div>
                                <dt class="contact-label">電話可能な時間帯</dt>
                                <dd class="contact-input"><input type="text" value="" name="your-name" placeholder="例）月・金の15時から17時"></dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div class="contact-send">
                        <input type="submit"  value="お申込み情報登録へ" disabled>
                    </div>
                    <div class="shopify-btn">
                        <div id='product-component-1599108119609'></div>
                    </div>
                    
                </form> -->
                <div class="support-description">
                    クリックすると、本サイトの入力フォームに遷移します。
                </div>
                <div class="support-email">
                    お問い合わせは<span>support@ultranmn.jp</span>まで
                </div>
            </div>
        </div>
    </section>
    <?php get_footer();?>