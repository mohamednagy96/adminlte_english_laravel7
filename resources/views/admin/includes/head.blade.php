<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      {{-- css to admin panel --}}
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
      {{-- <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- overlayScrollbars -->
      {{-- <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}"> --}}
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
      @yield('css')
    <script>
      window.APP = <?php echo json_encode([
          'currency_symbol' => config('settings.currency_symbol')
    ]) ?>
  </script>
  </head>