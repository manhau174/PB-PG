@extends('layouts.header');

@section('content')
  <div class="main-container col2-left-layout">
    <div class="main container">
      <div class="page-title">
        <h1>Update thong tin Pb-Pg</h1>
      </div>
      <div class="row">
        <section class="col-main col-sm-9">
          <ol class="one-page-checkout" id="checkoutSteps">
            
            <li id="opc-billing" class="section allow active">
            
              <div id="checkout-step-billing" class="step a-item" style="">
                <form action="{{Route('updatePbPg.store')}}" method="POST" role="form" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="">FULLNAME</label>
                    <input type="text" class="form-control" id="" name="full_name" placeholder="Input field" value="">
                  </div>

                  <div class="input-group date" data-provide="datepicker">
                    <label for="">BIRTHDAY</label>
                    <div class="form-group">
                      <div class='input-group date' id='datetimepicker1'>
                          <input type='text' name="birthday" class="form-control" />
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="">ADDRESS</label>
                    <input type="text" class="form-control" id="" name="address" placeholder="Input field" value="">
                  </div>

                  <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="text" class="form-control" id="" name="email" placeholder="Input field" value="">
                  </div>

                  <div class="form-group">
                    <label for="">MOBILE</label>
                    <input type="text" class="form-control" id="" name="mobile" placeholder="Input field" value="">
                  </div>
                  <input type="hidden" name="city_id" value="1"> 
                  <div class="form-group">
                    <label for="">DESCRIPTION</label>
                    <input type="text" class="form-control" id="" name="description" placeholder="Input field" value="">
                  </div>

                  <div class="form-group">
                    <label for="">GENDER</label>
                    <div class="form-control">
                      <input type="radio" name="gender" value="1"> Male
                      <input type="radio" name="gender" value="0"> Female<br>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="">PROFILE_PICTURE</label>
                    <input type="text" class="form-control" id="" name="profile_picture" placeholder="Input field" value="">
                  </div>

                  <div class="form-group">
                    <label for="">IMAGE</label>
                    <input type="file" class="form-control" id="" name="images[]" placeholder="Input field" multiple>
                  </div>
                  
                  <div class="form-group">
                    <label for="">HEIGTH</label>
                    <input type="text" class="form-control" id="" name="height" placeholder="Input field" value="">
                  </div>

                  <div class="form-group">
                    <label for="">WEIGHT</label>
                    <input type="text" class="form-control" id="" name="weight" placeholder="Input field" value="">
                  </div>
                  @guest

                  @else
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  @endguest
                  
                  
                
                  <button type="submit" class="btn btn-primary">SAVE</button>
                </form>
                </div>
            </li>

          </ol>
        </section>        
      </div>
      </div>
    </div>
@endsection
@section('footer')
@include('layouts.footer')
@endsection