<?php include $_SERVER['DOCUMENT_ROOT'].'/include/topheader.php'; ?>
<title>Starbeam Studio — Обратная связь</title>
<meta name="keywords"
      content="starbeam studio web contact веб студия старбим казань kazan вишневского улица 24 контакты телефон номер офис карта 8432000414 2000414 88432000414 скайп skype имейл емэйл эмэйл эмейл емейл почта електронная обратная связь">
<meta name="description" content="Наш телефон: 8(843)200-04-14; Адрес: Казань, ул. Вишневского, д. 24, оф. 502;  E-mail: contact@starbeam.ru">

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/botheader.php'; ?>
<div id="columns">
    <div id="block5">
        <div class="c51 columnblock  unup">
            <div class="loader"></div>

            <div class="botshader">
                <div class="innertext">
                </div>
            </div>

            <div class="textwrap">
                <div class="textoverlay">
                    ОБРАТНАЯ СВЯЗЬ
                </div>
                <div class="columnsmalltext">
                    <noindex>#feedback</noindex>
                </div>

            </div>

            <div class="makeorderbtn_b">
                <div class="angle bigangle_b expandable">
                    <div class="angletext bigangletext_b expandcontent">ЗАКАЗАТЬ</div>
                    <div class="angleimg_b expandcontent"></div>
                    <div class="makeorder makeorder_b">
                        <h1 id="makeorderh1">Оставить заявку</h1>
                        <input type="text" id="email" placeholder="E-Mail:">
                        <button id="submit_email">
                            Оставить заяку
                        </button>
                        <h3 id="makeorderh3">Или оставьте свой телефон и мы перезвоним вам через минуту</h3>
                        <input type="text" id="phone" placeholder="Телефон:">
                        <button id="submit_call">Позвоните мне</button>
                        <div id="timing" class="timing2">00:60:00</div>
                        <div id="recallquestion">Мы дозвонились вам?</div>
                        <button id="recallbutton">Позвонить снова</button>
                        <div id="tnx">Спасибо! <br> Ожидайте сообщения</div>
                    </div>
                    <div class="angle closeangle_b">
                        <div class="angletext bigangletext closetext">ЗАКРЫТЬ</div>
                        <div class="angleimg closeimg"></div>
                    </div>
                </div>


            </div>

            <div class="overlayblack">

            </div>
        </div>

        <div class="c52 columnblock  unup">
            <div class="loader"></div>

            <div class="textwrap">
                <div class="textoverlay">
                    Связаться с нами
                </div>
                <div class="columnsmalltext">
                    Любым удобным вам способом
                </div>
            </div>

            <div class="overlayblack">

            </div>
        </div>
        <div class="c53 columnblock  unup">
            <div class="loader"></div>
            <div class="textwrap">
                <div class="textoverlay">
                    Наши контакты
                </div>
                <div class="columnsmalltext">
                    Свяжитесь с нами сами
                </div>
            </div>

            <div class="overlayblack"></div>
        </div>
        <div class="c54 columnblock  unup">
            <div id="contactsblock" class="topblock"><i class="fa fa-location-arrow" style="margin-right: 0.25vw;" aria-hidden="true"></i>Казань, Вишневского 24</div>
            <div class="loader"></div>
            <div id="map"></div>
            <script>
                function initMap() {
                    var map;
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 55.781092, lng: 49.145143},
                        zoom: 16,
                        mapTypeControl: true,
                        zoomControl: true,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.LEFT_BOTTOM
                        },
                        streetViewControl: true,
                        streetViewControlOptions: {
                            position: google.maps.ControlPosition.LEFT_TOP
                        },
                        styles: [
                            {
                                "featureType": "all",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "color": "#000000"
                                    },
                                    {
                                        "lightness": 13
                                    },
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#000000"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#144b53"
                                    },
                                    {
                                        "lightness": 14
                                    },
                                    {
                                        "weight": 1.4
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "color": "#18122b"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "labels.text",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ff0000"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape.man_made",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#272332"
                                    },
                                    {
                                        "lightness": 5
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text",
                                "stylers": [
                                    {
                                        "visibility": "simplified"
                                    },
                                    {
                                        "color": "#eeecec"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "weight": "0.82"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#000000"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#0b434f"
                                    },
                                    {
                                        "lightness": 25
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#23526f"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "lightness": 16
                                    },
                                    {
                                        "color": "#1f2446"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#4d4c53"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit.station",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "color": "#021019"
                                    }
                                ]
                            }
                        ]
                    });
                    var marker = new google.maps.Marker({
                        position: {lat: 55.781092, lng: 49.145143},
                        map: map,
                        icon: '/images/icon_i.png',
                        title: 'Starbeam Studio',

                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBmBeodGP7j9bmSFGrHpGuVnuBTCHQxG8&callback=initMap&language=ru"
                    async defer></script>

            <div class="overlayblack"></div>
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php'; ?>