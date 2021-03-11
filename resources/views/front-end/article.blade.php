<!DOCTYPE html>
<html>

<head>
  <title>El Salem Anti Bugs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{asset('assets/imgs/logo.ico')}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark-custum ">
    <a class="navbar-brand " href="index.html">
      <img class="navbar-brand-img" src="{{asset('assets/imgs/logo.png')}}" alt="السالم لمكافحة الحشرات">
      <p class="navbar-bran-div">
        <span>
           السالم لمكافحة الحشرات<br>El Salem Anti Bugs
        </span>
      </p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">الصفحة الرئيسية </a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="backNav"></section>
  <div class="hidden-nav" style="display: none;">
    اااااااااااااااااااا
  </div>
  <section id="contactUs" class="contactUs" style="margin-top: 100px;">
    <div class="container">
      <div class="row contactUs-row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <div class="contactUs-txt">
            <h4>اتصل ب السالم لمكافحة الحشرات</h4>
            <span>
              نصلك في اسرع وقت اينما كنت
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="">
            <a href="tel:0"><button type="button" class="btn intro-btn-order">اطلب الآن</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="article" class="articles">
    <div class="articles-hdr">
      <span class="articles-hdr-text">
        ابادة البعوض
      </span>
    </div>
    <div class="container">
      <div class="row articles-row card-deck">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-col">
          <div class="card" style="padding: 30px;">
            <img src="{{asset('assets/imgs/art-1.png')}}" class="card-img-top" alt="ابادة البعوض" style="width: 70%;">
            <div class="card-body" style="padding: 1rem 0px;">
              <h5 class="card-title text-right"><b></b></h5>
              <p class="card-text">
                ابادة البعوض مكافحة البعوض تعد من الأشياء التي تحتاج إليها خاصة في فصل الصيف مع ارتفاع درجات الحرارة
                والرطوبة التي تساعد
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer" id="aboutUs">
    <div class="container">
      <div class="row footer-row">
        <div class="col-sm-12">
          <div class="footer-r">
            <img class="footer-img" src="{{asset('assets/imgs/logo.png')}}">
            <p class="paragraph-footer">
              <span style="font-weight: bold;">
                السالم لمكافحة الحشرات
                <br>
                El Salem Anti Bugs
              </span>
              <br><br>
              شركة السالم لمكافحة الحشرات هى افضل شركة ابادة حشرات بشهادة عملائنا ,نستخدم مبيدات عالية
              الجودة ,جميع عمالنا مدربين على اتخاذ اللازم فى اصعب المواقف ننتظر مكالماتكم ونسعد بالخدمة
              <br><br>
              مقرات الشركة: مصر - أسيوط - شارع الجمهورية امام فرع فودافون
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-sm">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="footer-sm-r">
            <a href="http://www.fb.com" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/facebookIcon.png')}}">
            </a>
            <a href="http://www.instagram.com" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/whatsappIcon.png')}}">
              </a>
          </div>
        </div>
        <div class="col-7">
          <span class="footer-sm-l">
            جميع الحقوق محفوظة
          </span>
        </div>
      </div>
    </div>
    <button type="button" id="scrollToTop" class="btn btn-to-top">
      <i class="fas fa-phone-alt"></i>
    </button>

  </footer>

  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script>
    $("#scrollToTop").click(function () {
      window.location.href = "tel:+0";
    });
  </script>
</body>

</html>