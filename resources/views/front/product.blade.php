@extends('front.layout.layout')

@section('slider')
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
                @foreach($products as $product)
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                          <!-- <a href="" class="option1">
                           Product Details
                           </a>-->
                           <form action="{{url('add_cart', $product->id)}}" method="Post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                    <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                                 </div>
                           
                                 <div class="col-md-4">
                                    <input type="submit" value="Add to cart">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{asset('uploads/'.$product->image)}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                            {{$product->name}}
                        </h5>
                        <h6>
                            Tk.{{$product->price}}
                        </h6>
                     </div>
                  </div>
               </div>
               @endforeach
               
               </div>
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
</section>
@endsection