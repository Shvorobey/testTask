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
                    <h1 class="text-center">Page with radio button.</h1>
                    <form action="{{ route('post.button') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        {{csrf_field()}}
                        <p>Какой сегодня день недели?</p>
                        @if($errors->has('radio'))
                            <div class="alert alert-danger">
                                {{$errors->first('radio')}}

                            </div>
                        @endif
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios1"
                                   value="{{ $data_1 }}">
                            <label class="form-check-label" for="exampleRadios1">
                                {{ $data_1 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios2"
                                   value="{{ $data_2 }}">
                            <label class="form-check-label" for="exampleRadios2">
                                {{ $data_2 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios3"
                                   value="{{ date("l") }}">
                            <label class="form-check-label" for="exampleRadios3">
                                {{ date("l") }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios4    "
                                   value="{{ $data_3 }}">
                            <label class="form-check-label" for="exampleRadios4">
                                {{ $data_3 }}
                            </label>
                        </div>
                        <br>

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