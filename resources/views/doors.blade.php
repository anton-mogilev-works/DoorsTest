@extends('layouts/dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-header">
                <h2 class="page-title">Сформированные двери</h2>
            </div>
        </div>

        <br />

        @isset($doors)
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-doors">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Цвет покраски</th>
                                <th>Цвет плёнки</th>
                                <th>Цвет ручки</th>
                                <th>Ширина</th>
                                <th>Высота</th>
                                <th>Открывание</th>
                                <th>Сумма</th>
                                {{-- <th>Сумма</th> --}}
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doors as $door)
                                <tr style="cursor: pointer" data-bs-toggle="modal"
                                    data-bs-target="#showDoorOptions-{{ $door->id }}">
                                    <td>{{ $door->id }}</td>
                                    <td>{{ $door->dyeing->name }}</td>
                                    <td>{{ $door->skin->name }}</td>
                                    <td>{{ $door->knob->name }}</td>
                                    <td>{{ $door->widthDimension->value }} мм.</td>
                                    <td>{{ $door->heightDimension->value }} мм.</td>
                                    <td>{{ $door->openingSide->name }}</td>
                                    <td>500 р.</td>
                                    {{-- <td>{{ $door->price }} руб. </td> --}}

                                    <td class="text-end">
                                        <a href="" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></a>
                                    </td>

                                    <div class="modal fade " id="showDoorOptions-{{ $door->id }}" role="dialog"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Опции двери ID : {{ $door->id }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">


                                                    <div class="mb-3">
                                                        <button
                                                            onclick="{ window.open('/getDoorPdf/{{ $door->id }}', '_blank').focus(); }"
                                                            type="submit" class="btn btn-primary">Сохранить в
                                                            PDF</button>


                                                        {{-- <br /> <br /> --}}


                                                        <button
                                                            onclick="{ window.open('/sendDoorPDFToTelegram/{{ $door->id }}', '_blank').focus(); }"
                                                            type="submit" class="btn btn-primary ">Отправить в
                                                            Telegram</button>

                                                    </div>

                                                    <img src="{{ $door->image }}" />

                                                    <br />
                                                    Цвет покраски -- {{ $door->dyeing->name }} <br />
                                                    Цвет плёнки -- {{ $door->skin->name }} <br />
                                                    Цвет ручки -- {{ $door->knob->name }} <br />
                                                    Ширина -- {{ $door->widthDimension->value }} мм. <br />
                                                    Высота - {{ $door->heightDimension->value }} мм. <br />
                                                    Открывание -- {{ $door->openingSide->name }} <br />


                                                    {{-- <form action="/dashboard/skinAdd" method="post" accept-charset="utf-8">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Название:</label>
                                                            <input type="string" name="name" placeholder="Зелёная"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="value" class="form-label">Цвет (в формате
                                                                #FFFFFF):</label>
                                                            <input type="string" name="value" placeholder="#FFFFFF"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="price" class="form-label">Цена (руб.):</label>
                                                            <input type="string" name="price" placeholder="200"
                                                                class="form-control">
                                                        </div>

                                                    </form> --}}



                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endisset
    </div>


@endsection
