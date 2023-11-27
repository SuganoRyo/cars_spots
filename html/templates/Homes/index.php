<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">愛車と最適な撮影スポットでの撮影を提供</div>
        <div class="masthead-heading text-uppercase">カーグラ探索</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">詳細</a>
    </div>
</header>
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">サービス</h2>
            <h3 class="section-subheading text-muted">下記のサービスを提供します。</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa-solid fa-car-rear fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">車が映える写真撮影スポットを提供</h4>
                <p class="text-muted">各地に存在する車と景色のよい撮影スポットを探し出すことが可能です。</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa-solid fa-handshake-simple fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">新たに発見した撮影スポットの共有</h4>
                <p class="text-muted">まだ発見されていなかった新たな隠れ家のような撮影スポットを発見した時は登録することが可能です。<br>また、自分自身が知らなかった新たな撮影スポットの発見に役立ちます。</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa-solid fa-heart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">訪れてみたいスポットの<br>お気に入り登録</h4>
                <p class="text-muted">このサービスを通して新たに発見した撮影スポットや是非訪れてみたいスポットが発見した際に忘れないためにもお気に入り登録することが可能です。</p>
            </div>
        </div>
    </div>
</section>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">写真</h2>
            <h3 class="section-subheading text-muted">下記は実際に撮影された参考写真です。</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa-solid fa-car-on fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/img/sample-spots/sample1.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">名港トリトン</div>
                        <div class="portfolio-caption-subheading text-muted">愛知県</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa-solid fa-car-on fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/img/sample-spots/sample2.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">pineapple studio 千早校</div>
                        <div class="portfolio-caption-subheading text-muted">愛知県</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa-solid fa-car-on fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/img/sample-spots/sample3.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">TOKONA-Xの壁画</div>
                        <div class="portfolio-caption-subheading text-muted">愛知県</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">問い合わせ</h2>
            <h3 class="section-subheading text-muted">気軽にご質問がありましたら下記のフォームからお願い致します。</h3>
        </div>
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="氏名 *" required="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">必須項目です。</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="メールアドレス *" required="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">必須項目です。</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">メールアドレスの形式が無効です。</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="電話番号 *" required="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">必須項目です。</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="メッセージ *" required="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">必須項目です。</div>
                    </div>
                </div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary btn-xl text-uppercase button" id="submitButton" type="submit">送信</button>
            </div>
        </form>
    </div>
</section>
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 pt-3">
                        <div class="modal-body">
                            <h2 class="text-uppercase">名港トリトン</h2>
                            <p class="item-intro text-muted">愛知県海部郡飛島村金岡</p>
                            <img class="img-fluid d-block mx-auto" style="height: 400px;" src="/img/sample-spots/sample1.jpg" alt="..." />
                            <p>「名港西大橋」「名港中央大橋」「名港東大橋」3つの斜張橋の愛称「名港トリトン」と呼ばれ背景に橋を入れて奥行きのある写真撮影が可能です。また、日中と夜だと撮影できる写真や雰囲気にも変化があり同じ撮影箇所でも新たな違いを生み出すことができます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 pt-3">
                        <div class="modal-body">
                            <h2 class="text-uppercase">pineapple studio 千早校</h2>
                            <p class="item-intro text-muted">愛知県名古屋市中区新栄２丁目４７−２ JR中央線高架下, 中区</p>
                            <img class="img-fluid d-block mx-auto" style="height: 400px;" src="/img/sample-spots/sample2.jpg" alt="..." />
                            <p>ダンススタジオ、pineapple studio 千早校の裏側がウォールアートになっており車通りも少なく比較的撮影しやすいと思います。また、近くには名古屋を代表するラッパーであるTOKONA-XとAK-69のウォールアートもあり、2ヶ所で撮影する方も多数見られます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 pt-3">
                        <div class="modal-body">
                            <h2 class="text-uppercase">TOKONA-Xの壁画</h2>
                            <p class="item-intro text-muted">愛知県名古屋市千種区千種２丁目２１ JR中央線高架下</p>
                            <img class="img-fluid d-block mx-auto" style="height: 400px;" src="/img/sample-spots/sample3.jpg" alt="..." />
                            <p>ラッパー、TOKONA-XとAK-69のウォールアートです。車撮影が好きな方はもちろんですが、ラッパーが好きな方が一度訪れてみても面白いと思います。しかし、近くに商用施設が建設されているため、車通りが多いので長時間の撮影は控えることをおすすめいたします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
