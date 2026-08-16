<?php
include_once("header.php");

?>
<section id="home">
    <div id="museumCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#museumCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="الشريحة الأولى"></button>
            <button type="button" data-bs-target="#museumCarousel" data-bs-slide-to="1" aria-label="الشريحة الثانية"></button>
            <button type="button" data-bs-target="#museumCarousel" data-bs-slide-to="2" aria-label="الشريحة الثالثة"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="bootstrap/assets/image/20221104-dsc_4372-edit-copy.jpeg" class="d-block w-100 museum-slide object-fit-cover" alt="قاعة المتحف المصري">
                <div class="carousel-caption museum-caption">
                    <h1 class="fw-bold mb-3">أهلاً بك في <span>المتحف المصري</span></h1>
                    <p class="mb-4">اكتشف روائع الحضارة المصرية القديمة ورحلة تمتد لآلاف السنين</p>
                    <a href="#artifacts" class="btn btn-gold px-4 py-2">اكتشف المزيد</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="bootstrap/assets/image/المتحف المصرى اتنين.jpg" class="d-block w-100 museum-slide object-fit-cover" alt="تماثيل مصرية قديمة">
                <div class="carousel-caption museum-caption">
                    <h1 class="fw-bold mb-3">اكتشف <span>حضارة عظيمة</span></h1>
                    <p class="mb-4">رحلة عبر التاريخ بين الملوك والآلهة والكنوز المصرية القديمة</p>
                    <a href="#" class="btn btn-gold px-4 py-2">تعرف علينا</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="bootstrap/assets/image/المتحف-المصري-الكبير.png" class="d-block w-100 museum-slide object-fit-cover" alt="الآثار المصرية">
                <div class="carousel-caption museum-caption">
                    <h1 class="fw-bold mb-3">كنوز <span>لا تقدر بثمن</span></h1>
                    <p class="mb-4">مجموعة مميزة من الآثار التي تحكي قصة مصر عبر العصور</p>
                    <a href="#artifacts" class="btn btn-gold px-4 py-2">شاهد القطع الأثرية</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#museumCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#museumCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
        </button>
    </div>
</section>
<section id="about" class="bg-white py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="bootstrap/assets/image/img5.webp" class="img-fluid rounded shadow-sm w-100 about-image" alt="واجهة المتحف المصري">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3 section-title">عن المتحف المصري</h2>
                <p class="text-secondary lh-lg mb-3">يُعد المتحف المصري من أهم وأشهر المتاحف الأثرية في مصر، ويقع في قلب القاهرة بميدان التحرير، ويضم مجموعة ضخمة من آثار الحضارة المصرية القديمة.</p>
                <p class="text-secondary lh-lg mb-4">يحتوي المتحف على آلاف القطع الأثرية التي تحكي تاريخ مصر عبر عصور مختلفة، بداية من عصور ما قبل التاريخ وحتى العصرين اليوناني والروماني.</p>
                <a href="about.php" class="btn btn-dark px-4 py-2">اقرأ المزيد</a>
            </div>
        </div>
    </div>
</section>
<section id="artifacts" class="py-5 artifacts-section">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold section-title">أشهر القطع الأثرية</h2>
            <p class="text-muted small">اكتشف مجموعة من أشهر كنوز الحضارة المصرية القديمة</p>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-4 ">
                <div class="artifact-card bg-white border rounded h-100 d-flex flex-column justify-content-between p-3 shadow-sm">
                    <div>
                        <img src="bootstrap/assets/image/img3.jpg" class="w-100 rounded mb-3 artifact-image" alt="قناع توت عنخ آمون">
                        <h5 class="fw-bold mb-2 artifact-title">قناع توت عنخ آمون</h5>
                        <p class="text-secondary small lh-base">يُعد القناع الذهبي للملك توت عنخ آمون من أشهر وأهم القطع الأثرية في الحضارة المصرية القديمة.</p>
                    </div>
                    <button type="button" class="btn btn-gold btn-sm w-100 mt-3" data-bs-toggle="modal" data-bs-target="#tutankhamunModal">عرض التفاصيل</button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="artifact-card bg-white border rounded h-100 d-flex flex-column justify-content-between p-3 shadow-sm">
                    <div>
                        <img src="bootstrap/assets/image/img4.jpg" class="w-100 rounded mb-3 artifact-image" alt="تمثال رمسيس الثاني">
                        <h5 class="fw-bold mb-2 artifact-title">تمثال رمسيس الثاني</h5>
                        <p class="text-secondary small lh-base">تمثال ضخم للملك رمسيس الثاني، أحد أعظم ملوك مصر القديمة وصاحب إنجازات تاريخية عديدة.</p>
                    </div>
                    <button type="button" class="btn btn-gold btn-sm w-100 mt-3" data-bs-toggle="modal" data-bs-target="#ramsesModal">عرض التفاصيل</button>
                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="artifact-card bg-white border rounded h-100 d-flex flex-column justify-content-between p-3 shadow-sm">
                    <div>
                        <img src="bootstrap/assets/image/images.jpg" class="w-100 rounded mb-3 artifact-image" alt="الكتابات الهيروغليفية">
                        <h5 class="fw-bold mb-2 artifact-title">الكتابات الهيروغليفية</h5>
                        <p class="text-secondary small lh-base">نقوش ورموز مصرية قديمة ساعدت في تسجيل تاريخ وحياة المصريين القدماء منذ آلاف السنين.</p>
                    </div>
                    <button type="button" class="btn btn-gold btn-sm w-100 mt-3" data-bs-toggle="modal" data-bs-target="#hieroglyphsModal">عرض التفاصيل</button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="tutankhamunModal" tabindex="-1" aria-labelledby="tutankhamunModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header text-white modal-header-museum">
                <h5 class="modal-title fw-bold" id="tutankhamunModalLabel">قناع توت عنخ آمون</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row align-items-center g-4">
                    <div class="col-md-5 ">
                        <img src="bootstrap/assets/image/img3.jpg" class="img-fluid rounded modal-image" alt="قناع توت عنخ آمون">
                    </div>
                    <div class="col-md-7">
                        <h4 class="fw-bold mb-3 section-title">قناع توت عنخ آمون</h4>
                        <p class="text-secondary lh-lg">يُعد قناع توت عنخ آمون الذهبي واحدًا من أشهر القطع الأثرية في العالم، وقد ارتبط بالملك الشاب توت عنخ آمون الذي حكم مصر خلال الأسرة الثامنة عشرة.</p>
                        <p class="text-secondary lh-lg mb-0">يتميز القناع بتفاصيله الدقيقة واستخدام الذهب والأحجار الملونة، ويُعد رمزًا مهمًا لعظمة الفن المصري القديم.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-dark px-4" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ramsesModal" tabindex="-1" aria-labelledby="ramsesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header text-white modal-header-museum">
                <h5 class="modal-title fw-bold" id="ramsesModalLabel">تمثال رمسيس الثاني</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row align-items-center g-4">
                    <div class="col-md-5">
                        <img src="bootstrap/assets/image/img4.jpg" class="img-fluid rounded modal-image" alt="تمثال رمسيس الثاني">
                    </div>
                    <div class="col-md-7">
                        <h4 class="fw-bold mb-3 section-title">تمثال رمسيس الثاني</h4>
                        <p class="text-secondary lh-lg">رمسيس الثاني هو أحد أشهر ملوك مصر القديمة، وقد حكم خلال الأسرة التاسعة عشرة ويُعرف بكثرة إنجازاته ومشروعاته المعمارية.</p>
                        <p class="text-secondary lh-lg mb-0">تعكس تماثيله القوة والمكانة التي كان يتمتع بها الملك في الحضارة المصرية القديمة، وتتميز بدقة التفاصيل وضخامة الحجم.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-dark px-4" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="hieroglyphsModal" tabindex="-1" aria-labelledby="hieroglyphsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header text-white modal-header-museum">
                <h5 class="modal-title fw-bold" id="hieroglyphsModalLabel">الكتابات الهيروغليفية</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row align-items-center g-4">
                    <div class="col-md-5">
                        <img src="bootstrap/assets/image/images.jpg" class="img-fluid rounded modal-image" alt="الكتابات الهيروغليفية">
                    </div>
                    <div class="col-md-7">
                        <h4 class="fw-bold mb-3 section-title">الكتابات الهيروغليفية</h4>
                        <p class="text-secondary lh-lg">الهيروغليفية هي أحد أنظمة الكتابة التي استخدمها المصريون القدماء لتسجيل الأحداث والنصوص الدينية والحياة اليومية.</p>
                        <p class="text-secondary lh-lg mb-0">كانت الرموز الهيروغليفية تُكتب على جدران المعابد والمقابر والتماثيل والبرديات، وساعدت في معرفة الكثير عن تاريخ مصر القديمة.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-dark px-4" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>
