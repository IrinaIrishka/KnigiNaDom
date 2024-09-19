<x-layout>
    @include('header')

<div class="createReaderForm">
<form method="POST" action="/registration">
@csrf

<x-form.input name="surname" title="Фамилия"
required/>
<br>


<x-form.input name="name" title="Имя" 
 required/>
<br>


<x-form.input name="address" title="Адрес" 
required/>
<br>


<x-form.input name="email" title="Почта" 
required/>
<br>


<x-form.input name="login" title="Логин" 
required/>
<br>


<x-form.input name="password" title="Пароль" 
autocomplete="new-password" required/><br><br>

<button type="submit">Регистрация</button>


</form>
</div>
</x-layout>