<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CelestialUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('public/Admin/vendors/typicons.font/font/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('public/Admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/Admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('public/Admin/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('public/Admin/images/logo.svg') }}" alt="logo">
              </div>
              <div class="mainErr" style="display: none">
                  <div class="d-flex border border-danger align-items-center mb-3 p-3 rounded-lg text-danger" style="height: 50px; background: #ff00004f;" ></div>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" name="loginform" onsubmit="return false;" method="POST">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" />
                  <div class="err_email mt-2 text-danger"></div>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  <div class="err_password mt-2 text-danger"></div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="singIn()">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset('public/Admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('public/Admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('public/Admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('public/Admin/js/template.js') }}"></script>
  <script src="{{ asset('public/Admin/js/settings.js') }}"></script>
  <script src="{{ asset('public/Admin/js/todolist.js') }}"></script>
  <!-- endinject -->
  {{-- Ajax link --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    function singIn()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = document.loginform;
        var formData = new FormData(form);
        var url = '{{ route('loginInsert') }}';
        $.ajax({
                type: 'POST',
                url: url,
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                dataSrc: "",
                beforeSend: function() {},
                complete: function() {},
                success: function(data) {
                    if (data.status == 401) {
                        if(typeof  data.error1 != 'object')
                        {
                            $('.mainErr').find('div').text(data.error1);
                            $('.mainErr').css('display', 'block');
                        }

                        $.each(data.error1, function(index, value) {
                            $($('.err_' + index).parent().children('input').addClass('border border-danger'));
                            $('.err_' + index).text(value);
                        });
                    }
                    if (data.status == 1) {
                        window.location.href = data.redirect;
                    }
                }
            });
    }
</script>

</body>

</html>
