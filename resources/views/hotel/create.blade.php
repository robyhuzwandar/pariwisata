@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Hotel</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    @include('template.alert')
                    <form action="{{ route('hotel.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label>Phone</label>
                            <input value="{{ old('phone') }}" type="text" class="form-control" name="phone">
                            @if ($errors->has('phone'))
                                <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('fax') ? ' has-error' : '' }}">
                            <label>Fax</label>
                            <input value="{{ old('fax') }}" type="number" class="form-control" name="fax">
                            @if ($errors->has('fax'))
                                <span class="help-block"><strong>{{ $errors->first('fax') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email</label>
                            <input value="{{ old('email') }}" type="text" class="form-control" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group  {{ $errors->has('npwp') ? ' has-error' : '' }}">
                            <label>Npwp</label>
                            <input value="{{ old('npwp') }}" type="number" class="form-control" name="npwp">
                            @if ($errors->has('npwp'))
                                <span class="help-block"><strong>{{ $errors->first('npwp') }}</strong></span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat" name="submit"><span
                                    class="glyphicon glyphicon-send"></span> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection