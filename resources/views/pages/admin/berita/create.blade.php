@extends('layouts.admin')
@section('title', 'Tambah Berita')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto</label>
                    <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*" class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="konten" type="text" rows="10" cols="50" class="form-control @error('body') is-invalid @enderror" name="body" placeholder="Body" value="{{ old('body') }}"></textarea>
                    @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
@push('after-script')
<script>
    var konten = document.getElementById("konten");
    CKEDITOR.replace('konten',{
        language: 'en-gb'
    });
    CKEDITOR.config.allowedContent = true
</script>
@endpush

