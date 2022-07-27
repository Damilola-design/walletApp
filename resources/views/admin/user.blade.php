
@extends('admin.layouts.admin-dash-layout')
@section('title', 'Dashboard')
@section('content')

    <section class="content">
    <div class="card">
    <div class="card-header border-transparent">
    <h3 class="card-title"> Users</h3>
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
    <th>User ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Created</th>
    <th>Updated at</th>
    <th>Actions</th>
    </tr>

    
    </thead>
    @if($users)
    @foreach ($users as $user)
    <tbody>
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td><span class="badge badge-success">{{$user->role}}</span></td>
    <td>{{$user->created_at}}</td>
    <td><a href="pages/examples/invoice.html">{{$user->updated_at}}</a></td>
    <td> <button type="button" class="btn btn-primary"><a  href="{{ route('admin.transaction', ['id' => $user->id]) }}">View</button>
      </td>
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