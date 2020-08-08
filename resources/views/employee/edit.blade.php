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
            
            <form class="user">
              <div class="form-group">
                <input type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" name="name" class="form-control form-control-user" id="exampleInputEmail" placeholder="Name">
               </div>
              <div class="form-group">
                <input type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="text" @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" name="phone_number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Phone Number">
              </div>

              <div class="form-group">
                <select class="form-control form-control-user @error('age') is-invalid @enderror" name="age" placeholder="Choose Age">
                    <?php 
                    for($i=0;$i<65;$i++){ 
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                    }
                    ?>
                </select>    
              </div>

              <div class="form-group">
                <select class="form-control form-control-user @error('department') is-invalid @enderror" name="department" aria-placeholder="Choose Department">
                    <option value="CEO">CEO</option>
                    <option value="CFO">CFO</option>
                    <option value="PM">PM</option>
                    <option value="TL">TL</option>
                    <option value="PROGRAMMER">PROGRAMMER</option>
                </select>    
              </div>

              <div class="form-group">
                <input type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Salary">
              </div>


              <input type="button" class="btn btn-primary btn-user btn-block" value="Add Employee">
               
              
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection