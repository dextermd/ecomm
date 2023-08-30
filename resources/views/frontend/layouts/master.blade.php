<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>AlexS&amp;E  || Торговое оборудование и автоматизация систем торговли и учета</title>
    <link rel="icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">

    @include('frontend.layouts.css')
</head>

<body>

<!--============================
    HEADER START
==============================-->
    @include('frontend.layouts.header')
<!--============================
    HEADER END
==============================-->


<!--============================
    MAIN MENU START
==============================-->
    @include('frontend.layouts.menu')
<!--============================
    MAIN MENU END
==============================-->

<!--============================
    MAIN CONTENT START
==============================-->
    @yield('content')
<!--============================
    MAIN CONTENT END
==============================-->

<!--============================
    FOOTER PART START
==============================-->
    @include('frontend.layouts.footer')
<!--============================
    FOOTER PART END
==============================-->

<!--============================
    SCROLL BUTTON START
==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
<!--============================
    SCROLL BUTTON  END
==============================-->

    @include('frontend.layouts.scripts')

</body>

</html>
