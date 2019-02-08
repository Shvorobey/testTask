@extends ('layout')

@section('title', 'Step 1')
@section ('page', 'Text')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Страница 2 <br>
            <small>Тут все просто</small>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-20">
                    <h1 class="text-success">Прочтите текст</h1>
                    <div class="alert alert-info" role="alert">
                        Продвижение сайта — не конечная цель. Принцип оказания услуг <strong> Netpeak </strong> — рост
                        продаж у клиентов в Украине. С нами вы инвестируете в будущее вашей компании, добиваетесь
                        окупаемости бизнеса, увеличиваете ROI (возврат вложенных средств) и прибыль. Мы знаем, что вам
                        нужна не просто раскрутка сайта — вам нужно увеличение продаж, расширение клиентской базы и
                        развитие бизнеса.
                    </div>
                    <form action="{{ route('text_next') }}" method="POST"
                          enctype="multipart/form-data" style="margin: 50px auto">
                        @csrf
                        {{--{{csrf_field()}}--}}
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
            <strong style="color:#ff0000"> Слоны подождут - проходите тест </strong>
        </div>
    </div>
@endsection