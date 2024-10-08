<style>
    .banner-content {
        position: absolute;
        left: 0;
        width: 100%;
        top: 65%;
        transform: translateY(-50%);
        text-align: center;
        z-index: 9;
    }

    .banner-content h1 {
        font-family: "Sacramento", cursive;
        font-size: 60px;
        line-height: 60px;
        margin: 0;
    }

    .banner-content h2 {
        color: rgba(25, 23, 22, 0.25);
        -webkit-text-stroke: 2px #fff;
        text-stroke: 2px #fff;
        font-size: 60px;
        font-weight: 700;
    }

    .banner-content .btn {
        background: rgba(143, 33, 46, 0.7);
    }

    .banner-content .btn i {
        -webkit-transform: translateY(2px);
    }

    .banner .slick-dots {
        text-align: center;
        padding: 10px 15px;
        margin: 0 auto;
        width: auto;
        position: absolute;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 30px;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        height: auto;
    }

    .banner .slick-dots li {
        margin: 0 5px;
        display: flex;
    }

    .banner .slick-dots li button {
        background: #8f212e;
    }

    .banner .slick-dots li.slick-active button {
        width: 20px;
    }

    .banner-content .btn {
        background: rgba(143, 33, 46, 0.7);
    }

    .btn {
        border: none;
        letter-spacing: 0.35px;
        font-weight: 600;
        padding: 20px 35px 22px;
        border-radius: 36px;
        font-size: 16px;
        cursor: pointer;
        color: #fff;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        line-height: normal;
        background: #8f212e;
        text-transform: capitalize;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .heading1 {
        font-family: "Sacramento", cursive;
    }

    /* Desktop styles */
    .desktop {
        display: block;
        background-color: lightblue;
    }

    .mobile {
        display: none;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .mobile {
            display: block;
            background-color: lightgreen;
        }

        .desktop {
            display: none;
        }
    }
</style>
@if (count(slider()) > 0)
    <div class="mr-1 ml-1">
        <div class="">
            {{-- <div class="slider"> --}}
            {{-- @forelse (slider() as  $slider) --}}
            @php
                $slider = \App\Models\SliderImage::query()->where('status',1)->latest()->first();
            @endphp
                <div class="slide desktop" style="background-image: url('{{ $slider->image }}');">
                </div>

                <div class="slide mobile" style="background-image: url('{{ $slider->mobile_slider }}');">
                </div>

            {{-- @empty --}}
            {{-- @endforelse --}}
        </div>

        <div class="banner-content">
            {{-- <h1 class="heading1" style="color: #fff;">Exotic</h1> --}}
            <h2>Exotic Agro</h2>
            <a class="btn" href="{{ route('product.category', 0) }}">Explore Products <i class="icon-chevron-right"></i>
            </a>
        </div>
        <div class="slider-controls">
            <span class="prev" onclick="moveSlide(-1)">&#10094;</span>
            <span class="next" onclick="moveSlide(1)">&#10095;</span>
        </div>
    </div>
@endif


<script src="script.js"></script>
<style>
    .slider-container {
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: auto;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        min-width: 100%;
        height: 470px;
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .slider-caption {
        position: absolute;
        bottom: 50px;
        left: 50px;
        color: white;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .slider-controls {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .prev,
    .next {
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        border: none;
        font-size: 18px;
    }
</style>
<script>
    let currentSlide = 0;

    function moveSlide(direction) {
        const slides = document.querySelector('.slider');
        const totalSlides = document.querySelectorAll('.slide').length;

        currentSlide += direction;

        if (currentSlide >= totalSlides) {
            currentSlide = 0;
        }

        if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        }

        const slideWidth = document.querySelector('.slide').clientWidth;
        slides.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
    }

    // Auto-slide every 5 seconds
    setInterval(() => {
        moveSlide(1);
    }, 5000);
</script>
<br>
