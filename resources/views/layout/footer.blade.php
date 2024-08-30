 <footer id="footer" class="footer">
     <div class="copyright">
         &copy; Copyright <strong><span>MuhSalfazi</span></strong>. All Rights Reserved
     </div>
     <div class="credits">
         Designed by <a href="https://muhsalfazi-profile.netlify.app" target="_blank">Salman Fauzi</a>
     </div>
 </footer>

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/chart.js/chart.umd.js"></script>
 <script src="assets/vendor/echarts/echarts.min.js"></script>
 <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>

 <!-- SweetAlert2 JS -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
 <!-- Template Main JS File -->
 <script src="assets/js/main1.js"></script>
 <!-- SweetAlert Scripts -->
 <script>
    // Cek apakah ada pesan flash dari session
    @if (session('msg'))
        Swal.fire({
            icon: '{{ session('error') ? 'error' : 'success' }}',
            title: '{{ session('error') ? 'Oops...' : 'Success' }}',
            text: '{{ session('msg') }}',
            showConfirmButton: true
        });
    @endif

    // Menangani validasi error
    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Errors',
            html: `
                <ul>
                    @foreach ($errors->all() as $error)
                         <p style="margin: 0; padding: 5px;">${{ $error }}</p>
                    @endforeach
                </ul>
            `,
            showConfirmButton: true
        });
    @endif
</script>
 {{-- loader website --}}
 <script>
     // JavaScript untuk menyembunyikan loader setelah halaman selesai dimuat
     window.addEventListener('load', function() {
         document.querySelector('.loader').style.display = 'none';
         document.querySelector('.content').style.display = 'block';
     });
 </script>

 </body>

 </html>
