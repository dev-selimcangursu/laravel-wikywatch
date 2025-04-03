@extends('client.partials.master')
@section('main')
<section id="product__detail">
    <div class="product">
        <div class="product__info__left__main">
            <div class="product__info__left__image__area">
                <img src="{{asset('assets/images/wiky-5plus-mavi.png')}}" alt="Wiky Watch Akıllı Çocuk Saati">
            </div>
            <a class="open__product__modal__image" href="#">Ürün Görselleri İncele</a>
            <div class="product__info__left__bottom__area">
                <small><i class="bi bi-truck"></i> Ücretsiz Teslimat</small>
                <small><i class="bi bi-box-seam"></i> Ücretsiz Kolay İade</small>
            </div>
        </div>

        <div class="product__info__right__main">
            <h3 class="product__info__right__main__title">Wiky Watch Akıllı Çocuk Saati 5 Plus Mavi</h3>
            <div class="product__info__right__main__star__area">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="product__info__right__main__price__area">
                <span class="old__price">7600₺</span>
                <span class="new__price">5600₺</span>
            </div>
            <p class="product__info__right__main__description">
                Wiky Watch 5 Plus Akıllı Çocuk Saati,Yüksek Çözünürlüklü Amoled Ekran,Sağlık Takibi,Sesli ve Görüntülü Görüşme,Uzun Pil Ömrü ve Güçlü Donanım Özellikleriyle,Çocuklarınız için Yeni Nesil En İyi Akıllı Çocuk Saatidir.Pratik Kullanım Özelliklerinin Yanı Sıra Nabız,Oksijen,Ateş Ölçme,Elektronik Çit,Kayıp Yönetimi,Sınıf Modu ve Daha Fazlasıyla Güvenli Kullanım Sağlar.
            </p>
            <div class="product__info__right__main__breakdown__area">
                <div class="product__breakdown">
                    <div class="produt__breakdown__image__area">
                        <img style="width: 80px;" src="{{asset('assets/images/wiky-5plus-mavi.png')}}" alt="Wiky Watch Akıllı Çocuk Saati">
                    </div>
                    <span>Mavi</span>
                </div>
                <div class="product__breakdown" >
                    <div class="produt__breakdown__image__area">
                        <img style="width: 80px;" src="{{asset('assets/images/wiky-5plus-siyah.png')}}" alt="Wiky Watch Akıllı Çocuk Saati">
                    </div>
                    <span>Pembe</span>
                </div>
                <div class="product__breakdown" >
                    <div class="produt__breakdown__image__area">
                        <img style="width: 80px;" src="{{asset('assets/images/wiky-5plus-mor.png')}}" alt="Wiky Watch Akıllı Çocuk Saati">
                    </div>
                    <span>Mor</span>
                </div>
                <div class="product__breakdown" >
                    <div class="produt__breakdown__image__area">
                        <img style="width: 80px;" src="{{asset('assets/images/wiky-5plus-pembe.png')}}" alt="Wiky Watch Akıllı Çocuk Saati">
                    </div>
                    <span>Pembe</span>
                </div>
            </div>
            <div class="featured__summary__link">
                <ul>
                    <li><a href="#">Nabız Oksijen ve Ateş Ölçer</a></li>
                    <li><a href="#">Amoled Ekran ve Kompakt Tasarım</a></li>
                    <li><a href="#">Elektronik Çit ve Sınıf Modu</a></li>
                    <li><a href="#">Görüntülü Görüşme</a></li>
                    <li><a href="#">Spreadtrum 8541E İşlemci ve Wiky OS İşletim Sistemi</a></li>
                    <li><a href="#">Uzaktan Görüntü Alma ve Kayıp Yönetimi</a></li>
                    <li><a href="#">Pil Performansı ve Şarj Süresi</a></li>
                    <li><a href="#">IP67 Su ve Toz Dayanıklılığı</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
