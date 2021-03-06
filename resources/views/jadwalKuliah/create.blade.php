@extends('layout.template')
@section('header')
    <div class="card-header">
        <p class="card-title">
            <a href="{{route('jadwal-kuliah.index')}}" class="btn btn-secondary btn-sm mr-3 "><span class="fa fa-arrow-left"></span></a>
            Add Jadwal Kuliah
        </p>
    </div>
@endsection
@section('table')
<div class="row">
    <div class="col-sm-8 offset-2">
        {{-- @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif --}}
        <form action="{{route('jadwal-kuliah.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Hari</label>
                <select name="hari_id" id="" class="form-control" value="{{old('hari_id')}}">
                    <option value="">-pilih-</option>
                    @foreach ($haris as $hari)
                        <option value="{{$hari->id}}">{{$hari->nama}}</option>
                    @endforeach
                </select>
                @error('hari_id')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Matakuliah</label>
                <select name="matakuliah_id" id="" class="form-control" value="{{old('matakuliah_id')}}">
                    <option value="">-pilih-</option>
                    @foreach ($matakuliahs as $matakuliah)
                        <option value="{{$matakuliah->id}}">{{$matakuliah->nama}}</option>
                    @endforeach
                </select>
                @error('matakuliah_id')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Dosen Pengajar</label>
                <select name="dosen_id" id="" class="form-control" value="{{old('dosen_id')}}">
                    <option value="">-pilih-</option>
                    @foreach ($dosens as $dosen)
                        <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                    @endforeach
                </select>
                @error('dosen_id')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ruangan</label>
                <select name="ruangan_id" id="" class="form-control" value="{{old('ruangan_id')}}">
                    <option value="">-pilih-</option>
                    @foreach ($ruangans as $ruangan)
                        <option value="{{$ruangan->id}}">{{$ruangan->nama}}</option>
                    @endforeach
                </select>
                @error('ruangan_id')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Semester</label>
                <input type="number" class="form-control" name="semester" value="{{old('semester')}}">
                @error('semester')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Slot</label>
                <input type="number" class="form-control" name="slot" value="{{old('slot')}}">
                @error('slot')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Waktu Mulai</label>
                <input type="time" class="form-control" name="waktu_mulai" value="{{old('waktu_mulai')}}">
                @error('waktu_mulai')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Waktu Selesi</label>
                <input type="time" class="form-control" name="waktu_selesai" value="{{old('waktu_selesai')}}">
                @error('waktu_selesai')
                    <span class="btn btn-sm btn-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection
