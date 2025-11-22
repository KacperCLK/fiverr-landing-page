<div id="about-us" class="card fade-in">
    <div class="card__theme about-us">
        <div class="about-us__title">
            <h2 class="title--2">Wants professional and stunning site?</h2> <br>
            <h3 class="style--uppercase title--3">You’ve come to the right place!</h3>
        </div>
        
        <div class="about-us__tiles">
            @foreach ($offers as $offer)
                <div class="about-us__tile">
                    <h4 class="about-us__tile-title">{{ $offer->title }}</h4>
                    <span class="about-us__tile-desc">{{ $offer->description }}</span>
                </div>
            @endforeach
        </div>
        
        <span class="about-us__description">
            Learn our 
            <a class="link--1" href="#price-list">offer</a> 
            and pricing, 
            <a class="link--1" href="#contact-us">Contact us </a> 
            and we will make your vision 
            <span class="color--main-3">REAL</span>! 
        </span>           
    </div>
</div>