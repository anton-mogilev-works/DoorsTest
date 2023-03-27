<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Магазин дверей</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Конфигуратор входной двери</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Параметры</span>
                </h4>
                <form action="/doorParams" method="post">
                    @csrf
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Цвет покраски:</h6>
                            </div>
                            <span>
                                <select class="custom-select" name="painting-color" id="painting-color" required>
                                    <option value="">Выбор...</option>
                                    <option data-painting-color="#8B0000" data-price="50" value="50">Красный
                                    </option>
                                    <option data-painting-color="#00008B" data-price="60" value="60">Синий</option>
                                    <option data-painting-color="#006400" data-price="70" value="70">Зелёный
                                    </option>
                                    <option data-painting-color="#FFD700" data-price="80" value="80">Жёлтый</option>
                                </select>
                            </span>

                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Цвет плёнки:</h6>

                            </div>
                            <span>
                                <select class="custom-select" name="skin-color" id="skin-color" required>
                                    <option value="">Выбор...</option>
                                    <option data-skin-color="#8B0000" data-price="20" value="50">Красный</option>
                                    <option data-skin-color="#00008B" data-price="30" value="60">Синий</option>
                                    <option data-skin-color="#006400" data-price="40" value="70">Зелёный</option>
                                    <option data-skin-color="#FFD700" data-price="50" value="80">Жёлтый</option>
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Цвет ручки:</h6>

                            </div>
                            <span>
                                <select class="custom-select" id="doorhandle-color" required>
                                    <option value="">Выбор...</option>
                                    <option data-doorhandle-color="#8B0000" data-price="40" value="40">Красный
                                    </option>
                                    <option data-doorhandle-color="#00008B" data-price="40" value="40">Синий
                                    </option>
                                    <option data-doorhandle-color="#006400" data-price="40" value="40">Зелёный
                                    </option>
                                    <option data-doorhandle-color="#FFD700" data-price="40" value="40">Жёлтый
                                    </option>
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Ширина:</h6>
                            </div>
                            <span>
                                <select class="custom-select" id="door-width" required>
                                    <option value="">Выбор...</option>
                                    <option value="500" data-width="700">700 мм.</option>
                                    <option value="550" data-width="750">750 мм.</option>
                                    <option value="600" data-width="800">800 мм.</option>
                                    <option value="650" data-width="850">850 мм.</option>
                                    <option value="700" data-width="900">900 мм.</option>
                                    <option value="750" data-width="700">950 мм.</option>
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Высота:</h6>

                            </div>
                            <span>
                                <select class="custom-select" id="door-height" required>
                                    <option value="">Выбор...</option>
                                    <option value="1800" data-height="1800">1800 мм.</option>
                                    <option value="1900" data-height="1900">1900 мм.</option>
                                    <option value="1200" data-height="2000">2000 мм.</option>
                                    <option value="1300" data-height="2100">2100 мм.</option>
                                    <option value="1400" data-height="2200">2200 мм.</option>
                                    <option value="1500" data-height="2300">2300 мм.</option>
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Открывание:</h6>

                            </div>
                            <span>
                                <select class="custom-select" id="opening-side" required>
                                    <option value="">Выбор...</option>
                                    <option value="0">Левое</option>
                                    <option value="1">Правое</option>
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Аксессуары:</h6>
                            </div>
                            <span>
                                <select class="custom-select" id="accessories" required>
                                    <option value="">Выбор...</option>
                                    <option>Свет</option>
                                    <option>Геркон</option>
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Итого:</span>
                            <strong>$20<span> руб.</span></strong>
                        </li>
                    </ul>
                    <div class="input-group">
                        <button class="btn btn-primary btn-lg btn-block" id="sumbit-doors-params">Отправить
                            комплектацию</button>
                    </div>
                </form>
            </div>


            <div class="col-md-8 order-md-1">

                <form class="needs-validation" novalidate>
                    <div class="row" id="doors-maket">
                        <div class="col-md-6 mb-3">
                            <div id="door-outside"
                                style="border: 10pt solid; background-color: #eee; width: 200pt; height: 400pt;">
                                <div class="doorhandle"
                                    style="background-color: #aaa; margin: 160pt 20pt; width: 40pt; height: 10pt;">
                                </div>
                            </div>
                            <small>Вид снаружи</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div id="door-inside"
                                style="border: 10pt solid; background-color: #eee; width: 200pt; height: 400pt;">
                                <div class="doorhandle"
                                    style="background-color: #aaa; margin: 160pt 120pt; width: 40pt; height: 10pt;">
                                </div>
                            </div>
                            <small>Вид изнутри</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">2023 Тестовое задание</p>
        </footer>
    </div>

    <script src="/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/holder.min.js"></script>
    <script src="/js/html2canvas.min.js"></script>
    <script>
        $(window).on("load", function() {
            $('select#painting-color').change(function() {
                var paintingColor = $(this).find(':selected').data('painting-color');
                if (typeof paintingColor !== "undefined") {
                    $('div#door-outside').css('border-color', paintingColor);
                    $('div#door-inside').css('border-color', paintingColor);
                }
            });

            $('select#skin-color').change(function() {
                var skinColor = $(this).find(':selected').data('skin-color');
                if (typeof skinColor !== "undefined") {
                    $('div#door-outside').css('background-color', skinColor);
                    $('div#door-inside').css('background-color', skinColor);
                }
            });

            $('select#doorhandle-color').change(function() {
                var doorhandleColor = $(this).find(':selected').data('doorhandle-color');
                if (typeof doorhandleColor !== "undefined") {
                    $('div.doorhandle').css('background-color', doorhandleColor);
                }
            });

            $('button#sumbit-doors-params').click(function() {
                html2canvas(document.getElementById("doors-maket"), {
                        allowTaint: true,
                        useCORS: true,
                    })
                    .then(function(canvas) {
                        // window.open('', canvas.toDataURL("image/png", 0.5));
                        // window.open('', 'hello');
                        // let image = canvas.toDataURL("image/png", 0.5);
                        console.log(canvas.toDataURL("image/png"));
                    })
                    .catch((e) => {
                        console.log(e);
                    });
            });

        });
    </script>
</body>

</html>
