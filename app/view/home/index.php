<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../public/css/styles.css">
     
    <title>Leksikon Sastra|<?= $data['title'] ?></title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <div class="header__border"></div>
         
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="../public/image/Leksikon Sastra-logos_white.png" alt="logo">
                LEKSIKON
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link, active-link">
                            <i class="ri-home-5-fill"></i>
                            <span>Beranda</span>
                        </a>
                    </li>

                    
                    <li class="nav__item">
                        <a href="#puisi" class="nav__link, active-link">
                            <i class="ri-compass-3-fill"></i>
                            <span>Alternatif</span>
                        </a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="#benefit" class="nav__link, active-link">
                            <i class="ri-award-fill"></i>
                            <span>Benefit</span>
                        </a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="#contact" class="nav__link, active-link">
                            <i class="ri-message-3-fill"></i>
                            <span>Testimoni</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">
                        LEKSIKON
                    </h3>

                    <h1 class="home__title">
                        Selamat Datang! <br>
                       <span style="font-size: 50px;">Di Leksikon Sastra</span>  
                    </h1>

                    <p class="home__description">
                        Hello!, Disini kalian akan membaca beberapa kata dan puisi yang indah dan penuh makna, lalu
                        kalian akan mengetahui bagaimana cara membuat puisi yang indah.
                    </p>

                    <a href="../public/kamus" class="button">
                        Kamus <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>

                <img src="../public/image/1well.png" alt="home image" class="home__img">
            </div>
        </section>

        <!--==================== alternatif ====================-->
        <section class="alternatif" id="puisi">
            <div class="alternatif__bg section">
                <div class="alternatif__container container grid">
                    <div class="alternatif__data">
                        <a href="#benefit" class="alternatif__button">
                            Scroll Down <i class="ri-arrow-down-s-line"></i>
                        </a>

                        <p class="alternatif__description">
                            Sandikala itu hilang dari cakrawala, bersamaan dengan Baskara yang kian temaram.
                            Seperti nayanika itu yang telah hilang, bersamaan dengan sang empu.
                            Menyisakan mangata, yang bagitu Aksa, menjadikan renjana yang tak berujung.
                            Membuat Asa, yang semula kentara, kini serasa fana.
                        </p>
                    </div>

                    <div class="alternatif__content">
                        <article class="alternatif__card">
                            <a href="#tutorial">
                                <img src="../public/image/lumba-removebg-preview.png" alt="alternatif img"
                                    class="alternatif__img">
                            </a>
                            <h3 class="alternatif__name">Tutorial</h3>
                        </article>

                        <article class="alternatif__card">
                            <a href="../public/kamus">
                                <img src="../public/image/ubur.png" alt="alternatif img" class="alternatif__img">
                            </a>
                            <h3 class="alternatif__name">Kamus</h3>
                        </article>

                        <article class="alternatif__card">
                            <a href="../public/puisi">
                                <img src="../public/image/cupang-removebg-preview.png" alt="alternatif img"
                                    class="alternatif__img">
                            </a>
                            <h3 class="alternatif__name">Puisi</h3>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== benefit ====================-->
        <section class="benefit" id="benefit">
            <div class="benefit__bg section">
                <div class="benefit__container container grid">
                    <div class="benefit__data">
                        <h2 class="section__title">
                            Benefit
                        </h2>

                        <p class="benefit__description">
                            <b> Leksikon sastra </b>
                            ialah website yang memberikan pengalaman seru dimana anda bisa membaca kata diksi sastra dan
                            terjemahannya beserta puisi yang terdapat unsur kata yang anda sukai.
                            Jadi tunggu apa lagi, ayo baca laman kami!, dan temukan banyak diksi yang menarik.
                        </p>
                    </div>

                    <img src="../public/image/maos3.png" alt="benefit img" class="benefit__img">
                </div>
            </div>
        </section>

        <!--==================== tutorial ====================-->
        <section class="tutorial" id="tutorial">
            <div class="tutorial__bg section">
                <h2 class="section__title">
                    TUTORIAL
                </h2>

                <div class="tutorial__container container grid">
                    <img src="../public/image/kertas-removebg-preview.png" alt="tutorial image" class="tutorial__bg-img">

                    <div class="tutorial__content">
                        <!-- <img src="assets/img/steps-curve-line.svg" alt="tutorial image" class="tutorial__border"> -->
                        <div class="tutorial__card">
                            <div class="tutorial__circle">
                                <div class="tutorial__subcircle">
                                    <img src="../public/image/star-removebg-preview.png" alt="star">

                                </div>

                                <img src="../public/image/steps-cumi.png" alt="tutorial image" class="tutorial__img">
                            </div>

                            <p class="tutorial__description">
                                <b>1. Pilih Tema dan Konsep</b> <br>
                                <i> Contoh: </i> Jika tema yang di tentukan adalah "alam," Anda dapat mencari kata-kata
                                terkait seperti "hutan," "gunung," "laut," dll.
                            </p>
                            <br>
                            <p class="tutorial__description">
                                <b> 2. Kumpulkan Kata-kata </b> <br>
                                <i> Contoh: </i> Jika ingin menggambarkan "keindahan alam," Anda bisa mencari kata-kata
                                seperti "cantik," "mengagumkan," "menakjubkan," dll.
                            </p>
                        </div>

                        <div class="tutorial__card">
                            <div class="tutorial__circle tutorial__card-move">
                                <div class="tutorial__subcircle">
                                    <img src="../public/image/star-removebg-preview.png" alt="">
                                </div>

                                <img src="../public/image/steps-lion.png" alt="tutorial image" class="tutorial__img">
                            </div>

                            <p class="tutorial__description">
                                <b>3. Susun Struktur dan Rima</b> <br>
                                <i> Contoh: </i> membuat puisi dengan skema rima AABB, cari kata-kata yang berima
                                seperti "biru" dan "riau".
                            </p>
                        </div>

                        <div class="tutorial__card">
                            <div class="tutorial__circle">
                                <div class="tutorial__subcircle">
                                    <img src="../public/image/star-removebg-preview.png" alt="">
                                </div>

                                <img src="../public/image/harimau-removebg-preview.png" alt="tutorial image"
                                    class="tutorial__img">
                            </div>

                            <p class="tutorial__description">
                                <b>4. Gunakan Imaji dan Perumpamaan</b> <br>
                                <i>Contoh: </i> Dalam puisi tentang alam, Anda dapat menggunakan perumpamaan seperti
                                "hutan adalah nukleus kehidupan" untuk menggambarkan pentingnya hutan.
                            </p>
                            <br>
                            <p class="tutorial__description">
                                <b> 5. Revisi dan Edit</b> <br>
                                Setelah puisi selesai, gunakan Kamus Besar Bahasa Indonesia untuk memeriksa ejaan, tata
                                bahasa, dan pemilihan kata-kata yang lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Puisi ====================-->
        <section class="puisi">
            <div class="puisi__bg section">
                <div class="puisi__container container grid">
                    <div class="puisi__data">
                        <h2 class="section__title">
                            Kamus Leksikon Sastra ini dapat membantu anda
                            dalam pembuatan puisi yang indah
                        </h2>

                        <span class="puisi__name">
                            <a href="../puisi/puisi.php" class="button">
                                Puisi <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </span>
                    </div>

                    <img src="../public/image/benefit.png" alt="puisi image" class="puisi__img">
                </div>
            </div>
        </section>
    </main>
    <br><br>
    <!--==================== FOOTER ====================-->
    <footer class="footer" id="contact">
        <div class="footer__bg">
            <img src="../public/image/dark.jpeg" alt="footer image" class="footer__bg-img">
            <div class="footer__container container grid">
                <div class="footer__data grid">
                    <div>
                        <a href="#" class="footer__logo">
                            <img src="../public/image/Logo Leksikon.png" alt="logo">
                            LEKSIKON
                        </a>

                        <h3 class="footer__title">
                            Testimoni Anda
                        </h3>
                    </div>

                    <form action="" class="footer__form grid">
                        <input type="text" placeholder="Masukkan saran" class="footer__input">
                        <button class="button footer__button" type="submit">
                            Kirim <i class="ri-arrow-right-s-line"></i>
                        </button>

                        <p class="footer__description">
                            About The
                            <a href="#" class="footer__privacy">Authors</a>
                        </p>
                    </form>
                </div>

                <div class="footer__content grid">
                    <div class="footer__social">
                        <a href="https://www.facebook.com/" target="blank" class="footer_social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="blank" class="footer_social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="blank" class="footer_social-link">
                            <i class="ri-twitter-fill"></i>
                    </div>
                </div>

                <span class="footer__copy">
                    © LeksikonSastra || Beranda.
                </span>
            </div>
        </div>
    </footer>
    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>
    <!--=============== SCROLLREVEAL ===============-->
    <script src="../public/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="../public/js/main.js"></script>
</body>

</html>