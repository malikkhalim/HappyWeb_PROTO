
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head><script src="/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title>Sticky Footer Navbar Template · Bootstrap v5.3</title>


  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">

  <!-- External CSS -->
  <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  


  <!-- External JS -->
  <script href="{!! asset('js/bootstrap.bundle.js') !!}" rel="stylesheet"></script>


  

  
  <!-- Custom styles for this template -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var currentPath = window.location.pathname;

    var navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    navLinks.forEach(function(link) {
      var href = link.getAttribute("href");
      if (currentPath.endsWith(href)) {
        link.classList.add("active");
      }
    });
  });
</script>

<script>
// set a short timeout before taking action
// so as to allow hash to be set
setTimeout(()=>{
  // uses HTML5 history API to manipulate the location bar
  history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
}, 5); // 5 millisecond timeout in this case
</script>


</head>
<body class="d-flex flex-column h-100 " data-bs-spy="scroll" data-bs-target="#navbarCollapse">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link font-outfit" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-outfit" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-outfit" href="#faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-outfit" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<!-- Begin page content -->
<section class="section1" id="beranda">
    <div class="container px-4">
      <div class="row gx-4 justify-content-center">
        <div class="hero-character-container col-lg-12 text-center">
          <img src="{{URL::asset('/img/character1.png')}}" class="hero-character">
        </div>
        <div class="col-xl-12">
          <h1 class="col-lg-12 behappy text-center">#BEHAPPY</h1>
        </div>
        <div class="col-lg-12">
          <div class="row align-items-center ">
            <div class="col-12 ">
              <p class="text1-section1 font-outfit">Cara Paling Mudah dan Fun untuk <br> Mengatasi Permasalahan Mental <br> Health</p>
            </div>
            <div class="col-12">
              <p class="text2-section1 font-outfit">Ayo Dukung Mental Health Ecosystem untuk <br> Indonesia yang Lebih Bahagia!</p>
            </div>
            <div class="col-3">
              <a href="https://forms.gle/JJeKMthGCrSqXnFR6">
                <button class="signup-2" >
                  <div class="signup-2-word p-0 font-outline" href="https://forms.gle/JJeKMthGCrSqXnFR6">SIGN UP</div>
                </button>
              </a>  
              <div class="break"></div>
            </div>
          </div>
        </div>
      </div>  
    </div>
</section>


<div class="container-wrapper">
<section class="section2" id="layanan">
    <div class="container px-4">
      <div class="row gx-4 align-items-center justify-content-center">
        <div class="char1-section2-container col-lg-12 text-center">
          <img src="{{URL::asset('/img/char1-section2.png')}}" class="char1-section2">
        </div>
        <div class="char2-section2-container col-lg-12 text-center">
          <img src="{{URL::asset('/img/char2-section2.png')}}" class="char2-section2">
        </div>
        <div class="char3-section2-container col-lg-12 text-center">
          <img src="{{URL::asset('/img/char3-section2.png')}}" class="char3-section2">
        </div>
        <div class="col-lg-12">
          <div class="object-line"></div>
          <h2 class="text1-section2">Temukan Perubahan Positif Bersama Kami</h2>
        </div>
        <!-- Breake -->        
        <div class="col-8 col-sm-7 object-box mt-sm-5 mt-3 ">
          <div class="row align-items-center">
            <div class="col-2 px-0">
                <img class="object-box-content-icon" src="{{URL::asset('/img/chat-icon.png')}}">
            </div>
            <div class="col-9 gx-1">
                <p class="object-box-text font-outfit">Peer to Peer Counseling</p>
            </div>
            <div class="col-12">
                <p class="object-box-text-2 font-outfit">Ceritakanlah Keluh-Kesahmu dengan teman <br> sejawat yang mendengarkanmu. Jadi, kamu <br> gak perlu ngejalanin ini sendirian!</p>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <p class="text2-section2 font-outfit">“ Dalam badai hidup yang tak mampu ditanggung <br> seorang diri, tenangkan dirimu dan carilah mercusuar <br> dukungan. Tak perlu menghadapi gelombang itu <br> sendirian. ”</p>
        </div>
        <!-- Breake --> 
        <div class="col-8 col-sm-7 object-box-right mt-sm-5 mt-3">
          <div class="row align-items-center">
            <div class="col-2 px-0">
                <img class="object-box-content-icon-right" src="{{URL::asset('/img/games-icon.png')}}">
            </div>
            <div class="col-9 gx-3">
                <p class="object-box-text-right font-outfit">Happy Games</p>
            </div>
            <div class="col-12">
                <p class="object-box-text-2-right font-outfit">Happy Games itu seperti obat penenang <br> pikiran. Games ini sudah teruji secara <br> psikologis, jadi bisa bantu kamu mengurangi <br> kecemasan!</p>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <p class="text3-section2 font-outfit">“ Ketika kegelisahan mereda, datanglah kejernihan. <br> Temukan ketenangan dalam dirimu, dan lihatlah <br> bagaimana masalah menjadi ladang pertumbuhan <br> yang lebih baik ”</p>
        </div>
        <!-- Breake --> 
        <div class="col-8 col-sm-7 object-box-left mt-sm-5 mt-3">
          <div class="row align-items-center">
            <div class="col-2 px-0">
                <img class="object-box-content-icon-left" src="{{URL::asset('/img/avatar-icon.png')}}">
            </div>
            <div class="col-9 gx-3">
                <p class="object-box-text-left font-outfit">Gamification Concept</p>
            </div>
            <div class="col-12">
                <p class="object-box-text-2-left font-outfit">Happy mengusung konsep gamifikasi dengan <br> kostumisasi Avatar, Misi, dan mood tracker!</p>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <p class="text4-section2 font-outfit">“ Jika masalah bisa kita selesaikan dengan riang <br>, mengapa harus menyusahkannya dengan kebosanan? <br> Rangkul kegembiraan dan temukan jalan kreatif untuk <br> memecahkan masalahmu. ”</p>
        </div>
      </div>
    </div>
</section>

<section class="section3" id="faq">
    <div class="container px-4">
      <div class="row gx-4 align-items-center justify-content-center">
        <div class="col-lg-12">
          <div class="object-line-top"></div>
          <h2 class="text1-section3">Frequently Asked Question</h2>
        </div>
        <div class="col-11 gx-5">
          <div class="row align-items-center">
            <div class="col-12 mt-5">
              <button class="text2-section3 font-outfit" data-bs-toggle="collapse" data-bs-target="#collapse1">Apakah data pribadi saya aman?</button>
              <div class="object-line-2"></div>
              <div class="collapse set-collaps" id="collapse1">
                <div class="card card-body text-content font-outfit">Kami mengutamakan keamanan data pribadi Anda dengan sungguh-sungguh. Data pribadi Anda akan dijaga dengan baik dan tidak akan dibagikan kepada pihak ketiga tanpa izin Anda. Keamanan Anda adalah prioritas kami.</div>
              </div>
            </div>
            <div class="col-12 mt-5">
              <button class="text3-section3 font-outfit" data-bs-toggle="collapse" data-bs-target="#collapse2">Apa perbedaan Konselor dan Psikolog?</button>
              <div class="object-line-2"></div>
              <div class="collapse set-collaps" id="collapse2">
                <p class="card card-body text-content font-outfit">Psikolog adalah profesional dengan gelar sarjana dan gelar lanjutan dalam psikologi, yang paham terhadap proses mental, perilaku manusia, dan pengobatan psikologis. Konselor, di sisi lain, memiliki gelar sarjana atau pelatihan terkait konseling dan fokus pada dukungan emosional, pembinaan, dan memberikan keterampilan dalam konteks kesehatan mental. Peran dan tanggung jawab mereka dapat bervariasi tergantung pada latar belakang dan pendidikan mereka.</p>
              </div>
            </div>
            <div class="col-12 mt-5">
             <button class="text4-section3 font-outfit" data-bs-toggle="collapse" data-bs-target="#collapse3">Kapan aplikasi Happy release di Play Store dan App Store?</button>
             <div class="object-line-2"></div>
             <div class="collapse set-collaps" id="collapse3">
               <p class="card card-body text-content font-outfit">
                  Saat ini aplikasi Happy masih dalam tahap pengembangan. Untuk itu stay tune, buruan follow social media Happy (Happyindonesia_) di Instagram, Twitter, TikTok, dan LinkedIn Tetaplah menantikan kabar terbaru dan dukunglah Happy dalam perjalanan ini!
                </p>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="container-wrapper">
<section class="section4" id="kontak">
  <div class="container">
    <div class="row gx-4 align-items-center justify-content-center">
      <div class="col-lg-12 text-center px-4">
        <h2 class="text1-section4 font-outfit">Ayo Dukung Mental Health Ecosystem <br> Pertama di Indonesia!</h2>
        <a href="https://forms.gle/JJeKMthGCrSqXnFR6">
        <button class="signup-button-section4" >
          <div class="signup-button-section4-word" >SING UP</div>
        </button>
        </a>
        <div class="w-100"></div>
        <img class="image-section-4" src="{{URL::asset('/img/img-section4.png')}}">
      </div>
      <div class="col-12 object-footer">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 col-12 col-sm-12 text-center">
            <div class="row justify-content-center text-center">
              <div class="col-sm-12 col-9">
                <img class="logo-happy" src="{{URL::asset('/img/logo-happy.png')}}">
              </div>
              <div class="col-12 text-center">
                <img class="mobileapp-comingsoon" src="{{URL::asset('/img/mobileapp-comingsoon.png')}}">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row justify-content-center">
              <div class="col-12 text-center">
                <h2 class="text2-section4 font-outfit">Contact Us</h2>
              </div>
              <div class="col-1 px-0 text-center my-auto">
                <img class="object-email-section-4" src="{{URL::asset('/img/email-icon.png')}}">
              </div>
              <div class="col-6 px-0 text-center">
                <p class="text3-section4 font-outfit">foundershappy@gmail.com</p>
              </div>
              <div class="col-12 text-center">
                <h2 class="text4-section4 font-outfit">Find Us on Social Media</h2>
              </div>
              <div class="col-1 px-0 text-center mx-3">
                <a href="https://www.instagram.com/happyindonesia_/">
                <img class="object-instagram-section-4" src="{{URL::asset('/img/instagram-icon.png')}}">
                </a>
              </div>
              <div class="col-1 px-0 text-center mx-3">
                <a href="https://twitter.com/Happyindonesia_">
                <img class="object-twitter-section-4 " src="{{URL::asset('/img/twitter-icon.png')}}">
                </a>
              </div>
              <div class="col-1 px-0 text-center mx-3">
                <a href="https://www.tiktok.com/@happyindonesia_">
                <img class="object-tiktok-section-4 " src="{{URL::asset('/img/tiktok-icon.png')}}">
                </a>
              </div>
              <div class="col-1 px-0 text-center mx-3 mb-5">
                <a href="https://www.linkedin.com/company/happyindonesia/">
                <img class="object-linkedin-section-4 " src="{{URL::asset('/img/linkedin-icon.png')}}">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer-container text-center">
  <div class="text-footer p-3 font-outfit">Happy.inc | Be Happy
  </div>
</footer>
</div>

</body>
</html>
