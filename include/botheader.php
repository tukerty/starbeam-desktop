
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<!-- Styles -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900&subset=latin,cyrillic'
      rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.min.css">
<!-- /Styles -->



<!-- Scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/mobile_check.js"></script>
<script type="text/javascript" src="/js/jquery.scrollbar.min.js"></script>
<script src="/js/mask.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/ajax.js"></script>
<script>
    var called = 0;
    $('#phone').mask('+7(000)000-00-00');

    /*function setmarkers() {
        var textnav = document.createElement('div');
        textnav.className = 'textnav';

        var toper = document.createElement('div');
        toper.className = 'bookmark';
        toper.style.top = 0 + 'px';
        var intext = document.createTextNode('Наверх');
        var textwraper = document.createElement('div');
        textwraper.className = 'textwraper';
        textwraper.appendChild(intext);
        toper.appendChild(textwraper);
        toper.onclick = function () {
            document.getElementsByClassName('scroll-content')[0].scrollTop = 0;
        };
        textnav.appendChild(toper);


        for (var i = 0; i < document.getElementsByClassName('h3').length; i++) {
            var nw = document.createElement('div');
            nw.className = 'bookmark';
            nw.style.top = 8 * (i + 1) + 'vh';
            var intext = document.createTextNode(document.getElementsByClassName('h3')[i].innerHTML);
            var textwraper = document.createElement('div');
            textwraper.className = 'textwraper';
            textwraper.appendChild(intext);
            nw.appendChild(textwraper);
            (function (j) {
                nw.onclick = function () {
                    document.getElementsByClassName('scroll-content')[0].scrollTop = document.getElementsByClassName('h3')[j].offsetTop;
                }
            })(i);
            textnav.appendChild(nw);
        }
        document.getElementsByClassName('contentblock')[0].appendChild(textnav);
    }*/ 
</script>
<!-- /Scripts -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter37798310 = new Ya.Metrika({
                    id: 37798310,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/37798310" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- VK.com pixel -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=angxzDNNIUUwBqm*I9TyB2*3PhXhc5BCpD14WbDPi9TTlEmESbftdJ4*vXUJYQW9zk3j8CdT0zqkJeIy2CPV0FNpG2AvACA75/vu3UGJXvbs62Zgbp99pKULPw1f8Fg9etI*w7578umUpLmq9SOX1rfUPIf0w4OIbaMi17j1x3U-&pixel_id=1000031422';</script>
<!-- /VK.com pixel -->

<!-- Google Analytics -->
<script> (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-79795022-1', 'auto');
ga('send', 'pageview'); </script>
<!-- /Google Analytics -->


</head>
<body>


<div id="shader">
    <div id="mainloader"></div>
</div>
<div id="lightboxshader">
    <div  id="lightboximg"></div>
    <div id="lightboxcloseangle">
        <div id="lightboxcloseangletext">ЗАКРЫТЬ</div>
        <div id="lightboxcloseangleicon"></div>
    </div>
</div>
<div id="arrowl" class="arrowscroll"></div>
<div id="arrowr" class="arrowscroll"></div>
<div id="logo"></div>
<div id="logo_i"></div>