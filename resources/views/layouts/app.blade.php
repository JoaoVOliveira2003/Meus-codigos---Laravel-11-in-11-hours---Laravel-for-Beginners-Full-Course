<x-base-layout>
  @include('layouts.partials.header')

  {{$slot}}
  <footer>
    @section('footerLinks')
        <a href="#">g</a>
        <a href="#">e</a>
    @show

    @yield('footerLinks');
  </footer>

</x-base-layout>