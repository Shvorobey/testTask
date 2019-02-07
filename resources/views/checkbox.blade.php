@extends ('layout')

@section('title', 'Start')
@section ('page', 'Start')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585" >Добро пожаловать <br>
            <small>Предлагаю пройти мини-курс</small>
        </h1>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Page with checkbox.</h1>
                    <form action="{{ route('post.checkbox') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        {{csrf_field()}}
                        <p>Какие языки программирования ты знаешь?</p>
                        @if($errors->has('checkbox'))
                            <div class="alert alert-danger">
                                {{$errors->first('checkbox')}}

                            </div>
                        @endif
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck1">
                                PHP
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="defaultCheck2" name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck2">
                                Python
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="defaultCheck3" name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck3">
                                JS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="defaultCheck4" name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck4">
                                .net
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="defaultCheck5" name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck5">
                                Visual Basic
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section ('categories')
    {{--<!-- Categories Widget -->--}}
    {{--<div class="card my-4">--}}
    {{--<h5 class="card-header">Категории:</h5>--}}
    {{--<div class="card-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-6">--}}
    {{--<ul class="list-unstyled mb-0">--}}

    {{--@inject('categories', 'App\Categories_for_sidebar')--}}

    {{--<div>--}}

    {{--{{ $categories->show_categories() }}<br>--}}

    {{--</div>--}}

    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection

@section ('autors')
    {{--<!-- Categories Widget -->--}}
    {{--<div class="card my-4">--}}
    {{--<h5 class="card-header">Популярные авторы</h5>--}}
    {{--<div class="card-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-6">--}}
    {{--<ul class="list-unstyled mb-0">--}}

    {{--@inject('autors', 'App\Autors_for_sidebar')--}}

    {{--<div>--}}

    {{--{{ $autors->show_autors() }}<br>--}}

    {{--</div>--}}

    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection

@section ('search')
    {{--<!-- Search Widget -->--}}
    {{--<div class="card my-4">--}}
    {{--<h5 class="card-header">Поиск</h5>--}}
    {{--<div class="card-body">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" class="form-control" placeholder="Найти">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button class="btn btn-secondary" type="button">Искать</button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection



@section ('advertising')
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Рекламный блок</h5>
        <div class="card-body">
            <strong style="color:#ff0000"> Покупайте наших слонов </strong>
        </div>
    </div>
@endsection