<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('Base/head')
    @include('Base/navbar')
    <div id="app">
        
        <body>
            <main class="py-4">
                @yield('content')
            </main>
        </body>
    </div>
    @include('Base/footer')
    @include('Base/footerJS')
</html>