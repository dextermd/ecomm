@extends('frontend.layouts.master')

@section('content')
    <!--============================
        FORGET PASSWORD START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__forget_area">
                        <span class="qiestion_icon"><i class="fal fa-question-circle"></i></span>
                        <h4>Forget password ?</h4>
                        <p>Enter the email address</p>
                        <div class="wsus__login">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="wsus__login_input">
                                    <i class="fal fa-envelope"></i>
                                    <input type="email" placeholder="Your Email" name="email" value="{{old('email')}}" required autofocus>
                                </div>
                                <button class="common_btn" type="submit">Send</button>
                            </form>
                        </div>
                        <a class="see_btn mt-4" href="{{route('login')}}">Go to login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        FORGET PASSWORD END
    ==============================-->
@endsection
