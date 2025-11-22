<div id="our-works" class="card slide-in">
    <div class="card__theme card__theme--1 our-works">
        <div class="card__left">
            <h1 class="title title--1 style--uppercase color--main-2">Ours works</h1>
        </div>
        <div class="card__right">
            <div class="swiper-container our-works__swiper">
                <div class="swiper-wrapper">
                    @foreach ($ourWorks as $work)
                        @if ($work->display === 1)
                            <div class="swiper-slide">
                                <div class="our-works__iframe-container">
                                    <iframe class="our-works__iframe" src="{{route('our-works.show', $work->name)}}" frameborder="0" scrolling="no"></iframe>
                                    <a class="our-works__iframe-btn button--iframe" href="{{route('our-works.show', $work->name)}}">Show</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>            
            </div>
        </div>
        
    </div>
</div>