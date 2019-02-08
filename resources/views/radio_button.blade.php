@extends ('layout')

@section('title', 'Step 4')
@section ('page', 'Radio button')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Страница 4 <br>
            <small>Дни недели</small>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-success">Какой сегодня день недели?</h1>
                    <form action="{{ route('button_next') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        @csrf
                        {{--{{csrf_field()}}--}}

                        @if($errors->has('radio'))
                            <div class="alert alert-danger">
                                {{$errors->first('radio')}}
                            </div>
                        @endif
                        @inject ('days', '\App\Servises\GetDays' )
                        @foreach($days->getRandomDays() as $day)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="exampleRadios1"
                                       value="{{ $day->day }}">
                                <label class="form-check-label" for="exampleRadios1">
                                    {{ $day->day }}
                                </label>
                            </div>
                        @endforeach
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios3"
                                   value="{{ date("l") }}">
                            <label class="form-check-label" for="exampleRadios3">
                                {{ date("l") }}
                            </label>
                            <br>
                            <button type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
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
            <strong style="color:#ff0000"> Не отвлекаю </strong>
        </div>
    </div>
@endsection