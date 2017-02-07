<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">За Нас <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#portfolio-1-col.html">История</a>
                        </li>
                        <li>
                            <a href="#portfolio-2-col.html">Цели</a>
                        </li>
                        <li>
                            <a href="#portfolio-3-col.html">Екип</a>
                        </li>
                        <li>
                            <a href="#portfolio-4-col.html">Партньори</a>
                        </li>
                        <li>
                            <a href="#portfolio-item.html">Галерия</a>
                        </li>
                        <li>
                            <a href="#portfolio-item.html">Контакти</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">За Студенти <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#portfolio-1-col.html">Регистрация</a>
                        </li>
                        <li>
                            <a href="#portfolio-2-col.html">Обяви за работа</a>
                        </li>
                        <li>
                            <a href="#portfolio-1-col.html">Стажове</a>
                        </li>
                        <li>
                            <a href="#portfolio-1-col.html">Обучения</a>
                        </li>
                        <li>
                            <a href="#portfolio-1-col.html">Стипендии</a>
                        </li>
                        <li>
                            <a href="#l">Кариерно консултиране</a>
                        </li>
                        <li>
                            <a href="#l">Полезна информация</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">За Работодатели <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Регистрация</a>
                        </li>
                        <li>
                            <a href="#">Качване на обява</a>
                        </li>
                        <li>
                            <a href="#">Най-добри студенти</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Новини <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Актуални новини</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Предстоящи събития</a>
                        </li>
                        <li>
                            <a href="faq.html">Отминали събития</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Алумни <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Регистрация</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Алумни новини</a>
                        </li>
                        <li>
                            <a href="faq.html">Успешни алумни</a>
                        </li>
                        <li>
                            <a href="faq.html">Добрите примери</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
@yield('header')