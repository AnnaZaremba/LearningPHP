<?php
include_once 'KontaktWalidator.php';
include_once 'KontaktWysylka.php';

$kontaktWalidator = new KontaktWalidator();
$kontaktWysylka = new KontaktWysylka();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARTIFICIUM</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel='stylesheet' id='camera-css' href='css/camera.css' type='text/css' media='all'>

    <link rel="stylesheet" type="text/css" href="css/slicknav.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"
          charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet'
          type='text/css'>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.min.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script src="js/sorting.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.js" type="text/javascript"></script>
    <script src="js/montujemymeble.js" type="text/javascript"></script>
    <!--script type="text/javascript" src="js/jquery.nav.js"></script-->


    <script>
        jQuery(function () {
            jQuery('#camera_wrap_1').camera({
                transPeriod: 500,
                time: 3000,
                height: '490px',
                thumbnails: false,
                pagination: true,
                playPause: false,
                loader: false,
                navigation: false,
                hover: false
            });
        });
    </script>

</head>
<body>

<!--home start-->

<div id="home">
    <div class="headerLine">
        <div id="menuF" class="default">
            <div class="container">
                <div class="row">
                    <div class="logo col-md-4">
                        <div>
                            <a href="#">
                                <img src="images/logoMM.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="navmenu" style="text-align: center;">
                            <ul id="menu">
                                <li class="active"><a href="#home">ARTIFICIUM</a></li>
                                <li><a href="#about">Oferta</a></li>
                                <li><a href="#project">Realizacje</a></li>
                                <li><a href="#news">Linki</a></li>
                                <li class="last"><a href="#contact">Kontakt</a></li>
                                <!--li><a href="#features">Features</a></li-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row wrap">
                <div class="col-md-12 gallery">
                    <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
                        <div data-thumb="" data-src="images/slides/blank.gif">
                            <div class="img-responsive camera_caption fadeFromBottom">
                                <h2>Nowoczesność</h2>
                            </div>
                        </div>
                        <div data-thumb="" data-src="images/slides/blank.gif">
                            <div class="img-responsive camera_caption fadeFromBottom">
                                <h2>Profesjonalizm</h2>
                            </div>
                        </div>
                        <div data-thumb="" data-src="images/slides/blank.gif">
                            <div class="img-responsive camera_caption fadeFromBottom">
                                <h2>Styl</h2>
                            </div>
                        </div>
                    </div><!-- #camera_wrap_1 -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 project">
                <h4>Doradzamy</h4>
                <p>tak, by uniknąć np. niezabudowanych przestrzeni. Doskonale radzimy sobie z rurami oraz przeróbkami
                    szafek. </p>
            </div>
            <div class="col-md-4 project">
                <h4>Projektujemy</h4>
                <p> wysokiej jakości zabudowy, szafy oraz garderoby. W naszej ofercie znajdują się zarówno meble
                    kuchenne o stylowym i nowoczesnym wyglądzie oraz takie, które są oparte na własnych
                    lub wykonanych przez klienta projektach. </p>
            </div>
            <div class="col-md-4 project">
                <h4 style="margin-left: 20px;">Montujemy</h4>
                <p>meble na terenie Trójmiasta (Gdańsk, Sopot, Gdynia) oraz okolic w promieniu 150 kilometrów.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 cBusiness">
                <h4>Sami wykonujemy pomiary i ustalamy czas montażu aby uniknąć pośpiechu,
                    <p>który ma zły wpływ na jakość wykonanych prac.</p>
                    <p>10% tańszy montaż niż bezpośrednio w IKEA przy zamówieniu przez telefon.</p></h4>
            </div>
        </div>
    </div>
</div>

<!--o nas start-->

<div id="about">
    <div class="line2">
        <div class="container">
            <div class="row Fresh">
                <div class="col-md-4 Des">
                    <i class="fa fa-home"></i>
                    <h4>Profesjonalny montaż mebli</h4>
                    <p>Pomiar, doradztwo, pomoc w zakupach, transport.
                        Kuchnie z indywidualnym projektem.</p>
                </div>
                <div class="col-md-4 Ver">
                    <i class="fa fa-gavel"></i>
                    <h4>Zabudowa wnęk</h4>
                    <p>Wysokiej jakości szafy i garderoby - projektowanie i montaż</p>
                </div>
                <div class="col-md-4 Fully">
                    <i class="fa fa-plug"></i>
                    <h4>Instalacje wodne i elektryczne</h4>
                    <p>W razie potrzeby dokonujemy przeróbki instalacji wodnej i elektrycznej.
                        Posiadamy uprawnienia potrzebne do gwarancji AGD.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 cBusiness">
                <h4>W trakcie montażu jesteśmy elastyczni
                    i otwarci na zmiany mogące wpłynąć na komfort dalszego użytkowania.</h4>
            </div>
        </div>
    </div>
</div>
<!--project start-->
<div id="project">
    <div class="line3">
        <div class="container">
            <div id="project1"></div>
            <div class="row Ama">
                <div class="col-md-12">
                    <span name="projects" id="projectss"></span>
                    <h3>Realizacje i projekty</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <!-- filter_block -->
            <div id="options" class="col-md-12" style="text-align: center;">
                <ul id="filter" class="option-set" data-option-key="filter">
                    <li><a class="selected" href="#filter" data-option-value="*" class="current">Galeria</a></li>
                    <li><a href="#filter" data-option-value=".kuchnie">Kuchnie</a></li>
                    <li><a href="#filter" data-option-value=".zabudowy">Zabudowy</a></li>
                    <li><a href="#filter" data-option-value=".projekty">Projekty</a></li>
                </ul>
            </div><!-- //filter_block -->
            <div class="portfolio_block columns3   pretty" data-animated="fadeIn">
                <div class="element col-sm-4   gall zabudowy">
                    <a class="plS" href="images/prettyPhotoImages/zab1.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/zab1.jpg" vspace=10 hspace=10
                             alt="zabudowa"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall kuchnie">
                    <a class="plS" href="images/prettyPhotoImages/2.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/2.jpg" vspace=10 hspace=10
                             alt="kuchnia"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall projekty">
                    <a class="plS" href="images/prettyPhotoImages/inst2.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/inst2.jpg" vspace=10
                             hspace=10
                             alt="instalacja"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall  kuchnie">
                    <a class="plS" href="images/prettyPhotoImages/4.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/4.jpg" vspace=10 hspace=10
                             alt="kuchnia"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall  kuchnie">
                    <a class="plS" href="images/prettyPhotoImages/6.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/6.jpg" vspace=10 hspace=10
                             alt="kuchnia"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall kuchnie">
                    <a class="plS" href="images/prettyPhotoImages/1.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/1.jpg" vspace=10 hspace=10
                             alt="kuchnia"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall  projekty">
                    <a class="plS" href="images/prettyPhotoImages/inst1.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/inst1.jpg" vspace=10
                             hspace=10
                             alt="instalacja"/>
                    </a>
                </div>
                <div class="element col-sm-4   gall kuchnie">
                    <a class="plS" href="images/prettyPhotoImages/5.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/5.jpg" vspace=10 hspace=10
                             alt="kuchnia"/>
                    </a>
                </div>
                <div class="element col-sm-4  gall zabudowy">
                    <a class="plS" href="images/prettyPhotoImages/zab2.jpg" rel="prettyPhoto[gallery2]">
                        <img class="img-responsive picsGall" src="images/prettyPhotoImages/zab2.jpg" vspace=10 hspace=10
                             alt="zabudowa"/>
                    </a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            jQuery(window).load(function () {
                items_set = [

                    {
                        category: 'branding',
                        lika_count: '77',
                        view_count: '234',
                        src: 'images/prettyPhotoImages/pic9.jpg',
                        title: 'Foil Mini Badges',
                        content: ''
                    },

                    {
                        category: 'polygraphy',
                        lika_count: '45',
                        view_count: '100',
                        src: 'images/prettyPhotoImages/pic7.jpg',
                        title: 'Darko – Business Card Mock Up',
                        content: ''
                    },

                    {
                        category: 'text_styles',
                        lika_count: '22',
                        view_count: '140',
                        src: 'images/prettyPhotoImages/pic8.jpg',
                        title: 'Woody Poster Text Effect',
                        content: ''
                    }


                ];
                jQuery('.portfolio_block').portfolio_addon({
                    type: 1, // 2-4 columns simple portfolio
                    load_count: 3,

                    items: items_set
                });
                $('#container').isotope({
                    animationOptions: {
                        duration: 900,
                        queue: false
                    }
                });
            });
        </script>
    </div>
</div>

<!--news start-->

<div id="news">
    <div class="line4">
        <div class="container">
            <div class="row Ama">
                <div class="col-md-12">
                    <h3>Firmy godne polecenia</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 cBusiness">
            <h4>
                <link>
                <a href="http://www.aeg-electrolux.pl/index.asp?prodid=&CurrentURL=/index.asp" target="_blank">AEG</a>
                <link>
                <a href="http://www.alveus.si/index.php?menu_item=PrvaStran&amp;lang_chg=po" target="_blank">ALVEUS</a>
                <link>
                <a href="http://www.amica.com.pl/" target="_blank">AMICA</a>
                <link>
                <a href="http://www.akpo.pl/" target="_blank">AKPO</a>
                <link>
                <a href="http://www.ardo.com.pl/" target="_blank">ARDO</a>
                <link>
                <a href="http://www.hotpoint-ariston.pl/ha/entryPoint.do" target="_blank">ARISTON</a>
                <link>
                <a href="http://www.baumatic-agd.pl/" target="_blank">BAUMATIC</a>
                <link>
                <a href="http://www.beko.com.pl/index.php" target="_blank">BEKO</a>
                <link>
                <a href="http://www.blomberg.pl/PL/Service/" target="_blank">BLOMBERG</a>
                <link>
                <a href="http://www.bomann.de/startseite/index.php" target="_blank">BOMANN</a>
                <link>
                <a href="http://www.bosch-home.pl/" target="_blank">BOSCH</a>
                <link>
                <a href="http://www.candy.pl/" target="_blank">CANDY</a>
                <link>
                <a href="http://www.climadiff.com/climadiff/fr/index.php" target="_blank">CLIMADIFF</a>
                <link>
                <a href="http://www.delonghi.kuchnie.pl/" target="_blank">DeLONGHI</a>
                <link>
                <a href="http://www.efbe-schott.de/" target="_blank">EFBE</a>
                <link>
                <a href="http://www.electrolux.pl/" target="_blank">ELECTROLUX</a>
                <link>
                <a href="http://www.ggv-exquisit.de/" target="_blank">EXQUISIT</a>
                <link>
                <a href="http://www.franke.pl/" target="_blank">FRANKE</a>
                <link>
                <a href="http://www.gorenje.pl/" target="_blank">GORENJE</a>
                <link>
                <a href="http://www.haier.pl/" target="_blank">HAIER</a>
                <link>
                <a href="http://www.hoover.pl/" target="_blank">HOOVER</a>
                <link>
                <a href="http://produkty.ikea.pl/km89/sprzet-agd" target="_blank">IKEA</a>
                <link>
                <a href="http://www.indesit.pl/" target="_blank">INDESIT</a>
                <link>
                <a href="http://www.lg.com/pl/sprzet-agd/" target="_blank">LG</a>
                <link>
                <a href="http://www.liebherr.pl/HG/pl-PL/default_pl-hg.wfw" target="_blank">LIEBHERR</a>
                <link>
                <a href="http://www.limatec-ag.ch/home/?L=3" target="_blank">LIMATEC</a>
                <link>
                <a href="http://www.mastercook.pl/" target="_blank">MASTERCOOK</a>
                <link>
                <a href="http://www.miele.pl/" target="_blank">MIELE</a>
                <link>
                <a href="http://www.oranier-kuechentechnik.de/de/startseite/" target="_blank">ORANIER</a>
                <link>
                <a href="http://www.panasonic.eu/whitegoods/" target="_blank">PANASONIC</a>
                <link>
                <a href="http://www.polar.com.pl/" target="_blank">POLAR</a>
                <link>
                <a href="http://www.samsung.com/pl/" target="_blank">SAMSUNG</a>
                <link>
                <a href="http://pl.severin.dimento.com/" target="_blank">SEVERIN</a>
                <link>
                <a href="http://www.siemens-home.pl/" target="_blank">SIEMENS</a>
                <link>
                <a href="http://www.teka.com/html/pl/home.php" target="_blank">TEKA</a>
                <link>
                <a href="http://www.wamslerweb.de/" target="_blank">WAMSLER</a>
                <link>
                <a href="http://www.whirlpool.pl/" target="_blank">WHIRPOOL</a>
                <link>
                <a href="http://www.zanussi.pl/" target="_blank">ZANUSSI</a>
            </h4>
        </div>
    </div>
</div>

<!--contact start-->

<div id="contact">
    <div class="line5">
        <div class="container">
            <div class="row Ama">
                <div class="col-md-12">
                    <h3>Masz pytania?</h3>
                    <p>Napisz do nas</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $formularzWypelniony = false;

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
            $formularzWypelniony = true;
        }

        if ($formularzWypelniony) {
            $imie = $_POST['name'];
            $email = $_POST['email'];
            $temat = $_POST['subject'];
            $tresc = $_POST['message'];

            $komunikatyBledu = [];
            if (!$kontaktWalidator->sprawdzEmail($email)) {
                $komunikatyBledu[] = "Niepoprawny adres e-mail";
            }

            if (!$kontaktWalidator->sprawdzImie($imie)) {
                $komunikatyBledu[] = "Niepoprawne imię";
            }
            if (!$kontaktWalidator->sprawdzTemat($temat)) {
                $komunikatyBledu[] = "Niepoprawny temat";
            }

            if (!$kontaktWalidator->sprawdzTresc($tresc)) {
                $komunikatyBledu[] = "Niepoprawna treść";
            }

            ?>
            <div class="row">
                <div class="col-md-9 col-xs-12 forma" style="color: #1c1c1c;">
                    <?php
                    if (count($komunikatyBledu) > 0) {

                        foreach ($komunikatyBledu as $value) {
                            echo "<div style='font-size: large;'>" . $value . "</div>";
                        }
                    } else {
                        if ($kontaktWysylka->wyslijMaila($temat, $tresc, $imie, $email)) {
                            echo "Wiadomość została wysłana - dziekujemy!";
                        } else {
                            echo "Błąd wysyłania";
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="row">
                <div class="col-md-9 col-xs-12 forma">
                    <form method="post" id="formularz_kontaktowy" action="montujemy_meble_index.php">
                        <input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Imię *'/>
                        <input type="text" class="col-md-6 col-xs-12 Email" name='email' placeholder='Email *'/>
                        <input type="text" class="col-md-12 col-xs-12 Subject" name='subject' placeholder='Temat'/>
                        <input type="hidden" name="access" value="irregeheim">
                        <textarea type="text" class="col-md-12 col-xs-12 Message" name='message'
                                  placeholder='Wiadomość *'></textarea>
                        <div class="cBtn col-xs-12">
                            <ul>
                                <li class="clear"><span><i class="fa fa-times"></i>Wyczyść</span></li>
                                <li class="send"><span><i class="fa fa-share"></i>Wyślij wiadomość</span></li>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="col-md-3 col-xs-12 cont">
                    <ul>
                        <li>Przedsiębiorstwo</li>
                        <li>Jan</li>
                        <li>ul.</li>
                        <li>80-811 Gdańsk</li>
                        <li>tel.</li>
                        <li>e-mail:</li>
                    </ul>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

    <div class="line7">
        <div class="container">
            <div class="row footer">

            </div>
        </div>
    </div>

    <div class="lineBlack">
        <div class="container">
            <div class="row downLine">
                <div class="col-md-6 text-left copy">
                    <span class="copyright">Copyright &copy; <a href="http://marceen.pl"
                                                                target="_blank">Anna Zaremba</a> 2017</span>
                </div>
                <div class="col-md-6 text-right dm">
                    <ul id="downMenu">
                        <li class="active"><a href="#home">ARTIFICIUM</a></li>
                        <li><a href="#about">Oferta</a></li>
                        <li><a href="#project1">Realizacje</a></li>
                        <li><a href="#news">Linki</a></li>
                        <li class="last"><a href="#contact">Kontakt</a></li>
                        <!--li><a href="#features">Features</a></li-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script>
    $(document).ready(function () {
        $(".bhide").click(function () {
            $(".hideObj").slideDown();
            $(this).hide(); //.attr()
            return false;
        });
        $(".bhide2").click(function () {
            $(".container.hideObj2").slideDown();
            $(this).hide(); // .attr()
            return false;
        });

        $('.heart').mouseover(function () {
            $(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
        }).mouseout(function () {
            $(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
        });

        function sdf_FTS(_number, _decimal, _separator) {
            var decimal = (typeof(_decimal) != 'undefined') ? _decimal : 2;
            var separator = (typeof(_separator) != 'undefined') ? _separator : '';
            var r = parseFloat(_number)
            var exp10 = Math.pow(10, decimal);
            r = Math.round(r * exp10) / exp10;
            rr = Number(r).toFixed(decimal).toString().split('.');
            b = rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "\$1" + separator);
            r = (rr[1] ? b + '.' + rr[1] : b);

            return r;
        }

        setTimeout(function () {
            $('#counter').text('0');
            $('#counter1').text('0');
            $('#counter2').text('0');
            setInterval(function () {

                var curval = parseInt($('#counter').text());
                var curval1 = parseInt($('#counter1').text().replace(' ', ''));
                var curval2 = parseInt($('#counter2').text());
                if (curval <= 707) {
                    $('#counter').text(curval + 1);
                }
                if (curval1 <= 12280) {
                    $('#counter1').text(sdf_FTS((curval1 + 20), 0, ' '));
                }
                if (curval2 <= 245) {
                    $('#counter2').text(curval2 + 1);
                }
            }, 2);

        }, 500);
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#menu').slicknav();

    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        var $menu = $("#menuF");

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100 && $menu.hasClass("default")) {
                $menu.fadeOut('fast', function () {
                    $(this).removeClass("default")
                        .addClass("fixed transbg")
                        .fadeIn('fast');
                });
            } else if ($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast', function () {
                    $(this).removeClass("fixed transbg")
                        .addClass("default")
                        .fadeIn('fast');
                });
            }
        });
    });
    //jQuery
</script>
<script>
    /*menu*/
    function calculateScroll() {
        var contentTop = [];
        var contentBottom = [];
        var winTop = $(window).scrollTop();
        var rangeTop = 200;
        var rangeBottom = 500;
        $('.navmenu').find('a').each(function () {
            contentTop.push($($(this).attr('href')).offset().top);
            contentBottom.push($($(this).attr('href')).offset().top + $($(this).attr('href')).height());
        })
        $.each(contentTop, function (i) {
            if (winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom) {
                $('.navmenu li')
                    .removeClass('active')
                    .eq(i).addClass('active');
            }
        })
    }
    ;

    $(document).ready(function () {
        calculateScroll();
        $(window).scroll(function (event) {
            calculateScroll();
        });
        $('.navmenu ul li a').click(function () {
            $('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
            return false;
        });
    });
</script>
<script type="text/javascript" charset="utf-8">

    jQuery(document).ready(function () {
        jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true,
            social_tools: ''
        });

    });
</script>
</body>

</html>