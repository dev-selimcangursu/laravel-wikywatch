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
        <section id="webform__wrapper">
            <div class="webform__container">
                <div class="webform__images">
                    <div class="webform__image__first">
                        <img src="https://cdn5.wikywatch.com.tr/uploads/elementor/thumbs/Wiky-Watch-Elektronik-Cit-1-r2cymnk149qswyaylbduurjjpgo2gc2bno41mfikca.jpg" alt="image">
                    </div>
                    <div class="webform__image__second">
                        <img src="https://cdn5.wikywatch.com.tr/uploads/elementor/thumbs/8-e1739882872370-r1os4izk0g7luook8ql2ibylhsb26cvfeccaq2va0q.jpg" alt="image">
                        <img src="https://cdn2.wikywatch.com.tr/uploads/elementor/thumbs/Akilli-Cocuk-Saatleri-Kac-Yas-Icin-Uygun-Wiky-Watch-e1741777860932-r2qyiqd92k56iitu9yqe2ogpjcj66hx0opxfdt1h8a.jpg" alt="image">
                    </div>
                </div>
                <div class="webform__main">
                    <div class="webform__main__top">
                        <h3>Hemen Bilgi Al ! İndirim Fırsatını Kaçırmayın!</h3>
                        <p><strong>Wiky Watch</strong> şimdi büyük indirimlerle sizleri bekliyor! ile sevdiklerinize hem güvenli hem şık bir hediye verin. Bu fırsatı kaçırmayın, sadece formu doldurun ve anında indirim kazanın!</p>
                        <p>Hemen şimdi formu doldurun, size özel teklifler ve ürünler hakkında detaylı bilgi alarak avantajlardan yararlanın!</p>
                        <p><strong>Hızlı ve Kolay: Formu doldurduktan sonra, sizin için en uygun saat modelleri hakkında bilgilendirileceksiniz.</strong></p>
                    </div>
                    <div class="webform__main__bottom">
                        <form action="">
                            <input type="text" placeholder="İsim Soyisim" required>
                            <input type="text" placeholder="Telefon Numarası" required>
                            <select required>
                                <option value="">Ürün Seçiniz.</option>
                            </select>
                            <button type="submit">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
          </section>

          <section id="blogs__wrapper">
            <div class="blogs__area">
                <h2>Wiky Watch Bilgi Bankası</h2>
                <small>Wiky Watch Bilgi Bankası, Ürün özellikleri, kullanım ipuçları, bakım önerileri ve daha fazlası burada sizleri bekliyor.</small>
            </div>
            <div class="splide blog__splide" role="group" aria-label="Wiky Watch Screenshots">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="">
                                <img src="https://cdn1.wikywatch.com.tr/uploads/elementor/thumbs/Akilli-Cocuk-Saatlerinde-Dikkat-Edilmesi-Gerekenler-2-r34zxtof0rupmhfxpw5uq7m3038nex65m2avb6zvy2.jpg" alt="Wiky Watch Blog 1">
                                <div class="splide__slide__main">
                                <small>Akıllı Çocuk Saati Kullanırken Karşılaşılan En Yaygın Sorunlar ve Çözümler</small>
                               </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="">
                                <img src="https://cdn1.wikywatch.com.tr/uploads/elementor/thumbs/Akilli-Cocuk-Saati-Satin-Alma-Rehberi-r34z054m4hqtlid8ec14dplgp195ldgezcqi88xqwq.jpg" alt="Wiky Watch Screenshot 2">
                            <div class="splide__slide__main">
                                <small>Akıllı Çocuk Saati Satın Alma Rehberi</small>
                            </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                           <a href="">
                            <img src="https://cdn2.wikywatch.com.tr/uploads/elementor/thumbs/Akilli-Cocuk-Saatleri-Kac-Yas-Icin-Uygun-Wiky-Watch-e1741777860932-r2qyiqd92k56iitu9yqe2ogpjcj66hx0opxfdt1h8a.jpg" alt="Wiky Watch Screenshot 3">
                            <div class="splide__slide__main">
                                <small>Akıllı Çocuk Saatleri Kaç Yaş İçin Uygun ?</small>
                            </div>
                           </a>
                        </li>
                        <li class="splide__slide">
                            <a href="">
                               <img src="https://cdn5.wikywatch.com.tr/uploads/elementor/thumbs/Wiky-Watch-Elektronik-Cit-1-r2cymnk149qswyaylbduurjjpgo2gc2bno41mfikca.jpg" alt="Wiky Watch Screenshot 4">
                               <div class="splide__slide__main">
                                  <small>Akıllı Çocuk Saati Elektornik Çit Rehberi</small>
                               </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="">
                                <img src="https://cdn2.wikywatch.com.tr/uploads/elementor/thumbs/5-1-e1740491396958-r211h3zvnyhftdmm2nzbqwiyyni1glg57j2yi4ph16.jpg" alt="Wiky Watch Screenshot 5">
                            <div class="splide__slide__main">
                                <small>Akıllı Çocuk Saati Hangi Yaş İçin Uygundur ?</small>
                            </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                           <a href="">
                            <img src="https://cdn5.wikywatch.com.tr/uploads/elementor/thumbs/8-e1739882872370-r1os4izk0g7luook8ql2ibylhsb26cvfeccaq2va0q.jpg" alt="Wiky Watch Screenshot 6">
                            <div class="splide__slide__main">
                                <small>Akıllı Çocuk Saatlerinin Sağlık Takip Özellikleri</small>
                            </div>
                           </a>
                        </li>
                        <li class="splide__slide">
                            <a href="">
                                <img src="https://cdn2.wikywatch.com.tr/uploads/elementor/thumbs/5plus-kurulum-cover-qvjnov60qvqg9jtittydlpa4zv9lz1czkieywbgiuy.jpg" alt="Wiky Watch Screenshot 7">
                            <div class="splide__slide__main">
                                <small>Wiky Watch 5 Plus Detaylı Saat Kurulumu</small>
                            </div>
                            </a>
                        </li>
        
                        <li class="splide__slide">
                           <a href="">
                            <img src="https://cdn1.wikywatch.com.tr/uploads/elementor/thumbs/apara-meltem-derbazlar-quc4l2fhfarczqwxgsjlv161w1k05sjvs8hhp3q456.jpg" alt="Wiky Watch Screenshot 7">
                            <div class="splide__slide__main">
                                <small>CNN Türk Ana Haber Wiky Watch Akıllı Saat</small>
                            </div>
                           </a>
                        </li>
                        <li class="splide__slide">
                           <a href="">
                            <img src="https://cdn2.wikywatch.com.tr/uploads/elementor/thumbs/gaJVjooOXsY-hd-qtj3m1gys55ck2ne5rf4u29d84y6q3mgzcajfltx8a.jpg" alt="Wiky Watch Screenshot 7">
                            <div class="splide__slide__main">
                                <small>Akıllı Çocuk Saati Kullanırken Karşılaşılan En Yaygın Sorunlar ve Çözümler</small>
                            </div>
                           </a>
                        </li>
                    </ul>
                </div>
             </div>
           </section>
           <section id="sales__points">
            <div class="sales__points__area">
                <h2>Wiky Watch Satış Noktaları</h2>
                <small>Wiky Watch, Tüm Türkiye'deki seçkin satış noktalarında sizlerle buluşuyor. Hemen en yakın satış noktanızı keşfedin!</small>
            </div>
            <div class="splide sales__splide" role="group" aria-label="Wiky Watch Screenshots">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/hepsiburada.png" alt="Wiky Watch Screenshot 1">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/beymen.png" alt="Wiky Watch Screenshot 2">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/media-markt.png" alt="Wiky Watch Screenshot 3">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/nezih.png" alt="Wiky Watch Screenshot 4">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/dr.png" alt="Wiky Watch Screenshot 5">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/amazon.png" alt="Wiky Watch Screenshot 6">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/n11.png" alt="Wiky Watch Screenshot 7">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/teknosa.png" alt="Wiky Watch Screenshot 7">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2024/01/trendyol.png" alt="Wiky Watch Screenshot 7">
                        </li>
                        <li class="splide__slide">
                            <img src="https://www.wikywatch.com.tr/wp-content/uploads/2025/03/vodafone-logo.png" alt="Wiky Watch Screenshot 7">
                        </li>
                    </ul>
                </div>
             </div>
           </section> 
</section>
<script>
// Mobile App Slider
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
// Blog / Bilgi Bankası Slider 
var splide = new Splide('.blog__splide', {
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

var splide = new Splide('.sales__splide', {
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