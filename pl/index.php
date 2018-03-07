<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="pl" prefix="og: http://ogp.me/ns#">
<head>
    <title>Symetrland - create future</title>
    <meta property="og:title" content="Symetrland - create future"/>
    <meta property="og:url" content="http://symetrland.com/"/>
    <meta property="og:image" content="http://symetrland.com/images/banner.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Symetrland - Adam Michna Web developer">
    <meta name="author" content="Adam Michna">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Adam Michna, symetrland, Yii, Yii2, Symfony2, PHP, developer, JQuery, Web"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link rel="alternate" hreflang="es" href="http://symetrland.com/es/" />
    <link rel="alternate" hreflang="en" href="http://symetrland.com/" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <!--fonts-->
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="icon" type="img/ico" href="images/favicon.ico">

    <!--//fonts-->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--start-banner-->
<div class="header" id="home">
    <div class="header-top">
        <a href="index.php"><img src="images/logo-2.png" alt=""/></a>

        <h2>SYMETRLAND</h2>

        <h1>Create future</h1>

        <div class="header-top-bottom">
            <a href="#about" class="scroll"><img src="images/logo-3.png" alt=""/></a>
        </div>
    </div>
    <div class="header-home">
        <div class="fixed-header">
            <div class="h_menu4"><!-- start h_menu4 -->
                <div class="header-left">
                    <div class="header-left-logo">
                        <a href="index.php"><img src="images/logo-1.png" alt=""/></a>
                    </div>
                    <div class="header-left-text">
                        <a class="toggleMenu" href="#"><img src="images/menu-icon.png" alt=""/></a>
                        <ul class="nav">
                            <li><a href="#about" class="scroll">O MNIE</a></li>
                            <li><a href="#skills" class="scroll">UMIEJĘTNOŚCI</a></li>
                            <li><a href="#contact" class="scroll">KONTAKT</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <script type="text/javascript" src="js/nav.js"></script>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $(".scroll").click(function (event) {
                                event.preventDefault();
                                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                            });
                        });
                    </script>
                    <!--script-->
                    <script>
                        $(document).ready(function () {
                            $(".nav li a").click(function () {
                                $(this).parent().addClass("active");
                                $(this).parent().siblings().removeClass("active");
                            });
                        });
                    </script>
                    <!--script-for-sticky-nav-->
                    <script>
                        $(document).ready(function () {
                            var navoffeset = $(".header-home").offset().top;
                            $(window).scroll(function () {
                                var scrollpos = $(window).scrollTop();
                                if (scrollpos >= navoffeset) {
                                    $(".header-home").addClass("fixed");
                                } else {
                                    $(".header-home").removeClass("fixed");
                                }
                            });

                        });
                    </script>
                    <!--/script-for-sticky-nav-->
                </div>
                <div class="header-right">
                    <ul class="nav">
                        <li><a href="/" class="language">EN</a></li>
                        <li><a href="/es" class="language">ES</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end h_menu4 -->
        </div>
    </div>
</div>
<!--end-banner-->
<!--start-about-->
<div class="about" id="about">
    <div class="container">
        <div class="about-main">
            <h3>O MNIE</h3>

            <div class="about-top">
                <!--						<div class="col-md-4 about-left">
                                            <img src="images/abt-1.png" alt=""/>
                                            <h4>Cody Hawl</h4>
                                            <h5>ART DIRECTOR</h5>
                                            <ul>
                                                <li><a href="#"><span class="twit"> </span></a></li>
                                                <li><a href="#"><span class="sap"> </span></a></li>
                                            </ul>
                                        </div>-->
                <div class="col-md-offset-4 col-md-4 about-left">
                    <img src="/images/abt-1.png" alt=""/>
                    <h4>Adam Michna</h4>
                    <h5>WEB DEVELOPER</h5>
                    <ul>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-about-->
<!--start-what-->
<div class="what" id="work">
    <div class="container">
        <div class="what-main">
            <h3>KIM JESTEM?</h3>

            <div class="what-top">
                <div class="col-md-6 what-top-left">
                    <h4><span>Jestem</span> Web developerem</h4>

                    <p>Adam. Jest uważany za najbardziej kreatywną osobę w swojej dziedzinie. Chce odkryć wszystkie
                        dotychczas niezgłębione tajemnice. Nie tylko nie widzi żadnych ograniczeń w technologii, ale
                        również w otaczającym świecie. Kocha podróże, góry wyzwania i nowe doświadczenia. W wolnym
                        czasie podróżuje autostopem i zwiedza świat. Dla niego, nie ma rzeczy niemożliwych.</p>
                </div>
                <div class="col-md-6 what-top-right">
                    <img src="images/service-1.png" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-what-->
<!--start-project-->
<!--end-price-->
<!--start-skills-->
<div id="skills" class="quality">
    <div class="container">
        <div class="quality-main">
            <h3>Dobra jakość</h3>

            <p>MOJE UMIEJĘTNOŚCI </p>

            <div class="quality-top">
                <div class="quality-top-one">
                    <span> </span>

                    <div class="quality-bottom quality-bottom-rsh">
                        <i class="fa fa-wrench"></i>


                        <p>Yii 2 Framework</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span class="one"> </span>

                    <div class="quality-bottom quality-bottom-symfony">
                        <i class="fa fa-wrench"></i>

                        <p>Symfony 2</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span> </span>

                    <div class="quality-bottom quality-bottom-database">
                        <i class="fa fa-database"></i>


                        <p>MySQL and Postgres</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span class="one"> </span>

                    <div class="quality-bottom quality-bottom-php">
                        <i class="fa fa-server"></i>


                        <p>PHP 5.6</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span> </span>

                    <div class="quality-bottom quality-bottom-luh">
                        <i class="fa fa-desktop"></i>


                        <p>JQuery</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-skill-->
<!--start-clients-->
<!--end-clients-->
<!--Slider-Starts-Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider5").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<!--start-blog-->
<!--end-blog-->
<!--start-contact-->
<div class="touch" id="contact">
    <div class="container">
        <div class="touch-main">

            <h3>Kontakt</h3>
            <?php
            if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['subject']) || isset($_POST['message'])) {
                $to = "admin@symetrland.com";
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $name . "Send \n" . $_POST['message'] . "\nFrom: " . $email;
                    if (mail($to, $subject, $message)) : ?>
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            Email was sent.
                        </div>
                    <?php else : ?>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            Email sent error!
                        </div>
                    <?php endif; ?>
                <?php } else {
                    echo "Niekompletne dane.";
                }
            }

            ?>
            <div class="touch-top">

                <div class="col-md-6 touch-left">
                    <p>NAPISZ DO MNIE</p>

                    <form action="index.php#contact" method="POST">
                        <input type="text" name="name" class="active" placeholder="Imię" required="">
                        <input type="text" name="email" placeholder="Email" required="">
                        <input type="text" name="subject" placeholder="Temat" required="">
                        <textarea placeholder="Wiadomość" name="message" required=""></textarea>

                        <div class="sub-button">
                            <input type="submit" value="Wyślij">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 touch-right">
                    <div class="touch-right-bottom">
                        <div class="touch-right-top">
                            <i class="fa fa-map-marker"></i>

                            <h4><label>KRAKÓW, POLSKA</label></h4>
                        </div>
                        <div class="touch-right-top">
                            <i class="fa fa-envelope-o"></i>

                            <p>
                                <SCRIPT TYPE="text/javascript">
                                    var Base64 = {


                                        _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",


                                        decode: function (input) {
                                            var output = "";
                                            var chr1, chr2, chr3;
                                            var enc1, enc2, enc3, enc4;
                                            var i = 0;

                                            input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

                                            while (i < input.length) {

                                                enc1 = this._keyStr.indexOf(input.charAt(i++));
                                                enc2 = this._keyStr.indexOf(input.charAt(i++));
                                                enc3 = this._keyStr.indexOf(input.charAt(i++));
                                                enc4 = this._keyStr.indexOf(input.charAt(i++));

                                                chr1 = (enc1 << 2) | (enc2 >> 4);
                                                chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                                                chr3 = ((enc3 & 3) << 6) | enc4;

                                                output = output + String.fromCharCode(chr1);

                                                if (enc3 != 64) {
                                                    output = output + String.fromCharCode(chr2);
                                                }
                                                if (enc4 != 64) {
                                                    output = output + String.fromCharCode(chr3);
                                                }

                                            }

                                            output = Base64._utf8_decode(output);

                                            return output;

                                        },

                                        _utf8_decode: function (utftext) {
                                            var string = "";
                                            var i = 0;
                                            var c = c1 = c2 = 0;

                                            while (i < utftext.length) {

                                                c = utftext.charCodeAt(i);

                                                if (c < 128) {
                                                    string += String.fromCharCode(c);
                                                    i++;
                                                }
                                                else if ((c > 191) && (c < 224)) {
                                                    c2 = utftext.charCodeAt(i + 1);
                                                    string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                                                    i += 2;
                                                }
                                                else {
                                                    c2 = utftext.charCodeAt(i + 1);
                                                    c3 = utftext.charCodeAt(i + 2);
                                                    string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                                                    i += 3;
                                                }

                                            }

                                            return string;
                                        }

                                    }


                                    emailE = Base64.decode('<?= base64_encode('admin@symetrland.com') ?>')
                                    document.write(
                                        '<A href="mailto:' + emailE + '">'
                                        + emailE + '</a>'
                                    )
                                </SCRIPT>
                            </p>
                        </div>
                        <div class="touch-right-top">
                            <a href="https://www.linkedin.com/in/adammichna" target="_blank">
                                <i class="fa fa-linkedin-square"></i>
                            </a>

                            <p>
                                <a href=https://www.linkedin.com/in/adammichna" target="_blank">
                                    www.linkedin.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-contact-->
<!--start-footer-->
<div class="footer">
    <div class="container">
        <div class="footer-text">
            <p>Adam Michna <a href="http://symetrland.com/">SYMETRLAND</a></p>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                             style="opacity: 1;"> </span></a>
</div>
<!--end-footer-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-62849917-1', 'auto');
    ga('send', 'pageview');

    var ga1t = ga2t = ga3t = true;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        var ga1 = $('.about').position().top;
        var ga2 = $('.quality').position().top;
        var ga3 = $('.touch').position().top;
        if (ga1t && st > ga1) {
            ga('send', 'event', 'scroll to', 'Scroll to about');
            ga1t = false;
        }
        if (ga2t && st > ga2) {
            ga('send', 'event', 'scroll to', 'Scroll to quality');
            ga1t = false;
        }
        if (ga3t && st > ga3) {
            ga('send', 'event', 'scroll to', 'Scroll to touch');
            ga1t = false;
        }
    });
</script>
</body>
</html>