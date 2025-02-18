<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Koran Masuk & Keluar</title>

    <link rel="icon" href="{{asset('template/default/')}}/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('template/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/icon/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/pages/flag-icon/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/pages/menu-search/css/component.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/')}}/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/')}}/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/css/color/color-1.css" id="color" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/css/linearicons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/default/')}}/assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="{{asset('template/')}}/bower_components/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/bower_components/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <script type="text/javascript" src="{{asset('template/')}}/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script type="text/javascript" src="{{asset('template/default/')}}/assets/pages/advance-elements/select2-custom.js"></script>

    <link rel="stylesheet" href="{{asset('template/')}}/bower_components/select2/dist/css/select2.min.css" />

</head>
<body>
    <div class="container">
    <table border="0">
        <tr>
            <td>
                <div class="ml-3">
                    <img src="{{asset('foto/')}}/logo.png" alt="" class="img-fluid" width="120">
                </div>
            </td>
            <td> 
                <div class="ml-5">
                <h1 style="text-align: center" class="mb-2">CV. AULIA MANDIRI</h1>
                <h4 style="text-align: center" class="mb-2">Laporan Koran Harian</h4>
                <p style="text-align: center" class="mb-3">Pertanggal {{$tglawal}} - {{$tglakhir}}</p>
                </div>
            </td>
        </tr>
    </table>
    </div>
               
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                  <th scope="col">Kode Koran</th>
                  <th scope="col">Nama Koran</th>
                  <th scope="col">Tanggal Masuk</th>
                  <th scope="col">Koran Masuk</th>
                  <th scope="col">Koran Terkirim</th>
                  <th scope="col">Koran Sisa</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
                  @foreach ($newsPapers as $newsPaper)
                  <tr>
                      <td><?= $i++; ?></td>
                      <td>{{$newsPaper->kode_koran}}</td>
                      <td>{{$newsPaper->nama_koran}}</td>
                      <td>{{$newsPaper->koran_masuk}}</td>
                      <td>{{$newsPaper->koran_terkirim}}</td>
                      <td>{{$newsPaper->koran_sisa}}</td>
                      <td>{{$newsPaper->tanggal_masuk}}</td>
                  </tr>
                  @endforeach
        </tbody>
        <tfoot>
            <th>#</th>
            <th colspan="3" class="text-center">Jumlah Total</th>
            <th>{{$koran_masuk}}</th>
            <th>{{$koran_terkirim}}</th>
            <th>{{$koran_sisa}}</th>
        </tfoot>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>