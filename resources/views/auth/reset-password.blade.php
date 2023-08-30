@extends('frontend.layouts.master')

@section('content')
    <!--============================
        CHANGE PASSWORD START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-7 m-auto">
                    <form  method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="wsus__change_password">
                            <h4>Change password</h4>
                            <div class="wsus__single_pass">
                                <label>Email</label>
                                <input id="email" type="email" placeholder="Email" name="email" value="{{old('email', $request->email)}}" required autofocus autocomplete="email">
                            </div>

                            <div class="wsus__single_pass">
                                <label>New password</label>
                                <input id="password" type="password" placeholder="New Password" name="password" required autocomplete="new-password">
                            </div>
                            <div class="wsus__single_pass">
                                <label>Confirm New password</label>
                                <input id="password_confirmation" type="password" placeholder="Confirm New Password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <button class="common_btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CHANGE PASSWORD END
    ==============================-->
@endsection
