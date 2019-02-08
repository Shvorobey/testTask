@extends ('layout')

@section('title', 'Step 3')
@section ('page', 'Checkbox')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Страница 4 <br>
            <small>Языки програмирования</small>
        </h1>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-success">Какие языки программирования ты знаешь?</h1>
                    <form action="{{ route('checkbox_next') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        @csrf
                        {{--{{csrf_field()}}--}}
                        @if($errors->has('checkbox'))
                            <div class="alert alert-danger">
                                {{$errors->first('checkbox')}}

                            </div>
                        @endif
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                                   name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck1">
                                <strong> PHP </strong>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="defaultCheck2"
                                   name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck2">
                                <strong> Python </strong>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="defaultCheck3"
                                   name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck3">
                                <strong> JS </strong>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="defaultCheck4"
                                   name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck4">
                                <strong> .net </strong>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="defaultCheck5"
                                   name="checkbox[]">
                            <label class="form-check-label" for="defaultCheck5">
                                <strong> Visual Basic </strong>
                            </label>
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
            <strong style="color:#ff0000"> Сосредоточтесь </strong>
        </div>
    </div>
@endsection