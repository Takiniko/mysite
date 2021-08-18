@extends('layouts.app')

@section('title-block')
	Курс по компьютерной сборке
@endsection

@section('content')
	<h1 class="pb-5">почта - admin@sdad.com</br>пароль - password</h1>
<div  id="countdown" class="row row-cols-1 row-cols-md-4 mb-3 text-center countdown" >
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-body ">
                                <span id="days" class="days card-title pricing-card-title numb "></span>
                                <p class="opp">Дней</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-body">
                                <span id="hours" class="hours card-title pricing-card-title numb "></span>
                                <p class="opp">Часов</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-body">
                                <span id="minutes" class="minutes card-title pricing-card-title numb "></span>
                                <p class="opp">Минут</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-body">
                                <span id="seconds" class=" seconds card-title pricing-card-title numb"></span>
                                <p class="opp">Секунд</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                @if(Request::is(!'/'))
                    @include('inc.aside')
                @endif
            </div>
        </div>
        </div>

        <div class=" main-screen-last-line">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <button type="button" class="btn btn-primary align-middle">Заказать курс</button>
                </div>

                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="opp">Учеников всего:</span>
                            <strong class="text-end">200</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="opp">Успешно закончили курс:</span>
                            <strong class='text-end'>190</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="opp">Заработано учениками:</span>
                            <strong class="text-end">400 000$</strong>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/img/about_img.png" width="550em" height="auto">
                </div>
                <div class="col d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                        <h2>Чем мы занимаемся?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget neque, dignissim et feugiat elit augue in suspendisse egestas. Dictum vestibulum mi et sed nunc, orci fermentum vestibulum, morbi. Et neque, adipiscing sapien sem senectus praesent aenean consequat. Aenean facilisi turpis aliquet fringilla. Nunc sem felis sed interdum feugiat mattis elit, sollicitudin. Quam pharetra rhoncus risus, cursus id elementum aliquet. Nullam turpis arcu malesuada arcu interdum placerat nisi, lobortis.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stat">
        <div class="container">
            <h2><img src="/img/icon-heading1.png">Быстрый старт</h2>
            <p class="opp under">Больше 90% учеников прошли полный курс и смогли<br>собрать свой первый компьютер</p>
            <div class="row">
                <div class="col-lg-3 numb">100%</div>
                <div class="col-lg-3 numb">75%</div>
                <div class="col-lg-3 numb">50%</div>
                <div class="col-lg-3 numb">Итог</div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3"><img src="/img/Rectangle 7.png"></div>
                <div class="col-lg-3"><img src="/img/Rectangle 8.png"></div>
                <div class="col-lg-3"><img src="/img/Rectangle 9.png"></div>
                <div class="col-lg-3"><img src="/img/Rectangle 10.png"></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p class="opp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p></div>
                <div class="col-lg-3">
                    <p class="opp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p></div>
                <div class="col-lg-3">
                    <p class="opp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p></div>
                <div class="col-lg-3">
                    <p class="opp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p></div>
            </div>

        </div>
    </div>

    <div class="advantages">
        <div class="container">
            <h2>Получите профессию прямо сейчас</h2>
            <div class="row   text-center">
                <div class="col-lg-4 px-5">

                    <img src="/img/icon-1.png">
                    <p class="adv-tit">Только практические<br>навыки в работе</p>
                    <p class="adv-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p>

                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4  px-5">

                    <img src="/img/icon-2.png">
                    <p class="adv-tit">Работа на самом<br>современном оборудовании</p>
                    <p class="adv-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p>

                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4  px-5">

                    <img src="/img/icon-3.png">
                    <p class="adv-tit">Сертификация<br>по окончании обучения</p>
                    <p class="adv-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat dui.</p>

                </div><!-- /.col-lg-4 -->
            </div>
        </div>
    </div>

    <div class="partners">
        <div class="container">
            <h2><img src="/img/icon-heading.png">Партнеры - топовые бренды</h2>
            <table class="table table-borderless justify-content-center">
                <tbody>
                    <tr>
                        <td><img src="/img/partner.png"></td>
                        <td><img src="/img/partner.png"></td>
                        <td><img src="/img/partner.png"></td>
                        <td><img src="/img/partner.png"></td>
                    </tr>
                    <tr>
                        <td><img src="/img/partner.png"></td>
                        <td><img src="/img/partner.png"></td>
                        <td><img src="/img/partner.png"></td>
                        <td><img src="/img/partner.png"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="prepods">
        <div class="container">
            <h2><img src="/img/icon-heading.png">Ваши преподователи</h2>
            <div class="row text-center">
                <div class="col-lg-4">
                    <img src="/img/Ellipse 2.png">
                    <p class="prep-tit">Дмитрий Иванов</p>
                    <p class="prep-text opp">Специалист по видеокартам</p>
                    <p><a class="btn btn-secondary" href="#">Биография</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="/img/Ellipse 1.png">
                    <p class="prep-tit">Дмитрий Иванов</p>
                    <p class="prep-text opp">Специалист по видеокартам</p>
                    <p><a class="btn btn-secondary" href="#">Биография</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="/img/Ellipse 3.png">
                    <p class="prep-tit">Дмитрий Иванов</p>
                    <p class="prep-text opp">Специалист по видеокартам</p>
                    <p><a class="btn btn-secondary" href="#">Биография</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </div>

    <div class="footer">
        <div class="container text-center">
            <h2>Статьи каждую неделю</h2>
            <p class="opp">Больше 90% учеников прошли полный курс и смогли<br>собрать свой первый компьютер</p>
            <div class="row">

                <div class="col-4 offset-4">
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="E-mail">
                        <button type="submit" class="btn btn-secondary">Подписаться</button>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


