@include('hotel.layout.head-component', [
'styles' =>
    ['./style/style.css', './style/pages/contact.css'],
'scripts' =>
    ['./scripts/menu.js', './scripts/socials.js']
])

@php
    if($errors->any()) {
        toastify()->error('An error has happened: ' . $errors->first(), ['position' => 'center', 'duration' => 6000]);
    }
@endphp

<body class="content">
    @include('hotel.layout.header-component', ['title' => 'New Details', 'subtitle' => 'Blog'])

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
            <img src="{{$photoUrl}}" alt="Hotel Image" />
        </section>

        <form method="post" action="{{ route('hotel.contact.store') }}" class="contact__form">
            @csrf
            @method('post')

            <div class="contact__form__item contact__form__gridname">
                <input type="text" class="contact__form__input contact__form__name" name="name" placeholder="Your full name" value="{{ old('name') }}" /><span></span>
                @error ('name') <p class="contact__form__error">{{$message}}</p> @enderror
            </div>
            <div class="contact__form__item contact__form__gridphone">
                <input type="tel" class="contact__form__input contact__form__phone" name="phone" placeholder="Your phone number" value="{{ old('phone') }}" /><span></span>
                @error ('phone') <p class="contact__form__error">{{$message}}</p> @enderror
            </div>
            <div class="contact__form__item contact__form__gridaddress">
                <input type="email" class="contact__form__input contact__form__email" name="email" placeholder="Your email address" value="{{ old('email') }}" /><span></span>
                @error ('email') <p class="contact__form__error">{{$message}}</p> @enderror
            </div>
            <div class="contact__form__item contact__form__gridsubject">
                <input type="text" class="contact__form__input contact__form__subject" name="subject" placeholder="Enter subject" value="{{ old('subject') }}" /><span></span>
                @error ('subject') <p class="contact__form__error">{{$message}}</p> @enderror
            </div>
            <div class="contact__form__item contact__form__gridtextarea">
                <textarea rows="4" class="contact__form__textarea" name="message" placeholder="Enter message">{{ old('message') }}</textarea><span></span>
                @error ('message') <p class="contact__form__error">{{$message}}</p> @enderror
            </div>
            <div class="contact__form__button">
                <button type="submit" class="button">Send</button>
            </div>
        </form>
    </main>

    @include('hotel.layout.footer-component')
</body>
</html>
