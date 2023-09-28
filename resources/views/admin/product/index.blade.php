@extends('admin.layout.layout')

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
          <table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>S.no</th>
			<th>Product Name</th>
			<th>Category Name</th>
			<th>Price</th>
			<!--<th>Extra Details</th>-->
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $key=>$product)
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$product->name}}</td>
			<td>
				@if($product->category_id)
					{{$product->category->name}}
				@endif
			</td>
			<td>{{$product->price}}</td>
			<!--<td><button><a href="">Add</a></button></td>-->
			<td><img style="height:80px;width:80px;" src="{{asset('uploads/'.$product->image)}}"></td>
			<td>
            <td><button><a href="{{route('product.edit',$product->id)}}">Edit</a></button></td>
			
				
			</td>
		</tr>
		@endforeach
	</tbody>
                     

                      <!--<div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection


