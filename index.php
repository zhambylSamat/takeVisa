<?php
    if (isset($_POST['submit']) && isset($_POST['phone']) && $_POST['phone']!=''){
        $to = "zhambyl.9670@gmail.com, nurbol.uka@gmail.com, anuar930803@gmail.com";
        $subject = "Request from roteza.kz/visa(Take Visa)";
        $message = "
        <html>
        <head>
        <title>Request</title>
        </head>
        <body>
        <table>
        <tr>
        <th>Name</th>
        <th>Phone</th>
        </tr>
        <tr>
        <td>".$_POST['name']."</td>
        <td>".$_POST['phone']."</td>
        </tr>
        </table>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <roteza.kz/visa(Take Visa)>' . "\r\n";
        $headers .= 'Cc: yourproject@gmail.com' . "\r\n";

        mail($to,$subject,$message,$headers);
        header("Location:index.php");
    }

?>
<!DOCTYPE html> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Take Visa</title>
    <link rel="shortcut icon" href="faviconyp.png">
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/story-box-zen.css">
    <link rel="stylesheet/less" type='text/css' href="css/style.less">
    <link rel="stylesheet" type='text/css' href="css/style1.css">
    <link rel="stylesheet" type='text/css' href="css/font-awesome.min.css">
    <!-- start video js css -->
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="css/plyr.css"> -->

    <!-- Docs styles -->
    <!-- <link rel="stylesheet" href="css/demo.css"> -->
    <!-- end video js css -->

    <!-- start video js min -->
    <!-- <script src="js/videojs-ie8.min.js"></script> -->
    <!-- end video js min -->
    <script src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
        <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [43.248406864926544,76.906635761261],
                    zoom: 16
                });

                DG.marker([43.248406864926544,76.906635761261]).addTo(map).bindPopup('ул. Карасай батыра 152,уг.ул. Нурмакова , БЦ Карасай');
            });
        </script>
</head>

<body>
    <nav class="navbar navbar-fixed-top affix">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#main">
              <div class='navbar-brand-box'> 
                  <p>Take Visa</p>
                  <p>Центр визовый поддержки в Алматы <span class='hidden-xs'>|</span><br class='visible-xs'> +77079959595</p>
              </div>
          </a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#main" class='text-uppercase'>Главная</a></li>
            <li><a href="#utp" class='text-uppercase'>Почему мы?</a></li>
            <li><a href="#about" class='text-uppercase'>О Нас</a></li>
            <li><a href="#reviewV" class='text-uppercase'>Отзывы клиентов</a></li>
            <li><a href="#contact" class='text-uppercase'>Контакты</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <header class='headerH' id='main' style='min-height: 100%;'>
        <ul class="cb-slideshow" style='margin:0px;'>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
        <div class='header-content'>
            <center>
                <div class='page-header'>
                    <h1>
                        Визы в США и Европу
                    </h1>
                    <h3>
                        Надежное и быстрое оформление виз
                    </h3>
                    <!-- <a href="#contact" type='button' class='btn'>Получить бесплатную консультацию</a> -->
                    <div class='header-content-form' style='clear:both;'>
                        <h4>Оставь заявку и получи бесплатную консультацию</h4>
                        <form autocomplete="off" method="post" action='index.php'>
                            <div class="form-group">
                                <input type="text" name='name' class="form-control" required placeholder="Ваше имя*">
                            </div>
                            <div class="form-group">
                                <input type="text" name='phone' class="form-control phone-mask" required placeholder="Ваш телефон*">
                            </div>
                            <input type="hidden" name="hidden" value='hid'><br>
                            <button type="submit" class="btn btn-primary btn-lg" name='submit'>Оставить заявку</button>
                        </form>
                    </div>
                </div>
            </center>
        </div>
    </header>
    <div id='socialN'>
        <a href="https://www.instagram.com/usa_almaty/" target="_blank"><img src="img/icon/instam.png" class='img-responsive' style='margin-bottom: 5px;'></a>
        <a href="https://vk.com/anuka_will" target="_blank"><img src="img/icon/vkm.png" class='img-responsive'></a>
    </div>

    <section id='utp'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 col-xs-12'>
                    <h1 id='h1test'>
                        Уникальность нашей услуги!
                    </h1>
                    <p id='ptest'>
                        У нас вы найдете безупречный сервис! <br>
                        Начиная с нуля мы поможем вам поехать в США. У нас очень обширные связи в США!<br>
                        У нас есть такие услуги (в США) как:<br>
                    </p>
                    <ul>
                        <li>- Встреча в аэропорту </li>
                        <li>- Гостиница</li>
                        <li>- Переезд открытие счетов (квитанции)</li>
                        <li>- Открытие счета в банке</li>
                        <li>- Оформление бесплатной медицинской страховки</li>
                        <li>- Поможем вам найти работу в США</li>
                        <li>- Поможем с жильем</li>
                        <li>- Бесплатные ВУЗы</li>
                        <li>- Бесплатные курсы английского </li>
                        <li>- New York ID (Удостоверение личности) и водительские права!</li>
                        <li>- Мобильная сеть и интернет (найдем очень хорошие альтернативы для вас)</li>
                        <li>- Оринтация в городе</li>
                        <li>- Бесплатная косультация адвоката</li>
                    </ul> 
                    <b>И много другое...</b><br>
                    <a href="#contact" type='button' class='btn'>Узнать подробнее</a>
                </div>
            </div>
        </div>
    </section>

    <section id='services'>
        <div class='container'>
            <div class='row'>
                <center>
                    <div class='col-md-12 col-sm-12 col-xs-12'>
                        <h1>Почему мы?</h1>
                    </div>
                </center>
            </div>
            <div class='row'>
                <center>
                    <div class='col-md-3 col-sm-3 col-xs-6'>
                        <img src="img/icon/1.png" class='img-responsive'>
                        <p>Более 5 лет в сфере визовых услуг</p>
                    </div>
                    <div class='col-md-3 col-sm-3 col-xs-6'>
                        <img src="img/icon/2.png" class='img-responsive'>
                        <p>Более 1000 довольных клиентов по всему Казахстану</p>
                    </div>
                    <div class='col-md-3 col-sm-3 col-xs-6'>
                        <img src="img/icon/3.png" class='img-responsive'>
                        <p>Открываем визы в более чем 50 стран мира</p>
                    </div>
                    <div class='col-md-3 col-sm-3 col-xs-6'>
                        <img src="img/icon/4.png" class='img-responsive'>
                        <p>100 партнеров по всему миру</p>
                    </div>
                </center>
            </div>

            <div class='row'>
                <center>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class='services-img'>
                            <img src="img/icon/5.png"></td>
                        </div>
                        Ра&shy;бо&shy;та&shy;ем на тер&shy;ри&shy;то&shy;ри&shy;и все&shy;го Ка&shy;зах&shy;ста&shy;на
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class='services-img'>
                            <img src="img/icon/6.png"></td>
                        </div>
                        Ра&shy;бо&shy;та&shy;ем в лю&shy;бо&shy;е вре&shy;мя 24/7 <br>Круг&shy;ло&shy;су&shy;точ&shy;на&shy;я под&shy;держ&shy;ка, от&shy;ве&shy;ты на все во&shy;про&shy;сы
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class='services-img'>
                            <img src="img/icon/7.png"></td>
                        </div>
                        Вы&shy;со&shy;ко&shy;ква&shy;ли&shy;фи&shy;ци&shy;ро&shy;ван&shy;ны&shy;е спе&shy;ци&shy;а&shy;ли&shy;сты
                    </div>
                </center>
            </div>
            <div class='row'>
                <center>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class='services-img'>
                            <img src="img/icon/8.png"></td>
                        </div>
                        О&shy;фи&shy;ци&shy;аль&shy;на&shy;я ак&shy;кре&shy;ди&shy;та&shy;ци&shy;я в кон&shy;суль&shy;ствах и по&shy;соль&shy;ствах
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class='services-img'>
                            <img src="img/icon/9.png"></td>
                        </div>
                        Кон&shy;суль&shy;та&shy;ци&shy;я по до&shy;ку&shy;мен&shy;там и по&shy;мощь в за&shy;пол&shy;не&shy;ни&shy;и ан&shy;ке&shy;ты в ре&shy;жи&shy;ме он&shy;лайн.
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class='services-img'>
                            <img src="img/icon/10.png"></td>
                        </div>
                        За&shy;па&shy;ков&shy;ка до&shy;ку&shy;мен&shy;тов "под ключ" с га&shy;ран&shy;ти&shy;ей по&shy;лу&shy;че&shy;ни&shy;я ви&shy;зы
                    </div>
                </center>
            </div>


            <!-- <div class='row'>
                <center>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <table>
                            <tr>
                                <td><img src="img/icon/5.png"></td>
                                <td>Работаем на территории всего Казахстана</td>
                            </tr>
                        </table>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <table>
                            <tr>
                                <td><img src="img/icon/6.png"></td>
                                <td>Работаем в любое время 24/7 <br>Круглосуточная поддержка, ответы на все вопросы</td>
                            </tr>
                        </table>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <table>
                            <tr>
                                <td><img src="img/icon/7.png"></td>
                                <td>Высококвалифицированные специалисты</td>
                            </tr>
                        </table>
                    </div>
                </center>
            </div> -->

            <!-- <div class='row'>
                <center>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <table>
                            <tr>
                                <td><img src="img/icon/8.png"></td>
                                <td>Официальная аккредитация в консульствах и посольствах</td>
                            </tr>
                        </table>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <table>
                            <tr>
                                <td><img src="img/icon/9.png"></td>
                                <td>Консультация по документам и помощь в заполнении анкеты в режиме онлайн.</td>
                            </tr>
                        </table>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <table>
                            <tr>
                                <td><img src="img/icon/10.png"></td>
                                <td>Высококвалифицированные специалисты</td>
                            </tr>
                        </table>
                    </div>
                </center>
            </div> -->
        </div>
    </section>
 
    <section id='services2'>
        <div class='container'>
            <div class='row'>
                <center>
                    <div class='col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12'>
                        <h1>А еще :</h1>
                        <p>Наши специалисты помогут получить визу в США быстро - от 1 до 5 дней, так как мы четко знаем порядок наших действий, которые помогут Вам успешно пройти собеседование</p>
                    </div>
                </center>
            </div>
            <div class='row'>
                <center>
                    <div class='col-md-4 col-md-offset-2 col-sm-6 col-xs-12'>
                        <img src="img/icon/settings.png" class='img-responsive'>
                        <span>Надежность</span><br>
                        <p>Опыт работы наших специалистов с Посольством США составляет более 3 лет, так что мы знаем секреты для положительного прохождения собеседования с визовым офицером.</p>
                    </div>
                    <div class='col-md-4 col-md-offset-2-right col-sm-6 col-xs-12'>
                        <img src="img/icon/guarantee.png" class='img-responsive'>
                        <span>Честность</span><br>
                        <p>Мы не беремся за дело, если на наш взгляд нет шансов получить визу. Нам проще остаться с вами друзьями, чем обманывать вас. Мы работаем на совесть!</p>
                    </div>
                </center>
            </div>
            <div class='row'>
                <center>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <img src="img/icon/guarantee2.png" class='img-responsive'>
                        <span>Гарантии</span><br>
                        <p>Мы ГАРАНТИРУЕМ, что поможем вам собрать на 100% правильный и полный пакет документов, который максимально увеличит шансы на получение визы в вашем конкретном случае. Мы рассматриваем каждый случай индивидуально!</p>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <img src="img/icon/clip.png" class='img-responsive'>
                        <span>Вам потребуется только скрепка</span><br>
                        <p>Мы можем связаться с вами в любое удобное для вас время. Мы напишем вам по электронной почте, какие документы вам потребуются, и проверим их правильность. Вам потребуется только скрепка, чтобы скрепить вместе все документы.</p>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <img src="img/icon/sale.png" class='img-responsive'>
                        <span>Доступные цены и скидки</span><br>
                        <p>Мы предлагаем одни из самых низких цен за услуги по оформлению виз в США и Англию.</p>
                    </div>
                </center>
            </div>
        </div>
    </section>

    <section id='price'>
        <div class='cover'>
            <div class='container'>
                <div class='row'>
                    <!-- <center> -->
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h1>Туристическая/Гостевая/Бизнес виза</h1><br>
                            <h2>15 000 тенге</h2>
                            <ol>
                                <li>За&shy;пол&shy;не&shy;ние ан&shy;ке&shy;ты DS-160</li>
                                <li>Про&shy;вер&shy;ка на соответствие фо&shy;то&shy;гра&shy;фии</li>
                                <li>Под&shy;го&shy;тов&shy;ка к со&shy;бе&shy;се&shy;до&shy;ва&shy;нию</li>
                                <li>Под&shy;го&shy;тов&shy;ка пла&shy;теж&shy;ного по&shy;ру&shy;че&shy;ния для оплаты кон&shy;сульс&shy;кого сбора США</li>
                                <li>Пре&shy;дос&shy;тав&shy;ле&shy;ние пол&shy;но&shy;го спис&shy;ка до&shy;ку&shy;мен&shy;тов со все&shy;ми образ&shy;цами</li>
                                <li>Про&shy;вер&shy;ка Вашего па&shy;ке&shy;та до&shy;ку&shy;мен&shy;тов на соот&shy;ветс&shy;твие</li>
                                <li>По&shy;мощь в под&shy;боре авиа&shy;би&shy;ле&shy;та</li>
                                <li>По&shy;мощь в офор&shy;мле&shy;нии ме&shy;дицин&shy;ской стра&shy;хов&shy;ки</li>
                            </ol>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h1>Студенческая виза<br> F1/ M1/ J1</h1><br>
                            <h2>30 000 тенге</h2>
                            <ol>
                                <li>
                                    Для поступления в:
                                    <ul>
                                        <li><b>-</b> Школу</li>
                                        <li><b>-</b> Университет</li>
                                        <li><b>-</b> Колледж</li>
                                    </ul>
                                </li>
                                <li>За&shy;пол&shy;не&shy;ние анкеты DS-160</li>
                                <li>Про&shy;вер&shy;ка на соот&shy;ветствие фо&shy;то&shy;гра&shy;фии</li>
                                <li>Под&shy;го&shy;тов&shy;ка к со&shy;бе&shy;се&shy;до&shy;ва&shy;нию</li>
                                <li>Под&shy;го&shy;тов&shy;ка пла&shy;теж&shy;но&shy;го по&shy;ру&shy;че&shy;ния для оплаты кон&shy;сульс&shy;кого сбора США</li>
                                <li>Пре&shy;дос&shy;тав&shy;ле&shy;ние пол&shy;ного спис&shy;ка до&shy;ку&shy;мен&shy;тов со все&shy;ми образ&shy;цами</li>
                                <li>Про&shy;вер&shy;ка Вашего па&shy;ке&shy;та до&shy;ку&shy;мен&shy;тов на соот&shy;ветствие</li>
                                <li>По&shy;мощь в под&shy;боре авиа&shy;би&shy;ле&shy;та</li>
                                <li>По&shy;мощь в офор&shy;мле&shy;нии меди&shy;цин&shy;ской стра&shy;хов&shy;ки</li>
                            </ol>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h1>Гарантия возврата денег</h1><br>
                            <h2>40 000 тенге</h2>
                            <ol>
                                <li>За&shy;пол&shy;не&shy;ние ан&shy;ке&shy;ты DS-160</li>
                                <li>Про&shy;вер&shy;ка на соот&shy;ветс&shy;твие фо&shy;то&shy;гра&shy;фии</li>
                                <li>Под&shy;го&shy;тов&shy;ка к со&shy;бе&shy;се&shy;до&shy;ва&shy;нию</li>
                                <li>Под&shy;го&shy;тов&shy;ка пла&shy;теж&shy;но&shy;го по&shy;ру&shy;че&shy;ния для опла&shy;ты кон&shy;сульс&shy;ко&shy;го сбора США</li>
                                <li>Пре&shy;дос&shy;тав&shy;ле&shy;ние пол&shy;но&shy;го спис&shy;ка до&shy;ку&shy;мен&shy;тов со все&shy;ми образ&shy;ца&shy;ми</li>
                                <li>Про&shy;вер&shy;ка Вашего па&shy;ке&shy;та до&shy;ку&shy;мен&shy;тов на соот&shy;ветс&shy;твие</li>
                                <li>По&shy;мощь в под&shy;боре авиа&shy;би&shy;ле&shy;та</li>
                                <li>По&shy;мощь в офор&shy;мле&shy;нии ме&shy;дицин&shy;ской стра&shy;хов&shy;ки</li>
                            </ol>
                        </div>
                    <!-- </center> -->
                </div>
                <div class='row'>
                    <center>
                        <a href="#contact" type='button' class='btn'>Заказать звонок</a>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section id='about'>
        <div class='cover'>
            <div class='container'>
                <div class='row'>
                    <center>
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            
                        </div>
                    </center>
                </div>
                <div class='row'>
                    <div class='col-md-6 col-sm-6 col-xs-12'>
                        <h1 id='h11'>О нас</h1>
                        <p id='p1'>Мы реализуем ваши мечты в реальность</p>
                        <p id='p2'>
                            Цен&shy;тр ви&shy;зо&shy;вой под&shy;держ&shy;ки «Take Visa»!<br>
                            Виза в лю&shy;бую стра&shy;ну от 5 часов без предо&shy;платы и скры&shy;тых комис&shy;сий<br>
                            Пред&shy;ла&shy;га&shy;ем ва&shy;ше&shy;му вни&shy;ма&shy;нию ши&shy;ро&shy;кий спектр ус&shy;луг<br>
                            Та&shy;ких как:<br>
                            Визы в США (Тур, Студенческая, Языковые курсы), Ка&shy;на&shy;ду, Ев&shy;ро&shy;пу (Шен&shy;ген), Англию и в дру&shy;гие стра&shy;ны ми&shy;ра. <br>
                            Мо&shy;жем сде&shy;лать ви&shy;зы, в лю&shy;бом нап&shy;рав&shy;лении, в ос&shy;нов&shy;ном большой спросна визы: США, Европа (Шен&shy;ген), Ка&shy;нада, Англия. <br>
                            Пре&shy;дос&shy;тав&shy;ле&shy;ние всех па&shy;ке&shy;тов до&shy;ку&shy;мен&shy;тов! <br>
                            Обучение за рубежом (Европа, Англия, США, Германия, Китай и многое другое)<br>
                            Язы&shy;ко&shy;вые кур&shy;сы за ру&shy;бе&shy;жом (от 2-х не&shy;дель до 10 лет)<br>
                            Кур&shy;сы ан&shy;глийс&shy;ко&shy;го язы&shy;ка в на&shy;шем цен&shy;тре!
                        </p>
                    </div>
                    <center>
                        <div class='col-md-6 col-sm-6 col-xs-12'>
                            <h1 id='h12'>Сейткерим Ануар</h1>
                            <h2>- Визовый эксперт</h2>
                            <img src="img/anuar.jpg" class='img-responsive'>
                        </div>
                    </center>
                    <!-- <div class='col-md-4 col-sm-4 col-xs-12'>
                        <address>
                            <b>Контакты</b><br>
                              +7-707-825-49-54<br>
                              Г.Алматы. Коктем 2, дом 1<br>
                             BKUNITY2016@gmail.com
                        </address>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- <section id='team'>
        <div class='container'>
            <center>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12'>
                        <h1>Сейткерим Ануар</h1>
                        <h2>- Визовый эксперт</h2>
                        <img src="img/anuar.jpg" class='img-responsive'>
                    </div>
                </div>
            </center>
            <div class='row'>
                <center>
                    <div class='col-md-12 col-sm-12 col-xs-12'>
                        Наша команда
                    </div>
                </center>
            </div>
            <div class='row'>
                <center>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <img src="img/nursultan.jpg" class='img-responsive'>
                        <h1>БОЛАТБАЕВ НУРСУЛТАН</h1>
                        <p>МЕНЕДЖЕР</p>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <img src="img/kanat.jpg" class='img-responsive'>
                        <h1>КАНАТ ОРМАНОВ</h1>
                        <p>ЭКСПЕРТ ПО ВИЗАМ</p>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12'>
                        <img src="img/bolat.jpg" class='img-responsive'>
                        <h1>МЫЛТЫКБАЕВ БОЛАТ</h1>
                        <p>ЭКСПЕРТ ПО ВИЗАМ</p>
                    </div>
                </center>
            </div>
        </div>
    </section> -->
    

    <section id='review-header'>
        <div class='container-fluid'>
            <div class='row'>
                <center>
                    <div class='col-md-12 col-sm-12 col-xs-12'>
                        <h1>
                            Отзывы наших клиентов
                        </h1>
                        <p>Все наши клиенты остались довольными.</p>
                    </div>
                </center>
            </div>
        </div>
    </section>
    <section id='reviewV'>
        <div class='container'>
            <div class='row'>
                <center>
                    <div class='col-md-6 col-sm-6 col-xs-12'>
                        <video class='reviewV-video' controls>
                          <source src="video/v1.mp4" type="video/mp4">
                          Your browser does not support HTML5 video.
                        </video>

                    </div>
                    <div class='col-md-6 col-sm-6 col-xs-12'>
                        <video class='reviewV-video' controls>
                          <source src="video/v2.mp4" type="video/mp4">
                          Your browser does not support HTML5 video.
                        </video>
                    </div>

                </center>
            </div>
        </div>
    </section>
    <!-- <section id='review'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class='review-txt'>
                        Ребята работают на отлично! Всё сделали в срок и без проблем! Спасибо, если еще нам понадобится помощь в этой сфере, будем обращаться только к вам! Молодцы! Благодарим всех сотрудников визового центра за высокий профессионализм. Желаем процветания и высоких достижений в работе.
                    </div>
                    <div class='review-author'>
                        <span class='avatar'>
                            <img src="img/avatar/aimurat.jpeg" class='img-circle'>
                        </span>
                        <span class='name'>
                            АЙМУРАТ КОПЕРГЕН
                        </span>
                    </div>
                </div>
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class='review-txt'>
                        Я в восторге от сервиса визового центра VISAWAY! Очень быстро получил американсскую визу на 5 лет. Гарантированно и на нужный срок. Виза в Америку в кармане! Спасибо БОЛЬШОЕ! Все на высшем уровне! Буду советовать друзьям
                    </div>
                    <div class='review-author'>
                        <span class='avatar'>
                            <img src="img/avatar/tima.jpeg" class='img-circle'>
                        </span>
                        <span class='name'>
                            ТИМУР МАТКАСИМОВ
                        </span>
                    </div>
                </div>
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class='review-txt'>
                        Выражаю благодарность визовому центру VISAWAY и всем его сотрудникам за помощь в быстром оформлении американской визы. Все было получено в срок! Будем обращаться еще!
                    </div>
                    <div class='review-author'>
                        <span class='avatar'>
                            <img src="img/avatar/danabek.jpeg" class='img-circle'>
                        </span>
                        <span class='name'>
                            ДАНАБЕК ЖУСУПОВ
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id='contact'>
        <div class='cover'>
            <div class='container'>
                <div class='row'>
                    <center>
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            <p>Контакты</p>
                            <address>
                                <!-- Мы находимся по адресу: Алматы, Бизнес-центр "Евразия"<br>
                                (вход со стороны FitnessBlitz), 3 этаж, офис 311<br><br class='hidden-xs'>
                                Режим работы офиса: с понедельника по пятницу
                                с 9:00 до 19:00 -->
                                Менеджер : +77079959595
                            </address> 
                        </div>
                    </center>
                </div>
                <div class='row' style='margin-bottom: 10%;'>
                    <center>
                        <div class='col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12'>
                            <p>ЗАКАЖИТЕ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ ВИЗОВОГО МЕНЕДЖЕРА</p>
                              <form autocomplete="off" method="post" action='index.php'>
                                <div class="form-group">
                                    <input type="text" name='name' class="form-control" required placeholder="Ваше имя*">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='phone' class="form-control phone-mask" required placeholder="Ваш телефон*">
                                </div>
                                <input type="hidden" name="hidden" value='hid'>
                                <button type="submit" class="btn btn-primary btn-lg" name='submit'>Оставить заявку</button>
                             </form>
                        </div>
                        <!-- <div class='col-md-6 col-sm-6 col-xs-12' style='overflow-x:auto;'>
                            <div id="map"></div>
                        </div> -->
                    </center>
                </div>
            </div>
        </div>
    </section>
    <section id='footer'>
        <div class='container'>
            <div class='row'>
                <center>
                    <dir class='col-md-12 col-sm-12 col-xs-12'>
                        <h5>
                            <a href="http://roteza.kz/" style='color:#FFF57C;'>Cайт разработан студией <u>Roteza.kz</u></a> 
                        </h5> 
                    </dir>
                </center>
            </div>
        </div>
    </section>

    <a href="#main">
        <div class='scrolTop' id='sctp'>
        </div>
    </a>

    <!-- start video js -->
        <!-- Plyr core script -->
        <!-- <script src="js/plyr.js"></script> -->

        <!-- Docs script -->
        <!-- <script src="js/demo.js"></script> -->

        <!-- Rangetouch to fix <input type="range"> on touch devices (see https://rangetouch.com) -->
        <!-- <script src="https://cdn.rangetouch.com/0.0.9/rangetouch.js" async></script> -->

        <!-- Sharing libary (https://shr.one) -->
        <!-- <script src="https://cdn.shr.one/0.1.9/shr.js"></script> -->
        <script>if(window.shr) { window.shr.setup({ count: { classname: 'btn__count' } }); }</script>
    <!-- end vieo js -->

    <script type="text/javascript" src="js/less.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='js/story-box.min.js'></script>
    <script src='js/story-box-uncompressed.js'></script>

    <script src='js/scripts.js'></script>
    <script src='js/placeholdem.min.js'></script>
    <script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src='js/waypoints.min.js'></script>
    <script src='js/slick.min.js'></script>
    <!-- <script src="js/npm.js"></script> -->
    <script src="greensock-js/src/uncompressed/jquery.gsap.js"></script>
    <script src="greensock-js/src/uncompressed/TweenMax.js"></script>
    <script type="text/javascript">
        
        //     var tl = new TimelineLite, 
        //     mySplitText = new SplitText("#h1test", {type:"words,chars"}), 
        //     chars = mySplitText.chars; //an array of all the divs that wrap each character

        // TweenLite.set("#h1test", {perspective:400});

        // tl.staggerFrom(chars, 1, {opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:Back.easeOut}, 0.1, "+=0");

        $(".cb-slideshow li span").css("height", "100%");
        $(".navbar .navbar-collapse ul li a").click(function(){
            setTimeout(function(){ 
                $('.navbar .navbar-collapse ul li a').blur(); 
            }, 1000);
        });
        var torf = true;
        var vv = true;
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            // var y1 = $("#services2").position();
            // var y2 = $("#about").position();
            // var y3 = $("#price").position();
            // var w1 = $("#services").height();
            // var y4 = $("#services").position();
            // console.log("width : "+w1);
            // console.log("Top #services2: " + (y1.top-y));
            // console.log("Top #about: " + (y2.top-y));
            // console.log(torf);
            // var el1y = y1.top-y;
            // var el2y = y2.top-y;
            // var el4y = y4.top-y+w1;
            // if(el1y<=0 && torf){
            //     $('#services2').css({'position':'fixed','top':'0','left':'0','z-index':'10000','width':'100%','background':'none'});
            //     if ($('#services2temp').length==0)
            //     {
            //         $('#services2').after('<div id="services2temp" style="background:url(\'img/about_bg.jpg\') center top/cover no-repeat; width:100%; height:'+($("#services2").height())+'px;"></div>');
            //     }
            //     console.log("Top #price: " + (y3.top-y));
            // }
            // if(el2y<=0){
            //     torf = false;
            //     $('#services2').css({'position':'static','z-index':'0','margin-top':'0px','margin':'0','background':"url('img/about_bg.jpg') center top/cover no-repeat" });
            //     $('#services2temp').remove();
            // }
            // else if(el4y>0){
            //     torf = true;
            //     $('#services2').css({'position':'static','z-index':'0','background':"url('img/about_bg.jpg') center top/cover no-repeat"});
            //     $('#services2temp').remove();
            // }
            // var yy = $('#utp').position();
            // var textY = yy.top-y;
            // if(textY<=400 && textY>=200 && vv){
            //     vv = false;
            //     var mySplitText = new SplitText("#h1test",{type:"words, chars"});
            //     TweenMax.staggerFrom(mySplitText.chars,1,{opacity:0, rotation:10, y:-100,easy:Bounce.easeOut},0.05);

            //     var mySplitText2 = new SplitText("#ptest",{type:"words, chars"});
            //     TweenMax.staggerFrom(mySplitText2.chars,1,{opacity:0, rotation:10, y:-50,easy:Bounce.easeOut},0.05);
            // }
            // if(textY<=0 && vv==false){
            //     vv = true;
            // }
          
          console.log(y);
          if (y > 10) {
            $('.navbar').addClass("scrolled");
            $('.scrolTop').css("display","block");
          } else {
            $('.scrolTop').css("display","none");
          }
        });
    </script>
</body>

</html>
