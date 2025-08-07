<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>البيلي - معلم دهانات محترف</title>
    <meta name="description" content="البيلي معلم دهانات محترف، تنفيذ أعمال الدهانات الداخلية والخارجية، عوازل أسطح ضد التسريبات، جميع أعمال الدهانات والعوازل في السعودية">
    <meta name="keywords" content="دهانات, معلم دهانات, عوازل أسطح, دهانات داخلية, دهانات خارجية, السعودية">

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .phone-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 110px;
            left: 40px;
            background-color: #007bff;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="index-page">

<a href="https://wa.me/966541402561" class="whatsapp-float" target="_blank" rel="noopener">
    <i class="bi bi-whatsapp"></i>
</a>

<a href="tel:+966561319089" class="phone-float">
    <i class="bi bi-telephone"></i>
</a>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="{{route('index')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <i class="bi bi-brush"></i>
            <h1 class="sitename">البيلي للدهانات</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">الرئيسية</a></li>
                <li><a href="#about">من نحن</a></li>
                <li><a href="#services">خدماتنا</a></li>
                <li><a href="#gallery">معرض الأعمال</a></li>
                <li><a href="#contact">اتصل بنا</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

    </div>
</header>

<main class="main">

    <section id="hero" class="hero section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2><span> </span><span class="underlight">البيلي</span> <span>معلم دهانات محترف في المملكة العربية السعودية</span></h2>
                    <p>نقدم خدمات الدهانات الداخلية والخارجية بجودة عالية، عوازل الأسطح ضد التسريبات، وكل ما يتعلق بأعمال الدهانات والعوازل.</p>
                    <a href="#contact" class="btn-get-started">طلب خدمة</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h2>من نحن</h2>
                    <p>البيلي معلم دهانات محترف مع أكثر من 15 عاماً من الخبرة في مجال الدهانات والعوازل في المملكة العربية السعودية.</p>
                    <p>نتميز بالأمانة والإتقان في العمل، واستخدام أفضل المواد والألوان الحديثة لضمان جودة العمل وديمومته.</p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('assets/img/inf.jpeg')}}" class="img-fluid rounded" alt="البيلي معلم دهانات">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services section">
        <div class="container">
            <div class="section-title">
                <h2>خدماتنا</h2>
                <p>نقدم مجموعة متكاملة من خدمات الدهانات والعوازل</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="service-item">
                        <i class="bi bi-house-door"></i>
                        <h3>الدهانات الداخلية</h3>
                        <p>دهانات الجدران والأسقف والديكورات الداخلية بجميع أنواعها وألوانها.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <i class="bi bi-building"></i>
                        <h3>الدهانات الخارجية</h3>
                        <p>دهانات الواجهات الخارجية بمواد مقاومة للعوامل الجوية.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <i class="bi bi-droplet"></i>
                        <h3>عوازل الأسطح</h3>
                        <p>عوازل مائية وحرارية للأسطح ضد التسريبات والحرارة.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <i class="bi bi-brush"></i>
                        <h3>دهانات الأخشاب</h3>
                        <p>دهانات الأبواب والنوافذ والأثاث الخشبي.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item">
                        <i class="bi bi-palette"></i>
                        <h3>التصاميم والديكورات</h3>
                        <p>تصاميم ديكورات مبتكرة وتنفيذها بدقة.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item">
                        <i class="bi bi-tools"></i>
                        <h3>الصيانة والتجديد</h3>
                        <p>صيانة وتجديد الدهانات القديمة وإصلاح التشققات.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><

    <section id="gallery" class="gallery section">
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="section-title">
                <h2>معرض الأعمال</h2>
                <p>بعض من أعمالنا السابقة في مجال الدهانات والعوازل</p>
            </div>

            <div class="row gy-4 justify-content-center">
                <div class="row gy-4 justify-content-center">
                    @for ($i = 1; $i <= 28; $i++)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery/' . $i . '.jpeg') }}" class="img-fluid" alt="gallery-{{ $i }}">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('assets/img/gallery/' . $i . '.jpeg') }}" class="glightbox preview-link" title="صورة رقم {{ $i }}"><i class="bi bi-arrows-angle-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-title">
                <h2>اتصل بنا</h2>
                <p>تواصل معنا لطلب الخدمة أو الاستفسار</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>العنوان</h3>
                        <p>المملكة العربية السعودية</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3>اتصل بنا</h3>
                        <p><a href="tel:+966561319089">+966561319089</a></p>
                        <p><a href="tel:+966561319089">+966561319089</a></p>
                    </div>
                </div>

{{--                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="info-box">--}}
{{--                        <i class="bi bi-envelope"></i>--}}
{{--                        <h3>البريد الإلكتروني</h3>--}}
{{--                        <p>info@albaili-paint.com</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

</main>


<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader">
    <div class="line"></div>
</div>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
