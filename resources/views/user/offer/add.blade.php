@extends('user.layout.layout');
@section('content')

<section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                    
                        <div class="crad-header">
                            Post Offer
                        </div>
                        @if(Session::has('success'))

                            <div class="alert alert-success">

                            {{Session::get('success')}}

                            </div>

                        @endif
                        <div class="card-body">
                        <form id="demo-form2" action="{{route('offer.store')}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                            @csrf
         
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" name="price" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name = "image" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="description" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <div class="form-group">
          <label for="name" >Select Offer</label>
                                    <select name = "select_offer" required="required">
                                        <option value = "Recycle" selected>Recycle</option>
                                        <option value = "Resell">Resell</option>
                                                                               
                                    </select>
            <!--<div class="col-md-6 col-sm-6 col-xs-12">
              <input type="enum" name="select_service" class="form-control col-md-7 col-xs-12" required="">
            </div>-->
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="submit" class="btn btn-success" value="Submit">
              
            </div>
            <a href="{{route('home')}}" > Return Home </a>
          </div>

        </form>
                        </div>
                    </div>
        
                </div>
        
            </div>

        </div>
    


    </section>
@endsection