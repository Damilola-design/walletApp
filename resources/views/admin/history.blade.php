@extends('admin.layouts.admin-dash-layout')
@section('title', 'Dashboard')
@section('content')

    <section class="content">
    <div class="card">
    <div class="card-header border-transparent">
    <h3 class="card-title"> We Have {{ $histories->count()}} Transactions</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>

    <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table m-0">
    <thead>
    <tr>
    <th>Trans ID</th>
    <th>Email</th>
    <th>Status</th>
    <th>Amount</th>
    <th>Ref ID</th>
    <th>Created at</th>
    </tr>

    
    </thead>
    @if($histories->count()>0)
        @foreach ($histories as $history)
    <tbody>
    <tr>
    <td><a href="pages/examples/invoice.html">{{$history->trans_id}}</a></td>
    <td>{{$history->email}}</td>
    <td><span class="badge badge-success">{{$history->status}}</span></td>
    <td>{{$history->amount}}</td>
    <td><a href="pages/examples/invoice.html">{{$history->ref_id}}</a></td>
    <td>{{$history->created_at}}</td>
    </tr>
    
    </tbody>
    @endforeach
                    
    @endif
    </table>
    </div>

    </div>

    <div class="card-footer clearfix">
    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
    </div>

    </div>
    </section>
@endsection