@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

<body class="content">    
    @include('hotel.layout.header-component', ['title' => $title, 'subtitle' => $subtitle])

    <main class="offers">
        <div class="offers__item">
            <div class="offers__item__image">
                <img src="./assets/rooms5.png" alt="Room image" />

                <p class="offers__item__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__new-price">$345<span>/Night</span></p>
            </div>
            <div class="offers__item__information">
                <p class="offers__item__information__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__information__new-price">$345<span>/Night</span></p>
                
                <p class="offers__item__title">Double bed</p>
                <p class="offers__item__caption">Luxury Double Bed</p>
                
                <div class="offers__item__separator"></div>

                <div class="offers__item__details">
                    <p class="offers__item__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                    <ul class="offers__item__ul">
                        <li><img src="./assets/amenities1.png" />Air conditioner</li>
                        <li><img src="./assets/amenities2.png" />Breakfast</li>
                        <li><img src="./assets/amenities3.png" />Cleaning</li>
                        <li><img src="./assets/amenities4.png" />Grocery</li>
                        <li><img src="./assets/amenities5.png" />Shop near</li>
    
                        <li><img src="./assets/amenities8.png" />High speed WiFi</li>
                        <li><img src="./assets/amenities9.png" />Kitchen</li>
                        <li><img src="./assets/amenities10.png" />Shower</li>
                        <li><img src="./assets/amenities11.png" />Single bed</li>
                        <li><img src="./assets/amenities12.png" />Towels</li>
                    </ul>
                </div>

                <div class="offers__item__button">
                    <button type="button" onclick="location.href='room_detail.html';" class="button">Book now</button>
                </div>
            </div>
        </div>

        <div class="offers__item">
            <div class="offers__item__image">
                <img src="./assets/penthouse4.png" alt="Room image" />

                <p class="offers__item__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__new-price">$345<span>/Night</span></p>
            </div>
            <div class="offers__item__information">
                <p class="offers__item__information__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__information__new-price">$345<span>/Night</span></p>

                <p class="offers__item__title">Double bed</p>
                <p class="offers__item__caption">Luxury Double Bed</p>
                
                <div class="offers__item__separator"></div>

                <div class="offers__item__details">
                    <p class="offers__item__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                    <ul class="offers__item__ul">
                        <li><img src="./assets/amenities1.png" />Air conditioner</li>
                        <li><img src="./assets/amenities2.png" />Breakfast</li>
                        <li><img src="./assets/amenities3.png" />Cleaning</li>
                        <li><img src="./assets/amenities4.png" />Grocery</li>
                        <li><img src="./assets/amenities5.png" />Shop near</li>
    
                        <li><img src="./assets/amenities8.png" />High speed WiFi</li>
                        <li><img src="./assets/amenities9.png" />Kitchen</li>
                        <li><img src="./assets/amenities10.png" />Shower</li>
                        <li><img src="./assets/amenities11.png" />Single bed</li>
                        <li><img src="./assets/amenities12.png" />Towels</li>
                    </ul>
                </div>

                <div class="offers__item__button">
                    <button type="button" onclick="location.href='room_detail.html';" class="button">Book now</button>
                </div>
            </div>
        </div>

        <div class="offers__item">
            <div class="offers__item__image">
                <img src="./assets/penthouse2.png" alt="Room image" />

                <p class="offers__item__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__new-price">$345<span>/Night</span></p>
            </div>
            <div class="offers__item__information">
                <p class="offers__item__information__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__information__new-price">$345<span>/Night</span></p>

                <p class="offers__item__title">Double bed</p>
                <p class="offers__item__caption">Luxury Double Bed</p>
                
                <div class="offers__item__separator"></div>

                <div class="offers__item__details">
                    <p class="offers__item__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                    <ul class="offers__item__ul">
                        <li><img src="./assets/amenities1.png" />Air conditioner</li>
                        <li><img src="./assets/amenities2.png" />Breakfast</li>
                        <li><img src="./assets/amenities3.png" />Cleaning</li>
                        <li><img src="./assets/amenities4.png" />Grocery</li>
                        <li><img src="./assets/amenities5.png" />Shop near</li>
    
                        <li><img src="./assets/amenities8.png" />High speed WiFi</li>
                        <li><img src="./assets/amenities9.png" />Kitchen</li>
                        <li><img src="./assets/amenities10.png" />Shower</li>
                        <li><img src="./assets/amenities11.png" />Single bed</li>
                        <li><img src="./assets/amenities12.png" />Towels</li>
                    </ul>
                </div>

                <div class="offers__item__button">
                    <button type="button" onclick="location.href='room_detail.html';" class="button">Book now</button>
                </div>
            </div>
        </div>

        <div class="offers__item">
            <div class="offers__item__image">
                <img src="./assets/penthouse1.png" alt="Room image" />

                <p class="offers__item__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__new-price">$345<span>/Night</span></p>
            </div>
            <div class="offers__item__information">
                <p class="offers__item__information__old-price"><span class="strike">$500</span><span>/Night</span></p>
                <p class="offers__item__information__new-price">$345<span>/Night</span></p>

                <p class="offers__item__title">Double bed</p>
                <p class="offers__item__caption">Luxury Double Bed</p>
                
                <div class="offers__item__separator"></div>

                <div class="offers__item__details">
                    <p class="offers__item__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                    <ul class="offers__item__ul">
                        <li><img src="./assets/amenities1.png" />Air conditioner</li>
                        <li><img src="./assets/amenities2.png" />Breakfast</li>
                        <li><img src="./assets/amenities3.png" />Cleaning</li>
                        <li><img src="./assets/amenities4.png" />Grocery</li>
                        <li><img src="./assets/amenities5.png" />Shop near</li>
    
                        <li><img src="./assets/amenities8.png" />High speed WiFi</li>
                        <li><img src="./assets/amenities9.png" />Kitchen</li>
                        <li><img src="./assets/amenities10.png" />Shower</li>
                        <li><img src="./assets/amenities11.png" />Single bed</li>
                        <li><img src="./assets/amenities12.png" />Towels</li>
                    </ul>
                </div>

                <div class="offers__item__button">
                    <button type="button" onclick="location.href='room_detail.html';" class="button">Book now</button>
                </div>
            </div>
        </div>

        <div class="offers__popular">
            <p class="offers__popular__title">Popular List</p>
            <p class="offers__popular__caption">Popular Rooms</p>
            <div class="offers__popular__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide room">
                        <div class="room__image">
                            <img src="./assets/rooms3.png" alt="Room Image" />
                        </div>
                        <div class="room__content">
                            <div class="room__perks">
                                <img src="./assets/bed_icon.png" alt="Has a bed" />
                                <img src="./assets/wifi_icon.png" alt="Has wifi" />
                                <img src="./assets/automobile_icon.png" alt="Has parking" />
                                <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                                <img src="./assets/gym_icon.png" alt="Gym included" />
                                <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                                <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                            </div>
                            <p class="room__title"><a href="room_detail.html">Minimal Duplex Room</a></p>
                            <p class="room__description">
                                Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                            </p>
                            <p class="room__details">
                                <span>$345/Night</span>
                                Booking Now
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide room">
                        <div class="room__image">
                            <img src="./assets/rooms2.png" alt="Room Image" />
                        </div>
                        <div class="room__content">
                            <div class="room__perks">
                                <img src="./assets/bed_icon.png" alt="Has a bed" />
                                <img src="./assets/wifi_icon.png" alt="Has wifi" />
                                <img src="./assets/automobile_icon.png" alt="Has parking" />
                                <img src="./assets/snowflake_icon.png" alt="Has air conditioner" />
                                <img src="./assets/gym_icon.png" alt="Gym included" />
                                <img src="./assets/no_smoke_icon.png" alt="Smoking forbidden" />
                                <img src="./assets/holiday_icon.png" alt="Drinks allowed" />
                            </div>
                            <p class="room__title"><a href="room_detail.html">Minimal Duplex Room</a></p>
                            <p class="room__description">
                                Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                            </p>
                            <p class="room__details">
                                <span>$345/Night</span>
                                Booking Now
                            </p>
                        </div>
                    </div>
                </div>

                <div class="offers__popular__swiper-prev">
                    <img src="./assets/left.png" id="rooms-slide-left" alt="slide left" />
                </div>
                <div class="offers__popular__swiper-next">
                    <img src="./assets/right.png" id="rooms-slide-right" alt="slide right" />
                </div>
            </div>
        </div>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>