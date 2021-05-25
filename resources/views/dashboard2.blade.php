@extends('layouts.Lmaster')

@section('css')
@endsection

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                <div class="float-left">
                  <i class="mdi mdi-cube text-danger icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total Revenue</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
@endsection
