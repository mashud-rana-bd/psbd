@extends('layouts.frontLayout.user_design')

@section('content')

    <div class="flex-center position-ref full-height">
            <section class="home_banner_area">
                <div class="container box_1620">
                    <div class="banner_inner d-flex align-items-center justify-content-center">
                         <div class="banner_content" >

                            <div class="card-header text-center" style="margin-bottom:30px"><h2>Place Order</h2> </div>
                            @if(Session::has('flash_message_error'))
                                 <div class="alert alert-error alert-block">
                                        
                                         <strong>{!! session('flash_message_error') !!}</strong>
                                        </div>
                                    @endif
                                @if(Session::has('flash_message_success'))
                                    <div class="alert alert-success alert-block">
                                        
                                        <strong>{!! session('flash_message_success') !!}</strong>
                                    </div>
                                    @endif
                            <div class="col-md-12" >


                                <form name="order" id="order" action="{{ url('place-order-submit')}}" method="post" style="padding: 5px"  enctype="multipart/form-data">{{csrf_field()}}
                                    <h5>Services you required *</h5>
                                    <div class="row mbot-30">

                                    @foreach($categories as $category)

                                        <div class="col-lg-6">

                                            <div class="inputGroup">
                                                <input type="checkbox" id="{{$category->name}}" name="category[]" value="{{ $category->name}}">

                                                 <label for="{{$category->name}}">{{$category->name}}</label>
                                            </div>
                                        </div>

                                     @endforeach

                                    </div>
                                    <h5>Background Options *</h5>
                                    <div class="row mbot-30">

                                         <div class="col-lg-6">
                                             <div class="inputGroup">
                                                     <input type="checkbox" id="transparent" name="background[]" value="transparent">

                                                      <label for="transparent">Transparent</label>
                                              </div>
                                         </div>
                                         <div class="col-lg-6">
                                             <div class="inputGroup">
                                                     <input type="checkbox" id="original" name="background[]" value="original">

                                                      <label for="original">Original</label>
                                              </div>
                                         </div>
                                         <div class="col-lg-6">
                                             <div class="inputGroup">
                                                     <input type="checkbox" id="white" name="background[]" value="white">

                                                      <label for="white">White</label>
                                              </div>
                                         </div>
                                         <div class="col-lg-6">
                                             <div class="inputGroup">
                                                     <input type="checkbox" id="none" name="background[]" value="none">

                                                      <label for="none">None</label>
                                              </div>
                                         </div>

                                    </div>
                                    <h5>Instruction Message *</h5>
                                    <div class="row mbot-30 mtop-30">

                                        <div class="col-lg-12">
										    <textarea class="single-textarea" name="description" placeholder="Instruction Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Instruction Message'" data-validation-regexp="^[a-zA-Z ]{2,30}$"></textarea>
									    </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-element-widget">
									            <h3 class="mb-30 title_color">Return file as *</h3>
									            <div class="form-group">
										            <select class="form-control" name="return_type">
											            <option value="JPEG">JPEG</option>
											            <option value="PNG">PNG</option>
											            <option value="TIFF">TIFF</option>
											            <option value="PSD">PSD</option>
											            <option value="EPS">EPS</option>
										            </select>
									            </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-element-widget">
									            <h3 class="mb-30 title_color">Turnaround time</h3>
									            <div class="form-group">
										            <select class="form-control" name="turn_around_time">
											            <option value="Flexible">Flexible</option>
											            <option value="12 hours">12 hours</option>
											            <option value="24 hours">24 hours</option>
											            <option value="48 hours">48 hours</option>

										            </select>
									            </div>
                                            </div>

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
                                    


                                </div>
                                    <!-- <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-11 main-section">
                                            <div class="">
                                                <input type="file" id="input-id" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="more_btn">
                                                    <button type="submit" class="main_btn" id="order" style="border:none">Submit</button>
                                            </div>

                                        </div>

                                    </div>

                                 </form>



                                </div>

                        </div>
                     </div>
                 </div>

             </section>





</div>
@endsection
