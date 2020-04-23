<!DOCTYPE html>
<html lang="en" class="h-100">
@include('layouts.header')

<body class="d-flex flex-column h-100">
    @include('layouts.navbar')
    @yield('content')

    @include('layouts.footer')


    <script src="{{ asset('assets') }}/bootstrap/js/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('assets') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/bootstrap/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/bootstrap/js/pooper.min.js"></script>
    <script src="{{ asset('assets') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('assets') }}/aos-animate/aos.js"></script>
    <script src="{{ asset('assets') }}/yearpicker/yearpicker.js"></script>
    <script src="{{ asset('assets') }}/yearpicker/yearpicker-v2.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

    @stack('js')
    <script>
        AOS.init();
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // $('.datepicker').datepicker();
        $('.yearpicker').yearpicker();

        $(document).ready(function() {
            $('#data-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
            table.buttons().container()
                .appendTo($('.col-sm-6:eq(0)', table.table().container()));
        });        
    </script>

</body>

</html>