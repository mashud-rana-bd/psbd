@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Categories</a> <a href="#" class="current">View Categories</a></div>
    <h1>Categories</h1>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{!! session('flash_message_error') !!}</strong>
    </div>
@endif   
@if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{!! session('flash_message_success') !!}</strong>
    </div>
@endif 
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
     
        <div class="span12">
      
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Categories</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>User Id</th>
                  <th>Catgory Name</th>
                  <th>Background Options</th>
                  <th>Return File Type</th>
                  <th>Turnaround Time</th>
                  <th>Instructions Message</th>
                  <th>Action</th>
                    
                </tr>
              </thead>
             
              <tbody>
                @foreach($orders as $order)
                @if($order->status==1) 
                <tr class="gradeX">
                 
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->category_name }}</td>
                <td>{{ $order->background_options }}</td>
                <td>{{ $order->return_file_type }}</td>
                <td>{{ $order->turnaround_time }}</td>
                <td>{{ $order->instructions_message }}</td>
  
                
                <td class="center"><a href="{{ url('/admin/accepted-orders/'.$order->id ) }}" class="btn btn-primary btn-mini">Accept</a> <a id="delCat" href="" class="btn btn-danger btn-mini">Deny</a></td>
 
                
                </tr>
                @endif
                @endforeach
               
           
 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection