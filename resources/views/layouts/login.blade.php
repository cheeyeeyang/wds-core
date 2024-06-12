<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ໂຮງງານນໍ້າດື່ມ</title>
    <link rel="stylesheet" href="{{ asset('admin/plugins/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('logo/LOGO.jpg') }}" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css')}}">
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
     <link rel="alternate" href="{{asset('admin/build/scss/pages/_login_and_register.scss')}}">

    <style>
        nav svg {
            height: 20px;
        }

        @font-face {
            font-family: Nuanta-Regular;
            src: url("{{ asset('fonts/Nuanta-Regular.ttf') }}");
            /* font-family: Noto Sans Lao Medium;
            src: url('{{ asset('fonts/NotoSansLao-Medium.ttf') }}'); */
        }
    </style>
    @livewireStyles
</head>

<body class="hold-transition login-page" style="font-family: 'Nuanta-Regular'">
    {{ $slot }}
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @livewireScripts
</body>

</html>