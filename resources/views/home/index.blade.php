@extends('layouts.front')
@section('content')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>عنوان .</h1>
                        <p>تذكر دائما ان الحاسوب لا يمتلك ذكاء ,ولكنه يكتسب الذكاء الاصطناعي من خلال ثلاثة عناصر وظيفية
                            رئيسة
                            وهي :التحليل والقدرة و الاستدلال
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">عرض التفاصيل </a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>عنوان مثال آخر.</h1>
                        <p>الذكاء الاصطناعي يمكننا من الحصول على اربعة انواع من المعالجة وهي :المعالجة الصوتية،المعالجة
                            الصرفية
                            ،المعالجة النحوية والدلالية
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">تفاصيل أكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>عنوان ثالث</h1>
                        <p> تأثير استثمار تعليم الإنجليزية في الخارج: نحو فهم شامل للأبعاد المالية والسياسية
                            أو
                            أهمية استثمار تعليم الإنجليزية في الخارج: الأبعاد المالية والسياسية المتراكبة</p>
                        <p><a class="btn btn-lg btn-primary" href="#"> عرض التفاصيل </a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <form action="{{ url('orders/create') }}" method="post">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input class="btn btn-secondary" type="submit" value="طلب">
                    </form>
                </div>
            @endforeach

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->



        <hr class="featurette-divider">



        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
