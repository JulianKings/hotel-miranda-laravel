@php
    if(isset($check_in) && isset($check_out)) {
        $roomLink = ($check_in !== null && $check_out !== null) ? route('hotel.rooms.detail', $room->id) . '?check_in=' . $check_in . '&check_out=' . $check_out : route('hotel.rooms.detail', $room->id);
    } else {
        $roomLink = route('hotel.rooms.detail', $room->id);
    }
@endphp
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
            <a href="{{$roomLink}}">{{$room->type}} Room</a>
        </p>
        <p class="room__description">
            Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
        </p>
        <p class="room__details">
            <span class="room__details__price">${{$room->finalPrice()}}/Night</span>
            @if($room->isAvailable())
                <a href="{{$roomLink}}">Booking Now</a>
            @elseif ($room->isUnavailable())
                <span class="room__details__unavailable">Unavailable</span>
            @else
                <span class="room__details__booked">Booked</span>
            @endif
        </p>
    </div>
</div>
