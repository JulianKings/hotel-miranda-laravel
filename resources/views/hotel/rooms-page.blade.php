@include('hotel.layout.head-component', [
    'styles' =>
        ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/rooms.css'],
    'scripts' =>
        ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-rooms.js', './scripts/updateBookNow.js']
])

<body class="content">
    @include('hotel.layout.header-component', ['title' => 'Ultimate Room', 'subtitle' => 'Rooms'])

    <main class="rooms">
        <section class="rooms__swiper">
            <div class="swiper-wrapper">
                @foreach ($roomList as $roomPage)
                    <section class="swiper-slide rooms__list">
                        @foreach ($roomPage as $room)
                            @include('hotel.components.room-component', ['room' => $room, 'roomClass' => 'room', 'check_in' => $checkin, 'check_out' => $checkout])
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
