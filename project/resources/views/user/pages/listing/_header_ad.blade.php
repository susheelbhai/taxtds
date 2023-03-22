<div class="owl-carousel owl_ad">
    @foreach ($sliders as $i)
    <div class="owl-item" data-aos="fade-up"><img src="{{ asset('storage/common/images/sliders/')}}/{{ $i->slider_img }}" alt=""></div>
    @endforeach
</div>