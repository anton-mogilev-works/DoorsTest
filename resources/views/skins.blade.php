@extends('layouts/dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-header">
                <div class="page-pretitle">Цвета и цены</div>
                <h2 class="page-title">Плёнка</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkin">Добавить цвет плёнки</button>
            </div>
        </div>

        <br />

        @isset($skins)
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-skins">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Цвет</th>
                                <th>Цена</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skins as $skin)
                                <tr>
                                    <td>{{ $skin->name }}</td>
                                    <td>{{ $skin->value }}</td>
                                    <td>{{ $skin->price }} руб. </td>

                                    <td class="text-end">
                                        <a href="" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endisset
    </div>
    
    <div class="modal fade" id="addSkin" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Новая плёнка</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                    <p>Заполните параметры новой плёнки</p>
                    <form action="/dashboard/skinAdd" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Название:</label>
                            <input type="string" name="name" placeholder="Зелёная" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="value" class="form-label">Цвет (в формате #FFFFFF):</label>
                            <input type="string" name="value" placeholder="#FFFFFF" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Цена (руб.):</label>
                            <input type="string" name="price" placeholder="200" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-primary float-end">Отправить</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
