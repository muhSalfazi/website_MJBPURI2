@include('layout.head')
@include('layout.header')

<div class="container-fluid">
    {{-- <div class="row"> --}}
        @include('layout.sidebar')
       <main id="main" class="main">
            @yield('content')
        </main>
    {{-- </div> --}}
</div>
   @yield('scripts')
   
@include('layout.footer')
