@props(['title' => '','footerLinks'=>''])

<x-base-layout :$title>
  {{-- @include('layouts.partials.header') --}}
  <x-layouts.header />  

  {{$slot}}



</x-base-layout>

