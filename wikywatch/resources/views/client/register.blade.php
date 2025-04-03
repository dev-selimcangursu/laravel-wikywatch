@extends('client.partials.master')
@section('main')
<section id="register__wrapper">
    <h3 class="register__global__text">Wiky Watch Hesabınızı Oluşturun.</h3>
    <div class="register__area">
        <p class="register__text">Tüm Wiky Watch hizmetlerine erişmek için tek ihtiyacınız olan bir Wiky Watch Hesabı.</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" id="name" name="name" placeholder="İsim Soyisim" required>
            <input type="email" id="email" name="email" placeholder="E-Posta Adresi" required>
            <input type="password" id="password" name="password" placeholder="Parola" required>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Parola Tekrarı" required>
            <button id="registerButton" type="submit">Kayıt Ol</button>
            <small class="have__account">Wiky Watch Hesabınız Var Mı ? <a class="have__account__link" href="">Hemen Giriş Yapın</a></small>
        </form>
    </div>
    <div class="register__wrapper__bottom">
        <p>Daha fazla yardıma mı ihtiyacınız var? <a href="">Hemen sohbet edin </a> veya 00800 448 829 873 numaralı telefonu arayın.</p>
    </div>
</section>
@endsection