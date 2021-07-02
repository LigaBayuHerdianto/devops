@extends('admin.layout.master')

@section('title', 'Admin - Program Kebaikan')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Program Kebaikan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Program Kebaikan</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin.program.update', $program->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Judul Program</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ $program->title }}">
                                    </div>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <img src="{{ $program->image }}" alt="{{ $program->name }}">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                            value="{{ $program->image }}">
                                    </div>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                                            value="{{ $program->description }}">
                                    </div>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="modal-footer">
                                    <a href="{{route('admin.program.index')}}" type="button" class="btn btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection