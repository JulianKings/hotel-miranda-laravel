<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./assets/logo_icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./style/pages/room_details.css" />
    <script type="text/javascript" src="./scripts/menu.js" defer></script> 
    <script type="text/javascript" src="./scripts/socials.js" defer></script> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script> 
    <script type="text/javascript" src="./scripts/datePickerRoom.js" defer></script> 
    <script type="text/javascript" src="./scripts/swiper-roomDetails.js" defer></script> 
    <script type="text/javascript" src="./scripts/updateBookNow.js" defer></script> 
</head>
<body class="content">
    @include('hotel.layout.header-component')

    <main class="room-detail">
        <div class="room-detail__header">
            <div class="room-detail__header-left">
                <div class="room-detail__information">
                    <div class="room-detail__information--title">
                        <p class="room-detail__title">Double bed</p>
                        <p class="room-detail__caption">Luxury Double Bed</p>
                    </div>
                    <div class="room-detail__information--price">
                        <p class="room-detail__price">$345<span>/Night</span></p>
                    </div>
                </div>

                <div class="room-detail__image">
                    <img src="./assets/rooms2.png" alt="Room Image" />
                </div>
            </div>
    
            <div class="room-detail__calendar">
                <p class="room-detail__calendar__title">Check Availability</p>
                <div class="room-detail__calendar__form">
                    <label for="checkin-date" class="room-detail__calendar__label">Check in</label>
                    <div class="room-detail__calendar__construct">
                        <span class="room-detail__calendar__date">
                            <span class="room-detail__calendar__datepicker"></span>
                            <input type="date" id="checkin-date" class="room-detail__calendar__dateinput" />
                        </span>
                        <input type="text" id="checkin-date-text" class="room-detail__calendar__input" />
                    </div>
                </div>
    
                <div class="room-detail__calendar__form">
                    <label for="checkout-date" class="room-detail__calendar__label">Check out</label>
                    <div class="room-detail__calendar__construct">
                        <span class="room-detail__calendar__date">
                            <span class="room-detail__calendar__datepicker"></span>
                            <input type="date" id="checkout-date" class="room-detail__calendar__dateinput" />
                        </span>
                        <input type="text" id="checkout-date-text" class="room-detail__calendar__input" />
                    </div>
                </div>
    
                <div class="room-detail__calendar__button">
                    <button type="button" class="button room-detail__calendar__button-style">Check Availability</button>
                </div>
            </div>
        </div>
        
        <div class="room-detail__body">
            <div class="room-detail__left-body">
                <p class="room-detail__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>

                <div class="room-detail__amenities">
                    <p class="room-detail__amenities__title">Amenities</p>
                    <div class="room-detail__amenities__hr"></div>
                    <ul class="room-detail__amenities__ul">
                        <li><img src="./assets/amenities1.png" />Air conditioner</li>
                        <li><img src="./assets/amenities2.png" />Breakfast</li>
                        <li><img src="./assets/amenities3.png" />Cleaning</li>
                        <li><img src="./assets/amenities4.png" />Grocery</li>
                        <li><img src="./assets/amenities5.png" />Shop near</li>
                        <li><img src="./assets/amenities6.png" />24/7 Online Support</li>
                        <li><img src="./assets/amenities7.png" />Smart Security</li>

                        <li><img src="./assets/amenities8.png" />High speed WiFi</li>
                        <li><img src="./assets/amenities9.png" />Kitchen</li>
                        <li><img src="./assets/amenities10.png" />Shower</li>
                        <li><img src="./assets/amenities11.png" />Single bed</li>
                        <li><img src="./assets/amenities12.png" />Towels</li>
                        <li><img src="./assets/amenities13.png" />Strong Locker</li>
                        <li><img src="./assets/amenities14.png" />Expert Team</li>
                    </ul>
                </div>

                <div class="room-detail__founder">
                    <div class="room-detail__founder__image">
                        <img src="./assets/esther.png" alt="Founder picture" />
                        <div class="room-detail__founder__validated">
                            <img src="./assets/checkmark.png" alt="Checkmark" />
                        </div>
                    </div>

                    <p class="room-detail__founder__name">Rosalina D. Esther</p>
                    <p class="room-detail__founder__rank">Founder, Qux Co.</p>
                    <p class="room-detail__founder__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>

                <div class="room-detail__cancellation">
                    <div class="room-detail__cancellation__title">Cancellation</div>
                    <div class="room-detail__cancellation__hr"></div>
                    <div class="room-detail__cancellation__description">
                        Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.
                    </div>
                </div>
            </div>
            <div class="room-detail__right-body"></div>
        </div>

        <div class="room-detail__related">
            <p class="room-detail__related__title">Related Rooms</p>
            <div class="room-detail__related__hr"></div>
            <div class="room-detail__related__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide room">
                        <div class="room__image">
                            <img src="./assets/rooms1.png" alt="Room Image" />
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

                <div class="room-detail__related__swiper-prev">
                    <img src="./assets/left.png" id="rooms-slide-left" alt="slide left" />
                </div>
                <div class="room-detail__related__swiper-next">
                    <img src="./assets/right.png" id="rooms-slide-right" alt="slide right" />
                </div>
            </div>
        </div>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>