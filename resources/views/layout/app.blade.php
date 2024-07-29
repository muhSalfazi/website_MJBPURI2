@include('layout.head')
@include('layout.header')

<div class="loader">
    <div class="loader-text"></div>
    <div class="dots-container">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>
<div class="container-fluid">
    @include('layout.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
</div>


@include('layout.footer')
@yield('scripts')
