@extends ('layout')

@section('title', 'Step 2')
@section ('page', 'Text input')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Страница 3 <br>
            <small>Решите простой пример</small>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-success">Найдите сумму двух чисел</h1>
                    <form action="{{ route('input_next') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        @csrf
                        {{--{{csrf_field()}}--}}
                        <div class="form-group">
                            @if($errors->has('count'))
                                <div class="alert alert-danger">
                                    {{$errors->first('count')}}
                                </div>
                            @endif
                            <input type="text" name="first" hidden value="{{ $first }}">
                            <input type="text" name="second" hidden value="{{ $second }}">
                            <label for="exampleInputEmail1"><strong>{{ $first. ' + '.$second.' = ?' }}</strong></label>
                            <input type="text" name="count" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Ответ">
                        </div>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </form>
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
            <strong style="color:#ff0000"> Главное - правельные ответы </strong>
        </div>
    </div>
@endsection