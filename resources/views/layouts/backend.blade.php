<!doctype html>
<html class="no-js" lang="en">
<x-backend.head/>
<body id="body" class="tp-magic-cursor">
    <div id="smooth-wrapper" class="black-bg-3">
        <div id="smooth-content">
            <x-backend.topbar />
            <x-backend.sidebar />

            @yield('content')

            <x-backend.rightbar />
            <x-backend.footer />
            <x-backend.script />
        </div>
    </div>
</body>
</html>
