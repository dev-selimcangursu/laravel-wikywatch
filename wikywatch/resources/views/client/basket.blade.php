@extends('client.partials.master')
@section('main')
<section id="basket" class="basket">
   <div class="basket__area">
      <div class="basket__product__list">
         <small>Sepetinizde 4 ürün var</small>
         <div class="basket__product">
            <div class="basket__product__picture__area">
                <img src="{{asset('assets/images/wiky-5plus-pembe.png')}}" alt="">
            </div>
            <div class="basket__product__main__area">
                <div class="basket__product__main">
                    <h5>Wiky Watch 5 Plus Pembe Akıllı Çocuk Saati</h5>
                    <small>Pembe Renk</small>
                    <small>Ürün Kodu : 987654321</small>
                    <small>Stokta Var</small>
                </div>
                <div class="basket__product__amount__area">
                    <div class="basket__product__amount__area__top">
                        <h6>6.500₺</h6>
                        <a href="">Sepetten Çıkar</a>
                    </div>
                    <div class="basket__product__amount__area__bottom">
                        <div class="quantity-selector">
                            <button class="quantity-btn decrease-btn">-</button>
                            <span class="quantity">1</span>
                            <button class="quantity-btn increase-btn">+</button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="basket__product">
            <div class="basket__product__picture__area">
                <img src="{{asset('assets/images/wiky-5plus-mavi.png')}}" alt="">
            </div>
            <div class="basket__product__main__area">
                <div class="basket__product__main">
                    <h5>Wiky Watch 5 Plus Mavi Akıllı Çocuk Saati</h5>
                    <small>Mavi Renk</small>
                    <small>Ürün Kodu : 987654321</small>
                    <small>Stokta Var</small>
                </div>
                <div class="basket__product__amount__area">
                    <div class="basket__product__amount__area__top">
                        <h6>6.500₺</h6>
                        <a href="">Sepetten Çıkar</a>
                    </div>
                    <div class="basket__product__amount__area__bottom">
                        <div class="quantity-selector">
                            <button class="quantity-btn decrease-btn">-</button>
                            <span class="quantity">1</span>
                            <button class="quantity-btn increase-btn">+</button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="basket__product">
            <div class="basket__product__picture__area">
                <img src="{{asset('assets/images/wiky-5plus-siyah.png')}}" alt="">
            </div>
            <div class="basket__product__main__area">
                <div class="basket__product__main">
                    <h5>Wiky Watch 5 Plus Siyah Akıllı Çocuk Saati</h5>
                    <small>Siyah Renk</small>
                    <small>Ürün Kodu : 987654321</small>
                    <small>Stokta Var</small>
                </div>
                <div class="basket__product__amount__area">
                    <div class="basket__product__amount__area__top">
                        <h6>6.500₺</h6>
                        <a href="">Sepetten Çıkar</a>
                    </div>
                    <div class="basket__product__amount__area__bottom">
                        <div class="quantity-selector">
                            <button class="quantity-btn decrease-btn">-</button>
                            <span class="quantity">1</span>
                            <button class="quantity-btn increase-btn">+</button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="basket__product">
            <div class="basket__product__picture__area">
                <img src="{{asset('assets/images/wiky-5plus-mor.png')}}" alt="">
            </div>
            <div class="basket__product__main__area">
                <div class="basket__product__main">
                    <h5>Wiky Watch 5 Plus Mor Akıllı Çocuk Saati</h5>
                    <small>Mor Renk</small>
                    <small>Ürün Kodu : 987654321</small>
                    <small>Stokta Var</small>
                </div>
                <div class="basket__product__amount__area">
                    <div class="basket__product__amount__area__top">
                        <h6>6.500₺</h6>
                        <a href="">Sepetten Çıkar</a>
                    </div>
                    <div class="basket__product__amount__area__bottom">
                        <div class="quantity-selector">
                            <button class="quantity-btn decrease-btn">-</button>
                            <span class="quantity">1</span>
                            <button class="quantity-btn increase-btn">+</button>
                        </div>
                    </div>
                    
                </div>
            </div>
         </div>
      </div>
      <div class="basket__summary__card__area">
        <div class="basket__summary__card">
            <div class="basket__summary__card__discount__area">
                <div class="form-group">
                    <label>Kupon Kullanın</label>
                    <input type="text" placeholder="Kupon Kodunu Giriniz.">
                </div>
                <button>Uygula</button>
            </div>
            <hr>
            <div class="basket__summary">
                <h2>Özet</h2>
                <div class="basket__summary__body">
                    <p>Ara Toplam :</p>
                    <p>7.500₺</p>
                </div>
            </div>
            <hr>
            <div class="basket__summary__amount__card">
                <div class="basket__summary__amount__list">
                    <p>Toplam :</p>
                    <p>7.500₺</p>
                </div>
                <p class="basket__summary_amount__list__description">Bu siparişten Wiky Puanı kazanın (sadece Wiky Watch üyelerine özel)</p>
                <button>Sepeti Onayla</button>
            </div>
            <div class="basket__summary__amount__bottom">
                <ul>
                    <li>
                        <i class="bi bi-truck"></i> Ücretsiz Teslimat
                    </li>
                    <li>
                        <i class="bi bi-award"></i> Wiky Watch Güvencesi
                    </li>
                    <li>
                        <i class="bi bi-lightning-charge"></i> Wiky Siparişlerinizde Puan Kazanma Fırsatı
                    </li>
                    <li>
                        <i class="bi bi-shield-check"></i> Wiky Watch Türkiye Garantisi
                    </li>
                </ul>
            </div>
        </div>
      </div>
   </div>
</section>
<script>
$(document).ready(function() {
    $('.increase-btn').click(function() {
        var quantity = $(this).siblings('.quantity');
        quantity.text(parseInt(quantity.text()) + 1);
    });
    $('.decrease-btn').click(function() {
        var quantity = $(this).siblings('.quantity');
        if (parseInt(quantity.text()) > 1) {
            quantity.text(parseInt(quantity.text()) - 1);
        }
    });
});
</script>
@endsection
