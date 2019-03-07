@extends('layouts.app') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Update Customer Detail</h6>
            <div class="form-layout form-layout-6">
                <form method="POST" class="form-layout form-layout-6" action="{{ route('user.update', $user->id) }}">
                    @method('PATCH') @csrf
                    <div class="row no-gutters">
                        <div class="col-5 col-sm-4">
                            Name:
                        </div>
                        <!-- col-4 -->
                        <div class="col-7 col-sm-8">
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}">
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
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}">
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
        </div>
        <!-- form-layout -->
@endsection