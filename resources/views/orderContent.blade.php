<div class="orderContent">
        
@foreach ( $order as $book )
<div class="orderBook">
<img src="../{{$book->picture}}" class="booksPic"><br>
    
<a href="/book/order/deleteOne/{{$book->id}}">Удалить</a>


</div>
@endforeach
</div>