@extends('layouts.home')
@section('title_page','Tambah Data Surat Masuk')
@section('content')

    <form action="{{ route('surat-masuk.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="mail_number">No. Surat</label>
                        <input type="text" class="form-control @error('mail_number') is-invalid @enderror" name="mail_number" value="{{ old('mail_number') }}">
            
                        @error('mail_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="mail_date">Tgl. Surat</label>
                        <input type="date" class="form-control @error('mail_date') is-invalid @enderror" name="mail_date" value="{{ old('mail_date') }}">
            
                        @error('mail_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="record_date">Tgl. Catat</label>
                        <input type="date" class="form-control @error('record_date') is-invalid @enderror" name="record_date" value="{{ old('record_date') }}">
            
                        @error('record_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="sender">Pengirim</label>
                        <input type="text" class="form-control @error('sender') is-invalid @enderror" name="sender" value="{{ old('sender') }}">
            
                        @error('sender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="recipient">Penerima</label>
                        <input type="text" class="form-control @error('recipient') is-invalid @enderror" name="recipient" value="{{ old('recipient') }}">
            
                        @error('recipient')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="note">Keterangan</label>
                        <textarea class="form-control @error('note') is-invalid @enderror" name="note">{{ old('note') }}</textarea>
            
                        @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="file_in">File</label>
                        <input type="file" class="form-control-file @error('file_in') is-invalid @enderror" name="file_in" value="{{ old('file_in') }}">
                        <span class="text-small text-danger font-italic">File extension only: jpg, jpeg, png, doc, docx, pdf</span>
            
                        @error('file_in')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <button class="btn btn-primary">Tambah</button>
                        <a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
