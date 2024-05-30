<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>

        @include('includes.header')

        <main>

             @yield('content')

        </main>

        <footer class="site-footer">

            @include('includes.footer')

        </footer>

    </body>
</html>
