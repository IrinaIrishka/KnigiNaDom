
<x-layout>
    @include('header')
<div class="books">
   
    @foreach ($books as $book) 
    <div class="book">
        <img src="{{$book->picture}}" class="booksPic"><br>
    Автор: {!! $book->author->name !!}<br>
    Название: {{$book->title}}<br>
    Жанр: {{$book->genre->name}}<br>
    
    <a href="/book/{{$book->id}}"> Подробнее </a>
    <br>
           
        <button 
        onclick="sendPostAjax('/zakaz/ajaxRequest' , 
            
       ' id=  {{$book->id}} '
         
        )" > ОТЛОЖИТЬ </button>

       
       
       
    </div>
    @endforeach

</div>
</x-layout>