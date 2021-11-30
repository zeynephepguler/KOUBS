@include('layouts.header')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/ilk.css') }}" type="text/css">
    <title></title>
  </head>
  <body>
    <div class="div1" >
    <ul ><left>
      <li><a href="/kayitol">Kayıt Ol</a></li>
      <li><a href="/ogrencigiris">Giriş Yap</a></li>
      <li><a href="/sifremiunuttum">Şifremi Unuttum</a></li>
    </ul>
  </div>

      <div class="but"> <center>
        <input type="number" pattern="\d" size="50px" placeholder="Öğrenci No"> <br>
        <input type="password" size="50px" placeholder="Şifre"><br>
        <input type="password" size="50px" placeholder="Şifre Tekrarı"><br><br>
    <button type="button" name="button" class="button" onclick="location='#'">  Değiştir</button>
  </body>
  </div>
</html>
