    <?php get_header()?>
    <div class="step-bar">
        
    </div>
    <section class="form-input">
        <div class="inner">
            <div class="section-title">
                <h2>モニター申し込みフォーム入力</h2>
                <p>限定100名様のみのモニター募集となりますので、品切れの際はご容赦ください。</p>
            </div>
            <div class="form-wrapper">
                <h3>注文者情報の入力</h3>
                <?php echo do_shortcode( '[contact-form-7 id="30" html_class="h-adr" title="モニター申し込みフォーム入力"]' ); ?>
                <!-- <form class="contact-form">

                    <dl class="contact-dl">
                        <div>
                            <dt class="contact-label">お名前<span class="contact-required">必須</span></dt>
                            <dd class="contact-input"><input type="text" value="" name="your-name" placeholder="例）山田太郎"></dd>
                        </div>
                        <div>
                            <dt class="contact-label">お名前フリガナ<span class="contact-required">必須</span></dt>
                            <dd class="contact-input"><input type="text" value="" name="your-name" placeholder="例）ヤマダタロウ"></dd>
                        </div>
                        <div>
                            <dt class="contact-label">メールアドレス<span class="contact-required">必須</span></dt>
                            <dd class="contact-input">
                                <input type="text" value="" name="your-email" placeholder="text@example.com">
                                <span>メールアドレスをお間違えのないよう、正確にご入力ください。</span>
                            </dd>
                        </div>
                        <div>
                            <dt class="contact-label">郵便番号<span class="contact-required">必須</span></dt>
                            <dd class="contact-input">
                                <input class="post-input" type="text" value="" name="your-email">
                                <button class="post-button">住所入力</button>
                                <span>住所から郵便番号を検索する場合は<a href="">こちら</a></span>
                            </dd>
                        </div>
                        <div>
                            <dt class="contact-label">住所</dt>
                            <dd class="contact-input">
                                <select id="contact-select">
                                    <option disabled selected>都道府県</option>
                                    <option>セレクトA</option>
                                    <option>セレクトB</option>
                                    <option>セレクトC</option>
                                </select>
                                <input  class="address-city" type="text" value="" name="your-name" placeholder="市区町村">
                                <input  type="text" value="" name="your-name" placeholder="それ以降の住所">
                                <span class="adreess-span">※マンション・アパート名は必ず入力してください。</span>
                                <span>※入力されている住所が勤務先の場合は「会社名・部署名」なども入力してください。</span>
                            </dd>
                        </div>
                        <div>
                            <dt class="contact-label contact-label-address">お届け先の入力</dt>
                            <dd class="contact-input contact-radio">
                                <label><input type="radio" name="your-radio" checked><span>注文者の住所にお届けする</span></label>
                                <label><input type="radio" name="your-radio"><span>注文者の情報を元にお届け先を編集する</span></label>
                                <label><input type="radio" name="your-radio"><span>新しいお届け先を入力する</span></label>
                            </dd>
                        </div>
                        
                    </dl>
                    
                    
                    <div class="contact-agreement">
                        <div>
                            <h3>モニター調査へのご協力のお願い</h3>
                            <p class="agreement-description">ご使用後（ご購入から約1ヶ月後）、お電話にて5分程、ご感想を伺う予定です。尚、メールアドレス宛にお送りする、同等のオンライン調査にご回答いただいた際にはお電話は差し上げません。</p>
                        </div>
                        <dl class="contact-dl">
                            <div>
                                <dt class="contact-label">電話番号<span class="contact-required">必須</span></dt>
                                <dd class="contact-input">
                                    <input class="agreement-number" name="prim1" type="text" id="prim1" size="3" class="required">-
                                    <input class="agreement-number" name="prim2" type="text" id="prim2" size="3" class="required">-
                                    <input class="agreement-number" name="prim3" type="text" id="prim3" size="4" class="required">
                                    <span>※モニター調査以外の用途での電話は一切差し上げません。</span>
                                </dd>
                            </div>
                            <div>
                                <dt class="contact-label">電話可能な時間帯<span class="contact-required">必須</span></dt>
                                <dd class="contact-input"><input type="text" value="" name="your-name" placeholder="例）月・金の15時から17時"></dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div class="contact-send">
                        <input type="submit" value="決済情報登録へ">
                    </div>
                    
                </form> -->
            </div>
        </div>
    </section>
<?php get_footer()?>