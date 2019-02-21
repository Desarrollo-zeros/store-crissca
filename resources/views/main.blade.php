<!DOCTYPE html>
@yield("head")
<body>
@yield('header')
@yield('navigation')


@if(empty($any1))
    @yield('productos')
@else
    @if(is_numeric($any1))
        @yield("producto")
    @else
        @yield("categoria")
    @endif
@endif

@yield('newsletter')
@yield('footer')

</body>
<!-- jQuery Plugins -->

@yield('js')

</html>

