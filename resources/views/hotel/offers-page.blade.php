@include('hotel.layout.head-component', [
    'styles' =>
        ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/offers.css'],
    'scripts' =>
        ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-offers.js', './scripts/updateBookNow.js']
    ])

<body class="content">
    @include('hotel.layout.header-component', ['title' => 'Our Offers', 'subtitle' => 'Offers'])

    <main class="offers">
        @foreach ($offerList as $offer)
            <div class="offers__item">
                <div class="offers__item__image">
                    <img src="{{$offer->images}}" alt="Room image" />

                    <p class="offers__item__old-price"><span class="strike">${{$offer->originalPrice()}}</span><span>/Night</span></p>
                    <p class="offers__item__new-price">${{$offer->finalPrice()}}<span>/Night</span></p>
                </div>
                <div class="offers__item__information">
                    <p class="offers__item__information__old-price"><span class="strike">${{$offer->originalPrice()}}</span><span>/Night</span></p>
                    <p class="offers__item__information__new-price">${{$offer->finalPrice()}}<span>/Night</span></p>

                    <p class="offers__item__title">{{$offer->type}}</p>
                    <p class="offers__item__caption">Luxury {{$offer->type}}</p>

                    <div class="offers__item__separator"></div>

                    <div class="offers__item__details">
                        <p class="offers__item__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>

                        @if($offer->amenities()->count() > 0)
                            <ul class="offers__item__ul">
                                @foreach($offer->amenities()->get() as $amenity)
                                    <li><img src="{{$amenity->image}}" />{{$amenity->name}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="offers__item__button">
                        <button type="button" onclick="location.href='rooms/{{$offer->id}}';" class="button">Book now</button>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="offers__popular">
            <p class="offers__popular__title">Popular List</p>
            <p class="offers__popular__caption">Popular Rooms</p>
            <div class="offers__popular__swiper">
                <div class="swiper-wrapper">
                    @foreach ($popularRooms as $room)
                        @include('hotel.components.room-component', ['room' => $room, 'roomClass' => 'swiper-slide room'])
                    @endforeach
                </div>

                <div class="offers__popular__swiper-prev">
                    <img src="{{URL::to('/');}}/assets/left.png" id="rooms-slide-left" alt="slide left" />
                </div>
                <div class="offers__popular__swiper-next">
                    <img src="{{URL::to('/');}}/assets/right.png" id="rooms-slide-right" alt="slide right" />
                </div>
            </div>
        </div>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>
