<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./assets/logo_icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./style/pages/index.css" />
    <script type="text/javascript" src="./scripts/menu.js" defer></script> 
    <script type="text/javascript" src="./scripts/socials.js" defer></script>
    <script type="text/javascript" src="./scripts/datePicker.js" defer></script>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script> 
    <script type="text/javascript" src="./scripts/swiper.js" defer></script>
</head>
<body class="content">
    <header class="header">
        <div class="header__content">
            <img src="./assets/menu.png" class="header__content__menu" tabindex="1" alt="Menu" />

            <div class="header__content__logo">
                <div class="header__logo__icon-box">
                    <img src="./assets/logo_icon.png" class="header__logo--small" alt="Logo Icon" />
                    <img src="./assets/big-logo-icon.png" class="header__logo--big" alt="Logo Icon" />
                </div>
                <div class="header__logo">
                    <img src="./assets/logo.png" class="header__logo--small" alt="Logo" />
                    <img src="./assets/big-logo.png" class="header__logo--big" alt="Logo" />
                </div>
            </div>

            <nav class="header__desktop-navlist">
                <ul>
                    <li class="header__navlist__item"><a href="about">About Us</a></li>
                    <li class="header__navlist__item"><a href="rooms">Rooms</a></li>
                    <li class="header__navlist__item"><a href="offers">Offers</a></li>
                    <li class="header__navlist__item"><a href="contact">Contact</a></li>
                </ul>
            </nav>

            <div class="header__content__actions">
                <div class="header__content__actions__item"><a href="login"><img src="./assets/account.png" alt="Account" /></a></div>
                <div class="header__content__actions__item"><img src="./assets/search.png" alt="Search" /></div>
            </div>
        </div>

        <nav class="header__navlist">
            <ul>
                <li class="header__navlist__item"><a href="about">About Us</a></li>
                <li class="header__navlist__item"><a href="rooms">Rooms</a></li>
                <li class="header__navlist__item"><a href="offers">Offers</a></li>
                <li class="header__navlist__item"><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <header class="information-header">
        <div class="information-header__container">
            <p class="information-header__subtitle">the ultimate luxury experience</p>
            <p class="information-header__title">The Perfect Base For You</p>
            <div class="index__button-holder">
                <button type="button" class="button">Take a tour</button>
                <button type="button" class="button button--alternative">Learn more</button>
            </div>
        </div>
    </header>

    <main class="index">
        <section class="index__calendar">
            <div class="index__calendar__form-container">
                <div class="index__calendar__form">
                    <label for="arrival-date" class="index__calendar__label">Arrival Date</label>
                    <div class="index__calendar__construct">
                        <span class="index__calendar__date">
                            <span class="index__calendar__datepicker"></span>
                            <input type="date" id="arrival-date" class="index__calendar__dateinput" />
                        </span>
                        <input type="text" id="arrival-date-text" class="index__calendar__input" />
                    </div>
                </div>
    
                <div class="index__calendar__form">
                    <label for="departure-date" class="index__calendar__label">Departure Date</label>
                    <div class="index__calendar__construct">
                        <span class="index__calendar__date">
                            <span class="index__calendar__datepicker"></span>
                            <input type="date" id="departure-date" class="index__calendar__dateinput" />
                        </span>
                        <input type="text" id="departure-date-text" class="index__calendar__input" />
                    </div>
                </div>
            </div>

            <div class="index__calendar__button">
                <button type="button" class="button">Check Availability</button>
            </div>
        </section>

        <section class="index__discover-wrapper">
            <section class="index__about">
                <div class="index__about__tile"></div>
                <p class="index__about__title">About us</p>
                <p class="index__about__caption">Discover Our Underground</p>
                <p class="index__about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="index__about__button">
                    <button type="button" class="button">Book now</button>
                </div>
            </section>

            <section class="index__image-cards">
                <div class="index__image-cards__card">
                    <div class="index__image-cards__image">
                        <img src="./assets/working.png" alt="A team of people working" />
                    </div>

                    <div class="index__image-cards__content">
                        <div class="index__image-cards__picture">
                            <img src="./assets/team.png" alt="Team icon">
                        </div>
                        <div class="index__image-cards__translucent">
                            <img src="./assets/transparent-team.png">
                        </div>
                        <p class="index__image-cards__title">
                            Strong Team
                        </p>
                        <p class="index__image-cards__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>

                <div class="index__image-cards__card index__image-cards__card index__image-cards__card-reverse">
                    <div class="index__image-cards__image">
                        <img src="./assets/luxury-room-picture.png" alt="A room full of luxury items" />
                    </div>

                    <div class="index__image-cards__content index__image-cards__content--black">
                        <div class="index__image-cards__picture">
                            <img src="./assets/luxury-room.png" alt="Luxury room">
                        </div>
                        <p class="index__image-cards__title index__image-cards__title--black">
                            Luxury Room
                        </p>
                        <p class="index__image-cards__description index__image-cards__description--black">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>

            </section>
        </section>

        <section class="index__rooms">
            <p class="index__rooms__title">Rooms</p>

            <p class="index__rooms__caption">Hand Picked Rooms</p>

            <div class="index__rooms__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide index__rooms__container">
                        <div class="index__rooms__perks">
                            <img src="./assets/bed_icon.png" alt="Has a bed" />
                            <img src="./assets/wifi_icon.png" alt="Has wifi" />
                            <img src="./assets/automobile_icon.png" alt="Has parking" />
                            <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                            <img src="./assets/gym_icon.png" alt="Gym included" />
                            <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                            <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                        </div>
                        <div class="index__rooms__image">
                            <img src="./assets/penthouse1.png" />
                        </div>
                        <div class="index__rooms__information-holder">
                            <div class="index__rooms__information">
                                <div class="index__rooms__name-box">
                                    <p class="index__rooms__room-name">
                                        <a href="room_detail.html">Minimal Duplex Room</a>
                                    </p>
                                    <p class="index__rooms__room-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </p>
                                </div>

                                <p class="index__rooms__room-price">
                                    $345<span>/Night</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__rooms__container">
                        <div class="index__rooms__perks">
                            <img src="./assets/bed_icon.png" alt="Has a bed" />
                            <img src="./assets/wifi_icon.png" alt="Has wifi" />
                            <img src="./assets/automobile_icon.png" alt="Has parking" />
                            <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                            <img src="./assets/gym_icon.png" alt="Gym included" />
                            <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                            <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                        </div>
                        <div class="index__rooms__image">
                            <img src="./assets/penthouse2.png" />
                        </div>
                        <div class="index__rooms__information-holder">
                            <div class="index__rooms__information">
                                <div class="index__rooms__name-box">
                                    <p class="index__rooms__room-name">
                                        <a href="room_detail.html">Minimal Duplex Room</a>
                                    </p>
                                    <p class="index__rooms__room-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </p>
                                </div>
                                
                                <p class="index__rooms__room-price">
                                    $345<span>/Night</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__rooms__container">
                        <div class="index__rooms__perks">
                            <img src="./assets/bed_icon.png" alt="Has a bed" />
                            <img src="./assets/wifi_icon.png" alt="Has wifi" />
                            <img src="./assets/automobile_icon.png" alt="Has parking" />
                            <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                            <img src="./assets/gym_icon.png" alt="Gym included" />
                            <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                            <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                        </div>
                        <div class="index__rooms__image">
                            <img src="./assets/penthouse3.png" />
                        </div>
                        <div class="index__rooms__information-holder">
                            <div class="index__rooms__information">
                                <div class="index__rooms__name-box">
                                    <p class="index__rooms__room-name">
                                        <a href="room_detail.html">Minimal Duplex Room</a>
                                    </p>
                                    <p class="index__rooms__room-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </p>
                                </div>
                                
                                <p class="index__rooms__room-price">
                                    $345<span>/Night</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__rooms__container">
                        <div class="index__rooms__perks">
                            <img src="./assets/bed_icon.png" alt="Has a bed" />
                            <img src="./assets/wifi_icon.png" alt="Has wifi" />
                            <img src="./assets/automobile_icon.png" alt="Has parking" />
                            <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                            <img src="./assets/gym_icon.png" alt="Gym included" />
                            <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                            <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                        </div>
                        <div class="index__rooms__image">
                            <img src="./assets/penthouse4.png" />
                        </div>
                        <div class="index__rooms__information-holder">
                            <div class="index__rooms__information">
                                <div class="index__rooms__name-box">
                                    <p class="index__rooms__room-name">
                                        <a href="room_detail.html">Minimal Duplex Room</a>
                                    </p>
                                    <p class="index__rooms__room-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </p>
                                </div>
                                
                                <p class="index__rooms__room-price">
                                    $345<span>/Night</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__rooms__container">
                        <div class="index__rooms__perks">
                            <img src="./assets/bed_icon.png" alt="Has a bed" />
                            <img src="./assets/wifi_icon.png" alt="Has wifi" />
                            <img src="./assets/automobile_icon.png" alt="Has parking" />
                            <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                            <img src="./assets/gym_icon.png" alt="Gym included" />
                            <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                            <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                        </div>
                        <div class="index__rooms__image">
                            <img src="./assets/hotel1.png" />
                        </div>
                        <div class="index__rooms__information-holder">
                            <div class="index__rooms__information">
                                <div class="index__rooms__name-box">
                                    <p class="index__rooms__room-name">
                                        <a href="room_detail.html">Minimal Duplex Room</a>
                                    </p>
                                    <p class="index__rooms__room-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </p>
                                </div>
                                
                                <p class="index__rooms__room-price">
                                    $345<span>/Night</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__rooms__container">
                        <div class="index__rooms__perks">
                            <img src="./assets/bed_icon.png" alt="Has a bed" />
                            <img src="./assets/wifi_icon.png" alt="Has wifi" />
                            <img src="./assets/automobile_icon.png" alt="Has parking" />
                            <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                            <img src="./assets/gym_icon.png" alt="Gym included" />
                            <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                            <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                        </div>
                        <div class="index__rooms__image">
                            <img src="./assets/hotel2.png" />
                        </div>
                        <div class="index__rooms__information-holder">
                            <div class="index__rooms__information">
                                <div class="index__rooms__name-box">
                                    <p class="index__rooms__room-name">
                                        <a href="room_detail.html">Minimal Duplex Room</a>
                                    </p>
                                    <p class="index__rooms__room-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </p>
                                </div>
                                
                                <p class="index__rooms__room-price">
                                    $345<span>/Night</span>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="index__rooms__swiper-prev">
                    <img src="./assets/left.png" id="rooms-slide-left" alt="slide left" />
                </div>
                <div class="index__rooms__swiper-next">
                    <img src="./assets/right.png" id="rooms-slide-right" alt="slide right" />
                </div>
            </div>
        </section>

        <section class="index__video">
            <div class="index__video__container">
                <p class="index__video__title">Intro video</p>
                <p class="index__video__caption">Meet With Our Luxury Place</p>
                <p class="index__video__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
                <div class="index__video__content">
                    <iframe width="335" height="270" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=jcLt9gfeRDWPrmgr&amp;start=25&amp;end=75" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="index__video__button">
                    <button type="button" class="button">Book now</button>
                </div> 
            </div>  
            <div class="index__video__empty"></div>     
        </section>

        <section class="facilities">
            <div class="facilities__title">Facilities</div>
            <div class="facilities__caption">Core Features</div>
            <div class="facilities__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide facilities__container">
                        <p class="facilities__position">
                            01
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core1.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text">
                            Have High Rating
                        </p>
                        <p class="facilities__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container">
                        <p class="facilities__position">
                            02
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core2.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text">
                            Quiet Hours
                        </p>
                        <p class="facilities__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container">
                        <p class="facilities__position">
                            03
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core3.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text">
                            Best Locations
                        </p>
                        <p class="facilities__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container">
                        <p class="facilities__position">
                            04
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core4.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text">
                            Free Cancellation
                        </p>
                        <p class="facilities__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container">
                        <p class="facilities__position">
                            05
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core5.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text">
                            Payment Options
                        </p>
                        <p class="facilities__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="swiper-slide facilities__container">
                        <p class="facilities__position">
                            06
                        </p>
                        <div class="facilities__image">
                            <img src="./assets/core6.png" alt="High Rating" />
                        </div>
                        <p class="facilities__text">
                            Special Offers
                        </p>
                        <p class="facilities__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>

                <div class="facilities__pagination"></div>
            </div>
        </section>

        <section class="index__menu">
            <div class="index__menu__image">
                <img src="./assets/donut.png" />
            </div>
            <p class="index__menu__title">Menu</p>
            <p class="index__menu__caption">Our Foods Menu</p>
            <div class="index__menu__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide index__menu__container">
                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/bacon.jpg" alt="Bacon" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Eggs & Bacon
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/coffe.jpg" alt="coffee picture" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Tea or Coffee
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/chia.jpeg" alt="Chia oatmeal" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Chia Oatmeal
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__menu__container">
                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/parfait.jpeg" alt="A bunch of fruits" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Fruit Parfait
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/marmalade.jpeg" alt="Marmalade collection" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Marmalade Selection
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing...
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/cheese.jpg" alt="Cheese plate" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Cheese Plate
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__menu__container">
                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/bacon.jpg" alt="Bacon" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Eggs & Bacon
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/coffe.jpg" alt="coffee picture" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Tea or Coffee
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/chia.jpeg" alt="Chia oatmeal" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Chia Oatmeal
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__menu__container">
                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/parfait.jpeg" alt="A bunch of fruits" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Fruit Parfait
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/marmalade.jpeg" alt="Marmalade collection" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Marmalade Selection
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing...
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/cheese.jpg" alt="Cheese plate" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Cheese Plate
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__menu__container">
                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/bacon.jpg" alt="Bacon" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Eggs & Bacon
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/coffe.jpg" alt="coffee picture" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Tea or Coffee
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/chia.jpeg" alt="Chia oatmeal" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Chia Oatmeal
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide index__menu__container">
                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/parfait.jpeg" alt="A bunch of fruits" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Fruit Parfait
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/marmalade.jpeg" alt="Marmalade collection" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Marmalade Selection
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing...
                                </p>
                            </div>
                        </div>

                        <div class="index__menu__item" id="menu-item">
                            <div class="index__menu__picture">
                                <img src="./assets/cheese.jpg" alt="Cheese plate" />
                            </div>
                            <div class="index__menu__information">
                                <p class="index__menu__menu-title">
                                    Cheese Plate
                                </p>
                                <p class="index__menu__menu-description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="index__menu__navigation">
                    <div class="index__menu__left">
                        <img src="./assets/bigleft.png" id="menu-slide-left" alt="Previous menus" />
                    </div>
                    <div class="index__menu__right">
                        <img src="./assets/bigright.png" id="menu-slide-right"  alt="Next menus" />
                    </div>
                </div>
            </div>
        </section>

        <section class="index__menu-big">
            <div class="index__menu__image">
                <img src="./assets/donut.png" />
            </div>
            <p class="index__menu__title">Menu</p>
            <p class="index__menu__caption">Our Foods Menu</p>
            <div class="index__menu__swiper-big">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="index__menu__container">
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/bacon.jpg" alt="Bacon" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Eggs & Bacon
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/coffe.jpg" alt="coffee picture" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Tea or Coffee
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/chia.jpeg" alt="Chia oatmeal" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Chia Oatmeal
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
                        </div>
    
                        <div class="index__menu__container">
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/parfait.jpeg" alt="A bunch of fruits" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Fruit Parfait
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/marmalade.jpeg" alt="Marmalade collection" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Marmalade Selection
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/cheese.jpg" alt="Cheese plate" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Cheese Plate
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="index__menu__container">
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/bacon.jpg" alt="Bacon" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Eggs & Bacon
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/coffe.jpg" alt="coffee picture" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Tea or Coffee
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/chia.jpeg" alt="Chia oatmeal" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Chia Oatmeal
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
                        </div>
    
                        <div class="index__menu__container">
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/parfait.jpeg" alt="A bunch of fruits" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Fruit Parfait
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/marmalade.jpeg" alt="Marmalade collection" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Marmalade Selection
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/cheese.jpg" alt="Cheese plate" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Cheese Plate
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="index__menu__container">
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/bacon.jpg" alt="Bacon" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Eggs & Bacon
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/coffe.jpg" alt="coffee picture" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Tea or Coffee
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/chia.jpeg" alt="Chia oatmeal" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Chia Oatmeal
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
                        </div>
    
                        <div class="index__menu__container">
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/parfait.jpeg" alt="A bunch of fruits" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Fruit Parfait
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/marmalade.jpeg" alt="Marmalade collection" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Marmalade Selection
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
    
                            <div class="index__menu__item" id="menu-item">
                                <div class="index__menu__picture">
                                    <img src="./assets/cheese.jpg" alt="Cheese plate" />
                                </div>
                                <div class="index__menu__information">
                                    <p class="index__menu__menu-title">
                                        Cheese Plate
                                    </p>
                                    <p class="index__menu__menu-description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                                <div class="index__menu__continue">
                                    <img src="./assets/menu-arrow.png" alt="Bacon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="index__menu__navigation">
                    <div class="index__menu__left">
                        <img src="./assets/bigleft.png" id="menu-slide-left" alt="Previous menus" />
                    </div>
                    <div class="index__menu__right">
                        <img src="./assets/bigright.png" id="menu-slide-right"  alt="Next menus" />
                    </div>
                </div>
            </div>
        </section>

        <section class="index__images">
            <div class="index__images__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide index__images__container">
                        <img src="./assets/hotel3.png" alt="hotel image" />
                    </div>
                    
                    <div class="swiper-slide index__images__container">
                        <img src="./assets/hotel4.png" alt="hotel image" />
                    </div>

                    <div class="swiper-slide index__images__container">
                        <img src="./assets/hotel5.png" alt="hotel image" />
                    </div>
                </div>

                <div class="index__images__pagination"></div>
            </div>
        </section>

        <section class="index__stats">
            <div class="index__stats__item">
                <div class="index__stats__image">
                    <img src="./assets/stat1.svg" />
                </div>
                <p class="index__stats__title">
                    84k<span>+</span>
                </p>
                <p class="index__stats__description">
                    Projects are completed
                </p>
            </div>

            <div class="index__stats__item">
                <div class="index__stats__image">
                    <img src="./assets/stat2.png" />
                </div>
                <p class="index__stats__title">
                    10M<span>+</span>
                </p>
                <p class="index__stats__description">
                    Active Backers Around World
                </p>
            </div>

            <div class="index__stats__item">
                <div class="index__stats__image">
                    <img src="./assets/stat3.png" />
                </div>
                <div class="index__stats__title">
                    02k<span>+</span>
                </div>
                <div class="index__stats__description">
                    Categories Saved
                </div>
            </div>

            <div class="index__stats__item">
                <div class="index__stats__image">
                    <img src="./assets/stat4.png" />
                </div>
                <p class="index__stats__title">
                    100M<span>+</span>
                </p>
                <p class="index__stats__description">
                    Idea Raised Funds
                </p>
            </div>
        </section>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>