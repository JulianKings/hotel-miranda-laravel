@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

<body class="content">
    @include('hotel.layout.header-component', ['title' => $title, 'subtitle' => $subtitle])

    <main class="room-detail">
        <div class="room-detail__header">
            <div class="room-detail__header-left">
                <div class="room-detail__information">
                    <div class="room-detail__information--title">
                        <p class="room-detail__title">{{$roomData->type}}</p>
                        <p class="room-detail__caption">Luxury {{$roomData->type}}</p>
                    </div>
                    <div class="room-detail__information--price">
                        <p class="room-detail__price">${{$roomData->finalPrice()}}<span>/Night</span></p>
                    </div>
                </div>

                <div class="room-detail__image">
                    <img src="{{$roomData->images}}" alt="Room Image" />
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
                    {{$roomData->description}}
                </p>

                @if($roomData->amenities()->count() > 0)
                    <div class="room-detail__amenities">
                        <p class="room-detail__amenities__title">Amenities</p>
                        <div class="room-detail__amenities__hr"></div>
                        <ul class="room-detail__amenities__ul">
                            @foreach($roomData->amenities()->get() as $amenity)
                                <li><img src="{{$amenity->image}}" alt="Has {{$amenity->name}}" />{{$amenity->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="room-detail__founder">
                    <div class="room-detail__founder__image">
                        <img src="{{URL::to('/');}}/assets/esther.png" alt="Founder picture" />
                        <div class="room-detail__founder__validated">
                            <img src="{{URL::to('/');}}/assets/checkmark.png" alt="Checkmark" />
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
                    @foreach ($relatedRooms as $room)
                        @include('hotel.components.room-component', ['room' => $room, 'roomClass' => 'swiper-slide room'])
                    @endforeach
                </div>

                <div class="room-detail__related__swiper-prev">
                    <img src="{{URL::to('/');}}/assets/left.png" id="rooms-slide-left" alt="slide left" />
                </div>
                <div class="room-detail__related__swiper-next">
                    <img src="{{URL::to('/');}}/assets/right.png" id="rooms-slide-right" alt="slide right" />
                </div>
            </div>
        </div>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>
