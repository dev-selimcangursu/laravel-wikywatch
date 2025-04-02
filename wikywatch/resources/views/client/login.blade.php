@extends('client.partials.master')
@section('main')
<section id="login__wrapper">
    <h3 class="login__global__text">Ödeme seçeneklerini hızlandırmak için oturum açın.</h3>
    <div class="login__area">
        <p class="login__text">Wiky Watch'da oturum açın</p>
        <form action="">
            <input type="email" placeholder="E-Posta Adresi" required>
            <input type="password" placeholder="Parola" required>
            <button id="loginButton" type="submit">Giriş Yap</button>
            <div class="form__options">
                <label>
                    <input type="checkbox"> Beni hatırla
                </label>
                <a href="">Parolayı mı Unuttunuz?</a>
            </div>
            <small class="dont__have__account">Wiky Watch Hesabınız yok mu? <a class="dont__have__account__link" href="">Şimdi Oluşturun</a></small>
        </form>
    </div>
    <div class="login__wrapper__bottom">
        <p>Daha fazla yardıma mı ihtiyacınız var? <a href="">Hemen sohbet edin </a> veya 00800 448 829 873 numaralı telefonu arayın.</p>
    </div>
</section>
@endsection