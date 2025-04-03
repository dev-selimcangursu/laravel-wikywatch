@extends('client.partials.master')
@section('main')
<section id="account" class="account">
    <div class="account__wrapper">
        <div class="account__menu">
            <ul>
                <li><a href="javascript:void(0);" onclick="showSection('account-info')"><i class="bi bi-person"></i> Hesap Detayları</a></li>
                <li><a href="javascript:void(0);" onclick="showSection('orders-info')"><i class="bi bi-archive"></i> Siparişlerim</a></li>
                <li><a href="javascript:void(0);" onclick="showSection('change-password-info')"><i class="bi bi-gear"></i> Şifremi Değiştir</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a onclick="event.preventDefault();this.closest('form').submit();" href="{{route('logout')}}"><i class="bi bi-box-arrow-in-right"></i> Çıkış Yap</a> 
                   </form>  
                </li>
            </ul>
        </div>
        <div class="account__main">
            <div id="account-info" class="account__info active">
                <h2>Hesap Detayları</h2>
                <input type="text" placeholder="İsim Soyisim">
                <input type="email" placeholder="E-Posta Adresi">
                <input type="tel" placeholder="Telefon Numarası">
                <input type="text" placeholder="Adres">
                <input type="text" placeholder="Posta Kodu">
                <select name="" id="">
                    <option value="">Şehir Seçiniz.</option>
                    <option value="1">İstanbul</option>
                    <option value="2">Samsun</option>
                </select>
                <select name="" id="">
                    <option value="">İlçe Seçiniz.</option>
                    <option value="1">Ümraniye</option>
                    <option value="2">Bafra</option>
                </select>
                <button class="update-btn">Güncelle</button>
            </div>
            <div id="orders-info" class="orders__info">
                <h2>Siparişlerim</h2>
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Sipariş Numarası</th>
                            <th>Tarih</th>
                            <th>Ürün Adı</th>
                            <th>Adet</th>
                            <th>Durum</th>
                            <th>Toplam Fiyat</th>
                            <th>Aksiyon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>01/01/2025</td>
                            <td>Örnek Ürün</td>
                            <td>2</td>
                            <td>Gönderildi</td>
                            <td>₺200,00</td>
                            <td><button class="view-btn">Detaylar</button></td>
                        </tr>
                        <tr>
                            <td>#12346</td>
                            <td>02/01/2025</td>
                            <td>Diğer Ürün</td>
                            <td>1</td>
                            <td>Beklemede</td>
                            <td>₺150,00</td>
                            <td><button class="view-btn">Detaylar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="change-password-info" class="change__password__info">
                <h2>Şifrenizi Değiştirin</h2>
                <input type="password" placeholder="Eski Parola">
                <input type="password" placeholder="Yeni Parola">
                <input type="password" placeholder="Yeni Parola Tekrar">
                <button class="update-btn">Güncelle</button>
            </div>
        </div>
    </div>
</section>
<script>
    function showSection(sectionId) {
        document.querySelectorAll('.account__info, .orders__info, .change__password__info').forEach(function(section) {
            section.classList.remove('active');
        });
        document.getElementById(sectionId).classList.add('active');
    }
</script>

@endsection
