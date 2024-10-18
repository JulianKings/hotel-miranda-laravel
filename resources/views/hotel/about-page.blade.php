@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

<body class="content">
    @include('hotel.layout.header-component', ['title' => $title, 'subtitle' => $subtitle])

    <main class="about">
        <section class="about__video">
            <div class="about__video__content">
                <iframe width="335" height="186" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=jcLt9gfeRDWPrmgr&amp;start=25&amp;end=75" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <p class="about__video__description">
                Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
            </p>
        </section>

        <section class="about__options">
            <div class="about__options__item" id="coffee">
                <div class="about__options__image">
                    <img src="./assets/coffee.png" id="coffee-img" alt="Breakfast" />
                </div>
                <p class="about__options__title" id="coffee-text">
                    Breakfast
                </p>
            </div>

            <div class="about__options__item" id="plane">
                <div class="about__options__image">
                    <img src="./assets/plane.png" id="plane-img" alt="Travel Plane" />
                </div>
                <p class="about__options__title" id="plane-text">
                    Airport pickup
                </p>
            </div>

            <div class="about__options__item" id="location">
                <div class="about__options__image">
                    <img src="./assets/location.png" id="location-img" alt="Location" />
                </div>
                <p class="about__options__title"  id="location-text">
                    City Guide
                </p>
            </div>

            <div class="about__options__item about__options__extra" id="bbq">
                <div class="about__options__image">
                    <img src="./assets/bbq.png" id="bbq-img" alt="BBQ Party" />
                </div>
                <p class="about__options__title"  id="bbq-text">
                    Bbq Party
                </p>
            </div>

            <div class="about__options__item" id="sofa">
                <div class="about__options__image">
                    <img src="./assets/sofa.png" id="sofa-img" alt="Sofa Comfort" />
                </div>
                <div class="about__options__title" id="sofa-text">
                    Luxury room
                </div>
            </div>
        </section>

        <section class="about__restaurant">
            <div class="about__restaurant__image">
                <img src="./assets/restaurant.png" alt="Restaurant" />
            </div>
            <div class="about__restaurant__information">
                <p class="about__restaurant__title">Restaurant</p>
                <p class="about__restaurant__caption">
                    Get Restaurant Facilities & Many Other More
                </p>
                <p class="about__restaurant__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <div class="about__restaurant__button">
                    <button type="button" class="button">Take a tour</button>
                </div>
            </div>
        </section>

        <section class="facilities facilities--dark">
            <div class="facilities__title facilities__title--dark">Facilities</div>
            <div class="facilities__caption facilities__caption--dark">Core Features</div>
            <div class="facilities__swiper facilities__swiper--dark">
                <div class="swiper-wrapper">
                    <div class="swiper-slide facilities__container facilities__container--dark">
                        <p class="facilities__position facilities__position--dark">
                            01
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core1.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text facilities__text--dark">
                            Have High Rating
                        </p>
                        <p class="facilities__description facilities__description--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container facilities__container--dark">
                        <p class="facilities__position facilities__position--dark">
                            02
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core2.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text facilities__text--dark">
                            Quiet Hours
                        </p>
                        <p class="facilities__description facilities__description--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container facilities__container--dark">
                        <p class="facilities__position facilities__position--dark">
                            03
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core3.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text facilities__text--dark">
                            Best Locations
                        </p>
                        <p class="facilities__description facilities__description--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container facilities__container--dark">
                        <p class="facilities__position facilities__position--dark">
                            04
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core4.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text facilities__text--dark">
                            Free Cancellation
                        </p>
                        <p class="facilities__description facilities__description--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container facilities__container--dark">
                        <p class="facilities__position facilities__position--dark">
                            05
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core5.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text facilities__text--dark">
                            Payment Options
                        </p>
                        <p class="facilities__description facilities__description--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container facilities__container--dark">
                        <p class="facilities__position facilities__position--dark">
                            06
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core6.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text facilities__text--dark">
                            Special Offers
                        </p>
                        <p class="facilities__description facilities__description--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>

                <div class="facilities__pagination facilities__pagination--dark"></div>
            </div>
        </section>

        <section class="about__counter">
            <p class="about__counter__title">Counter</p>
            <p class="about__counter__caption">Some Fun Facts</p>
            <div class="about__counter__facts">
                <div class="about__counter__item">
                    <div class="about__counter__image">
                        <img src="./assets/person.png" alt="Happy Person" />
                    </div>
                    <div class="about__counter__text">
                        <p class="about__counter__number">{{$userCount}}</p>
                        <p>Happy Users</p>
                    </div>
                    <div class="about__counter__arrow">
                        <img src="./assets/arrow.png" alt="Find out more" />
                    </div>
                </div>

                <div class="about__counter__item">
                    <div class="about__counter__image">
                        <img src="./assets/thumbsup.png" alt="Thumbs up" />
                    </div>
                    <div class="about__counter__text">
                        <p class="about__counter__number">10M</p>
                        <p>Reviews & Appreciate</p>
                    </div>
                    <div class="about__counter__arrow">
                        <img src="./assets/arrow.png" alt="Find out more" />
                    </div>
                </div>

                <div class="about__counter__item">
                    <div class="about__counter__image">
                        <img src="./assets/world.png" alt="Huge World" />
                    </div>
                    <div class="about__counter__text">
                        <p class="about__counter__number">100</p>
                        <p>Country Coverage</p>
                    </div>
                    <div class="about__counter__arrow">
                        <img src="./assets/arrow.png" alt="Find out more" />
                    </div>
                </div>
            </div>
        </section>

        <section class="about__image">
            <div class="about__images__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide about__images__container">
                        <img src="./assets/hotel3.png" alt="hotel image" />
                    </div>

                    <div class="swiper-slide about__images__container">
                        <img src="./assets/hotel4.png" alt="hotel image" />
                    </div>
                </div>

                <div class="about__images__pagination"></div>
            </div>
        </section>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>
