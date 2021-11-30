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
    </ul>
  </div>

      <div class="but"> <center>
        <input type="text" size="50px" placeholder="Öğrenci No"> <br>
        <input type="text" size="50px" placeholder="Ad"><br>
        <input type="text" size="50px" placeholder="Soyad"><br>
        <input type="text" size="50px" placeholder="Şifre"><br>
        <input type="text" size="50px" placeholder="Şifre Tekrarı"><br>
        <input type="text" size="50px" placeholder="E-posta"><br>
        <input type="text" size="50px" placeholder="Telefon"><br>
        <input type="text" size="50px" placeholder="TC Kimlik"><br>
        <input type="text" size="50px" placeholder="Doğum Tarihi"><br>
        <input type="text" size="50px" placeholder="Adres"><br>
        <select>
        <option> Sınıf Seçiniz </option>
        <option> Hazırlık </option>
        <option> 1.Sınıf </option>
        <option> 2.Sınıf </option>
        <option> 3.Sınıf </option>
        <option> 4.Sınıf </option>
      </select> <br>
      <select>
      <option>Üniversite Seçiniz </option>
      <option> Kocaeli Üniversitesi </option>
    </select> <br>
    <select>
    <option> Fakülte Seçiniz </option>
    <option> </option>
    <option> </option>
    <option> </option>
    <option>  </option>
    <option> </option>
  </select> <br>
  <select>
  <option> Bölüm Seçiniz </option>
  <option>  </option>
  <option>  </option>
  <option>  </option>
  <option>  </option>
  <option> </option>
</select> <br><br>



    <button type="button" name="button" class="button" onclick="location='#'">  Kayıt Ol</button>
  </body>
  </div>
  <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
      // Initialize Firebase
      var firebaseConfig = {
        apiKey: "AIzaSyCwAYQs1Y2YbItseGeaCdRTMN00Db72J9M",
    authDomain: "kobs-db116.firebaseapp.com",
    databaseURL: "https://kobs-db116-default-rtdb.firebaseio.com",
    projectId: "kobs-db116",
    storageBucket: "kobs-db116.appspot.com",
    messagingSenderId: "1099035871891",
    appId: "1:1099035871891:web:3938d72b37b87ce6b7db66",
    measurementId: "G-5T4MKWE651"
      };
      firebase.initializeApp(config);
      var facebookProvider = new firebase.auth.FacebookAuthProvider();
      var googleProvider = new firebase.auth.GoogleAuthProvider();
      var facebookCallbackLink = '/login/facebook/callback';
      var googleCallbackLink = '/login/google/callback';
      async function socialSignin(provider) {
        var socialProvider = null;
        if (provider == "facebook") {
          socialProvider = facebookProvider;
          document.getElementById('social-login-form').action = facebookCallbackLink;
        } else if (provider == "google") {
          socialProvider = googleProvider;
          document.getElementById('social-login-form').action = googleCallbackLink;
        } else {
          return;
        }
        firebase.auth().signInWithPopup(socialProvider).then(function(result) {
          result.user.getIdToken().then(function(result) {
            document.getElementById('social-login-tokenId').value = result;
            document.getElementById('social-login-form').submit();
          });
        }).catch(function(error) {
          // do error handling
          console.log(error);
        });
      }
      </script>
</html>
