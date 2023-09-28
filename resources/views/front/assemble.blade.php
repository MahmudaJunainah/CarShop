@extends('front.layout.layout')
@section('slider')
<section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                    
                        <div class="crad-header" >
                            Assemble Vehicle Service
                        </div>
                        @if(Session::has('success'))

                            <div class="alert alert-success">

                            {{Session::get('success')}}

                            </div>

                        @endif
                        <div class="card-body">
                        <form id="demo-form2" action="{{route('assemble.store')}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
        	                @csrf
         
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="phone" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <div class="crad-header">
                           Section: Engine 
                        </div>
          <div class="form-group">
          <label for="name" >Chasis Price: Tk 100000</label>
                                    <select name = "chasis_parts" required="required">
                                        <option value = "Toyota X corolla" selected>Toyota X corolla</option>
                                        <option value = "Mitshubishi Lancer">Mitshubishi Lancer</option>
                                        <option value = "Mazda Axela">Mazda Axela</option>
                                        
                                    </select>
            <!--<div class="col-md-6 col-sm-6 col-xs-12">
              <input type="enum" name="select_service" class="form-control col-md-7 col-xs-12" required="">
            </div>-->
          </div>
          <div class="form-group">
          <label for="name" >Engine ( 1500 cc Sedan) Price : Tk 100000</label>
                                    <select name = "engine_parts" required="required">
                                        <option value = " Diesel" selected> Diesel</option>
                                        <option value = "Petrol">Petrol</option>
                                        <option value = "Octane">Octane</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >Air filter Price : Tk 1400</label>
                                    <select name = "air_filter" required="required">
                                        <option value = "Denkermann Air filter" selected> Denkermann Air filter</option>
                                        <option value = "BMW 13 71 52 Air filter">BMW 13 71 52 Air filter</option>
                                        <option value = "Denso Cool gear Air filter">Denso Cool gear Air filter</option>
                                        
                                    </select>
            
          </div>
          <div class="form-group">
          <label for="name" >Fuel filter Price : Tk 3500</label>
                                    <select name = "fuel_filter" required="required">
                                        <option value = "Toyota 1724 Element" selected> Toyota 1724 Element</option>
                                        <option value = "Mazda LF3t-13 Genuine pump and gage">Mazda LF3t-13 Genuine pump and gage</option>
                                        <option value = "Mitshubishi MB2209 Genuine">Mitshubishi MB2209 Genuine</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >DRIVE BELT Price : Tk 2100</label>
                                    <select name = "drive_belt" required="required">
                                        <option value = "TOYOTA JDM Genuine" selected>  TOYOTA JDM Genuine</option>
                                        <option value = "Mitshubishi 4PK"> Mitshubishi 4PK</option>
                                        <option value = "Mazda Genuine">Mazda Genuine</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >FUEL INJECTOR : Tk 48000</label>
                                    <select name = "fuel_injector" required="required">
                                        <option value = "MAZDA p501 Genuine" selected>MAZDA p501 Genuine</option>
                                        <option value = "Toyota JDM Genuine">Toyota JDM Genuine</option>
                                        <option value = "Mitshubishi 1500">Mitshubishi 1500</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >FUEL PUMP : Tk 32500</label>
                                    <select name = "fuel_pump" required="required">
                                        <option value = "DENSO 23221 PUMP" selected>DENSO 23221 PUMP</option>
                                        <option value = "HKT GIP-502">HKT GIP-502</option>
                                        <option value = "Mazda LF3T">Mazda LF3T</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >TENSIONER IDLERS & DAMPERS price: 13500</label>
                                    <select name = "tensioner_idelers" required="required">
                                        <option value = "Mazda PE&W-15-980" selected>Mazda PE&W-15-980</option>
                                        <option value = "Toyota JDM">Toyota JDM</option>
                                        <option value = "Mitshubishi Genuine">Mitshubishi Genuine</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >OIL FILTER PRICE: Tk 600 </label>
                                    <select name = "oil_filter" required="required">
                                        <option value = "Denso COOL gear" selected> Denso COOL gear</option>
                                        <option value = "HKS">HKS </option>
                                        <option value = "JDA T1636">JDA T1636</option>
                                        
                                    </select>
           
          </div>
          <div class="crad-header">
                           Section: TRANSMISSION 
            </div>
            <div class="form-group">
          <label for="name" >CV Joint PRICE: Tk 7000 </label>
                                    <select name = "cv_joint" required="required">
                                        <option value = "NKN Genuine Outer CV" selected>NKN Genuine Outer CV</option>
                                        <option value = "JDM">JDM </option>
                                        <option value = "Mazda Genuine"> Mazda Genuine</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >Wheel Bearings and Hubs PRICE: Tk 21850 </label>
                                    <select name = "wheel_bearings_and_hubs" required="required">
                                        <option value = "Koyo DA" selected>Koyo DA</option>
                                        <option value = "KOYO Genuine">KOYO Genuine</option>
                                        <option value = "Mazda">Mazda</option>
                                        
                                    </select>
           
          </div>
          <div class="crad-header">
                           Section: Tranaxle Fluid
            </div>
            <div class="form-group">
          <label for="name" >Tranaxle Fluid: price: Tk 3000 </label>
                                    <select name = "tranaxle_fluid" required="required">
                                        <option value = "bizol protect" selected>bizol protect</option>
                                        <option value = "Caltex texamatic">Caltex texamatic</option>
                                        <option value = "Citgo transgard">Citgo transgard</option>
                                        
                                    </select>
           
          </div>
          <div class="crad-header">
                           Section: BRAKES
            </div>
            <div class="form-group">
          <label for="name" >Brake caliper & Kits price: Tk 5200 </label>
                                    <select name = "brake_caliper" required="required">
                                        <option value = "Mitshubishi Genuine Front and rear" selected>Mitshubishi Genuine Front and rear</option>
                                        <option value = "Toyota genuine front and rear">Toyota genuine front and rear</option>
                                        <option value = "Mazda stock front and rear"> Mazda stock front and rear</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >Brake Pads price: Tk 2500 </label>
                                    <select name = "brake_pads" required="required">
                                        <option value = "Advics front" selected>Advics front</option>
                                        <option value = "Bremdo front">Bremdo front</option>
                                        <option value = "Hoda front">Hoda front</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >Brake Shoe Price: Tk 4000 </label>
                                    <select name = "brake_shoe" required="required">
                                        <option value = "Toyota Rear brake shoe" selected>Toyota Rear brake shoe</option>
                                        <option value = "Mitshubishi Genuine Rear  brake shoe">Mitshubishi Genuine Rear  brake shoe</option>
                                        <option value = "Mazda rear brake shoe">Mazda rear brake shoe</option>
                                        
                                    </select>
           
          </div>
          <div class="crad-header">
                           Section: SUSPENSION and STEERING
            </div>
            <div class="form-group">
          <label for="name" >Steering Price: Tk 45000 </label>
                                    <select name = "steering" required="required">
                                        <option value = "Toyota x corolla" selected>Toyota x corolla </option>
                                        <option value = "Mitshubishi lancer"> Mitshubishi lancer</option>
                                        <option value = "Mazda axella"> Mazda axella</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >Full JDM Suspension KIT Price: Tk 60000</label>
                                    <select name = "full_jdm_suspension_kit" required="required">
                                        <option value = "Stock Toyota Axela" selected>Stock Toyota Axela</option>
                                        <option value = "Stock Mitshubishi Lancer"> Stock Mitshubishi Lancer</option>
                                        <option value = "Genuine Mazda Axela"> Genuine Mazda Axela</option>
                                        
                                    </select>
           
          </div>
          <div class="crad-header">
                           Section: Body and EXHAUST
            </div>
            <div class="form-group">
          <label for="name" >Body full kit Price: Tk 100000</label>
                                    <select name = "body_full_kit_price" required="required">
                                        <option value = "Toyota 2006 X corolla full kit" selected>Toyota 2006 X corolla full kit</option>
                                        <option value = "Mitshubishi Lancer 2008 full kit"> Mitshubishi Lancer 2008 full kit</option>
                                        <option value = "Mazda Axela Full kit">  Mazda Axela Full kit</option>
                                        
                                    </select>
           
          </div>
          <div class="form-group">
          <label for="name" >Dashboard and electronics Price: Tk 50000</label>
                                    <select name = "dashboard_and_electronics" required="required">
                                        <option value = "Toyota stock" selected> Toyota stock</option>
                                        <option value = "Mazda Stock"> Mazda Stock</option>
                                        <option value = "Mitshubishi Stock">Mitshubishi Stock</option>
                                        
                                    </select>
           
          </div>
          <div class="crad-header">
                           Assemble Fee: 99850
            </div>
            <div class="crad-header">
                           Total Bill: 700000
            </div>





          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
              <input type="submit" class="btn btn-success" value="Request assemble">
              
            

        </form>
                        </div>
                    </div>
        
                </div>
        
            </div>

        </div>
    


    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@endsection