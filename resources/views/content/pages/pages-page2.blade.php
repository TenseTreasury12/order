@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
<h4 class="py-3 mb-2">
  <span class="text-muted fw-light">Warehouse /</span> Order List
</h4>

<!-- Order List Widget -->

<div class="card mb-4">
  <div class="card-widget-separator-wrapper">
    <div class="card-body card-widget-separator">
      <div class="row gy-4 gy-sm-1">
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
            <div>
              <h4 class="mb-2">56</h4>
              <p class="mb-0 fw-medium">Pending Payment</p>
            </div>
            <span class="avatar me-sm-4">
              <span class="avatar-initial bg-label-secondary rounded">
                <i class="ti-md ti ti-calendar-stats text-body"></i>
              </span>
            </span>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-4">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
            <div>
              <h4 class="mb-2">12,689</h4>
              <p class="mb-0 fw-medium">Completed</p>
            </div>
            <span class="avatar p-2 me-lg-4">
              <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-checks text-body"></i></span>
            </span>
          </div>
          <hr class="d-none d-sm-block d-lg-none">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
            <div>
              <h4 class="mb-2">124</h4>
              <p class="mb-0 fw-medium">Refunded</p>
            </div>
            <span class="avatar p-2 me-sm-4">
              <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-wallet text-body"></i></span>
            </span>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h4 class="mb-2">32</h4>
              <p class="mb-0 fw-medium">Failed</p>
            </div>
            <span class="avatar p-2">
              <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-alert-octagon text-body"></i></span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Customer</th>
        <th>date</th>
        <th>payment</th>
        <th>amount</th>
        <th>status</th>
        <th>actions</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>
    <td>    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
        <img src="assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
      </li>
    
    </ul></td>
        <td>12-12-21</td>
        <td>Bank</td>
        <td>12k</td>
        <td><span class="badge bg-label-primary me-1">Active</span></td>
        <td>   <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>Edit</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>Delete</a>
            </div>
          </div>
        </td></td>
     
      </tr>
    </tbody>
  </table>
</div>
@endsection
