<div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
        {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            },
            "breakpoints": {
                "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                },
                "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                },
                "640": {
                    "slidesPerView": 3,
                    "spaceBetween": 80
                },
                "992": {
                    "slidesPerView": 3,
                    "spaceBetween": 120
                },
                "1200": {
                    "slidesPerView": 5,
                    "spaceBetween": 40
                }
            }
        }
    </script>
    <div class="swiper-wrapper align-items-center">
        @foreach ($partners as $partner)
            <div class="swiper-slide">
                <img src="{{ asset('storage/' . $partner->logo) }}" class="img-fluid" alt="{{ $partner->name }}" />
            </div>
        @endforeach
    </div>
</div>
