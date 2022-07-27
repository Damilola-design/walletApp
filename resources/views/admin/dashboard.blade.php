@extends('admin.layouts.admin-dash-layout')
@section('title', 'Dashboard')
@section('content')
<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
<div class="info-box-content">
<span class="info-box-text">CPU Traffic</span>
<span class="info-box-number">
10
<small>%</small>
</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
<div class="info-box-content">
<span class="info-box-text">Likes</span>
<span class="info-box-number">41,410</span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
<div class="info-box-content">
<span class="info-box-text">Sales</span>
<span class="info-box-number">{{ $tran_count }}</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">New Members</span>
<span class="info-box-number">{{ $users->count() }}</span>
</div>

</div>

</div>

</div>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Monthly Recap Report</h5>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<div class="btn-group">
<button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
<i class="fas fa-wrench"></i>
</button>
<div class="dropdown-menu dropdown-menu-right" role="menu">
<a href="#" class="dropdown-item">Action</a>
<a href="#" class="dropdown-item">Another action</a>
<a href="#" class="dropdown-item">Something else here</a>
<a class="dropdown-divider"></a>
<a href="#" class="dropdown-item">Separated link</a>
</div>
</div>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">
<div class="row">
<div class="col-md-8">
<p class="text-center">
<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
</p>
<div class="chart">

<canvas id="salesChart" height="180" style="height: 180px;"></canvas>
</div>

</div>

<div class="col-md-4">
<p class="text-center">
<strong>Goal Completion</strong>
</p>
<div class="progress-group">
Add Products to Cart
<span class="float-right"><b>160</b>/200</span>
<div class="progress progress-sm">
<div class="progress-bar bg-primary" style="width: 80%"></div>
</div>
</div>

<div class="progress-group">
Complete Purchase
<span class="float-right"><b>310</b>/400</span>
<div class="progress progress-sm">
<div class="progress-bar bg-danger" style="width: 75%"></div>
</div>
</div>

<div class="progress-group">
<span class="progress-text">Visit Premium Page</span>
<span class="float-right"><b>480</b>/800</span>
<div class="progress progress-sm">
<div class="progress-bar bg-success" style="width: 60%"></div>
</div>
</div>

<div class="progress-group">
Send Inquiries
<span class="float-right"><b>250</b>/500</span>
<div class="progress progress-sm">
<div class="progress-bar bg-warning" style="width: 50%"></div>
</div>
</div>

</div>

</div>

</div>

<div class="card-footer">
<div class="row">
<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
<h5 class="description-header">#{{ $deposits }}</h5>
<span class="description-text">TOTAL REVENUE</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
<h5 class="description-header">#{{$max_pays}}</h5>
<span class="description-text">MAX DEPOSIT</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
<h5 class="description-header">#{{$min_pays}}</h5>
<span class="description-text">MIN DEPOSIT</span>
</div>

</div>

 <div class="col-sm-3 col-6">
<div class="description-block">
<span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
<h5 class="description-header">#{{ $avg_pays }}</h5>
<span class="description-text">AVG DEPOSIT</span>
</div>

</div>
</div>

</div>

</div>

</div>

</div>
</section>
@endsection