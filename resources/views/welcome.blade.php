@extends('layout')

@section('content')
    <div class="head">
        <div class="head_banner">
            <p>Имеются противопоказания, необходимо проконсультироваться со специалистом 18+</p>
        </div>
        <div class="head_nav">
            <div class="logo">
                <img src="{{asset('images/logo/group.png')}}" alt="">
            </div>
            <div class="link">
                <a href="">Услуги</a>
                <a href="">Этапы лечения</a>
                <a href="">О нас</a>
                <a href="">Отзывы</a>
                <a href="">Контакты</a>
            </div>

            <section>
                <div class="num">
                    <strong>8 (906) 180-00-41</strong>
                    <p>Работаем 24/7</p>
                </div>
                <div class="btn">
                    <button>Заказать звонок</button>
                </div>
            </section>
        </div>
        <div class="head_content">
            <div class="left_section">
                <div class="container">
                    <div class="top">
                        <h1>
                            Срочный вызов врача-нарколога
                        </h1>
                    </div>
                    <div class="middle">
                        <div class="items">
                            <div class="item">
                                <img src="{{asset('images/icons/check.png')}}" alt="">
                                <p>Сохраняем анонимность, не требуем паспорт и не ставим на учёт</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('images/icons/check.png')}}" alt="">
                                <p>Помощь квалифицированного врача на дому</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('images/icons/check.png')}}" alt="">
                                <p>Приедем на адрес за 20 минут</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('images/icons/check.png')}}" alt="">
                                <p>Первичная консультация - бесплатно</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="btn_help">
                            <button>Получить помощь</button>
                        </div>
                        <div class="btn_call">
                            <button>Заказать звонок</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_section"></div>
            <div class="doctor">
                <img src="{{asset('images/icons/doctor.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="services_content">
                <h2>Наши услуги</h2>
                <div class="cards">
                    <div class="card">
                        <div class="top_images">
                            <img src="{{asset('images/card/card1.png')}}">
                        </div>
                        <div class="middle">
                            <strong>Cтандартная терапия</strong>
                            <p>Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                        </div>
                        <div class="bottom">
                            <p>от 2400 ₽</p>
                            <button>Начать лечение</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top_images">
                            <img src="{{asset('images/card/card2.png')}}">
                        </div>
                        <div class="middle">
                            <strong>Усиленная терапия</strong>
                            <p>Рекомендуется для облегчения похмелья и прерывания запоев длительностью до недели</p>
                        </div>
                        <div class="bottom">
                            <p>от 5800 ₽</p>
                            <button>Начать лечение</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top_images">
                            <img src="{{asset('images/card/card3.png')}}">
                        </div>
                        <div class="middle">
                            <strong>Восстановление+</strong>
                            <p>Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                        </div>
                        <div class="bottom">
                            <p>от 15 800 ₽</p>
                            <button>Начать лечение</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top_images">
                            <img src="{{asset('images/card/card4.png')}}">
                        </div>
                        <div class="middle">
                            <strong>Максимальная терапия</strong>
                            <p>Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                        </div>
                        <div class="bottom">
                            <p>от 18 800 ₽</p>
                            <button>Начать лечение</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top_images">
                            <img src="{{asset('images/card/card5.png')}}">
                        </div>
                        <div class="middle">
                            <strong>Кодирование+</strong>
                            <p>Рекомендуется для облегчения похмелья и прерывания запоев длительностью до недели</p>
                        </div>
                        <div class="bottom">
                            <p>от 3200 ₽</p>
                            <button>Начать лечение</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top_images">
                            <img src="{{asset('images/card/card6.png')}}">
                        </div>
                        <div class="middle">
                            <strong>Выезд нарколога на дом</strong>
                            <p>Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                        </div>
                        <div class="bottom">
                            <p>от 3500 ₽</p>
                            <button>Начать лечение</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="treatment_content">
                <h3>Этапы лечения</h3>
                <div class="treatment_cards">
                    <div class="treatment_card">
                        <img src="" alt="">
                        <div class="line-container">
                            <div class="horizontal-line"></div>
                            <div class="vertical-line"></div>
                        </div>
                        <div class="icon">
                            <img src="" alt="">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
