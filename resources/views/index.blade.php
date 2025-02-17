@extends('layouts.app')

@section('content')
    <section class="promo">
        <div class="container">
            <div class="promo__logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 369.44 153"><path d="M119.86 11.43C127 9 127.59 0 120.51 0c-1.95 0-4.28 1.37-5.88 4.17L105 20.73a13.83 13.83 0 0 1-1.37 2c-2.46-3.39-1.74-8.45 1.71-10.67L104 10.27c-7.46 4.75-5.27 18.48 7.18 18.48 10.6-.01 15.52-12.75 8.68-17.32zM111.07 26a10.23 10.23 0 0 1-5.13-1.23 18.43 18.43 0 0 0 1.78-2.53l6-10.37 1 .1C123 13.72 119.69 26 111.07 26zm3.83-16.21l2.87-4.93c2.6-4.48 5.92-1.85 4.14 1.5-1.37 2.57-3.39 3.36-7.01 3.43z" fill="#fff"/><path d="M259.21 19l-.24.27a16.74 16.74 0 0 1-6.5 5c.58-.92 1-1.92 1.47-2.67l3.93-6.74c3.32-5.64-2.05-7.53-5.68-4.28l.72-1.23h-3.56L243.79 19l-.24.27a7.66 7.66 0 0 1-5.37 2.63l3.35-5.78c2.16-3.73.17-7.25-3.18-7.25-2.74 0-4.86 1.09-6.91 4.65l-1.75 3-1.46 2.48-.19.22c-2.57 3-5.06 5.34-6.64 5.34-.79 0-1.23-.55-.41-2l5.13-9c1.54-2.7.07-4.65-1.92-4.65-1.54 0-3.18.85-5 2.7l5.68-9.89h-3.56L211.45 19l-.2.23A22.14 22.14 0 0 1 207 23.1c1.13-3.39.89-8.59 3.08-13.14l-2.67-1.44c-1.47 2-4.69 6.67-7.9 10.43l-.24.27c-2.57 3-5.06 5.34-6.64 5.34-.79 0-1.23-.55-.41-2l3.56-6.23c1.23-2.16.65-3.42-.51-4.82l-2-2.39a1.39 1.39 0 0 1 .09-2l.11-.09-1.85-2c-2 1.81-2.19 3.83-.92 5.47l.3.41c-1.57 2.22-3.69 5.23-6 8l-.24.27c-2.57 3-5.85 5.34-8.35 5.34-2.19 0-3.49-1.37-1.85-4.24l.34-.62c2.29 1 6.6.51 9.27-4.1l.51-.89c1.92-3.28.07-5.75-2.84-5.75a7.53 7.53 0 0 0-6.67 4.11L171.7 19l-.21.24a7.59 7.59 0 0 1-5.37 2.63l3.35-5.78a8.66 8.66 0 0 0 1.34-4.09A3 3 0 0 0 168 8.82h-.41a4.14 4.14 0 0 0-2.33.79l4.52-7.83h-3.63L156.18 19l-.19.21c-2.57 3-5.06 5.34-6.64 5.34-.79 0-1.23-.55-.41-2l3.56-6.23c1.23-2.16.65-3.42-.51-4.82l-2-2.39a1.39 1.39 0 0 1 .1-2l.11-.09-1.85-2c-2 1.81-2.19 3.83-.92 5.47l.31.41c-1.57 2.22-3.7 5.23-6 8l-.24.27c-2.57 3-5.06 5.34-6.64 5.34-.79 0-1.23-.55-.41-2l5.75-10.06h-2A3.7 3.7 0 0 0 134.44 9c-1.92 0-4.58 1.51-6.09 4.11l-5 8.62c-1.51 2.64-.44 5.06 2.43 5.06 1.44 0 3.22-.92 4.93-2.33.17 1.37 1.27 2.33 3.08 2.33 2.94 0 6.33-3.15 9.27-6.57 1.71-2 3-3.76 5.88-7.63l.48.58a1.75 1.75 0 0 1 .21 2l-3.76 6.53c-1.5 2.64-.44 5.06 2.43 5.06 2.06 0 4.34-1.55 6.54-3.65 0 2.43 1.81 3.8 4.11 3.8a7.87 7.87 0 0 0 6-3.3 6 6 0 0 0 .79 0 10.44 10.44 0 0 0 4.72-1.4c-.19 2.57 1.68 4.52 4.82 4.52 4 0 8-3.15 11-6.57 1.71-2 3-3.76 5.88-7.63l.48.58a1.75 1.75 0 0 1 .21 2l-3.76 6.53c-1.51 2.64-.44 5.06 2.43 5.06s6.33-3.15 9.27-6.57c2-2.33 3.8-4.82 5.06-6.5-1.4 3.7-.65 10.33-4 10.33a2 2 0 0 1-1.68-1.3L198 23.82a3.88 3.88 0 0 0 3.9 2.87 9.63 9.63 0 0 0 1-.07h.1a12.54 12.54 0 0 0 5.47-2.36l-1.22 2.12h3.59l5.4-9.41c5.48-6.88 7.9-6 6.36-3.35l-4.62 8c-1.51 2.63-.44 5.06 2.43 5.06 2.07 0 4.35-1.56 6.55-3.67 0 4.54 6.29 5.42 10.15.55h.79a9.8 9.8 0 0 0 3.81-.94l-6.48 11.24h3.59l10.64-18.51c4-5.41 6.47-3.42 5.54-1.81l-5.37 9.31a1.37 1.37 0 0 1-2.57 0l-2 1a3.88 3.88 0 0 0 3.9 2.87h.21c5.17-.1 8.55-3.18 11.46-6.57a2.25 2.25 0 0 0-1.42-1.15zm-81-5c2.05-3.52 5.68-2.94 3.56.75l-.51.89c-1.71 2.91-4 2.84-5.34 2.36zm-45.61 5.61c-2.16 3.39-4.28 5-5.75 5-.79 0-1.23-.55-.41-2l5-8.66c1.92-3.32 5.71-2.46 4 .75zm26.79 4.86a1.33 1.33 0 0 1-1.44-1.37 4 4 0 0 1 .62-1.85l1.25-2.25a5.23 5.23 0 0 0 2.26 3.69 3.34 3.34 0 0 1-2.7 1.74zM163.1 21a3.84 3.84 0 0 1-1.51-3.22c0-2.53 2.46-6.67 4.48-6.67a1.36 1.36 0 0 1 1.34 1.54 4.33 4.33 0 0 1-.68 2.12zm73.08-1.78H236a2.1 2.1 0 0 0-2.09 2.11 2.34 2.34 0 0 0 .34 1.2v.07c-1.68 2.87-5.75 2.33-3.63-1.37l2.7-4.69 1.68-2.92c2.5-4.24 5.92-2.57 3.76 1.13zM-.004 73.257l5.714-5.713 5.712 5.715-5.714 5.712zm352.023.026l5.714-5.713 5.713 5.715-5.715 5.712z" fill="#fff"/><path fill="#636466" d="M46.8 73.48h2.08v-8.32h3.27v-2.09H46.8v10.41zM61.69 75V62.32a4.56 4.56 0 0 0-2.56-4.07 4.46 4.46 0 0 1 .48 2v12.68a4.47 4.47 0 0 1-1.66 3.51 5.2 5.2 0 0 1 1.66 3.69v14.1A4.63 4.63 0 0 1 55 98.79H41.49v2.08h15.64a4.63 4.63 0 0 0 4.56-4.56v-14.1A5.19 5.19 0 0 0 60 78.52 4.47 4.47 0 0 0 61.69 75z"/><path fill="#636466" d="M46.8 91.34h2.08v-8.39h3.27v-2.08H46.8v10.47zm33.01 0h2.08V65.16h3.27v-2.09h-5.35v28.27z"/><path d="M92.14 58.25a4.46 4.46 0 0 1 .48 2v34a4.63 4.63 0 0 1-4.56 4.56H77a4.5 4.5 0 0 1-2-.48 4.56 4.56 0 0 0 4.07 2.56h11.08a4.63 4.63 0 0 0 4.56-4.56v-34a4.57 4.57 0 0 0-2.57-4.08zm20.68 15.23h2.08v-8.32h3.28v-2.09h-5.36v10.41zm12.25 9.04a4.47 4.47 0 0 0 2.59-4.06V62.32a4.56 4.56 0 0 0-2.57-4.1 4.55 4.55 0 0 1 .48 2v16.15a4.46 4.46 0 0 1-2.57 4.07l3.08 18.35h-5.68l.35 2.08h7.39zm-9.42-1.65h-2.83v17.92h-5.31v2.09h7.39V82.95h1.1l-.35-2.08zm29.19 10.47h2.09V65.16h3.27v-2.09h-5.36v28.27z" fill="#636466"/><path d="M157.18 58.25a4.45 4.45 0 0 1 .48 2v34a4.63 4.63 0 0 1-4.56 4.56H142a4.49 4.49 0 0 1-2-.48 4.56 4.56 0 0 0 4.07 2.56h11.09a4.63 4.63 0 0 0 4.56-4.56v-34a4.57 4.57 0 0 0-2.54-4.08zm20.67 33.09h2.09V65.16h3.27v-2.09h-5.36v28.27z" fill="#636466"/><path d="M190.19 58.25a4.46 4.46 0 0 1 .48 2v34a4.63 4.63 0 0 1-4.56 4.56h-13.56v2.08h15.64a4.63 4.63 0 0 0 4.56-4.56v-34a4.57 4.57 0 0 0-2.56-4.08zm21.05-.48v41.02h-5.31v2.09h7.39V57.77h-2.08zm32.88 0v41.02h-5.9l.59 2.09h7.4V57.77h-2.09zm-12.81 22.18v18.84h-5.3v2.09h7.39V87.19l-2.09-7.24zM263.58 83h6.11v-2.13h-8.19a4.51 4.51 0 0 1-2-.48 4.53 4.53 0 0 0 4.08 2.61zm2.83 2.73l-2.09.48v5.13h2.09v-5.61zm10.25-27.48a4.46 4.46 0 0 1 .48 2V69l-5.37 1.24v2.56l7.45-1.73v-8.75a4.56 4.56 0 0 0-2.56-4.07z" fill="#636466"/><path d="M276.66 76.05a4.46 4.46 0 0 1 .48 2v16.2a4.63 4.63 0 0 1-4.56 4.56h-11.09a4.5 4.5 0 0 1-2-.48 4.56 4.56 0 0 0 4.07 2.56h11.08a4.63 4.63 0 0 0 4.56-4.56V80.12a4.56 4.56 0 0 0-2.54-4.07zm-12.34-12.98v10.41h2.09v-8.32h3.27v-2.09h-5.36zm33.69 17.8h-.68v17.92h-5.3v2.09h7.39V85.35l-1.41-4.48zm15.14-23.1h-2.75l-6.23 19.41 6.9 21.61h-6.01l.58 1.84.06.25h7.45l-6.9-21.62 6.9-21.49zm17.38 0v41.02h-5.3v2.09h7.38V57.77h-2.08z" fill="#636466"/><path d="M167.9 123.85h1.41c5.43.28 9.69 1.73 12.39 4.72 2.74-3 7-4.46 12.46-4.72h1.35c12.11.82 17.63 9.5 27.3 13.19a11.12 11.12 0 0 0 4.79 1c2.48-.27 4.06-2.78 3.74-5.58-.34-3-3.28-5.61-6.56-4.17a4.32 4.32 0 0 0-1.17.8c-.25.23-.53.83-1.17.61-.6-.5 0-1.23.31-1.65a6 6 0 0 1 6.07-3c5.63.4 10.67 5.34 9.81 12.82C236.71 149 226.53 152 214.46 153h-3.93a48.28 48.28 0 0 1-28.77-11 49.07 49.07 0 0 1-28.9 11H149c-12.16-1.07-22.44-4-24.23-15.46-.68-8.16 4.18-12.17 9.82-12.58a6.11 6.11 0 0 1 6.14 3c.28.46.8 1.17.31 1.72-.61.11-.91-.37-1.17-.61a4 4 0 0 0-2.82-1.23c-3.86-.14-6.08 4.15-4.54 7.61a4.33 4.33 0 0 0 3.37 2.52 11.69 11.69 0 0 0 4.79-1 23.84 23.84 0 0 0 3.87-1.9c7.35-4.26 13.1-10.31 23.36-11.22z" fill="#fff"/><path fill="#636466" d="M361.634 82.906l5.713-5.714 2.086 2.085-5.713 5.715zM9.667 82.95l5.713-5.714 2.086 2.086-5.713 5.713z"/><path d="M55.65 69A4.47 4.47 0 0 1 54 72.48a5.2 5.2 0 0 1 1.66 3.69v14.1a4.63 4.63 0 0 1-4.56 4.56H35.45V51.72h15.64a4.59 4.59 0 0 1 4.56 4.56zm-7.45-9.89h-5.36v10.41h5.36zm0 17.8h-5.36v10.47h5.36zm35.9-25.19a4.59 4.59 0 0 1 4.56 4.56v34a4.63 4.63 0 0 1-4.56 4.56H73a4.59 4.59 0 0 1-4.56-4.56v-34A4.55 4.55 0 0 1 73 51.72h11.1zm-2.9 7.39h-5.35v28.27h5.36zm33.51 35.72l-3-17.92h-2.83v17.92h-7.39V51.72h15.64a4.53 4.53 0 0 1 4.5 4.56v16.14a4.47 4.47 0 0 1-2.63 4.06l3.08 18.35zm-.49-35.72h-5.36v10.41h5.36zm34.92-7.39a4.59 4.59 0 0 1 4.56 4.56v34a4.63 4.63 0 0 1-4.56 4.56h-11.08a4.59 4.59 0 0 1-4.56-4.56v-34a4.55 4.55 0 0 1 4.5-4.56h11.1zm-2.9 7.39h-5.36v28.27h5.36zm35.91-7.39a4.59 4.59 0 0 1 4.56 4.56v34a4.63 4.63 0 0 1-4.56 4.56h-15.64V51.72zm-2.89 7.39h-5.36v28.27h5.36zm20.63-7.39h7.39v43.11h-7.39zm40.28 0v43.11h-7.39L227.36 76v18.83H220V51.72h7.33l5.42 17.67V51.72zm28.45 17.8a4.59 4.59 0 0 1 4.56 4.56v16.2a4.63 4.63 0 0 1-4.56 4.56h-11.08a4.59 4.59 0 0 1-4.54-4.56v-8.87l7.39-1.72v7.7h5.36V76.91h-8.19a4.55 4.55 0 0 1-4.56-4.54V56.28a4.55 4.55 0 0 1 4.54-4.56h11.1a4.59 4.59 0 0 1 4.56 4.56V65l-7.45 1.73v-7.62h-5.36v10.41zm31.6 3.7l6.9 21.62h-7.45l-.06-.25-5.54-17.67h-.68v17.91H286V51.72h7.39v17.8h.61l5.67-17.8h7.51zm18.97-21.5h7.39v43.11h-7.39z" fill="#fff"/></svg>
            </div>
            <div class="promo-advantages">
                <ul>
                    <li class="promo-advantages__li">
                        <div class="promo-advantages-header title">Fast</div>
                        <div class="square"></div>
                        <div class="promo-advantages-text">
                            WE DO OUR JOB FAST! TWO HOURS WILL FLY BY UNNOTICED AND YOU ARE THE LUCKY OWNER OF A STYLISH HAIRCUT-A MINUTE!
                        </div>
                    </li>
                    <li class="promo-advantages__li">
                        <div class="promo-advantages-header title">Awesome</div>
                        <div class="square"></div>
                        <div class="promo-advantages-text">
                        FORGET HOW YOU CUT YOUR HAIR BEFORE.
                        WE WILL MAKE YOU A FOOTBALL OR MOVIE STAR!
                        AT LEAST OUTWARDLY
                        </div>
                    </li>
                    <li class="promo-advantages__li">
                        <div class="promo-advantages-header title">expensive</div>
                        <div class="square"></div>
                        <div class="promo-advantages-text">
                            OUR CRAFTSMEN ARE PROFESSIONALS IN THEIR FIELD AND CANNOT BE CHEAP. BESIDES, DOESN'T THE PRICE GIVE A CERTAIN STATUS?
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="handler">
        <div class="container">
            <div class="news handler-block">
                <div class="title">news</div>
                <div class="handler-block__info">
                    <div class="articles">
                    @if(count($posts)>0)
                        @foreach($posts as $post)
                        <article>
                            <div class="article__text">
                                {{ $post->caption }}
                            </div>
                            <div class="article__date">
                                {{ $post->created_at }}
                            </div>
                        </article>
                        @endforeach
                    @else 
                        posts doesn't exist yet 
                    @endif
                    </div>
                </div>
                <div class="handler-block__btns">
                    <div class="news__btn btn">
                        <a href="{{ route('news.index') }}">all news</a>
                    </div>
                </div>
            </div>
            <div class="gallery handler-block">
                <div class="title">gallery</div>
                <div class="handler-block__info">
                    <div class="slider">

                    </div>
                </div>
                <div class="handler-block__btns gallery__btns">
                    <div class="gallery__btn btn"><a href="">Previous</a></div>
                    <div class="gallery__btn btn"><a href="">Next</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="handler">
        <div class="container">
            <div class="contacts handler-block">
                <div class="title">CONTACT INFORMATION</div>
                <div class="handler-block__info">
                    <div class="contacts-info__block">
                        Barbershop «Borodinski» <br>
                        Address: Nur-Sultan, Sultan avenue, house 19/8<br>
                        Phone: +7 (777) 666-02-66<br>
                    </div>
                    <div class="contacts-info__block">
                        WORKING HOURS: <br>
                        MON-FRI: from 10Am to 22PM<br>
                        SAT-SUN: from 10Am to 7Pm<br>
                    </div>
                </div>
                <div class="handler-block__btns">
                    <div class="gallery__btn btn"><a href="{{ route('contacts') }}">how to find</a></div>
                    <div class="gallery__btn btn"><a href="tel:87776660266">to call</a></div>
                </div>
            </div>
            <div class="follow handler-block">
                <div class="title">QUEUE ENTRY</div>
                <div class="handler-block__info">
                SPECIFY THE DESIRED DATE AND TIME AND WE WILL CONTACT <br> CONTACT YOU TO CONFIRM YOUR RESERVATION
                </div>
                <div class="follow-form">
                    <form action="" class="form">
                        <div class="form__block">
                            <div class="form__block-bl">
                                <label for="">date</label>
                                <input class="input" type="date" class="input">
                            </div>
                            <div class="form__block-bl">
                                <label for="">time</label>
                                <input class="input" type="time" class="input">
                            </div>
                        </div>
                        <div class="form__block">
                            <div class="form__block-bl">
                                <label for="">First name</label>
                                <input class="input" type="text" class="input">
                            </div>
                            <div class="form__block-bl">
                                <label for="">phone number</label>
                                <input class="input" type="text" class="input">
                            </div>
                        </div>
                        <input class="follow-form__btn btn" type="submit" value="Sent">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection