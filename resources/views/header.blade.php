
<div class="header">
    <!-- He who is contented is rich. - Laozi -->
    <span class="title">Книги На Дом</span>
    <x-divzakaz/>
    @if (!(auth()->user()))

    <x-divnotauth/>
    @else
    <x-divauth/>
   @endif

   <!-- @auth
       @if (Auth::user()->isAdmin)
       <a href="/a" >Admin panel </a>
        @else 
        <div>hello</div>
       
       @endif
   @endauth -->
</div>
