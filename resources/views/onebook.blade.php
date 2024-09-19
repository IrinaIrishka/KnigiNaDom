<x-layout>
    @include('header')
    <div class="oneBook">
    
    <img src="../{{$book->picture}}" class="oneBookPic">
<div>
    <h2>
    {{$book->title}}</h3>
    <h4>
    Автор произведения</h4>
    <p>{!!$book->author->name!!}</p>
    <h4>
    Жанр</h4>
    <p>{{$book->genre->name}}</p>
    <h4>
    Издательство</h4>
    <p>{{$book->house->name}}
    {{$book->house->city}}</p>
    <h4>
    Краткое описание</h4>
    <p>{{$book->description}}</p>
</div>

    </div>
</x-layout>