<head>
    <base href="">
    <meta charset="utf-8" />
    <title>{{ isset($pageTitle) ? $pageTitle.' | ' : '' }} HR Management</title>
    <meta name="description" content="Page with empty content" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
{{--    <link rel="canonical" href="https://keenthemes.com/metronic" />--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
{{--    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />--}}
    <link href="{{asset('assets/admin/global/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/global/css/style.bundle.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/global/css/dark.css')}}" rel="stylesheet" type="text/css" />
{{--    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />--}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('styles')
</head>



