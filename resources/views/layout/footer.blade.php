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
     document.addEventListener('DOMContentLoaded', function() {
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
