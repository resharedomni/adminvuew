@extends('layouts.app') 
@section('content')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> Login <span class="tx-normal"></span></div>
        <div class="tx-center mg-b-60">Admin Login Lowe's</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
            </div>
            <!-- form-group -->
            <div class="form-group">
                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span> @endif
            </div>
            <!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
    </div>
    <!-- login-wrapper -->
</div>
<!-- d-flex -->


@endsection