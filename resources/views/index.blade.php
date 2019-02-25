@extends ('layout')

@section('title', 'Start')
@section ('page', 'Start')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать <br>
            <small>Предлагаю пройти мини-курс</small>
        </h1>
        <form
                {{--action="{{ route('post.Start') }}" --}}
                method="POST"
                enctype="multipart/form-data" style="margin: 50px auto">
            {{csrf_field()}}
            <div class="form-group">
                @if($errors->has('error'))
                    <div class="alert alert-danger">
                        {{$errors->first('error')}}
                    </div>
                @endif
                @if($errors->has('image'))
                    <div class="alert alert-danger">
                        {{$errors->first('image')}}
                    </div>
                @endif
                @if($errors->has('email'))
                    <div class="alert alert-danger">
                        {{$errors->first('email')}}
                    </div>
                @endif

                <label for="exampleInputEmail1">Введите Email:</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="example@email.com">
                <small id="emailHelp" class="form-text text-muted">* поле обязательно для заполнения.
                </small>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Загрузите изображение:</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
            <hr>
            @foreach($students as $student)
                <div class="row">
                    <div class="col-md-2"><img src="{{ asset('images/'.$student->image) }}" class="img-fluid"
                                               alt="Responsive image" width="50" height="50"></div>
                    <div class="col-md-5"><strong>{{ $student->email }}</strong></div>
                    <div class="col-md-2">{{ $student->score }}</div>
                    <div class="col-md-2"> {{ $student->time }}</div>
                </div>
            @endforeach
        </form>
    </div>
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