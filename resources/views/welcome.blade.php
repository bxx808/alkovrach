@extends('layout')

@section('content')
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
@endsection
