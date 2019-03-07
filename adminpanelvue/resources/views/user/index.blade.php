@extends('layouts.app') 
@section('content')
<div class="br-mainpanel">
<div class="br-pagebody">
<div class="br-section-wrapper">
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Managemnet</h6>
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br /> 
    @endif
    <div class="form-layout form-layout-6">
            <form method="POST" class="form-layout form-layout-6" action="{{ url('user') }}">
                @csrf
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                         Name:
                    </div>
                    <!-- col-4 -->
                    <div class="col-7 col-sm-8">
                        <input class="form-control" type="text" name="name" value="">
                    </div>
                    <!-- col-8 -->
                </div>
                <!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                        Email Address:
                    </div>
                    <!-- col-4 -->
                    <div class="col-7 col-sm-8">
                        <input class="form-control" type="email" name="email" value="">
                    </div>
                    <!-- col-8 -->
                </div>
    
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                        Password:
                    </div>
                    <!-- col-4 -->
                    <div class="col-7 col-sm-8">
                        <input class="form-control" autocomplete="off" type="password" name="password">
                    </div>
                    <!-- col-8 -->
                </div>
                <!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
                <!-- form-group -->
            </form>
        </div>
    <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table table-bordered table-colored table-info">
            <thead>
                <tr>
                    <th class="wd-10p">ID</th>
                    <th class="wd-35p">Name</th>
                    <th class="wd-35p">Email</th>
                    <th class="wd-35p">Option</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $values)
                <tr>
                    <th scope="row">{{ $values->id }}</th>
                    <td>{{$values->name }}</td>
                    <td>{{ $values->email}}</td>
                    <td style="text-align: center">
                        <a href="{{ URL::to('user/' . $values->id) }}" class="btn btn-primary">
                          Edit
                        </a>
                        <form action="{{ route('user.destroy', $values->id)}}" method="post" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" style="cursor: pointer" type="submit">Delete</button>
                        </form>
                    </td>
                   
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
    <!-- form-layout -->
</div>

@endsection
 
@section('js')
<script>
    $(function(){
            'use strict'
    
            // Toggles
            $('.toggle').toggles({
              on: true,
              height: 26
            });
    
            // Input Masks
            $('#dateMask').mask('99/99/9999');
            $('#phoneMask').mask('(999) 999-9999');
            $('#ssnMask').mask('999-99-9999');
    
            // Datepicker
            $('.fc-datepicker').datepicker({
              showOtherMonths: true,
              selectOtherMonths: true
            });
    
            $('#datepickerNoOfMonths').datepicker({
              showOtherMonths: true,
              selectOtherMonths: true,
              numberOfMonths: 2
            });
    
            // Time Picker
            $('#tpBasic').timepicker();
            $('#tp2').timepicker({'scrollDefault': 'now'});
            $('#tp3').timepicker();
    
            $('#setTimeButton').on('click', function (){
              $('#tp3').timepicker('setTime', new Date());
            });
    
            // Color picker
            $('#colorpicker').spectrum({
              color: '#17A2B8'
            });
    
            $('#showAlpha').spectrum({
              color: 'rgba(23,162,184,0.5)',
              showAlpha: true
            });
    
            $('#showPaletteOnly').spectrum({
                showPaletteOnly: true,
                showPalette:true,
                color: '#DC3545',
                palette: [
                    ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                    ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
                ]
            });
    
    
            // Rangeslider
            if($().ionRangeSlider) {
              $('#rangeslider1').ionRangeSlider();
    
              $('#rangeslider2').ionRangeSlider({
                  min: 100,
                  max: 1000,
                  from: 550
              });
    
              $('#rangeslider3').ionRangeSlider({
                  type: 'double',
                  grid: true,
                  min: 0,
                  max: 1000,
                  from: 200,
                  to: 800,
                  prefix: '$'
              });
    
              $('#rangeslider4').ionRangeSlider({
                  type: 'double',
                  grid: true,
                  min: -1000,
                  max: 1000,
                  from: -500,
                  to: 500,
                  step: 250
              });
            }
    
          });
</script>
@endsection