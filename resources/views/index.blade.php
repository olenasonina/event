<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/libs/font-awesome-5.14.0/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>EVENT</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">EVENT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#link">Сервисы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#link2">Менеджеры</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#link3">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Вход/Регистрация</a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
    </header>
    <div class="jumbotron jumbotron-fluid height100p banner" id="home">
        <div class="container h100">
            <div class="contentBox h100">
                <div>
                    <h1 class="display-4">Организуй свой праздник вместе с EVENT</h1>
                    <p class="lead">Развлекательные сервисы на любой вкус и бюджет. Помощь менеджера в организации.
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
                        <h2>Сервисы</h2>
                        <p>
                            Определяй необходимые услуги для своего мероприятия, выбирай подходящих поставщиков услуг, добавляй их на свою доску и моделируй свой event здесь и сейчас.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container">
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
                    <h2>Создай свой event профессионально</h2>
                    <p>
                        Определись с главным, а остальное сделает наш менеджер. Выбирай event-консультанта и он организует мероприятие до мелочей.
                    </p>
                    <a href="#" class="btn btnD1">Заказать праздник</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec3" id="link3">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText">
                        <h2>Менеджеры</h2>
                        <p>
                            Что может быть проще? Выбирай сервисы и подключай менеджера. Рутинные звонки, коммуникации, составление графиков
                            и контроль соблюдения сроков - этими навыками в совершенстве владеют наши event-консультанты. Заказывай услуги и наслаждайся
                            ожиданием своего мероприятия
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-4">
                    <div class="placeBox">
                        <div class="imgBx">
                            <img src="assets/images/menagers/menager1.jpg" alt="First" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Елена <br><span>Специализируется на конференциях и бизнес-встречах</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="placeBox">
                        <div class="imgBx">
                            <img src="assets/images/second.jpg" alt="Second" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Place Name <br><span>Country Name</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="placeBox">
                        <div class="imgBx">
                            <img src="assets/images/third.jpg" alt="Third" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Place Name <br><span>Country Name</span></h3>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-6">
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
                <div class="col-sm-6">
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
                <div class="col-sm-6">
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
                <div class="col-sm-6">
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
            <!-- <div class="row row-cols-3 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="assets/images/menagers/menager1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Елена</h5>
                            <p class="card-text">Специализируется на конференциях и бизнес-встречах</p>
                            <a href="#" class="btn">Заказать услуги</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название карточки</h5>
                            <p class="card-text">This is a short card.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название карточки</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название карточки</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headerText2 text-center">
                        <h2>Напиши нам</h2>
                        <p>Есть вопросы по организации ресурса? Нужна помощь или проводник по сайту? Наши менеджеры ответят в течении 10 минут
                        </p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="offset-sm-2 col-sm-8">
                    <form>
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
                            <button class="btn btnD1">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="sci">
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                    <p class="cpryte">
                        &copy; Copyright 2020 Event by <a href="#"> Sonina Olena </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    $(document).scroll(function() {
        $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    })
    </script>
     <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        '@0.00': {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        '@0.75': {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        '@1.00': {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        '@1.50': {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      }
    });
  </script>
</body>
</html>