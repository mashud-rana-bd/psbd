@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
     
          
      
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created</th>
                  <th>Last update</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Orders</th>
                </tr>
              </thead>
             
              <tbody>
                @foreach($users as $user)
                <tr class="gradeX">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->email }}</td>
                    
                    <td class="center"></td>
                    <td class="center"></td>
                </tr>
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