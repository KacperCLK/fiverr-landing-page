<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link rel="stylesheet" href="css/icon-font.css"> --}}

    <title>Natours | Exciting tours for adventurous people</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/natours/icon-font.css') }}">
    @vite(['resources/css/worksPagesCSS/app.css', 'resources/scss/worksPagesSCSS/natours/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        <label class="navigation__button" for="navi-toggle">
            <span class="navigation__icon">&nbsp;</span>
        </label>
        

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link"><span>01.</span>About Natous</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>02.</span>Your benfits</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>03.</span>Popular tours</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>04.</span>Stories</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>05.</span>Book now</a></li>
            </ul>
        </nav>
    </div>

    <header class="header">
        <div class="header__logo-box">
            <img src="{{ asset('storage/photos/works-page/natours/logo-white.png') }}" alt="Logo" class="header__logo">
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Outdoors</span>
                <span class="heading-primary--sub">is where life happens</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting tours for adventurous people
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">You're going to aall in love with nature</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab explicabo non numquam natus est deserunt labore ex 
                        similique quaerat ipsam magni doloribus, impedit libero assumenda sit suscipit quibusdam? Enim, iure.
                    </p>
                    <h3 class="heading-tertiary u-margin-bottom-small">Live adventures like yoy never before</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab explicabo non numquam natus est deserunt labore ex 
                        similique quaerat ipsam magni.
                    </p>

                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">src="
                        <img src="{{ asset('storage/photos/works-page/natours/nat-1-large.jpg') }}" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="{{ asset('storage/photos/works-page/natours/nat-2-large.jpg') }}" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="{{ asset('storage/photos/works-page/natours/nat-3-large.jpg') }}" alt="Photo 3" class="composition__photo composition__photo--p3">
                    </div>
                </div>
            </div>

        </section>
    </main>

    <section class="section-features">
        <div class="row">
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Exlore the world</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores expedita error ullam veritatis ut cupiditate.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores expedita error ullam veritatis ut cupiditate.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores expedita error ullam veritatis ut cupiditate.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores expedita error ullam veritatis ut cupiditate.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-tours" id="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Most popular tours
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front card__side--front-1">
                        <div class="card__picture card__picture--1">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">
                                The Sea Explorer
                            </span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>3 day tours</li>
                                <li>Up to 30 people</li>
                                <li>2 tour guides</li>
                                <li>Sleep in cozy hotels</li>
                                <li>Difficulty: easy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$297</p>
                            </div>
                            <a href="#poppup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front card__side--front-2">
                        <div class="card__picture card__picture--2">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2">
                                The Forest Hiker
                            </span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>7 day tours</li>
                                <li>Up to 40 people</li>
                                <li>6 tour guides</li>
                                <li>Sleep in provided tents</li>
                                <li>Difficulty: medium</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$497</p>
                            </div>
                            <a href="#poppup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front card__side--front-3">
                        <div class="card__picture card__picture--3">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--3">
                                The Snow Adventurer
                            </span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>5 day tours</li>
                                <li>Up to 15 people</li>
                                <li>3 tour guides</li>
                                <li>Sleep in provided tents</li>
                                <li>Difficulty: hard</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$897</p>
                            </div>
                            <a href="#poppup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn btn--green">Discover all tours</a>
        </div>
    </section>

    <section class="section-stories">
        <div class="bg-video">
            <video  class="bg-video__content" autoplay muted loop>
                <source src="{{ asset('storage/photos/works-page/natours/video.mp4') }}" type="video/mp4">
                <source src="{{ asset('storage/photos/works-page/natours/video.webm') }}" type="video/webm">
                Your browser is not supported!
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                We make people genuinely happy
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="{{ asset('storage/photos/works-page/natours/nat-8.jpg') }}" alt="Person on a tour" class="story__image">
                    <figcaption class="story__caption">Mary Smith</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        I had the best week with my family!
                    </h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, illum adipisci voluptatum dignissimos quod, dolorum necessitatibus quasi aliquid iure maxime in blanditiis corrupti nesciunt unde itaque autem eaque officia at aspernatur molestiae? Tempore, a quas.
                    </p>
                </div>
            </div>
            <div class="story">
                <figure class="story__shape">
                    <img src="{{ asset('storage/photos/works-page/natours/nat-9.jpg') }}" alt="Person on a tour" class="story__image">
                    <figcaption class="story__caption">Jack Wilson</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Wow! My life is completely different now
                    </h3>
                    <p>
                        Odit laborum nam assumenda suscipit explicabo nemo repellat quibusdam possimus, ad, quam magnam minus aliquid cupiditate corrupti qui? Incidunt sit, labore sunt excepturi suscipit maiores ratione. Aliquid eveniet voluptates aut veritatis a?
                    </p>
                </div>
            </div>
        </div>
        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn-text">Discover all tours &rarr;</a>
        </div>
    </section>

    <section class="section-book">
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <form action="#" class="form">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Start booking now
                            </h2>
                        </div>
                        <div class="form__group">
                            <input id="name" type="text" class="form__input" placeholder="Full Name" required>
                            <label for="name" class="form__label">Full name</label>
                        </div>
                        <div class="form__group">
                            <input id="email" type="email" class="form__input" placeholder="Email adress" required>
                            <label for="email" class="form__label">Email adress</label>
                        </div>
                        <div class="form__radio-group">
                            <input type="radio" class="form__radio-input" id="small" name="size">
                            <label for="small" class="form__radio-label">
                                <span class="form__radio-button"></span>    
                                Small tour group
                            </label>
                        </div>
                        <div class="form__radio-group">
                            <input type="radio" class="form__radio-input" id="large" name="size">
                            <label for="large" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Larg tour group
                            </label>
                        </div>

                        <div class="form__group u-margin-top-medium">
                            <button class="btn btn--green ">Next step &rarr;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__logo-box">
            <img src="{{ asset('storage/photos/works-page/natours/logo-green-2x.png') }}" alt="Full log" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Carreres</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Sample booking page made by 
                    <a href="{{ route('home') }}" class="footer__link">Kacper Celak</a>
                    , designed by 
                    <a href="https://github.com/jonasschmedtmann" class="footer__link">Jonas Schmedtmann</a>
                </p>
            </div>
        </div>
    </footer>

    <div class="popup" id="poppup">
        <div class="popup__content">
            <div class="popup__left">
                <img src="{{ asset('storage/photos/works-page/natours/nat-8.jpg') }}" alt="Tour photo" class="popup__img">
                <img src="{{ asset('storage/photos/works-page/natours/nat-9.jpg') }}" alt="Tour photo" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-medium">Start booking now</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Pleas read these terms before booking</h3>
                <p class="popup__text u-margin-bottom-medium">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum quos nemo in asperiores perferendis corporis error fugit voluptatem minus repellendus voluptas, ipsum ducimus dolorem fuga unde sapiente, vel suscipit expedita explicabo eius? Corrupti modi dicta nobis rem, quos aspernatur facere ipsam, nihil laboriosam nulla necessitatibus recusandae ratione illum quibusdam excepturi in expedita animi odit quasi. Ipsam distinctio aperiam pariatur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum quos nemo in asperiores perferendis corporis error fugit voluptatem minus repellendus voluptas, ipsum ducimus dolorem fuga unde sapiente, vel suscipit expedita explicabo eius? Corrupti modi dicta nobis rem, quos aspernatur facere ipsam, nihil laboriosam nulla necessitatibus recusandae ratione illum quibusdam excepturi in expedita animi odit quasi. Ipsam distinctio aperiam pariatur?
                </p>
                <a href="#" class="btn btn--green">Book now</a>
            </div>
        </div>
    </div>
</body>
</html>