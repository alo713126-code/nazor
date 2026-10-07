<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ورود | Nazora</title>

    <link rel="icon" href="assets/images/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/login.css">
    <script src="assets/js/login.js"></script>

</head>

<body>

    <section class="auth-page">

        <div class="auth-container">

            <div class="auth-left">

                <img src="assets/images/login-banner.jpg" class="login-banner">

                <div class="auth-overlay"></div>

                <div class="auth-content">

                    <img src="assets/images/logo.png" class="auth-logo">

                    <h1>NAZORA</h1>

                    <p>
                        Premium Beauty Store
                    </p>

                </div>

            </div>

            <div class="auth-right">

                <div class="auth-card">

                    <div class="auth-tabs">

                        <button class="tab-btn active" data-tab="login">
                            ورود
                        </button>

                        <button class="tab-btn" data-tab="register">
                            ثبت نام
                        </button>

                    </div>

                    <div class="tab-content active" id="login">

                        <h2>ورود به حساب</h2>

                        <p>
                            خوش آمدید، اطلاعات خود را وارد کنید.
                        </p>

                        <form>

                            <div class="form-group">

                                <label>ایمیل یا شماره موبایل</label>

                                <input type="text">

                            </div>

                            <div class="form-group">

                                <label>رمز عبور</label>

                                <input type="password">

                            </div>

                            <button type="submit" class="gold-btn">

                                ورود

                            </button>

                        </form>

                    </div>

                    <div class="tab-content" id="register">

                        <h2>ایجاد حساب</h2>

                        <p>

                            ثبت نام کمتر از یک دقیقه زمان می‌برد.

                        </p>

                        <form action="register.php" method="POST">

                            <div class="double-input">

                                <div class="form-group">

                                    <label>نام</label>

                                    <input type="text" name="first_name" required>

                                </div>

                                <div class="form-group">

                                    <label>نام خانوادگی</label>

                                    <input type="text" name="last_name" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <label>نام کاربری</label>

                                <input type="text" name="username" required>

                            </div>

                            <div class="form-group">

                                <label>ایمیل</label>

                                <input type="email" name="email" required>

                            </div>

                            <div class="form-group">

                                <label>شماره موبایل</label>

                                <input type="text" name="phone" required>

                            </div>

                            <div class="form-group">

                                <label>رمز عبور</label>

                                <input type="password" name="password" required>

                            </div>

                            <div class="form-group">

                                <label>تکرار رمز عبور</label>

                                <input type="password" name="confirm_password" required>

                            </div>

                            <button type="submit" class="gold-btn">

                                ثبت نام

                            </button>



                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script src="assets/js/app.js"></script>

</body>

</html>