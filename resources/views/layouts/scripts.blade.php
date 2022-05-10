 <!-- jQuery -->
 <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- ChartJS -->
 <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
 <!-- Sparkline -->
 <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
 <!-- JQVMap -->
 <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
 <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
 <!-- daterangepicker -->
 <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
 <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 <!-- Summernote -->
 <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
 <!-- overlayScrollbars -->
 <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('dist/js/adminlte.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <!-- uPlot -->
 <script src="../../plugins/uplot/uPlot.iife.min.js"></script>
 <!-- subcription -->
 <script src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 <script src="{{ asset('js/flickity.pkgd.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

 <script>
     $(function() {
         /* uPlot
          * -------
          * Here we will create a few charts using uPlot
          */

         function getSize(elementId) {
             return {
                 width: document.getElementById(elementId).offsetWidth,
                 height: document.getElementById(elementId).offsetHeight,
             }
         }

         let data = [
             [0],
             [0],
             [0]
         ];

         //--------------
         //- AREA CHART -
         //--------------

         const optsAreaChart = {
             ...getSize('areaChart'),
             scales: {
                 x: {
                     time: false,
                     range: [0, 10],
                 },
                 y: {
                     range: [0, 100],
                 },
             },
             series: [{},
                 {
                     display: false,
                     fill: 'rgba(60,141,188,0.7)',
                     stroke: 'rgba(60,141,188,1)',
                 },
                 {
                     stroke: '#c1c7d1',
                     fill: 'rgba(210, 214, 222, .7)',
                 },
             ],
         };

         let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

         const optsLineChart = {
             ...getSize('lineChart'),
             scales: {
                 x: {
                     time: false,
                 },
                 y: {
                     range: [0, 100],
                 },
             },
             series: [{},
                 {
                     fill: 'transparent',
                     width: 5,
                     stroke: 'rgba(60,141,188,1)',
                 },
                 {
                     stroke: '#c1c7d1',
                     width: 5,
                     fill: 'transparent',
                 },
             ],
         };

         let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

         window.addEventListener("resize", e => {
             areaChart.setSize(getSize('areaChart'));
             lineChart.setSize(getSize('lineChart'));
         });
     })

     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
     $(document).ready(function(){
        $('#example2 thead th').addClass('setting-yellow').removeClass('sorting').removeClass('sorting_asc').removeAttr('aria-controls');
     });
 </script>