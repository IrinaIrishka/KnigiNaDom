@props(['name'])

@error($name)
    <p class="errorForm">{{ $message }}</p>
@enderror