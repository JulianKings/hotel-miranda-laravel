@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

@php
    if($errors->any()) {
        toastify()->error('An error has happened: ' . $errors->first(), ['position' => 'center', 'duration' => 6000]);
    }
@endphp

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

            @if($roomData->isUnavailable())
                <div class="room-detail__calendar">
                    <p class="room-detail__calendar__title">Oops!</p>
                    <div class="room-detail__calendar__form">
                        <p>Sadly, this room is unavailable</p>
                    </div>
                </div>
            @elseif(isset($checkin) && isset($checkout))
                @if(Auth::check())
                    @if($validCheck)
                        <form class="room-detail__calendar" method="post" action="{{ route('hotel.rooms.details.send', $roomData->id) }}">
                            @csrf
                            @method('post')

                            <p class="room-detail__calendar__title">Payment information</p>
                            @error ('general') <p class="room-detail__calendar__error">{{$message}}</p> @enderror
                            <div class="room-detail__calendar__form">
                                <label for="card-number" class="room-detail__calendar__label">Card Number</label>
                                <div class="room-detail__calendar__construct">
                                    <input type="text" name="card_number" id="card-number" class="room-detail__calendar__special-input" placeholder="4343 4343 4343 4343" value="{{old('card_number')}}" />
                                </div>
                                @error ('card_number') <p class="room-detail__calendar__error">{{$message}}</p> @enderror
                            </div>

                            <div class="room-detail__calendar__form">
                                <label for="card-month" class="room-detail__calendar__label">Card Expiration</label>
                                <div class="room-detail__calendar__construct">
                                    <select id="card-month" name="card_month" class="room-detail__calendar__select">
                                        <option value="1" @if(old('card_month') == '1') selected @endif>January</option>
                                        <option value="2" @if(old('card_month') == '2') selected @endif>February</option>
                                        <option value="3" @if(old('card_month') == '3') selected @endif>March</option>
                                        <option value="4" @if(old('card_month') == '4') selected @endif>April</option>
                                        <option value="5" @if(old('card_month') == '5') selected @endif>May</option>
                                        <option value="6" @if(old('card_month') == '6') selected @endif>June</option>
                                        <option value="7" @if(old('card_month') == '7') selected @endif>July</option>
                                        <option value="8" @if(old('card_month') == '8') selected @endif>August</option>
                                        <option value="9" @if(old('card_month') == '9') selected @endif>September</option>
                                        <option value="10" @if(old('card_month') == '10') selected @endif>October</option>
                                        <option value="11" @if(old('card_month') == '11') selected @endif>November</option>
                                        <option value="12" @if(old('card_month') == '12') selected @endif>December</option>
                                    </select>
                                    @error ('card_month') <p class="room-detail__calendar__error">{{$message}}</p> @enderror


                                    <select id="card-year" name="card_year" class="room-detail__calendar__select">
                                        @for ($i = date('Y'); $i <= date('Y') + 30; $i++)
                                            <option value="{{$i}}" @if(old('card_year') == $i) selected @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                    @error ('card_year') <p class="room-detail__calendar__error">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="room-detail__calendar__form">
                                <label for="card-key" class="room-detail__calendar__label">Card Secret Number</label>
                                <div class="room-detail__calendar__construct">
                                    <input type="number" max="9999" name="card_key" id="card-key" class="room-detail__calendar__special-input" placeholder="369" value="{{old('card_key')}}" />
                                </div>
                                @error ('card_key') <p class="room-detail__calendar__error">{{$message}}</p> @enderror
                            </div>

                            <div class="room-detail__calendar__form">
                                <label for="card-owner" class="room-detail__calendar__label">Card Owner</label>
                                <div class="room-detail__calendar__construct">
                                    <input type="text" name="card_owner" id="card-owner" class="room-detail__calendar__special-input" placeholder="Tom Hanks" value="{{old('card_owner')}}" />
                                </div>
                                @error ('card_owner') <p class="room-detail__calendar__error">{{$message}}</p> @enderror
                            </div>

                            <input type="hidden" name="check_in" value="{{$checkin}}" />
                            @error ('check_in') <p class="room-detail__calendar__error">{{$message}}</p> @enderror
                            <input type="hidden" name="check_out" value="{{$checkout}}" />
                            @error ('check_out') <p class="room-detail__calendar__error">{{$message}}</p> @enderror

                            <div class="room-detail__calendar__button">
                                <button type="submit" class="button room-detail__calendar__button-style">Proceed</button>
                            </div>
                        </form>
                    @else
                        <div class="room-detail__calendar">
                            <p class="room-detail__calendar__title">Sorry!</p>
                            <div class="room-detail__calendar__form"></div>
                                <p>It seems this room is unavailable at the dates of your request.</p>
                            </div>
                        </div>
                    @endif
                @else
                <div class="room-detail__calendar">
                    <p class="room-detail__calendar__title">Oops!</p>
                    <div class="room-detail__calendar__form">
                        <p>Please, <strong><a href="{{ route('login') }}">login</a></strong> and come back to this page if you desire to make a reservation.</p>
                    </div>
                </div>
                @endif
            @else
                <form class="room-detail__calendar" method="get" action="{{ route('hotel.rooms.detail', $roomData->id) }}">
                    @csrf
                    @method('get')

                    <p class="room-detail__calendar__title">Check Availability</p>
                    <div class="room-detail__calendar__form">
                        <label for="checkin-date" class="room-detail__calendar__label">Check in</label>
                        <div class="room-detail__calendar__construct">
                            <span class="room-detail__calendar__date">
                                <span class="room-detail__calendar__datepicker"></span>
                                <input type="date" name="check_in" id="checkin-date" class="room-detail__calendar__dateinput" />
                            </span>
                            <input type="text" id="checkin-date-text" class="room-detail__calendar__input" />
                        </div>
                    </div>

                    <div class="room-detail__calendar__form">
                        <label for="checkout-date" class="room-detail__calendar__label">Check out</label>
                        <div class="room-detail__calendar__construct">
                            <span class="room-detail__calendar__date">
                                <span class="room-detail__calendar__datepicker"></span>
                                <input type="date" name="check_out" id="checkout-date" class="room-detail__calendar__dateinput" />
                            </span>
                            <input type="text" id="checkout-date-text" class="room-detail__calendar__input" />
                        </div>
                    </div>

                    <div class="room-detail__calendar__button">
                        <button type="submit" class="button room-detail__calendar__button-style">Check Availability</button>
                    </div>
                </form>
            @endif
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
