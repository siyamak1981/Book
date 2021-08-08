@extends('Frontend.public.app')
@section('main-content')
<section class="page-title-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>همکاری با ما</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="assets/img/shape1.png" alt="img"></div>
    <div class="shape2"><img src="assets/img/shape2.png" alt="img"></div>
    <div class="shape3"><img src="assets/img/shape3.png" alt="img"></div>
    <div class="shape6"><img src="assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="assets/img/shape8.svg" alt="shape"></div>
    <div class="shape9"><img src="assets/img/shape9.svg" alt="shape"></div>

    <!-- Bubble Animte -->
    <div class="bubble-animate">
        <div class="circle small square1"></div>
        <div class="circle small square2"></div>
        <div class="circle small square3"></div>
        <div class="circle small square4"></div>
        <div class="circle small square5"></div>
        <div class="circle medium square1"></div>
        <div class="circle medium square2"></div>
        <div class="circle medium square3"></div>
        <div class="circle medium square4"></div>
        <div class="circle medium square5"></div>
        <div class="circle large square1"></div>
        <div class="circle large square2"></div>
        <div class="circle large square3"></div>
        <div class="circle large square4"></div>
    </div>
</section>
<!-- End Page Title Area -->
@include('includes.messages')
<!-- Start FAQ Area -->
<section class="faq-area ptb-100">
    <div class="container">
        <div class="faq-accordion">
            <h3>من می خواهم با شما همکار شوم</h3>
            <p>همراه عزیز سایت کتابخوانی، از اینکه تصمیم گرفته اید به جمع همکاران ما در سایت کتابخوانی بپیوندید، بسیار خوشحالیم.
                <br />
                شما می توانید در این صفحه زمینه هایی که تمایل به همکاری دارید، مشخص نمایید.
                <br />
                برای ثبت زمینه های همکاری و فعالسازی دکمه ثبت ابتدا باید از لینک ثبت نام نمایید و در صورتی که از اعضا هستید از لینک ورود به سایت وارد شوید.

            </p>
            <div class="col-lg-12">
                <form action="{{ route('work-us.store') }}" method="POST">
                {{ csrf_field() }}
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" name="status[]" class="form-check-input p-bground">
                            <p>من می توانم طرح های جذاب برای گسترش مسابقه های کتابخوانی در اختیار شما بگذارم، ذهن من پر از ایده های جدید است.</p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" name="status[]" value="1" class="form-check-input p-bground">
                            <p>
                                من می توانم کتاب های مناسب را در زمینه های مرتبط با فعالیت سایت کتابخوانی معرفی کنم.
                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" name="status[]" value="2" class="form-check-input p-bground">
                            <p>
                                من می توانم برای مسابقه سوال طراحی کنم.
                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" name="status[]" value="3" class="form-check-input p-bground">
                            <p>
                                من می توانم خلاصه کتاب ها را آماده کنم.
                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" name="status[]" value="4" class="form-check-input p-bground">
                            <p>
                                من می توانم صفحه برگزیده کتاب را مشخص کنم.
                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="5" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم کتاب ها را به صورت علمی نقد و بررسی کنم.
                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="6" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم اطلاعات مفید و کاربردی راجع به نویسنده ها فراهم کنم.
                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="7" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم سایت کتابخوانی را به 5 نفر از دوستانم معرفی کنم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="8" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم کتابم را به دیگران بدهم تا آنها هم در مسابقه شرکت کنند.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="9" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم در مدرسه، دانشکده، محل کار، جمع خانوادگی، محله و... مسابقه برگزار کنم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="10" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم پوستر مسابقه ها را روی دیوار مسجد، فرهنگسرا، مدرسه، دانشگاه و... نصب کنم تا دیگران هم فرصت و شاید بهانه برای مطالعه پیدا کنند!

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="11" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم کتاب های مسابقه را در فروشگاهم در اختیار علاقمندان بگذارم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="12" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم طراحی سایت و یا برنامه نویسی و... انجام دهم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="13" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم طراحی گرافیکی انجام دهم و پوستر تبلیغاتی و... آماده کنم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="14" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم بخشی از هزینه برگزاری مسابقه ها را بپردازم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="15" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم جلسات کتابخوانی برگزار کنم و کتاب های معرفی شده را به 2 دوست کوچکتر از خودم تدریس کنم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <div class="form-check">
                            <input type="checkbox" value="16" name="status[]" class="form-check-input p-bground">
                            <p>
                                من می توانم کارت معرفی سایت کتابخوانی را به دست دیگران برسانم.

                            </p>
                        </div>
                    </div>
                    <div class="faq-contact">
                        <h3>من می توانم ...</h3>

                        <div class="row">

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="موضوع" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="body" cols="30" rows="6" placeholder="پیام" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button class="btn btn-primary" type="submit">ثبت</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>


    </form>
    </div>
</section>
<!-- End FAQ Area -->

@endsection