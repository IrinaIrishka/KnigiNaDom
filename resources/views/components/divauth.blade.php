

<div class="divAuth">
    <div class="user">
    {{Auth::user()->surname}}
    {{Auth::user()->name}}
</div>
    <div class="logout">
    <a href="/logout" > Выход </a>
</div>
</div>