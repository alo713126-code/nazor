<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nazora | فروشگاه آرایشی و مراقبت پوست</title>

    <meta name="description" content="فروشگاه آنلاین محصولات آرایشی، بهداشتی و مراقبت پوست نازورا">

    <meta name="keywords" content="Nazora, آرایشی, بهداشتی, مراقبت پوست, فروشگاه">

    <meta name="author" content="Nazora">

    <link rel="icon" href="assets/images/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <header>

        <div class="container">

            <a href="index.php" class="logo">

                <img src="assets/images/logo.png" alt="Nazora">

                <span>NAZORA</span>

            </a>

            <nav>

                <ul>

                    <li><a href="index.php">خانه</a></li>

                    <li><a href="shop.php">فروشگاه</a></li>

                    <li><a href="about.php">درباره ما</a></li>

                    <li><a href="contact.php">تماس با ما</a></li>

                </ul>

            </nav>

            <div class="header-buttons">

                <a href="search.php">جستجو</a>

                <a href="favorites.php">علاقه‌مندی‌ها</a>

                <a href="cart.php">سبد خرید</a>

                <a href="login.php" class="login-btn">ورود</a>

            </div>

        </div>

    </header>

    <main>

        <section class="hero">

            <div class="container hero-container">

                <div class="hero-content">

                    <span class="hero-tag">
                        PREMIUM BEAUTY
                    </span>

                    <h1>
                        زیبایی واقعی
                        <br>
                        از مراقبت پوست آغاز می‌شود
                    </h1>

                    <p>
                        محصولات آرایشی، مراقبت پوست و عطرهای لوکس را با کیفیت
                        جهانی از نازورا تهیه کنید و تجربه‌ای متفاوت از خرید آنلاین داشته باشید.
                    </p>

                    <div class="hero-buttons">

                        <a href="shop.php" class="primary-btn">
                            مشاهده محصولات
                        </a>

                        <a href="about.php" class="secondary-btn">
                            درباره نازورا
                        </a>

                    </div>

                    <div class="hero-stats">

                        <div>
                            <h2>12K+</h2>
                            <span>مشتری</span>
                        </div>

                        <div>
                            <h2>650+</h2>
                            <span>محصول</span>
                        </div>

                        <div>
                            <h2>98%</h2>
                            <span>رضایت</span>
                        </div>

                    </div>

                </div>

                <div class="hero-image">

                    <img src="assets/images/hero.png" alt="Nazora Hero">
                    <div class="floating-card card-one">

                        <h3>Vitamin C</h3>

                        <p>Brightening Serum</p>

                    </div>

                    <div class="floating-card card-two">

                        <h3>100% Natural</h3>

                        <p>Premium Formula</p>

                    </div>

                    <div class="hero-glow"></div>

                </div>

            </div>

        </section>

        <section class="trust-section">

            <div class="container">

                <div class="trust-box">

                    <div class="trust-item">

                        <h2>12,000+</h2>

                        <span>مشتری وفادار</span>

                    </div>

                    <div class="trust-item">

                        <h2>650+</h2>

                        <span>محصول اورجینال</span>

                    </div>

                    <div class="trust-item">

                        <h2>98%</h2>

                        <span>رضایت مشتریان</span>

                    </div>

                    <div class="trust-item">

                        <h2>24/7</h2>

                        <span>پشتیبانی</span>

                    </div>

                </div>

            </div>

        </section>
        <section class="categories">

            <div class="container">

                <div class="section-title">

                    <span>دسته بندی محصولات</span>

                    <h2>انتخاب کنید چه چیزی نیاز دارید</h2>

                    <p>
                        بهترین محصولات آرایشی، مراقبت پوست و عطرهای لوکس در نازورا
                    </p>

                </div>

                <div class="categories-grid">

                    <a href="shop.php?category=skincare" class="category-card">

                        <img src="assets/images/category-skincare.jpg" alt="مراقبت پوست">

                        <div class="category-overlay">

                            <h3>مراقبت پوست</h3>

                            <span>مشاهده محصولات</span>

                        </div>

                    </a>

                    <a href="shop.php?category=makeup" class="category-card">

                        <img src="assets/images/category-makeup.jpg" alt="آرایشی">

                        <div class="category-overlay">

                            <h3>آرایشی</h3>

                            <span>مشاهده محصولات</span>

                        </div>

                    </a>

                    <a href="shop.php?category=perfume" class="category-card">

                        <img src="assets/images/category-perfume.jpg" alt="عطر و ادکلن">

                        <div class="category-overlay">

                            <h3>عطر و ادکلن</h3>

                            <span>مشاهده محصولات</span>

                        </div>

                    </a>

                </div>

            </div>

        </section>
        <section class="featured-products">

            <div class="container">

                <div class="section-title">

                    <span>محصولات ویژه</span>

                    <h2>محبوب‌ترین محصولات نازورا</h2>

                    <p>
                        جدیدترین و پرفروش‌ترین محصولات آرایشی و مراقبت پوست
                    </p>

                </div>

                <div class="products-grid">

                    <div class="product-card">

                        <img src="assets/images/product1.png" alt="">

                        <h3>سرم ویتامین C</h3>

                        <p>روشن کننده پوست</p>

                        <div class="price">

                            <span>890,000 تومان</span>

                        </div>

                        <a href="product.php?id=1">مشاهده محصول</a>

                    </div>

                    <div class="product-card">

                        <img src="assets/images/product2.png" alt="">

                        <h3>کرم آبرسان</h3>

                        <p>مناسب انواع پوست</p>

                        <div class="price">

                            <span>650,000 تومان</span>

                        </div>

                        <a href="product.php?id=2">مشاهده محصول</a>

                    </div>

                    <div class="product-card">

                        <img src="assets/images/product3.png" alt="">

                        <h3>عطر لوکس</h3>

                        <p>ماندگاری بالا</p>

                        <div class="price">

                            <span>1,950,000 تومان</span>

                        </div>

                        <a href="product.php?id=3">مشاهده محصول</a>

                    </div>

                    <div class="product-card">

                        <img src="assets/images/product4.png" alt="">

                        <h3>رژ لب نازورا</h3>

                        <p>رنگ طبیعی</p>

                        <div class="price">

                            <span>550,000 تومان</span>

                        </div>

                        <a href="product.php?id=4">مشاهده محصول</a>

                    </div>

                </div>

            </div>

        </section>


    </main>

    <script src="assets/js/app.js"></script>

</body>

</html>