@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

<body class="content">
    @include('hotel.layout.header-component', ['title' => $title, 'subtitle' => $subtitle])

    <main class="rooms">
        <section class="rooms__swiper">
            <div class="swiper-wrapper">
                @foreach ($roomList as $roomPage)
                    <section class="swiper-slide rooms__list">
                        @foreach ($roomPage as $room)
                            <div class="room">
                                <div class="room__image">
                                    <img src="{{$room->images}}" alt="Room Image" />
                                </div>
                                <div class="room__content">
                                    @if($room->amenities()->count() > 0)
                                        <div class="room__perks">
                                            @foreach($room->amenities()->take(7)->get() as $amenity)
                                            <img src="{{$amenity->image}}" alt="Has {{$amenity->name}}" />
                                            @endforeach
                                        </div>
                                    @endif
                                    <p class="room__title">
                                        <a href="rooms/{{$room->id}}">{{$room->type}} Room</a>
                                    </p>
                                    <p class="room__description">
                                        Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                                    </p>
                                    <p class="room__details">
                                        <span>${{$room->finalPrice()}}/Night</span>
                                        Booking Now
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </section>
                @endforeach
            </div>
        </section>

        <section class="rooms__pagination">
        </section>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>
