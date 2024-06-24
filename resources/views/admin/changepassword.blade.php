@extends('admin.layouts.app')
@section('content')
@section('title', 'Change Password')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="row">
                    <div class="col-md-12">
                        @if (Session::has('message'))
                          
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>  
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Change password</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.savepassword') }}" id="myForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Old Password <small class="text-danger">*</small></label>
                                                <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Enter old password" value="{{ old('old_password') }}">
                                            </div>
                                            @if($errors->has('old_password'))
                                                <p class="text-danger">{{ $errors->first('old_password') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>New Password <small class="text-danger">*</small></label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password" value="{{ old('password') }}">
                                            </div>
                                            @if($errors->has('password'))
                                                <p class="text-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Confirm Password <small class="text-danger">*</small></label>
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter confirm password" value="{{ old('password_confirmation') }}">
                                            </div>
                                            @if($errors->has('password_confirmation'))
                                                <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                                            @endif
                                        </div> 
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>    
                                    </div>                                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $('.alert').delay(5000).slideUp();
        });
    </script>
@endsection