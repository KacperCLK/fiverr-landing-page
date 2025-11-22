<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="{{ asset('storage/photos/works-page/nexter/favicon.png') }}">
        
        <title>Nexter &mdash; your home, your freedom</title>

        @vite(['resources/css/worksPagesCSS/app.css', 'resources/scss/worksPagesSCSS/nexter/app.scss', 'resources/js/app.js'])
    </head>
    <body class="container">
        <div class="sidebar">
            <button class="nav-btn"></button>
        </div>

        <header class="header">
            <img src="{{ asset('storage/photos/works-page/nexter/hero.jpeg') }}" alt="Header background" class="header__bg-img">
            <div class="header__bg"></div>

            <img src={{ asset('storage/photos/works-page/nexter/logo.png') }} alt="Nexter logo" class="header__logo">
            <h3 class="heading-3">Your own home:</h3>
            <h1 class="heading-1">The ultimate personal freedom</h1>
            <button class="btn header__btn">View our properties</button>
            <div class="header__seenon-text">Seen on</div>
            <div class="header__seenon-logos">
                <img src={{ asset('storage/photos/works-page/nexter/logo-bbc.png') }} alt="Seen on logo 1">
                <img src={{ asset('storage/photos/works-page/nexter/logo-forbes.png') }} alt="Seen on logo 2">
                <img src={{ asset('storage/photos/works-page/nexter/logo-techcrunch.png') }} alt="Seen on logo 3">
                <img src={{ asset('storage/photos/works-page/nexter/logo-bi.png') }} alt="Seen on logo 4">
            </div>
        </header>

        <div class="realtors">
            <h3 class="heading-3">Top 4 realtors</h3>
            <div class="realtors__list">
                <img src={{ asset('storage/photos/works-page/nexter/realtor-1.jpeg') }} alt="Realtor 1" class="realtors__img">
                <div class="realtors__details">
                    <h4 class="heading-4 heading-4--light">Erik Deinman</h4>
                    <p class="realtors_sold">245 houses sold</p>
                </div>
                <img src={{ asset('storage/photos/works-page/nexter/realtor-2.jpeg') }} alt="Realtor 2" class="realtors__img">
                <div class="realtors__details">
                    <h4 class="heading-4 heading-4--light">Kim Brown</h4>
                    <p class="realtors_sold">212 houses sold</p>
                </div>
                <img src={{ asset('storage/photos/works-page/nexter/realtor-3.jpeg') }} alt="Realtor 3" class="realtors__img">
                <div class="realtors__details">
                    <h4 class="heading-4 heading-4--light">Toby Ramsey</h4>
                    <p class="realtors_sold">198 houses sold</p>
                </div>
            </div>
        </div>

        <section class="features">
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-global') }}"/>
                </svg>
                <h4 class="heading-4 heading--dark">World.s best luxary homes</h4>
                <p class="feature__text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, voluptatibus optio. Aliquid necessitatibus tempore magnam porro eaque similique.
                </p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-trophy') }}"/>
                </svg>
                <h4 class="heading-4 heading--dark">Only the best proerties</h4>
                <p class="feature__text">
                    Aspernatur dolorum numquam quae aut repellat animi, excepturi odit expedita placeat explicabo, doloribus quasi eius accusantium alias maxime dicta.
                </p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                </svg>
                <h4 class="heading-4 heading--dark">All home in top location</h4>
                <p class="feature__text">
                    Repellendus repellat deleniti sint explicabo eligendi iure consequatur ullam, ab, reprehenderit tempore fuga nihil deserunt sequi ipsum hic illum saepe ea, mollitia accusamus rem distinctio atque.
                </p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                </svg>
                <h4 class="heading-4 heading--dark">New home in one week</h4>
                <p class="feature__text">
                    Fugiat autem nemo obcaecati aperiam exercitationem dolore quibusdam voluptates iste quam? 
                </p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-presentation') }}"/>
                </svg>
                <h4 class="heading-4 heading--dark">Top 1% realators</h4>
                <p class="feature__text">
                    Obcaecati atque quo ullam aliquam expedita perspiciatis cumque eum, deleniti cupiditate, eveniet explicabo impedit quibusdam quae asperiores, commodi dolorem.
                </p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-lock') }}"/>
                </svg>
                <h4 class="heading-4 heading--dark">Secure payment on nexter</h4>
                <p class="feature__text">
                    Quas veniam a deserunt tempore debitis voluptatibus officia error vel corporis esse modi ex ipsum sapiente quisquam velit accusamus rem aspernatur id, ut, neque maiores itaque dicta magnam
                </p>
            </div>
        </section>

        <div class="story__pictures">
            <img src="{{ asset('storage/photos/works-page/nexter/back.jpg') }}" class="story__bg-img">
            <div class="story__bg"></div>

            <img src="{{ asset('storage/photos/works-page/nexter/story-1.jpeg') }}" alt="Couple with new home" class="story__img--1">
            <img src="{{ asset('storage/photos/works-page/nexter/story-2.jpeg') }}" alt="New house" class="story__img--2">
        </div>
        <div class="story__content">
            <h3 class="heading-3 mb-sm">Happy customers</h3>
            <h2 class="heading-2 heading-2--dark mb-md">&ldquo;The best decision of our lives&rdquo;</h2>

            <p class="story__text mb-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minus libero, illo, dolorem earum expedita iusto aspernatur minima dolores numquam provident pariatur perferendis aperiam odio quam a, alias aliquam natus!
            </p>
            <button class="btn">Find your own home</button>
        </div>

        <section class="homes">
            <div class="home">
                <img src={{ asset('storage/photos/works-page/nexter/house-1.jpeg') }} alt="House 1" class="home__img">

                <svg class="home__like">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-heart-full') }}"/>
                </svg>

                <h5 class="home__name">Beautiful Familiy House</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                    </svg>
                    <p>USA</p>
                </div>
                <div class="home__rooms">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-profile-male') }}"/>
                    </svg>
                    <p>5 rooms</p>
                </div>
                <div class="home__area">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-expand') }}"/>
                    </svg>
                    <p>325 m <sup>2</sup></p>
                </div>
                <div class="home__price">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                    </svg>
                    <p>$1,200,000</p>
                </div>

                <button class="btn home__btn">Contact realtor</button>
            </div>

            <div class="home">
                <img src={{ asset('storage/photos/works-page/nexter/house-2.jpeg') }} alt="House 2" class="home__img">

                <svg class="home__like">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-heart-full') }}"/>
                </svg>

                <h5 class="home__name">Modern Glass Villa</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                    </svg>
                    <p>Canada</p>
                </div>
                <div class="home__rooms">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-profile-male') }}"/>
                    </svg>
                    <p>6 rooms</p>
                </div>
                <div class="home__area">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-expand') }}"/>
                    </svg>
                    <p>450 m <sup>2</sup></p>
                </div>
                <div class="home__price">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                    </svg>
                    <p>$2,750,000</p>
                </div>

                <button class="btn home__btn">Contact realtor</button>
            </div>

            <div class="home">
                <img src={{ asset('storage/photos/works-page/nexter/house-3.jpeg') }} alt="House 3" class="home__img">

                <svg class="home__like">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-heart-full') }}"/>
                </svg>

                <h5 class="home__name">Cozy Country House</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                    </svg>
                    <p>UK</p>
                </div>
                <div class="home__rooms">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-profile-male') }}"/>
                    </svg>
                    <p>4 rooms</p>
                </div>
                <div class="home__area">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-expand') }}"/>
                    </svg>
                    <p>250 m <sup>2</sup></p>
                </div>
                <div class="home__price">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                    </svg>
                    <p>$850,000</p>
                </div>

                <button class="btn home__btn">Contact realtor</button>
            </div>

            <div class="home">
                <img src={{ asset('storage/photos/works-page/nexter/house-4.jpeg') }} alt="House 4" class="home__img">

                <svg class="home__like">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-heart-full') }}"/>
                </svg>

                <h5 class="home__name">Large Rustical Villa</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                    </svg>
                    <p>Portugal</p>
                </div>
                <div class="home__rooms">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-profile-male') }}"/>
                    </svg>
                    <p>6 rooms</p>
                </div>
                <div class="home__area">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-expand') }}"/>
                    </svg>
                    <p>480 m <sup>2</sup></p>
                </div>
                <div class="home__price">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                    </svg>
                    <p>$1,950,000</p>
                </div>

                <button class="btn home__btn">Contact realtor</button>
            </div>

            <div class="home">
                <img src={{ asset('storage/photos/works-page/nexter/house-5.jpeg') }} alt="House 5" class="home__img">

                <svg class="home__like">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-heart-full') }}"/>
                </svg>

                <h5 class="home__name">Magestic Palace House</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                    </svg>
                    <p>Geramany</p>
                </div>
                <div class="home__rooms">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-profile-male') }}"/>
                    </svg>
                    <p>18 rooms</p>
                </div>
                <div class="home__area">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-expand') }}"/>
                    </svg>
                    <p>4300 m <sup>2</sup></p>
                </div>
                <div class="home__price">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                    </svg>
                    <p>$9,500,000</p>
                </div>
                <button class="btn home__btn">Contact realtor</button>
            </div>

            <div class="home">
                <img src={{ asset('storage/photos/works-page/nexter/house-6.jpeg') }} alt="House 6" class="home__img">

                <svg class="home__like">
                    <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-heart-full') }}"/>
                </svg>

                <h5 class="home__name">Modern Familly Apartment</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-map-pin') }}"/>
                    </svg>
                    <p>Italy</p>
                </div>
                <div class="home__rooms">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-profile-male') }}"/>
                    </svg>
                    <p>3 rooms</p>
                </div>
                <div class="home__area">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-expand') }}"/>
                    </svg>
                    <p>180 m <sup>2</sup></p>
                </div>
                <div class="home__price">
                    <svg>
                        <use xlink:href = "{{ asset('storage/photos/works-page/nexter/sprite.svg#icon-key') }}"/>
                    </svg>
                    <p>$600,000</p>
                </div>

                <button class="btn home__btn">Contact realtor</button>
            </div>
        </section>

        <section class="gallery">
            <figure class="gallery__item gallery__item--1"><img src={{ asset('storage/photos/works-page/nexter/gal-1.jpeg') }} alt="Gallery image 1" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--2"><img src={{ asset('storage/photos/works-page/nexter/gal-2.jpeg') }} alt="Gallery image 2" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--3"><img src={{ asset('storage/photos/works-page/nexter/gal-3.jpeg') }} alt="Gallery image 3" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--4"><img src={{ asset('storage/photos/works-page/nexter/gal-4.jpeg') }} alt="Gallery image 4" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--5"><img src={{ asset('storage/photos/works-page/nexter/gal-5.jpeg') }} alt="Gallery image 5" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--6"><img src={{ asset('storage/photos/works-page/nexter/gal-6.jpeg') }} alt="Gallery image 6" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--7"><img src={{ asset('storage/photos/works-page/nexter/gal-7.jpeg') }} alt="Gallery image 7" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--8"><img src={{ asset('storage/photos/works-page/nexter/gal-8.jpeg') }} alt="Gallery image 8" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--9"><img src={{ asset('storage/photos/works-page/nexter/gal-9.jpeg') }} alt="Gallery image 9" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--10"><img src={{ asset('storage/photos/works-page/nexter/gal-10.jpeg') }} alt="Gallery image 10" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--11"><img src={{ asset('storage/photos/works-page/nexter/gal-11.jpeg') }} alt="Gallery image 11" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--12"><img src={{ asset('storage/photos/works-page/nexter/gal-12.jpeg') }} alt="Gallery image 12" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--13"><img src={{ asset('storage/photos/works-page/nexter/gal-13.jpeg') }} alt="Gallery image 13" class="gallery__img"></figure>
            <figure class="gallery__item gallery__item--14"><img src={{ asset('storage/photos/works-page/nexter/gal-14.jpeg') }} alt="Gallery image 14" class="gallery__img"></figure>
        </section>

        <footer class="footer">
            <ul class="nav">
                <li class="nav__item"><a href="#" class="nav__link">Find your dream home</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Request proposal</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Download home planner</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Contact us</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Submit your property</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Come work with us!</a></li>
            </ul>

            <p class="copyright">
                &copy; Copyright 2024 made by Kacper Celak. Designed by Jonas Schmedtmann.
            </p>
        </footer>

    </body>
</html>