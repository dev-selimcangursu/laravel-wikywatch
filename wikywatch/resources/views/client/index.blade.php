@extends('client.partials.master')
@section('main')
<section id="home">
    <section class="home__section__wrapper">
        <div class="home__section">
            <div class="home__section__main">
                <span class="home__section__badge">Yeni Ürün</span>
                <h3 class="home__section__title">Wiky Watch 5 Plus</h3>
                <h4 class="home__section__featured">
                    Suya Toza Karşı Dayanıklı | Görüntülü Görüşme | Konum Takibi | Nabız Ölçer | Sos Butonu | Ateş Ölçer
                </h4>
                <small class="home__section__description">Yeni Wiky Watch 5 Plus, geliştirilen GPS takip modülü sayesinde çocuğunuzun konumunu anlık olarak takip etmenizi sağlar. Ayrıca, yeni kamerası ve AMOLED ekranı ile daha net bir görüntü sunar. Ateş, oksijen ve nabız ölçme özellikleri de eklenmiştir.</small>
                <button class="home__section__button">Daha Fazlasını Hemen İncele</button>
            </div>
            <div class="home__section__image__area">
                <img src="{{asset('assets/images/wiky-5plus-mavi.png')}}" alt="wiky_gorsel" class="animated-image">
            </div>
        </div>
    </section>
    <section class="home__section__wrapper">
        <div class="home__section">
            <div class="home__section__main">
                <span class="home__section__badge">Yeni Ürün</span>
                <h3 class="home__section__title">Wiky Watch 5E</h3>
                <h4 class="home__section__featured">
                    Şık IPS Ekran | SOS Tuşu | Konum Takibi | Sınıf Modu | Güvenli Alan | Görüntülü Görüşme
                </h4>
                <small class="home__section__description">Wiky Watch 5E , Akıllı çocuk saati dünyasında devrim yaratıyor ! Türkiye'de ilk ve tek E-SIM özellikli akıllı çocuk saati.Görüntülü görüşme dayanıklı tasarımı ve uzun pil ömrü ile her an güvende olun. Elektronik çit kayıp yönetimi ve sınıf modu gibi özellikleriyle ebevenylere tam kontrol sağlar.Hem şık hemde fonksiyonel her yaş için mükemmel bir seçim.</small>
                <button class="home__section__button">Daha Fazlasını Hemen İncele</button>
            </div>
            <div class="home__section__image__area">
                <img src="{{asset('assets/images/wiky-5e-pembe.png')}}" alt="wiky_gorsel" class="animated-image">
            </div>
            
        </div>
    </section>
    <section class="home__section__wrapper">
        <div class="home__section">
            <div class="home__section__main">
                <span class="home__section__badge">Yeni Ürün</span>
                <h3 class="home__section__title">Wiky Watch 5E</h3>
                <h4 class="home__section__featured">
                    Şık IPS Ekran | SOS Tuşu | Konum Takibi | Sınıf Modu | Güvenli Alan | Görüntülü Görüşme
                </h4>
                <small class="home__section__description">Wiky Watch 5E , Akıllı çocuk saati dünyasında devrim yaratıyor ! Türkiye'de ilk ve tek E-SIM özellikli akıllı çocuk saati.Görüntülü görüşme dayanıklı tasarımı ve uzun pil ömrü ile her an güvende olun. Elektronik çit kayıp yönetimi ve sınıf modu gibi özellikleriyle ebevenylere tam kontrol sağlar.Hem şık hemde fonksiyonel her yaş için mükemmel bir seçim.</small>
                <button class="home__section__button">Daha Fazlasını Hemen İncele</button>
            </div>
            <div class="home__section__image__area">
                <img src="{{asset('assets/images/wiky-4s-siyah.png')}}" alt="wiky_gorsel" class="animated-image">
            </div>
        </div>
    </section>
</section>
@endsection