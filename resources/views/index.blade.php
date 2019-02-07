@extends ('layout')

@section('title', 'Start')
@section ('page', 'Start')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585" >Добро пожаловать <br>
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
                @if($errors->has('img'))
                    <div class="alert alert-danger">
                        {{$errors->first('img')}}
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
                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
            <hr>
            @foreach($students as $student)
                <div class="row">
                    <div class="col-md-2"><img src="{{ asset('avatars/'.$student->image) }}" class="img-fluid"
                                               alt="Responsive image" width="50" height="50"></div>
                    <div class="col-md-4">{{ $student->email }}</div>
                    <div class="col-md-3">{{ $student->score }}</div>
                    <div class="col-md-3"> {{ $student->time }}</div>


                </div>
            @endforeach
        </form>







        <!-- Blog Post -->
        {{--@foreach( $posts as $post)--}}


            {{--<div class="card mb-4">--}}
                {{--<img class="card-img-top" src="{{$post->img}}" alt="Card image cap">--}}
                {{--<div class="card-body">--}}
                    {{--<h2 class="card-title" style="color:#008000">{{$post->title}}</h2>--}}
                    {{--<p class="card-text">{{$post->body}}</p>--}}
                    {{--<a href="#" class="btn btn-primary">Читать дальше &rarr;</a>--}}
                {{--</div>--}}
                {{--<div class="card-footer text-muted">--}}
                    {{--Создан: {{$post->created_at}}  <br>--}}
                    {{--Автор: <a href="{{route('posts_by_autor', $post->autors->key)}}">{{$post->autors->name}}</a>--}}
                    {{--Категории:--}}
                    {{--@foreach($post->categories as $category)--}}

                        {{--<a href="{{route('posts_by_category', $category->key)}}">{{$category->categories}}   </a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
    {{--@endforeach--}}


    <!-- Pagination -->


        {{--<ul class="pagination justify-content-center mb-4">--}}
            {{--@if ($posts->currentPage()!=1)--}}
                {{--<li><a class="page-item" href="?page=1"> Первая страница </a></li>--}}
                {{--<li><a class="page-item" href="{{$posts->previousPageUrl()}}"> < </a></li>--}}
            {{--@endif--}}

            {{--@if ($posts->count ()>0)--}}
                {{--@for ($count=1; $count<=$posts->lastPage(); $count++)--}}
                    {{--<li><a class="page-item @if ($count==$posts->currentPage()) current @endif" href="?page={{$count}}">{{$count}}</a></li>--}}

                {{--@endfor--}}

            {{--@else--}}
                {{--<h1> <font size="15" color="aqua" face="Arial"> Мы работаем над тем, чтобы здесь что-то появилось ;) </font> </h1>--}}
            {{--@endif--}}
            {{--@if ($posts->currentPage() != $posts->lastPage())--}}
                {{--<li><a class="page-item" href="{{$posts->nextPageUrl()}}"> > </a></li>--}}
                {{--<li><a class="page-item" href="?page={{$posts->lastPage()}}"> Последняя страница </a></li>--}}
            {{--@endif--}}
        {{--</ul>--}}
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