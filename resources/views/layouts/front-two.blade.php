<!doctype html>
<html class="no-js" lang="en">
<x-head/>
<body id="body" class="tp-magic-cursor">
    <div id="smooth-wrapper" class="black-bg-3">
        <div id="smooth-content">
            <x-preload />
            <x-cursor />
            <x-gotop />
            <x-offcanvas />

            {{-- Header should be inside body and appear once --}}
            <x-header />

            @yield('content')

            <x-foot-two />
            <x-script />
        </div>
    </div>
</body>
</html>
