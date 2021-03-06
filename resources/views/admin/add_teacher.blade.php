@extends('admin.master')

@section('page_title','Admin | Add Teacher')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3>Add Teacher</h3>
                </div>
                <form role="form" method="POST" action="{{ route('admin.add_teacher') }}">
                    @csrf

                    @if(session('error'))
                        <label class="text-danger">{{ session('error') }}</label>
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Teacher Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Teacher Name" name="name" value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <label class="text-danger">{{ $errors->first('name') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <label class="text-danger">{{ $errors->first('email') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" value="{{ old('password') }}">
                            @if($errors->has('password'))
                                <label class="text-danger">{{ $errors->first('password') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contact_no">Contact Number</label>
                            <input type="number" class="form-control" id="contact_no" placeholder="Enter Contact Number" name="contact_no" value="{{ old('contact_no') }}">
                            @if($errors->has('contact_no'))
                                <label class="text-danger">{{ $errors->first('contact_no') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Address" name="address">{{ old('address') }}</textarea>
                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection