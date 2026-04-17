@extends('master')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bolder m-0 text-white"><i class="fa-solid fa-pen-to-square text-brand me-2"></i> Edit Film</h1>
            <a href="{{ route('films.index') }}" class="btn btn-outline-light"><i class="fa-solid fa-arrow-left me-1"></i> Cancel Edit</a>
        </div>

        <div class="glass-card p-5">
            <form action="{{ route('films.update', $film->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row mb-4">
                    <div class="col-md-9">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Movie Title</label>
                        <input type="text" name="title" required value="{{ $film->title }}" class="form-control form-control-lg bg-dark text-white shadow-none">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Release Year</label>
                        <input type="number" name="year" required value="{{ $film->year }}" class="form-control form-control-lg bg-dark text-white shadow-none">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Director Name</label>
                        <input type="text" name="director" required value="{{ $film->director }}" class="form-control bg-dark text-white shadow-none">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Genre</label>
                        <input type="text" name="genre" required value="{{ $film->genre }}" class="form-control bg-dark text-white shadow-none">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label text-secondary small text-uppercase fw-bold">Poster URL</label>
                    <input type="text" name="image" value="{{ $film->image }}" placeholder="Leave blank to keep current image, or paste a new URL" class="form-control bg-dark text-white shadow-none">
                    @if($film->image)
                        <div class="mt-2 text-secondary small">
                            <i class="fa-solid fa-circle-info me-1"></i> Currently using an image. Replace the URL to change it.
                        </div>
                    @endif
                </div>

                <div class="mb-5">
                    <label class="form-label text-secondary small text-uppercase fw-bold">Description / Synopsis</label>
                    <textarea name="description" rows="5" class="form-control bg-dark text-white shadow-none">{{ $film->description }}</textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-lg px-5 fw-bold text-uppercase shadow">
                        <i class="fa-solid fa-floppy-disk me-2"></i> Update Movie
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
