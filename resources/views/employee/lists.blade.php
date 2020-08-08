@section('title', 'Contech Dashboard')
@extends('main')
@section('content')
<!-- Page Heading -->
<div class="pull-left">
<h1 class="h3 mb-2 text-gray-800">Employee Lists</h1>
</div>
<div class="pull-right">
<a href="" style="text-align:center;float:right" class="btn btn-primary">
  ADD Employee
</a>
</div>
<div style="clear: both;"></div>

<div class="card shadow mb-4">
  
    
    
    <div class="card-body">

      @if(Session::has('msg'))
          <div class="alert alert-success" role="alert">
          {{Session::get("msg")}}
          </div>
      @endif

      @if(Session::has('err_msg'))
          <div class="alert alert-danger" role="alert">
          {{Session::get("err_msg")}}
          </div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Department</th>
              <th>Age</th>
              <th>Salary</th>
              <th>Delete</th>
            </tr>
          </thead>
          
          <tbody>

            
              @if (isset($employee_lists) && count($employee_lists)>0) 
               @foreach ($employee_lists as $employee_list)
                  <tr>
                    <td><?php echo $employee_list->name;?></td>
                    <td><?php echo $employee_list->email;?></td>
                    <td><?php echo $employee_list->phone_number;?></td>
                    <td><?php echo $employee_list->department;?></td>
                    <td><?php echo $employee_list->age;?></td>
                    <td><?php echo $employee_list->salary.'AED';?></td>
                    <td><a href="<?php echo $employee_list->id."/delete";?>" >Delete</a></td>
                    
                  </tr>
                @endforeach
              


              @endif


            
          </tbody>
        </table>
      </div>
    </div>
  </div>

    
@endsection