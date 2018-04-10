@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Pelanggan</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    @include('template.alert')
                    <form action="{{ route('pelanggan.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
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

                        <div class="form-group {{ $errors->has('nohp') ? ' has-error' : '' }}">
                            <label>No HP</label>
                            <input value="{{ old('nohp') }}" type="number" class="form-control" name="nohp">
                            @if ($errors->has('nohp'))
                                <span class="help-block"><strong>{{ $errors->first('nohp') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group  {{ $errors->has('bandwith') ? ' has-error' : '' }}">
                            <label>Bandwith</label>
                            <input value="{{ old('bandwith') }}" type="text" class="form-control" name="bandwith">
                            @if ($errors->has('bandwith'))
                                <span class="help-block"><strong>{{ $errors->first('bandwith') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group  {{ $errors->has('jumlahBayar') ? ' has-error' : '' }}">
                            <label>Jumlah Bayar</label>
                            <input value="{{ old('jumlahBayar') }}" type="number" class="form-control" name="jumlahBayar">
                            @if ($errors->has('jumlahBayar'))
                                <span class="help-block"><strong>{{ $errors->first('jumlahBayar') }}</strong></span>
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('bulan') ? ' has-error' : '' }}">
                            <label>Pilih Bulan Mulai</label><br>
                            <select id="basic3" class="show-tick form-control" name="bulan" multiple>
                                <option disabled="" selected="">Pilih Bulan</option>
                                @foreach($bulan as $b)
                                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('bulan'))
                                <span class="help-block"><strong>{{ $errors->first('bulan') }}</strong></span>
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