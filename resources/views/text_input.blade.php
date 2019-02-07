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
                    <h1 class="text-center">Page with text input.</h1>
                    <form action="{{ route('post.input') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        {{csrf_field()}}
                        <div class="form-group">
                            @if($errors->has('count'))
                                <div class="alert alert-danger">
                                    {{$errors->first('count')}}

                                </div>
                            @endif
                            <input type="text" name="first" hidden value="{{ $first }}">
                            <input type="text" name="last" hidden value="{{ $last }}">
                            <label for="exampleInputEmail1">{{ $first. ' + '.$last.' = ?' }}</label>
                            <input type="text" name="count" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter count">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.
                            </small>
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