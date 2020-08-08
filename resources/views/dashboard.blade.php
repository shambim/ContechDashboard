@section('title', 'Contech Dashboard')
@extends('main')
@section('content')
<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Dashoard</h1>

<!-- Content Row -->
<div class="row">

  <div class="col-xl-6 col-lg-7">

   

    <!-- Bar Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Top Paid Employee Chart</h6>
      </div>
      <div class="card-body">
        <div class="chart-bar">
          <canvas id="myBarChart"></canvas>
        </div>
        <hr>
      </div>
    </div>

  </div>

  <div class="col-xl-6 col-lg-7">

   

      <!-- Bar Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Average Salary By Age Chart</h6>
        </div>
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="myBarChart1"></canvas>
          </div>
        </div>
      </div>

    </div>

  
</div>

    
@endsection