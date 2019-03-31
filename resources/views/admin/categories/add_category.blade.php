@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Add Category</a> </div>
      <h1>Categories</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Category</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate" enctype="multipart/form-data"> {{ csrf_field() }}
                <div class="control-group">
                  <label class="control-label">Category Name</label>
                  <div class="controls">
                    <input type="text" name="category_name" id="category_name">
                  </div>
                </div>
               <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description"></textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">URL</label>
                  <div class="controls">
                    <input type="text" name="url" id="url">
                  </div>
                </div>
                <div class="bg-info">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-sm-12 col-11 main-section">
                        
                          <div class="form-group">
                            <input type="file" id="file-1" name="file[]" multiple class="file" data-overwrite-initial="false" data-show-upload="false">
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Add Category" class="btn btn-success">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
 

@endsection