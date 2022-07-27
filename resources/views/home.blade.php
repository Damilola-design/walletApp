@extends('layouts.user-dash-layout')
@section('title', 'User Dashboard')
@section('content')
<section class="content">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Wallet Balance</h3>
<a href="javascript:void(0);" class="keychainify-checked">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">${{ $payments }}</span>
<span>Savings</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 33.1%
</span>
<span class="text-muted">Since last month</span>
</p>
</div>

<div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<canvas id="sales-chart" height="400" style="display: block; height: 200px; width: 528px;" width="1056" class="chartjs-render-monitor"></canvas>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
<i class="fas fa-square text-primary"></i> This year
</span>
<span>
<i class="fas fa-square text-gray"></i> Last year
</span>
</div>
</div>
</div>
</section>
@endsection
