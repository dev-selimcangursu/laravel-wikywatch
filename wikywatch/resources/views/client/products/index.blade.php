@extends('client.partials.master')
@section('main')
<style>

    #products__list {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 20px;
        padding: 20px;
        box-sizing: border-box;
    }
    .product__card {
        width: 100%;
        max-width: 300px;
        border: 1px solid rgba(128, 128, 128, 0.2);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product__card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .product__card__header{
        background: whitesmoke;
    }
    .product__card__header img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-bottom: 1px solid #f0f0f0;
    }

    .product__card__body {
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .product__card__body__brand {
        font-size: 14px;
        color: #7a7a7a;
        margin-bottom: 5px;
    }

    .product__card__body__title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 5px 0;
    }

    .product__card__body__star__area {
        margin: 5px 0;
    }

    .product__card__body__star__area i {
        color: #ff9f00;
    }
    .price__area {
        display: flex;
        justify-content:start;
        align-items: center;
        gap:10px;
        margin-top: auto;
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }

    .price__area span:first-child {
        text-decoration: line-through;
        color: #888;
    }

    .price__area span:last-child {
        color: #e60000;
    }

    /* İncele butonu */
    .product__card__body button {
        margin-top: 10px;
        padding: 10px;
        background-color: black;
        color: white;
        font-size: 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .product__card__body button:hover {
        background-color: #333;
    }
    .cargo__featured__area{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .cargo__featured__area span:first-child{
        font-size: 10px;
        background:purple;
        padding: 4px;
        color: whitesmoke;
    }
    .cargo__featured__area span:last-child {
        font-size: 10px;
        background: #6699CC;
        padding: 4px;
        color: whitesmoke;
    }
    @media (max-width: 768px) {
        #products__list {
            gap: 15px;
            justify-content: center;
        }

        .product__card {
            max-width: 100%;
        }
    }
</style>

<section id="products__list">
    <div class="product__card">
        <div class="product__card__header">
            <img src="{{asset('assets/images/wiky-5plus-mavi.png')}}" alt="wiky-watch">
        </div>
        <div class="product__card__body">       
            <small class="product__card__body__brand">WIKY WATCH</small>
            <div class="cargo__featured__area">
                <span><i class="bi bi-truck"></i> Ücretsiz Kargo</span>
                <span><i class="bi bi-box-seam"></i> Hızlı Teslimat</span>
            </div>
            <p class="product__card__body__title">Wiky Watch 5 Plus Akıllı Çocuk Saati Mavi</p>
         
            <div class="product__card__body__star__area">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="price__area">
                <span>6390₺</span>
                <span>6090₺</span>
            </div>
            <button>İncele</button>
        </div>
    </div>
    <div class="product__card">
        <div class="product__card__header">
            <img src="{{asset('assets/images/wiky-5plus-pembe.png')}}" alt="wiky-watch">
        </div>
        <div class="product__card__body">       
            <small class="product__card__body__brand">WIKY WATCH</small>
            <div class="cargo__featured__area">
                <span><i class="bi bi-truck"></i> Ücretsiz Kargo</span>
                <span><i class="bi bi-box-seam"></i> Hızlı Teslimat</span>
            </div>
            <p class="product__card__body__title">Wiky Watch 5 Plus Akıllı Çocuk Saati Pembe</p>
         
            <div class="product__card__body__star__area">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="price__area">
                <span>6390₺</span>
                <span>6090₺</span>
            </div>
            <button>İncele</button>
        </div>
    </div>
    <div class="product__card">
        <div class="product__card__header">
            <img src="{{asset('assets/images/wiky-5plus-siyah.png')}}" alt="wiky-watch">
        </div>
        <div class="product__card__body">       
            <small class="product__card__body__brand">WIKY WATCH</small>
            <div class="cargo__featured__area">
                <span><i class="bi bi-truck"></i> Ücretsiz Kargo</span>
                <span><i class="bi bi-box-seam"></i> Hızlı Teslimat</span>
            </div>
            <p class="product__card__body__title">Wiky Watch 5 Plus Akıllı Çocuk Saati Siyah</p>
         
            <div class="product__card__body__star__area">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="price__area">
                <span>6390₺</span>
                <span>6090₺</span>
            </div>
            <button>İncele</button>
        </div> 
    </div>
    <div class="product__card">
        <div class="product__card__header">
            <img src="{{asset('assets/images/wiky-5plus-mor.png')}}" alt="wiky-watch">
        </div>
        <div class="product__card__body">       
            <small class="product__card__body__brand">WIKY WATCH</small>
            <div class="cargo__featured__area">
                <span><i class="bi bi-truck"></i> Ücretsiz Kargo</span>
                <span><i class="bi bi-box-seam"></i> Hızlı Teslimat</span>
            </div>
            <p class="product__card__body__title">Wiky Watch 5 Plus Akıllı Çocuk Saati Mor</p>
         
            <div class="product__card__body__star__area">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="price__area">
                <span>6390₺</span>
                <span>6090₺</span>
            </div>
            <button>İncele</button>
        </div> 
    </div>

</section>
@endsection
