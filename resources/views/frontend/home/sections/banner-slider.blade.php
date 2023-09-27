<section id="wsus__banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__banner_content">
                    <div class="row banner_slider">
                        @foreach( $sliders as $slider)
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url({{asset($slider->banner)}});">
                                    <div class="wsus__single_slider_text">
                                        @if($slider->text_top)
                                            <h3>{!! $slider->text_top !!}</h3>
                                        @endif
                                        @if($slider->text_center)
                                            <h1>{!! $slider->text_center !!}</h1>
                                        @endif
                                        @if($slider->text_bottom)
                                            <h6>{!! $slider->text_bottom !!}</h6>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
