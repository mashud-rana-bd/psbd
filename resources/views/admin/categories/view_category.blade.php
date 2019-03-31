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
                  <th>Category Id</th>
                  <th>Catgory Name</th>
                  <th>Catgory Description</th>
                  <th>Catgory URL</th>
                  <th>Actions</th>


                </tr>
              </thead>

              <tbody>
                @foreach($categories as $category)
                <tr class="gradeX">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->url }}</td>
                    <td class="center">
                        <a href="{{ url('/admin/edit-category/'.$category->id ) }}" class="btn btn-primary btn-mini">Edit</a>
                        <a id="delCat" href="{{ url('/admin/delete-category/'.$category->id ) }}" class="btn btn-danger btn-mini">Delete</a>
                        <a id="showImages" type="button" class="btn btn-dark btn-mini" data-toggle="modal" data-target="#{{$category->id}}">images</a>
                        <div class="modal fade" id="{{$category->id}}" role="dialog">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content" style="width:800px">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                      </div>
                                    <div class="modal-body" style="background:white">
                                    <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row">
                                                {{$i=0}}
                                                @foreach(explode(" ",$category->image) as $info)
                                                        <div class="row" style="display:flex;justify-content:center">
                                                            <a href="{{url('/category_images/'.$category->name.'/'.$info) }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                                            <img src="{{ url('/category_images/'.$category->name.'/'.$info)  }}" class="img-fluid" height="400" width="400">
                                                            </a>
                                                        </div>
                                                        
                                                     {{$i++}}
                                                       
                                                @endforeach
  
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>

                              </div>
                          </div>
                    </td>


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
