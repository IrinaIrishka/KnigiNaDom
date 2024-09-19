@props(['name', 'title'])

<label for="{{ $name }}">
    {{ ucwords($title) }}
</label><br>