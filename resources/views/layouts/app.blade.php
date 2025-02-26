@props(['title' => '','footerLinks'=>''])

<x-base-layout :$title>
  {{-- @include('layouts.partials.header') --}}
  <x-layouts.header />  

  {{$slot}}

  <footer>


    <a href="#">link 1</a>
    <a href="#">link 2</a>
    {{$footerLinks}}

    @yield('footerLinks');
  </footer>

</x-base-layout>

