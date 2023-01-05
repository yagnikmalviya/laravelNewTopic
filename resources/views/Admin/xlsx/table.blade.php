{{-- <html>
    <head>
        <title>Laravel 8 Datatables Tutorial - ItSolutionStuff.com</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-center my-4">Import Export Excel and CSV File Tutorial</h1>
            <div class="row justify-content-between align-items-center my-4 m-0">
                <form action="{{ route('xlsxImport') }}" method="POST" class="m-0" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="inputGroupFile04">
                          <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <button class="btn btn-outline-success" >Import User Data</button>
                        </div>
                      </div>
                </form>
                <a class="btn btn-outline-warning float-end h-25" href="{{ route('xlsxExport') }}">Export User Data</a>
            </div>
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>City</th>
                        <th>District</th>
                        <th>taluka</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="flex items-center justify-end mt-4">
                <a class="ml-1 btn btn-primary" href="{{ url('facebook') }}" style="margin-top: 0px !important;background: blue;color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook
                </a>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ url('google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                </a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('xlsxTable') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'city', name: 'city'},
                {data: 'district', name: 'district'},
                {data: 'taluka', name: 'taluka'},
                {data: 'address', name: 'address'},
            ]
        });
        });
    </script>
    </body>
</html> --}}


@extends('Admin.Layout.app')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Xlsx Table</h3>
      </div>
      <div class="col-sm-6">
        <div class="d-flex align-items-center justify-content-md-end">
          <div class="mb-3 mb-xl-0 pr-1">
              <div class="dropdown">
                <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="typcn typcn-calendar-outline mr-2"></i>Last 7 days
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
                  <h6 class="dropdown-header">Last 14 days</h6>
                  <a class="dropdown-item" href="#">Last 21 days</a>
                  <a class="dropdown-item" href="#">Last 28 days</a>
                </div>
              </div>
          </div>
          <div class="pr-1 mb-3 mr-2 mb-xl-0">
            <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i>Export</button>
          </div>
          <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>info</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 d-flex grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between">
              <h4 class="card-title mb-3">Import Export Excel and CSV File Tutorial</h4>
            </div>
            <div class="row">
                <div class="col-lg-12" >
                    <div class="row justify-content-between align-items-center my-4 m-0">
                        <form action="{{ route('xlsxImport') }}" method="POST" class="m-0" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="file" class="custom-file-input" id="inputGroupFile04">
                                  <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <button class="btn btn-outline-success" >Import Xlsx</button>
                                </div>
                              </div>
                        </form>
                        <a class="btn btn-outline-danger border border-danger float-end h-25" href="{{ route('pdfExport') }}">Export Pdf</a>
                        <a class="btn btn-outline-warning float-end h-25" href="{{ route('xlsxExport') }}">Export Xlsx</a>
                    </div>
                    <table class="table table-bordered data-table my-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th>City</th>
                                <th>District</th>
                                <th>taluka</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @push('js')
  <script type="text/javascript">
    $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('xlsxTable') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'mobile', name: 'mobile'},
            {data: 'city', name: 'city'},
            {data: 'district', name: 'district'},
            {data: 'taluka', name: 'taluka'},
            {data: 'address', name: 'address'},
        ]
    });
    });
</script>

  @endpush

