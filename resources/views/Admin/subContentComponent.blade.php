@extends('Admin.layout.app')
@section('content')
<div class="content-wrapper">
    <div class="row  align-items-center mb-4">
      <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold text-capitalize">{{$title}}</h3>
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
              <h4 class="card-title mb-3">{{$subTitle}}</h4>
            </div>
            <div class="row col-12">
                {{$content}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @push('js')
  {{$script}}
  @endpush
