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
            <a href="">Ürün Özellikleri Tablosunu İncele !</a>
        </div>
    </div>
    <div class="product__feature__wrapper">
        <div class="product__feature">
            <div class="product__feature__image__area">
                <img src="https://img.freepik.com/free-vector/illustration-gallery-icon_53876-27002.jpg?ga=GA1.1.750660428.1742764870&semt=ais_hybrid&w=740" alt="Product Image">
            </div>
            <div class="product__feature__main">
                <h3 class="product__feature__main__title">Nabız, Oksijen ve Ateş Ölçer</h3>
                <p class="product__feature__main__description">
                    Gelişmiş sağlık takibi özellikleri arasında nabız ölçer, oksijen ölçer ve ateş ölçer bulunur. Bu özellikler, çocuklarınızın sağlık durumlarını anlık olarak izlemeyi sağlar ve olası sorunlara karşı hızlı bir şekilde müdahale edilmesine yardımcı olur.
                </p>
            </div>
        </div>
        <div class="product__feature">
            <div class="product__feature__main">
                <h3 class="product__feature__main__title">Amoled Ekran ve Kompakt Tasarım</h3>
                <p class="product__feature__main__description">
                    Wiky Watch 5 Plus, 1.78 inç büyüklüğündeki AMOLED ekranıyla canlı renkler ve net görüntüler sunar. 368 x 448 çözünürlüğü ile ekran kalitesi oldukça yüksektir. Ayrıca, 52 gram ağırlığı ile hafif ve rahat bir kullanım sağlar.
                </p>
            </div>
            <div class="product__feature__image__area">
                <img src="https://img.freepik.com/free-vector/illustration-gallery-icon_53876-27002.jpg?ga=GA1.1.750660428.1742764870&semt=ais_hybrid&w=740" alt="Product Image">
            </div>
        </div>
        <div class="product__feature">
            <div class="product__feature__image__area">
                <img src="https://img.freepik.com/free-vector/illustration-gallery-icon_53876-27002.jpg?ga=GA1.1.750660428.1742764870&semt=ais_hybrid&w=740" alt="Product Image">
            </div>
            <div class="product__feature__main">
                <h3 class="product__feature__main__title">Elektronik Çit ve Sınıf Modu</h3>
                <p class="product__feature__main__description">
                    Wiky Watch 5 Plus, elektronik çit özelliği ile belirli bölgelerin dışına çıkıldığında uyarı gönderir. Ayrıca, sınıf modu sayesinde çocuklar okuldayken dikkatlerini dağıtacak bildirimleri almazlar; bu da eğitim sürecini kesintisiz kılar.
                </p>
            </div>
        </div>
        <div class="product__feature">
            <div class="product__feature__main">
                <h3 class="product__feature__main__title">Görüntülü Görüşme Özelliği</h3>
                <p class="product__feature__main__description">
                    Wiky Watch 5 Plus, hem sesli hem de görüntülü görüşme yapabilme özelliği ile öne çıkıyor. Bu özellik, ebeveynlerin çocuklarıyla yüz yüze iletişim kurabilmesini sağlar. Bu da aile içi etkinlikleri veya arkadaşlarla iletişimi daha etkileşimli hale getirir.
                </p>
            </div>
            <div class="product__feature__image__area">
                <img src="https://img.freepik.com/free-vector/illustration-gallery-icon_53876-27002.jpg?ga=GA1.1.750660428.1742764870&semt=ais_hybrid&w=740" alt="Product Image">
            </div>
        </div>
        <div class="product__feature">
            <div class="product__feature__image__area">
                <img src="https://img.freepik.com/free-vector/illustration-gallery-icon_53876-27002.jpg?ga=GA1.1.750660428.1742764870&semt=ais_hybrid&w=740" alt="Product Image">
            </div>
            <div class="product__feature__main">
                <h3 class="product__feature__main__title">Spreadtrum 8541E İşlemci ve Wiky OS İletişim Sistemi</h3>
                <p class="product__feature__main__description">
                    "Spreadtrum 8541E Quad-Core 1.4 GHz işlemci ve Wiky OS işletim sistemi ile saatin performansı oldukça yüksek ve kullanıcı dostudur. Bu özelliklerin sorunsuz şekilde çalışmasını sağlar."
                </p>
            </div>
        </div>
    </div>
    
</section>
@endsection
