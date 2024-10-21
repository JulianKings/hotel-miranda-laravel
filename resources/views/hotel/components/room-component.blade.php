<div class="{{$roomClass}}">
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
            <a href="{{route('hotel.rooms.detail', $room->id)}}">{{$room->type}} Room</a>
        </p>
        <p class="room__description">
            Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
        </p>
        <p class="room__details">
            <span class="room__details__price">${{$room->finalPrice()}}/Night</span>
            @if($room->isAvailable())
                <a href="{{route('hotel.rooms.detail', $room->id)}}">Booking Now</a>
            @elseif ($room->isBooked())
                <span class="room__details__booked">Booked</span>
            @else
                <span class="room__details__unavailable">Unavailable</span>
            @endif
        </p>
    </div>
</div>
