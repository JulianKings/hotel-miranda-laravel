@include('hotel.layout.head-component', ['styles' => $styles, 'scripts' => $scripts])

<body class="content">
    @include('hotel.layout.header-component', ['title' => $title, 'subtitle' => $subtitle])

    <main class="contact">
        <section class="contact__item-container">
            <div class="contact__item">
                <div class="contact__item__image">
                    <img src="{{URL::to('/');}}/assets/mail-us.png" alt="Address">
                </div>
                <div class="contact__item__position">01</div>
                <div class="contact__item__information">
                    <div class="contact__item__title">Hotel Address</div>
                    <div class="contact__item__description"><p>C. de la Princesa, 31, planta, 2ª</p>
                        <p>28008 Madrid</p></div>
                </div>
            </div>
            <div class="contact__item">
                <div class="contact__item__image">
                    <img src="{{URL::to('/');}}/assets/mail-us.png" alt="Address">
                </div>
                <div class="contact__item__position">02</div>
                <div class="contact__item__information">
                    <div class="contact__item__title">Phone Number</div>
                    <div class="contact__item__description">
                        <p>+34 123 123 123</p>
                        <p>+34 684 135 340</p>
                    </div>
                </div>
            </div>
            <div class="contact__item">
                <div class="contact__item__image">
                    <img src="{{URL::to('/');}}/assets/mail-us.png" alt="Address">
                </div>
                <div class="contact__item__position">03</div>
                <div class="contact__item__information">
                    <div class="contact__item__title">Email</div>
                    <div class="contact__item__description">
                        julianreyeslahoz@gmail.com
                    </div>
                </div>
            </div>
        </section>

        <section class="contact__image">
            <img src="{{URL::to('/');}}/assets/hotel.png" alt="Hotel Image" />
        </section>

        <section class="contact__form">
            <div class="contact__form__item contact__form__gridname">
                <input type="text" class="contact__form__input contact__form__name" placeholder="Your full name" /><span></span>
            </div>
            <div class="contact__form__item contact__form__gridphone">
                <input type="tel" class="contact__form__input contact__form__phone" placeholder="Your phone number" /><span></span>
            </div>
            <div class="contact__form__item contact__form__gridaddress">
                <input type="email" class="contact__form__input contact__form__email" placeholder="Enter email address" /><span></span>
            </div>
            <div class="contact__form__item contact__form__gridsubject">
                <input type="text" class="contact__form__input contact__form__subject" placeholder="Enter subject" /><span></span>
            </div>
            <div class="contact__form__item contact__form__gridtextarea">
                <textarea rows="4" class="contact__form__textarea">Enter message</textarea><span></span>
            </div>
            <div class="contact__form__button">
                <button type="button" class="button">Send</button>
            </div>
        </section>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>
