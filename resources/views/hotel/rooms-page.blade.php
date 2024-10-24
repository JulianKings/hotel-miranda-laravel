@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

<body class="content">
    @include('hotel.layout.header-component', ['title' => $title, 'subtitle' => $subtitle])

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
