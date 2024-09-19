@props(['name', 'title'])

<x-form.label name="{{ $name }}"
    title="{{ $title }}" />

    <input 
           name="{{ $name }}"
           id="{{ $name }}"
    >

    <x-form.error name="{{ $name }}"/>
