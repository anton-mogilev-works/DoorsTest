<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Магазин дверей</title>
    <link href="/css/bootstrap4.min.css" rel="stylesheet">
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
                <form action="/doorParams" method="post" id="doorParamsForm">
                    @csrf
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Цвет покраски:</h6>
                            </div>
                            <span>
                                <select class="custom-select" name="dyeingColor" id="dyeing-color" required>
                                    <option value="">Выбор...</option>
                                    @isset($dyeings)
                                        @foreach ($dyeings as $dyeing)
                                            <option data-dyeing-color="{{ $dyeing->value }}"
                                                data-price="{{ $dyeing->price }}" value="{{ $dyeing->id }}">
                                                {{ $dyeing->name }}
                                            </option>
                                        @endforeach
                                    @endisset
                                </select>
                            </span>

                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Цвет плёнки:</h6>

                            </div>
                            <span>
                                <select class="custom-select" name="skinColor" id="skin-color" required>
                                    <option value="">Выбор...</option>

                                    @isset($skins)
                                        @foreach ($skins as $skin)
                                            <option data-skin-color="{{ $skin->value }}" data-price="{{ $skin->price }}"
                                                value="{{ $skin->id }}">{{ $skin->name }}
                                            </option>
                                        @endforeach
                                    @endisset
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Цвет ручки:</h6>

                            </div>
                            <span>
                                <select class="custom-select" id="knob-color" name="knobColor" required>
                                    <option value="">Выбор...</option>

                                    @isset($knobs)
                                        @foreach ($knobs as $knob)
                                            <option data-knob-color="{{ $knob->value }}" data-price="{{ $knob->price }}"
                                                value="{{ $knob->id }}">{{ $knob->name }}
                                            </option>
                                        @endforeach
                                    @endisset

                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Ширина:</h6>
                            </div>
                            <span>
                                <select class="custom-select" name="doorWidth" id="door-width" required>
                                    <option value="">Выбор...</option>
                                    @isset($widthDimensions)
                                        @foreach ($widthDimensions as $widthDim)
                                            <option data-width="{{ $widthDim->value }}" value="{{ $widthDim->id }}">
                                                {{ $widthDim->value }} мм.</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Высота:</h6>

                            </div>
                            <span>
                                <select class="custom-select" name="doorHeight" id="door-height" required>
                                    <option value="">Выбор...</option>
                                    @isset($heightDimensions)
                                        @foreach ($heightDimensions as $heightDim)
                                            <option data-height="{{ $heightDim->value }}" value="{{ $heightDim->id }}">
                                                {{ $heightDim->value }} мм.</option>
                                        @endforeach
                                    @endisset

                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Открывание:</h6>

                            </div>
                            <span>
                                <select class="custom-select" name="openingSide" id="opening-side" required>
                                    <option value="">Выбор...</option>
                                    @isset($openingSides)
                                        @foreach ($openingSides as $openingSide)
                                            <option data-opening-side="{{ $openingSide->value }}"
                                                value="{{ $openingSide->id }}">{{ $openingSide->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div>
                                <h6 class="my-0">Аксессуары:</h6>
                            </div>
                            <span>
                                <select class="custom-select" multiple name="accessories[]" id="accessories" required>
                                    @isset($accessories)
                                        @foreach ($accessories as $accessory)
                                            <option data-price="{{ $accessory->price }}" value="{{ $accessory->id }}">
                                                {{ $accessory->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </span>
                        </li>

                        <input type="hidden" name="image" id="imageField" value="" />

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Итого:</span>
                            <strong id="summ">0</strong><span> руб.</span>
                        </li>
                    </ul>

                </form>
                <div class="input-group">
                    <button style="visibility: hidden;" class="btn btn-primary btn-lg btn-block"
                        id="sumbit-doors-params">Отправить
                        комплектацию</button>
                </div>
            </div>


            <div class="col-md-8 order-md-1">

                <form class="needs-validation" novalidate>
                    <div class="row" id="doors-maket">
                        <div class="col-md-6 mb-3">
                            <div id="door-outside"
                                style="border: 10pt solid; background-color: #eee; width: 200pt; height: 400pt;">
                                <div class="knob"
                                    style="background-color: #aaa; margin: 160pt 20pt; width: 40pt; height: 10pt;">
                                </div>
                            </div>
                            <small>Вид снаружи</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div id="door-inside"
                                style="border: 10pt solid; background-color: #eee; width: 200pt; height: 400pt;">
                                <div class="knob"
                                    style="background-color: #aaa; margin: 160pt 120pt; width: 40pt; height: 10pt;">
                                </div>
                            </div>
                            <small>Вид изнутри</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <footer class="pt-5 text-muted text-center text-small">
            <p class="mb-1">2023 Тестовое задание</p>
        </footer>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap4.min.js"></script>
    <script src="/js/holder.min.js"></script>
    <script src="/js/html2canvas.min.js"></script>
    <script>
        function calculate() {
            var summ = 0;
            var dyeingColorPrice = $('select#dyeing-color').find(':selected').data('price');
            var skinColorPrice = $('select#skin-color').find(':selected').data('price');
            var knobColorPrice = $('select#knob-color').find(':selected').data('price');

            var accessoriesPrice = 0;

            $('select#accessories').find(':selected').each(function() {
                accessoriesPrice += $(this).data('price');
            });

            if (typeof dyeingColorPrice !== 'undefined' &&
                typeof skinColorPrice !== 'undefined' &&
                typeof knobColorPrice !== 'undefined' &&
                typeof accessoriesPrice !== 'undefined'
            ) {
                summ = dyeingColorPrice + skinColorPrice + knobColorPrice + accessoriesPrice;
                $('strong#summ').text(summ.toString());
            } else {
                $('strong#summ').text('');
            }

            if (
                $('select#dyeing-color').find(':selected').val() != '' &&
                $('select#skin-color').find(':selected').val() != '' &&
                $('select#knob-color').find(':selected').val() != '' &&
                $('select#door-width').find(':selected').val() != '' &&
                $('select#door-height').find(':selected').val() != '' &&                
                $('select#opening-side').find(':selected').val() != '' &&
                $('select#accessories').find(':selected').length > 0
            ) {
                $('button#sumbit-doors-params').css('visibility', 'visible');
            } else {
                $('button#sumbit-doors-params').css('visibility', 'hidden');
            }
        }

        $(window).on("load", function() {

            $('select#dyeing-color').change(function() {
                var dyeingColor = $(this).find(':selected').data('dyeing-color');
                if (typeof dyeingColor !== "undefined") {
                    $('div#door-outside').css('border-color', dyeingColor);
                    $('div#door-inside').css('border-color', dyeingColor);
                }
                calculate();
            });

            $('select#skin-color').change(function() {
                var skinColor = $(this).find(':selected').data('skin-color');
                if (typeof skinColor !== "undefined") {
                    $('div#door-outside').css('background-color', skinColor);
                    $('div#door-inside').css('background-color', skinColor);
                }
                calculate();
            });

            $('select#knob-color').change(function() {
                var knobColor = $(this).find(':selected').data('knob-color');
                if (typeof knobColor !== "undefined") {
                    $('div.knob').css('background-color', knobColor);
                }
                calculate();
            });

            $('select#opening-side').change(function() {
                //data-opening-side

                var openingSide = $(this).find(':selected').data('opening-side');
                if (typeof openingSide !== "undefined") {
                    if (openingSide == '0') {
                        $('div#door-inside div.knob').css('margin', '160pt 120pt');
                        $('div#door-outside div.knob').css('margin', '160pt 20pt');
                    } else if (openingSide == '1') {
                        $('div#door-inside div.knob').css('margin', '160pt 20pt');
                        $('div#door-outside div.knob').css('margin', '160pt 120pt');
                    }
                }
                calculate();
            });

            $('select#door-width').change(function() {
                calculate();
            });

            $('select#door-height').change(function() {
                calculate();
            });

            $('select#accessories').change(function() {
                calculate();
            });

            $('button#sumbit-doors-params').click(function() {
                html2canvas(document.getElementById("doors-maket"), {
                        allowTaint: true,
                        useCORS: true,
                    })
                    .then(function(canvas) {
                        $('input#imageField').val(canvas.toDataURL("image/png"));
                        $('form#doorParamsForm').submit();
                    })
                    .catch((e) => {
                        console.log(e);
                    });
            });

        });
    </script>
</body>

</html>
