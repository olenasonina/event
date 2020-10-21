@extends('master')

@section('title', 'Главная')

@section('content')

    <div class="jumbotron jumbotron-fluid height100p banner" id="home">
        <div class="container h100">
            <div class="contentBox h100">
                <div>
                    <h1 class="display-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Организуй свой праздник вместе с EVENT</h1>
                    <p class="lead" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Развлекательные сервисы на любой вкус и бюджет. Помощь менеджера в организации.
                         Удобный планировщик для контроля сроков подготовки и приятные бонусы</p>
                </div>
            </div>
        </div>
    </div>
    <section class="sec1" id="link">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText text-center">
                        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Сервисы</h2>
                        <p  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                            Определяй необходимые услуги для своего мероприятия, выбирай подходящих поставщиков услуг, добавляй их на свою доску и моделируй свой event здесь и сейчас.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/images/swiper/cafe.jpg" alt="">
                        </a>
                        <p>Кафе</p>   
                        </div>
                        <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/images/swiper/restrant.jpg" alt="">
                        </a>
                        <p>Рестораны</p>
                        </div>
                        <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/images/swiper/tamada.jpg" alt="">
                        </a>
                        <p>Ведущие</p>
                        </div>
                        <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/images/swiper/animator.jpg" alt="">
                        </a>
                        <p>Аниматоры</p>
                        </div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                        <div class="swiper-slide">Slide 10</div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2" id="link2">
        <div class="container h100">
            <div class="contentBox h100">
                <div>
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Создай свой event профессионально</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        Определись с главным, а остальное сделает наш менеджер. Выбирай event-консультанта и он организует мероприятие до мелочей.
                    </p>
                    <a href="#" class="btn btnD1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">Заказать праздник</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec3" id="link3">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText">
                        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Менеджеры</h2>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                            Что может быть проще? Выбирай сервисы и подключай менеджера. Рутинные звонки, коммуникации, составление графиков
                            и контроль соблюдения сроков - этими навыками в совершенстве владеют наши event-консультанты. Заказывай услуги и наслаждайся
                            ожиданием своего мероприятия
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                    <div class="cardPost">
                        <div class="imgBx">
                            <img src="assets/images/menagers/menager1.jpg" alt="First" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Елена</br>
                            <span>Конференции и бизнес-встречи</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                    <div class="cardPost">
                        <div class="imgBx">
                            <img src="assets/images/menagers/menager1.jpg" alt="First" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Some</br>
                            <span>Something else</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="cardPost">
                        <div class="imgBx">
                            <img src="assets/images/menagers/menager1.jpg" alt="First" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Some</br>
                            <span>Something else</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1250">
                    <div class="cardPost">
                        <div class="imgBx">
                            <img src="assets/images/menagers/menager1.jpg" alt="First" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Some</br>
                            <span>Something else</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headerText2 text-center">
                        <h2  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Напиши нам</h2>
                        <p  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Есть вопросы по организации ресурса? Нужна помощь или проводник по сайту? Наши менеджеры ответят в течении 10 минут
                        </p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="offset-sm-2 col-sm-8">
                    <form  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" id="name" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Номер телефона</label>
                            <input type="text" id="phone" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control textarea"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btnD2">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 @endsection   