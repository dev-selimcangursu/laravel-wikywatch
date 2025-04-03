@extends('client.partials.master')
@section('main')
<section id="home">
    {{--Home Section::Start --}}
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
                <span class="home__section__badge">Popüler Ürün</span>
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
                <span class="home__section__badge">En Çok Satan Ürün</span>
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
       {{--Home Section::End --}}
       {{-- Order Products :: Start --}}
       <section id="order__products__wrapper">
           <div class="order__products">
              <div class="order__products__top">
                 <h3 class="order__product__title">Diğer Ürünler</h3>
                 <a class="total__products__link" href="">Tüm Ürünlere Bak</a>
              </div>
               <div class="order__products__cards">
                   <div class="order__product__card">
                       <div class="order__product__card__main">
                            <h5 class="order__product__card__title">Wiky Watch 4S Kamuflaj Serisi</h5>
                            <div class="order__product__card__description__area">
                                <small class="order__product__card__description">Güvenli Takip | Görüntülü Görüşme | Uzun Pil Ömrü | IPS Ekran | IP67 Sertifikası | Ateş Ölçer</small>
                            </div>
                            <div class="order__product__card__bottom">
                                <button class="order__product__card__bottom__button">Ürünü İncele</button>
                            </div>
                       </div>
                       <div class="order__product__card__image__area">
                        <img src="{{asset('assets/images/wikywatch-4s-pembe-kamuflaj.png')}}" alt="image">
                    </div>
                   </div>
                   <div class="order__product__card">
                    <div class="order__product__card__main">
                         <h5 class="order__product__card__title">Wiky Watch 5S Akıllı Çocuk Saati </h5>
                         <div class="order__product__card__description__area">
                             <small class="order__product__card__description">Güvenli Takip | Görüntülü Görüşme | Uzun Pil Ömrü | IPS Ekran | IP67 Sertifikası | Ateş Ölçer</small>
                         </div>
                         <div class="order__product__card__bottom">
                             <button class="order__product__card__bottom__button">Ürünü İncele</button>
                         </div>
                    </div>
                    <div class="order__product__card__image__area">
                        <img src="{{asset('assets/images/wikywatch-4s-pembe-kamuflaj.png')}}" alt="image">
                    </div>
                </div>
                <div class="order__product__card">
                    <div class="order__product__card__main">
                         <h5 class="order__product__card__title">Wiky Watch Tag Serisi</h5>
                         <div class="order__product__card__description__area">
                             <small class="order__product__card__description">Güvenli Takip | Görüntülü Görüşme | Uzun Pil Ömrü | IPS Ekran | IP67 Sertifikası | Ateş Ölçer</small>
                         </div>
                         <div class="order__product__card__bottom">
                             <button class="order__product__card__bottom__button">Ürünü İncele</button>
                         </div>
                    </div>
                    <div class="order__product__card__image__area">
                        <img src="{{asset('assets/images/wikywatch-4s-pembe-kamuflaj.png')}}" alt="image">
                    </div>
                </div>
                <div class="order__product__card">
                    <div class="order__product__card__main">
                         <h5 class="order__product__card__title">Wiky Çantalar</h5>
                         <div class="order__product__card__description__area">
                             <small class="order__product__card__description">Güvenli Takip | Görüntülü Görüşme | Uzun Pil Ömrü | IPS Ekran | IP67 Sertifikası | Ateş Ölçer</small>
                         </div>
                         <div class="order__product__card__bottom">
                             <button class="order__product__card__bottom__button">Ürünü İncele</button>
                         </div>
                    </div>
                    <div class="order__product__card__image__area">
                        <img src="{{asset('assets/images/wikywatch-4s-pembe-kamuflaj.png')}}" alt="image">
                    </div>
                </div>
               </div>
           </div>
       </section>
        {{-- Order Products :: End --}}
        <section id="mobile__app__wrapper">
            <div class="mobile__app__area">
                <h2>Wiky Watch Uygulama Görüntüleri</h2>
                <small>Uygulama ile çocuğunuzu takip edebilir,mesaj bırakabilir, arayabilir ve daha bir çok özelliği kullanabilirsiniz.</small>
            </div>
            <div class="splide app__splide" role="group" aria-label="Wiky Watch Screenshots">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-1.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-2.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-3.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-4.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-5.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-6.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/images/uygulama-7.webp')}}" alt="Wiky Watch Screenshot 1">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
</section>
<script>
    var splide = new Splide('.app__splide', {
  type   : 'loop',
  perPage: 5,    
  perMove: 1,     
  gap    : '100px', 
  breakpoints: {
    1024: {
      perPage: 2, 
    },
    768: {
      perPage: 1,
    },
  },
});
splide.mount();
</script>
@endsection