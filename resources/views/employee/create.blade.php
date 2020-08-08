@section('title', 'Contech Dashboard')
@extends('main')
@section('content')
<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Employee Lists</h1>

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-7">
          <div class="p-5">
            @if(Session::has('err_msg'))
            @php
                $error_msg=Session::get("err_msg");
                $arr_error=json_decode($error_msg);
                $validate_error=$arr_error->error;
               
            @endphp

            <div class="alert alert-danger" role="alert">
            <?php echo $validate_error;?>
            </div>
            @endif
            <form class="user" method="POST" action="{{ route('employee.store') }}">
              @csrf
              <div class="form-group">
                <input type="text"  name="name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="exampleInputEmail" placeholder="Name">
               </div>
              <div class="form-group">
                <input type="email"  name="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="text"  name="phone_number" class="form-control form-control-user @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}"id="exampleInputEmail" placeholder="Phone Number">
              </div>

              <div class="form-group">
                <select class="form-control form-control-user @error('age') is-invalid @enderror" name="age" placeholder="Choose Age">
                    <option value="" selected>Age</option>
                    <?php 
                    for($i=20;$i<65;$i++){ 
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                    }
                    ?>
                </select>    
              </div>

              <div class="form-group">
                <select class="form-control form-control-user @error('department') is-invalid @enderror" name="department" aria-placeholder="Choose Department">
                    <option value="" selected>Department</option>
                    <option value="CEO">CEO</option>
                    <option value="CFO">CFO</option>
                    <option value="PM">PM</option>
                    <option value="TL">TL</option>
                    <option value="PROGRAMMER">PROGRAMMER</option>
                </select>    
              </div>

              <div class="form-group">
                <input type="number" class="form-control form-control-user @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}"  id="exampleInputEmail" placeholder="Salary">
              </div>


              <button type="submit" style="text-align:center" class="btn btn-primary">
                {{ __('ADD') }}
            </button>
              
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection