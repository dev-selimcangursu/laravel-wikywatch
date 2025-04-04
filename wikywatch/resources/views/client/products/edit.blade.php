@extends('client.partials.master')
@section('main')
<div id="productFeatureModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Ürün Özellikleri</h2>
        <table>
            <tr>
                <th>Özellik</th>
                <th>Değer</th>
            </tr>
            <tr>
                <td>Ağırlık</td>
                <td>208 Gram</td>
            </tr>
            <tr>
                <td>Boyutlar</td>
                <td>153 x 88 x 28 mm</td>
            </tr>
            <tr>
                <td>Sos Acil Arama</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Sesli Arama</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Görüntülü Görüşme Desteği</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Sesli Mesaj Gönderme / Alma</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Yazılı Mesaj Alma Gönderme</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Uzaktan Görüntü Alma</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Tuşla Arama Aktifleştirme</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Rehber Kişi Sayısı</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Anlık Konum Takibi</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Geçmiş Rota Takibi</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Alarm</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Koldan Çıktı Uyarısı</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Sınıf Modu</td>
                <td>Var</td>
            </tr>
              <tr>
                <td>Elektronik Çit</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Takip Aralığı Belirleme</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Titreşime Alma</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Uzaktan Kapatma</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Uzaktan Yeniden Başlatma</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Zaman Ayarlı Açma</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Saat ve Dil Ayarları</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Türkçe Dil Desteği</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Adım Sayar</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Gizli Arama Yapanları Göster</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Saati Uzaktan Sıfırlama</td>
                <td>Var</td>
            </tr>
            <tr>
                <td>Koldan Çıktı Uyarısını Kapatma</td>
                <td>Yok</td>
            </tr>
        </table>
    </div>
</div>
<div id="productPıcturesModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="slider-container">
            <div class="main-image">
                <img id="mainImage" src="https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-4.jpg" alt="Ürün Görseli">
            </div>
            <div class="thumbnail-container">
                <img class="thumbnail" src="https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-4.jpg" alt="Thumbnail 1" onclick="changeImage('https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-4.jpg')">
                <img class="thumbnail" src="https://cdn4.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-5-300x300.jpg.webp" alt="Thumbnail 2" onclick="changeImage('https://cdn4.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-5-300x300.jpg.webp')">
                <img class="thumbnail" src="https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-7.jpg" alt="Thumbnail 3" onclick="changeImage('https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-7.jpg')">
                <img class="thumbnail" src="https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-3.jpg" alt="Thumbnail 4" onclick="changeImage('https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-3.jpg')">
                <img class="thumbnail" src="https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-2.jpg" alt="Thumbnail 4" onclick="changeImage('https://cdn1.wikywatch.com.tr/uploads/2025/03/wiky-watch-5plus-mor-2.jpg')">
            </div>
        </div>
    </div>
</div>






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
            <a id="productFeatureTableOpen" href="">Ürün Özellikleri Tablosunu İncele !</a>
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
    <div class="basket_wrapper">
        <div class="basket__cargo__status__area">
            <i class="bi bi-truck"></i>
            <h6>Gönderim</h6>
            <small>1-3 İş Günü</small>
            <small>Ücretsiz Gönderim</small>
        </div>
        <div class="basket__help__area">
            <a href="">Satın Alım Konusunda Sorularınız mı Var ?</a>
            <div class="basket__social__media__area">
                <small>Bizi Sosyal Medyadan Takip Edebilirsiniz.</small>
                <div class="basket__social__media__list">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-youtube"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="basket__add__and__amount">
             <h5>6539 TL</h5>
             <small>2,300,00 TL x 3 Aya Kadar Taksit</small>
             <button class="addBasketButton">Sepete Ekle</button>
        </div>
    </div>
    
   </section>

   <script>
    $(document).ready(function(){
      
       let productFeatureModal = $('#productFeatureModal');
       let productPıcturesModal = $('#productPıcturesModal')

       // Ürün Özellik Tablosunu Aç
       $('#productFeatureTableOpen').click(function(e){
          e.preventDefault();
          productFeatureModal.css('display','block');
       });
       // Ürün Özellik Tablosunu Kapat
       $('.close').click(function(e){
        e.preventDefault();
          productFeatureModal.css('display','none');
          productPıcturesModal.css('display','none');
       })
       // Ürün Görselleri Modali Aç
       $('.open__product__modal__image').click(function(e){
        e.preventDefault();
        productPıcturesModal.css('display','block');
       })
    })

    // Görsel değiştirme işlemi
function changeImage(imageSrc) {
    const mainImage = document.getElementById("mainImage");
    mainImage.src = imageSrc;
    
    // Tüm küçük resimleri normal hale getir
    const thumbnails = document.querySelectorAll(".thumbnail");
    thumbnails.forEach(thumbnail => {
        thumbnail.classList.remove("selected");
    });

    // Tıklanan küçük resmi seçili yap
    const selectedThumbnail = Array.from(thumbnails).find(thumbnail => thumbnail.src.includes(imageSrc));
    if (selectedThumbnail) {
        selectedThumbnail.classList.add("selected");
    }
}

   </script>
@endsection
