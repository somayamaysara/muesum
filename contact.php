<?php
include_once("header.php");

?>
   
    <section class="page-header">

        <h1 class="text-black">اتصل بنا</h1>

        <p class="text-black">الرئيسية / اتصل بنا</p>

    </section>


    <!-- Contact Section -->
    <div class="contact">

        <!-- Contact Information -->
        <div class="info">

            <h2 >تواصل معنا</h2>

            <p>📍 القاهرة، مصر</p>

            <p>✉ info@egyptianmuseum.com</p>

            <p>☎ +20 123 456 7890</p>

            <p>🕐 من الإثنين إلى الأحد: 9:00 صباحًا - 6:00 مساءً</p>


            <!-- Google Map -->
            <iframe
                src="https://www.google.com/maps?q=Egyptian%20Museum%20Cairo&output=embed"
                width="400"
                height="250"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>


        <!-- Contact Form -->
        <form action="contact.php" method="POST">

            <input
                type="text"
                name="name"
                placeholder="الاسم بالكامل"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="البريد الإلكتروني"
                required
            >

            <input
                type="text"
                name="subject"
                placeholder="الموضوع"
            >

            <textarea
                name="message"
                placeholder="اكتب رسالتك هنا..."
                rows="6"
                required></textarea>

            <button type="submit" id="button">
                إرسال الرسالة
            </button>

        </form>

    </div>


   
<?php
include_once("footer.php");

?>