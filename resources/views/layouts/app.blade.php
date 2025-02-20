    @extends('layouts.clean');

    @include('layouts.partials.header')

    @section('childContent')
        @yield('content')
        <footer>
            @section('footerLinks')
                <a href="#">g</a>
                <a href="#">e</a>
            @endsection

            @yield('footerLinks');
        </footer>
    @endsection