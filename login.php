<?php
include_once("header.php");

?>

 
    <section class="page-header">

        <h1 class="text-black">تسجيل الدخول</h1>

        <p class="text-black">الرئيسية / تسجيل الدخول</p>

    </section>



    <!-- Login Form -->
    <form action="login.php" method="POST">

        <h2>تسجيل الدخول إلى حسابك</h2>


        <!-- Email -->
        <input
            type="email"
            name="email"
            placeholder="أدخل البريد الإلكتروني"
            required
        >


        <br><br>


        <!-- Password -->
        <input
            type="password"
            name="password"
            placeholder="أدخل كلمة المرور"
            maxlength="8"
            required
        >


        <br><br>


        <!-- Remember Me -->
        <div class="remember row ">

            <input
                type="checkbox"
                name="remember"
                id="remember"
                class="col-2"
            >

            <label for="remember" class="col-2">
                تذكرني
            </label>

        </div>


        <!-- Forgot Password -->
        <a href="forgot-password.php mt-2">
            هل نسيت كلمة المرور؟
        </a>


        <br><br>


        <!-- Login Button -->
        <button type="submit" id="button">
            تسجيل الدخول
        </button>


        <!-- Register -->
        <p class="mt-2">

            ليس لديك حساب؟

            <a href="register.php">
                إنشاء حساب
            </a>

        </p>

    </form>






<?php
include_once("footer.php");

?>