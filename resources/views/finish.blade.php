@extends ('layout')

@section('title', 'Finish')
@section ('page', 'Finish')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585" >Вот и все<br>
            <small>Ты хорошо потрудился</small>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                                        <img src="{{ asset('images/'.$student->image) }}" class="img-fluid" alt="Responsive image">
                    <h3>Поздравляем, {{ $student->email }}</h3>
                    <h3>Твоя оценка {{ $student->score }} баллов</h3>
                    <h3>Общее время прохождения теста - {{ $student->time }} секунд</h3>
                    <hr>
                    <a href="{{route('start')}}" type="submit" class="btn btn-primary">Перейти в начало</a>

                </div>
            </div>
        </div>
    </div>

@endsection


@section ('advertising')
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Рекламный блок</h5>
        <div class="card-body">
            <strong style="color:#ff0000"> Увы, все слоны проданы </strong>
        </div>
    </div>
@endsection