<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>فروشگاه | Nazora</title>

    <meta name="description" content="فروشگاه محصولات نازورا">

    <link rel="icon" href="assets/images/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!--<link rel="stylesheet" href="assets/css/style.css">-->

    <!--<link rel="stylesheet" href="assets/css/responsive.css">-->

    <link rel="stylesheet" href="assets/css/shop.css">

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

                    <li><a href="shop.php" class="active">فروشگاه</a></li>

                    <li><a href="about.php">درباره ما</a></li>

                    <li><a href="contact.php">تماس با ما</a></li>

                </ul>

            </nav>

            <div class="header-buttons">

                <a href="search.php">جستجو</a>

                <a href="favorites.php">علاقه‌مندی</a>

                <a href="cart.php">سبد خرید</a>

                <a href="login.php" class="login-btn">ورود</a>

            </div>

        </div>

    </header>

    <main>

        <section class="shop-hero">

            <div class="container hero-grid">

                <div class="hero-content">

                    <span class="hero-tag">
                        NAZORA COLLECTION
                    </span>

                    <h1>

                        زیبایی واقعی
                        <br>
                        با انتخابی متفاوت

                    </h1>

                    <p>

                        مجموعه‌ای از محصولات آرایشی، مراقبت پوست و عطرهای لوکس
                        با کیفیتی که شایسته شماست.

                    </p>

                    <div class="hero-buttons">

                        <a href="#products" class="primary-btn">

                            مشاهده محصولات

                        </a>

                        <a href="about.php" class="secondary-btn">

                            درباره نازورا

                        </a>

                    </div>

                </div>

                <div class="hero-image">

                    <img src="assets/images/shop-hero.png" alt="Nazora">

                </div>

            </div>

        </section>

        <section class="offer-slider">

            <div class="container">

                <div class="slider-wrapper">

                    <button class="slider-btn prev">

                        &#10094;

                    </button>

                    <div class="slides">

                        <div class="slide active">

                            <img src="assets/images/offer1.jpg">

                        </div>

                        <div class="slide">

                            <img src="assets/images/offer2.jpg">

                        </div>

                        <div class="slide">

                            <img src="assets/images/offer3.jpg">

                        </div>

                    </div>

                    <button class="slider-btn next">

                        &#10095;

                    </button>

                </div>

            </div>

        </section>

        <?php

        $search = isset($_GET['search']) ? trim($_GET['search']) : "";
        $category = isset($_GET['category']) ? trim($_GET['category']) : "";
        $sort = isset($_GET['sort']) ? trim($_GET['sort']) : "new";

        ?>

        <section class="shop-toolbar">

            <div class="container">

                <form action="shop.php" method="GET" class="toolbar">

                    <div class="search-box">

                        <input
                            type="text"
                            name="search"
                            placeholder="جستجوی محصولات..."
                            value="<?php echo htmlspecialchars($search); ?>">

                    </div>

                    <div class="category-box">

                        <select name="category">

                            <option value="">همه دسته‌ها</option>

                            <option value="skincare">مراقبت پوست</option>

                            <option value="makeup">آرایشی</option>

                            <option value="perfume">عطر و ادکلن</option>

                        </select>

                    </div>

                    <div class="sort-box">

                        <select name="sort">

                            <option value="new">جدیدترین</option>

                            <option value="cheap">ارزان‌ترین</option>

                            <option value="expensive">گران‌ترین</option>

                            <option value="discount">بیشترین تخفیف</option>

                        </select>

                    </div>

                    <button class="search-btn">

                        جستجو

                    </button>

                </form>

            </div>

        </section>

        <section class="products-section" id="products">

            <div class="container">

                <div class="section-title">

                    <span>

                        محصولات نازورا

                    </span>

                    <h2>

                        جدیدترین محصولات فروشگاه

                    </h2>

                    <p>

                        زیبایی را با محصولات اورجینال تجربه کنید.

                    </p>

                </div>

                <div class="products-grid">

                    <?php

                    $sql = "SELECT * FROM products";
                    $params = [];

                    if ($search != "") {

                        $sql .= " AND (name LIKE ? OR description LIKE ?)";

                        $params[] = "%$search%";

                        $params[] = "%$search%";
                    }

                    if ($category != "") {

                        $sql .= " AND category=?";

                        $params[] = $category;
                    }

                    switch ($sort) {

                        case "cheap":

                            $sql .= " ORDER BY price ASC";

                            break;

                        case "expensive":

                            $sql .= " ORDER BY price DESC";

                            break;

                        case "discount":

                            $sql .= " ORDER BY discount DESC";

                            break;

                        default:

                            $sql .= " ORDER BY id DESC";
                    }

                    $stmt = $conn->prepare($sql);
                    echo "<pre>";
                    echo $sql;
                    print_r($params);
                    echo "</pre>";
                    exit;

                    $stmt->execute($params);

                    $products = $stmt->fetchAll();

                    ?>

                    <?php if (count($products) > 0): ?>

                        <?php foreach ($products as $product): ?>

                            <div class="product-card">

                                <?php if ($product['discount'] > 0): ?>

                                    <div class="badge-off">

                                        <?php echo $product['discount']; ?>%

                                    </div>

                                <?php endif; ?>

                                <?php if ($product['is_new'] == 1): ?>

                                    <div class="badge-new">

                                        NEW

                                    </div>

                                <?php endif; ?>

                                <div class="product-image">

                                    <img
                                        src="assets/images/<?php echo htmlspecialchars($product['image']); ?>"
                                        alt="<?php echo htmlspecialchars($product['name']); ?>">

                                    <div class="product-overlay">

                                        <a
                                            href="#"
                                            class="wishlist-btn"
                                            data-id="<?php echo $product['id']; ?>">

                                            ♡

                                        </a>

                                        <a
                                            href="product.php?id=<?php echo $product['id']; ?>"
                                            class="view-btn">

                                            مشاهده

                                        </a>

                                        <a
                                            href="cart.php?id=<?php echo $product['id']; ?>"
                                            class="cart-btn">

                                            افزودن

                                        </a>

                                    </div>

                                </div>

                                <div class="product-info">

                                    <span class="brand">

                                        <?php echo htmlspecialchars($product['brand']); ?>

                                    </span>

                                    <h3>

                                        <?php echo htmlspecialchars($product['name']); ?>

                                    </h3>

                                    <p>

                                        <?php echo htmlspecialchars($product['description']); ?>

                                    </p>

                                    <div class="price-area">

                                        <?php if ($product['old_price'] > 0): ?>

                                            <del>

                                                <?php echo number_format($product['old_price']); ?>

                                                تومان

                                            </del>

                                        <?php endif; ?>

                                        <strong>

                                            <?php echo number_format($product['price']); ?>

                                            تومان

                                        </strong>

                                    </div>

                                    <?php if ($product['stock'] > 0): ?>

                                        <span class="stock available">

                                            موجود

                                        </span>

                                    <?php else: ?>

                                        <span class="stock unavailable">

                                            ناموجود

                                        </span>

                                    <?php endif; ?>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <div class="empty-products">

                            <img
                                src="assets/images/not-found.png"
                                alt="">

                            <h2>

                                محصول مورد نظر یافت نشد

                            </h2>

                            <p>

                                لطفاً عبارت جستجو یا دسته‌بندی را تغییر دهید.

                            </p>

                            <a
                                href="shop.php"
                                class="back-btn">

                                مشاهده همه محصولات

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </section>

        <footer class="shop-footer">

            <div class="container">

                <p>

                    © <?php echo date("Y"); ?>

                    تمامی حقوق برای Nazora محفوظ است.

                </p>

            </div>

        </footer>


    </main>

    <script src="assets/js/shop.js"></script>

</body>

</html>