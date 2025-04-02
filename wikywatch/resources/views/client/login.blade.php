@extends('client.partials.master')
@section('main')
<section id="login__wrapper" style="height: 70vh">
    <h3 class="login__global__text">Ödeme seçeneklerini hızlandırmak için oturum açın.</h3>
    <div class="login__area">
         <p class="login__text">Wiky Watch'da oturum açın</p>
        <form action="">
            <input type="text" placeholder="E-Posta Adresi">
            <input type="text" placeholder="Parola">
            <button>Giriş Yap</button>
            <input type="checkbox">
            <a href="">Parolayı mı Unuttunuz ?</a>
            <small>Wiky Watch Hesabınız yok mu?<a href="">Şimdi Oluşturun</a></small>
        </form>
    </div>
    <div class="login__wrapper__bottom">
        <p>Daha fazla yardıma mı ihtiyacınız var? <a href="">Hemen sohbet edin </a> veya 00800 448 829 873 numaralı telefonu arayın.</p>
    </div>
</section>  
@endsection