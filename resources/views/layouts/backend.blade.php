<!doctype html>
<html class="no-js" lang="en">
<x-backend.head/>
<body id="body" class="tp-magic-cursor">
    <div id="smooth-wrapper" class="black-bg-3">
        <div id="smooth-content">
            <x-backend.topbar />
            <x-backend.sidebar />
            <x-backend.rightbar />
            <div class="page-wrapper">
                <div class="page-content">

                    @yield('content')
                    <x-backend.footer />
                </div>
            </div>
            <x-backend.script />
        </div>
    </div>
</body>
</html>
