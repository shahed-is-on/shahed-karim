<!doctype html>
<html class="no-js" lang="en">
<x-frontend.head/>
<body id="body" class="tp-magic-cursor">
    <div id="smooth-wrapper" class="black-bg-3">
        <div id="smooth-content">
            <x-frontend.preload />
            <x-frontend.cursor />
            <x-frontend.gotop />
            <x-frontend.offcanvas />

            {{-- Header should be inside body and appear once --}}
            <x-frontend.header />

            @yield('content')

            <x-frontend.foot-two />
            <x-frontend.script />
        </div>
    </div>
</body>
</html>
