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
                        <img src="{{asset('images/number/01.png')}}" alt="">
                        <div class="line-container">
                            <div class="horizontal-line">
                                <img src="{{asset('images/card/hLine.png')}}" alt="">
                            </div>
                            <div class="vertical-line">
                                <img src="{{asset('images/card/vLine.png')}}" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/icons/phone.png')}}" alt="">
                            <p>Диагностика состояния</p>
                        </div>
                    </div>
                    <div class="treatment_card">
                        <img src="{{asset('images/number/02.png')}}" alt="">
                        <div class="line-container">
                            <div class="horizontal-line">
                                <img src="{{asset('images/card/hLine.png')}}" alt="">
                            </div>
                            <div class="vertical-line">
                                <img src="{{asset('images/card/vLine.png')}}" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/icons/card.png')}}" alt="">
                            <p>Составление <br>
                                плана лечения</p>
                        </div>
                    </div>
                    <div class="treatment_card">
                        <img src="{{asset('images/number/03.png')}}" alt="">
                        <div class="line-container">
                            <div class="horizontal-line">
                                <img src="{{asset('images/card/hLine.png')}}" alt="">
                            </div>
                            <div class="vertical-line">
                                <img src="{{asset('images/card/vLine.png')}}" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/icons/fastCar.png')}}" alt="">
                            <p>Снятие <br>
                                симптомов</p>
                        </div>
                    </div>
                    <div class="treatment_card">
                        <img src="{{asset('images/number/04.png')}}" alt="">
                        <div class="line-container">
                            <div class="horizontal-line">
                                <img src="{{asset('images/card/hLine.png')}}" alt="">
                            </div>
                            <div class="vertical-line">
                                <img src="{{asset('images/card/vLine.png')}}" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/icons/ivdrip.png')}}" alt="">
                            <p>Восстановление организма</p>
                        </div>
                    </div>
                    <div class="treatment_card">
                        <img src="{{asset('images/number/05.png')}}" alt="">
                        <div class="line-container">
                            <div class="horizontal-line">
                                <img src="{{asset('images/card/hLine.png')}}" alt="">
                            </div>
                            <div class="vertical-line">
                                <img src="{{asset('images/card/vLine.png')}}" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/icons/medic.png')}}" alt="">
                            <p>Бесплатные консультации</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="top">
                <div class="left">
                    <h4>О клинике</h4>
                    <p>Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую помощь.</p>
                    <div class="links">
                        <div class="link">
                            <img src="{{asset('images/logo/user.png')}}" alt="">
                            <strong>Квалифицированные врачи-наркологи</strong>
                        </div>
                        <div class="link">
                            <img src="{{asset('images/logo/bag.png')}}" alt="">
                            <strong>Находим решение даже в сложных ситуациях</strong>
                        </div>
                        <div class="link">
                            <img src="{{asset('images/logo/card.png')}}" alt="">
                            <strong>Используем импортные проверенные препараты</strong>
                        </div>
                        <div class="link">
                            <img src="{{asset('images/logo/topCard.png')}}" alt="">
                            <strong>Лицензия Л041-01177-91/00561129</strong>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img class="medic_img" src="{{asset('images/card/medic.png')}}" alt="">
                    <div class="button">
                        <div class="left">
                            <img src="{{asset('images/icons/rectangle_l.png')}}" alt="">
                        </div>
                        <div class="right">
                            <img src="{{asset('images/icons/rectangle_r.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="vertical_line">
                <img src="{{assert('images/card/vector.png')}}">
            </div>
            <div class="bottom">
                <h5>Имеем все необходимые документы для предоставления медицинских услуг:</h5>
                <div class="cards">
                    <div class="card">
                        <img src="{{asset('images/doc/1.png')}}" alt="">
                    </div>
                    <div class="card">
                        <img src="{{asset('images/doc/2.png')}}" alt="">
                    </div>
                    <div class="card">
                        <img src="{{asset('images/doc/3.png')}}" alt="">
                    </div>
                    <div class="card">
                        <img src="{{asset('images/doc/4.png')}}" alt="">
                    </div>
                    <div class="card">
                        <img src="{{asset('images/doc/5.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="staff">
        <div class="container">
            <div class="staff_content">
                <div class="left">
                    <h6>Медицинский персонал</h6>
                    <div class="card">
                        <p>Меринов Артём Вячеславович</p>
                        <span>Cпециализация: <strong>Врач-Нарколог</strong></span>
                        <span>Опыт работы: <strong>12 лет</strong></span>
                    </div>
                    <div class="button">
                        <div class="left_btn">
                            <img src="{{asset('images/icons/rectangle_l.png')}}" alt="">
                        </div>
                        <div class="right_btn">
                            <img src="{{asset('images/icons/rectangle_r.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img class="people_img" src="{{asset('images/people/people1.png')}}" alt="">
                    <img class="people_img" src="{{asset('images/people/people2.png')}}" alt="">
                    <img class="people_img" src="{{asset('images/people/people3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
