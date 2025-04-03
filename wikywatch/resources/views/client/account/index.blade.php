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
                 <form>
                    <label style="font-size: 12px;font-weight:bold" for="">İsim Soyisim:</label>
                    <input type="text" value="{{Auth::user()->name}}" id="name" placeholder="İsim Soyisim">
                    <label  style="font-size: 12px;font-weight:bold"  for="">E-Posta Adresi:</label>
                    <input type="email" value="{{Auth::user()->email}}" id="email" placeholder="E-Posta Adresi">
                    <label  style="font-size: 12px;font-weight:bold"  for="">Telefon Numarası:</label>
                    <input type="tel" value="{{Auth::user()->phone}}" id="phone" placeholder="Telefon Numarası">
                    <label  style="font-size: 12px;font-weight:bold"  for="">Adres Bilgisi:</label>
                    <input type="text" value="{{Auth::user()->address}}" id="address" placeholder="Adres">
                    <label  style="font-size: 12px;font-weight:bold"  for="">Posta Kodu:</label>
                    <input type="text" value="{{Auth::user()->postal_code}}" id="postal_code" placeholder="Posta Kodu">
                    <label  style="font-size: 12px;font-weight:bold"  for="">Şehir:</label>
                    <select id="city_id">
                        <option value="">Şehir Seçiniz.</option>
                        <option value="1">İstanbul</option>
                        <option value="2">Samsun</option>
                    </select>
                    <label  style="font-size: 12px;font-weight:bold"  for="">İlçe:</label>
                    <select id="district_id">
                        <option value="">İlçe Seçiniz.</option>
                        <option value="1">Ümraniye</option>
                        <option value="2">Bafra</option>
                    </select>
                    <button type="button" id="userAccountUpdateBtn" class="update-btn">Güncelle</button>
                 </form>
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
                 <form>
                    <input type="password" id="new_password" placeholder="Yeni Parola">
                    <input type="password" id="repeat_new_password" placeholder="Yeni Parola Tekrar">
                    <button type="button" id="update-password-btn" class="update-btn">Güncelle</button>
                 </form>
            </div>
        </div>
    </div>
</section>
<script>
// Menü Seçeneklerine Göre İlgili Alanın Ekranda Gösterilmesi
function showSection(sectionId) {
    $('.account__info, .orders__info, .change__password__info').removeClass('active');
    $('#' + sectionId).addClass('active');
}

$(document).ready(function(){
// Hesap Bilgilerini Güncelleme 
$('#userAccountUpdateBtn').click(function(e){
    e.preventDefault();
    let user_id = {{Auth::user()->id}};
    let name = $('#name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let address =$('#address').val();
    let postal_code =$('#postal_code').val();
    let city_id =$('#city_id').val();
    let district_id =$('#district_id').val();

    $.ajax({
        type:"POST",
        url:"{{route('account.update')}}",
        data:{
            user_id:user_id,
            name:name,
            email:email,
            phone:phone,
            address:address,
            postal_code:postal_code,
            city_id:city_id,
            district_id:district_id,
            _token:"{{csrf_token()}}"
        },
        success:function(response)
        {
        if(response.success)
        {
            console.log(response.message)
            Swal.fire({
            icon: "success",
            title: response.message,
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: "Tamam",
        }).then((result) => {
         if (result.isConfirmed) {
           window.location.reload(); 
         } 
        });
        }else{
            console.log(response.message)
            Swal.fire({
             position: "top-center",
             icon: "error",
             title: response.message,
             showConfirmButton: true,
        });
        }
        },
        error: function(xhr, status, error) {
        console.log('Hata:', error);
        console.log('Durum:', status);
        console.log('Açıklama:', xhr.responseText);
    }
    })
})
// Parola Güncelleme
$('#update-password-btn').click(function(e){
    e.preventDefault();

    let userId = {{Auth::user()->id}};
    let password = $('#password').val();
    let newPassword = $('#new_password').val();
    let repeatNewPassword = $('#repeat_new_password').val();

    if(newPassword === repeatNewPassword) {
        $.ajax({
            type: "POST",
            url: "{{route('account.change.password')}}",
            data: {
                userId: userId,
                newPassword: newPassword,
                _token: "{{csrf_token()}}",
            },
            success: function(response) {
                if(response.success) {
                    Swal.fire({
                     icon: "success",
                     title: response.message,
                     showDenyButton: false,
                     showCancelButton: true,
                     confirmButtonText: "Tamam",
               }).then((result) => {
                   if (result.isConfirmed) {
                   window.location.reload(); 
                  } 
                });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Bir hata oluştu!',
                        text: response.message || 'Lütfen tekrar deneyin.',
                        showConfirmButton: true
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Bir hata oluştu!',
                    text: response.message,
                    showConfirmButton: true
                });
            }
        });
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Parolalar eşleşmiyor!',
            text: 'Lütfen yeni parolayı tekrar girin.',
            showConfirmButton: true
        });
    }
});
})
</script>

@endsection
