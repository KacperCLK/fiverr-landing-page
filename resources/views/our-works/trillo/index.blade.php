<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Trillo</title>

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        
        <link rel="shortcut icon" type="image/png" href="{{ asset('storage/photos/works-page/trillo/') }}favicon.png">
        @vite(['resources/css/worksPagesCSS/app.css', 'resources/scss/worksPagesSCSS/trillo/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container">
            <header class="header">
                <img src="{{ asset('storage/photos/works-page/trillo/logo.png') }}" alt="trillo logo" class="logo">

                <form action="#" class="search">
                    <input type="text" class="search__input" placeholder="Search hotels">
                    <button class="search__button">
                        <svg class="search__icon">
                            <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-magnifying-glass') }}"/>
                        </svg>    
                    </button>
                </form>

                <nav class="user-nav">
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-bookmark') }}"/>
                        </svg>
                        <span class="user-nav__notification">7</span>
                    </div>
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-chat') }}"/>
                        </svg>
                        <span class="user-nav__notification">13</span>
                    </div>
                    <div class="user-nav__icon-box">
                        <img src="{{ asset('storage/photos/works-page/trillo/user.jpg') }}" alt="User photo" class="user-nav__user-photo">
                        <span class="user-nav__user-name">Kacper</span>
                    </div>
                </nav>
            </header>

            <div class="content">
                <nav class="sidebar">
                    <ul class="side-nav">
                        <li class="side-nav__item side-nav__item--active">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-home') }}"/>
                                </svg>
                                <span>Hotel</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-aircraft-take-off') }}"/>
                                </svg>
                                <span>Flight</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-key') }}"/>
                                </svg>
                                <span>Car rental</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-map') }}"/>
                                </svg>
                                <span>Tours</span>
                            </a>
                        </li>
                    </ul>

                    <div class="legal">
                        &copy; 2024 by trillo. All rights reserved. Made by 
                        <a href="{{ route('home') }}" class="legal__link">Kacper Celak </a>
                        , designed by 
                        <a href="https://github.com/jonasschmedtmann" class="legal__link">Jonas Schmedtmann</a>
                    </div>
                </nav>

                <main class="hotel-view">
                    <div class="gallery">
                        <figure class="gallery__item">
                            <img src="{{ asset('storage/photos/works-page/trillo/hotel-1.jpg') }}" alt="Photo of hotel 1" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="{{ asset('storage/photos/works-page/trillo/hotel-2.jpg') }}" alt="Photo of hotel 2" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="{{ asset('storage/photos/works-page/trillo/hotel-3.jpg') }}" alt="Photo of hotel 3" class="gallery__photo">
                        </figure>
                    </div>

                    <div class="overview">
                        <h1 class="overview__heading">
                            Hotel Las Palmas
                        </h1>
                        <div class="overview__stars">
                            <svg class="overview__icon-stars">
                                <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-star') }}"/>
                            </svg>
                            <svg class="overview__icon-stars">
                                <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-star') }}"/>
                            </svg>
                            <svg class="overview__icon-stars">
                                <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-star') }}"/>
                            </svg>
                            <svg class="overview__icon-stars">
                                <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-star') }}"/>
                            </svg>
                            <svg class="overview__icon-stars">
                                <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-star') }}"/>
                            </svg>
                        </div>

                        <div class="overview__location">
                            <svg class="overview__icon-location">
                                <use xlink:href="{{ asset('storage/photos/works-page/trillo/sprite.svg#icon-location-pin') }}"/>
                            </svg>
                            <button class="btn-inline">Albufeira, Portugal</button>
                        </div>

                        <div class="overview__rating">
                            <div class="overview__rating-average">8.6</div>
                            <div class="overview__rating-count">435 votes</div>
                        </div>
                    </div>

                    <div class="detail">
                        <div class="description">
                            <p class="paragraph">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, debitis velit cupiditate voluptatum quos vero veritatis et quisquam suscipit facilis itaque voluptate architecto sapiente exercitationem. Possimus suscipit sit consectetur sequi eveniet culpa deserunt provident eligendi fugit, modi explicabo blanditiis molestiae!
                            </p>

                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam illum placeat repellat porro facere alias. Fugit error unde eius aut.
                            </p>

                            <ul class="list">
                                <li class="list__item">Close to the beach</li>
                                <li class="list__item">Breakfest included</li>
                                <li class="list__item">Free airport shuttle</li>
                                <li class="list__item">Free wifi in all rooms</li>
                                <li class="list__item">Air conditioning and heating</li>
                                <li class="list__item">Pets allowed</li>
                                <li class="list__item">We speak all langueges</li>
                                <li class="list__item">Perfect for falimies</li>
                            </ul>

                            <div class="recommend">
                                <p class="recommend__count">
                                    Lucy and 3 other friends recomend this hotel.
                                </p>
                                <div class="recommend__friends">
                                    <img src="{{ asset('storage/photos/works-page/trillo/user-3.jpg') }}" alt="Friend 1" class="recommend__photo">
                                    <img src="{{ asset('storage/photos/works-page/trillo/user-4.jpg') }}" alt="Friend 2" class="recommend__photo">
                                    <img src="{{ asset('storage/photos/works-page/trillo/user-5.jpg') }}" alt="Friend 3" class="recommend__photo">
                                    <img src="{{ asset('storage/photos/works-page/trillo/user-6.jpg') }}" alt="Friend 4" class="recommend__photo">
                                </div>
                            </div>
                        </div>

                        <div class="user-reviews">
                            <figure class="review">
                                <blockquote class="review__text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores aperiam ea aut, tempora eaque maiores culpa quidem odio nisi! Nobis commodi obcaecati velit repellat? Quaerat illo facilis soluta officia repudiandae.
                                </blockquote>
                                <figcaption class="review__user">
                                    <img src="{{ asset('storage/photos/works-page/trillo/user-1.jpg') }}" alt="User 1" class="review__photo">
                                    <div class="review__user-box">
                                        <p class="review__user-name">Nick Smith</p>
                                        <p class="review__user-date">Feb 23rd, 2017</p>
                                    </div>
                                    <div class="review__rating">7.8</div>
                                </figcaption>
                            </figure>

                            <figure class="review">
                                <blockquote class="review__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus error beatae in ab quas maiores.    
                                </blockquote>
                                <figcaption class="review__user">
                                    <img src="{{ asset('storage/photos/works-page/trillo/user-2.jpg') }}" alt="User 2" class="review__photo">
                                    <div class="review__user-box">
                                        <p class="review__user-name">Mary Thomas</p>
                                        <p class="review__user-date">Sept 13th, 2017</p>
                                    </div>
                                    <div class="review__rating">9.3</div>
                                </figcaption>
                            </figure>

                            <button class="btn-inline">Show all <span>&rarr;</span></button>
                        </div>
                    </div>

                    <div class="cta">
                        <h2 class="cta__book-now">
                            Good news! We have 4 free rooms for yoyr selected dates!
                        </h2>

                        <button class="btn">
                            <span class="btn__visible">Book now</span>
                            <span class="btn__invisible">Only 4 rooms left</span>
                        </button>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html> 