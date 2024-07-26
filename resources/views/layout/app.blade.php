@include('layout.head')
@include('layout.header')

<div class="container-fluid">
    @include('layout.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
</div>

@yield('scripts')

@include('layout.footer')

<!-- SweetAlert Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session('msg'))
            Swal.fire({
                title: '{{ session('error') ? 'Error' : 'Success' }}',
                text: '{{ session('msg') }}',
                icon: '{{ session('error') ? 'error' : 'success' }}',
                confirmButtonText: 'OK'
            });
        @endif
    });
</script>
