@extends('master')

@section('content')
<div class="container py-5">
    <div class="mb-4 d-flex justify-content-between align-items-center border-bottom border-secondary border-opacity-25 pb-3">
        <h1 class="fw-bolder m-0 text-white"><i class="fa-solid fa-film text-brand me-2"></i> Movie Details</h1>
        <div>
            <a href="{{ route('films.index') }}" class="btn btn-outline-light me-2"><i class="fa-solid fa-arrow-left me-1"></i> Back to Collection</a>
            <a href="{{ route('films.edit', $film->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen me-1"></i> Edit Film</a>
        </div>
    </div>

    <div class="glass-card p-0 overflow-hidden">
        <div class="row g-0">
            <!-- Movie Poster -->
            <div class="col-md-5 col-lg-4 text-center bg-dark" style="min-height: 500px;">
                @if($film->image)
                    <img src="{{ $film->image }}" alt="{{ $film->title }}" class="img-fluid h-100 object-fit-cover w-100">
                @else
                    <div class="h-100 d-flex flex-column align-items-center justify-content-center text-secondary py-5">
                        <i class="fa-solid fa-image fa-5x mb-3"></i>
                        <p>No Poster Available</p>
                    </div>
                @endif
            </div>
            
            <!-- Movie Information -->
            <div class="col-md-7 col-lg-8 p-5 d-flex flex-column justify-content-center">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="badge text-bg-primary fs-6 py-2 px-3">{{ $film->genre }}</span>
                    <span class="text-secondary fw-bold fs-5"><i class="fa-solid fa-calendar me-1"></i> {{ $film->year }}</span>
                </div>
                
                <h2 class="display-4 fw-bolder text-white mb-2">{{ $film->title }}</h2>
                <h4 class="text-secondary mb-4">Directed by <span class="text-light">{{ $film->director }}</span></h4>
                
                <hr class="border-secondary opacity-50 mb-4">
                
                <h5 class="text-uppercase fw-bold text-brand mb-3">Description</h5>
                <p class="fs-5 text-light opacity-75 lh-base mb-5" style="white-space: pre-line;">
                    {{ $film->description ?? 'No description provided for this film.' }}
                </p>
                
                <div class="mt-auto d-flex gap-3">
                    <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this film forever?')" class="btn btn-outline-danger px-4">
                            <i class="fa-solid fa-trash me-2"></i> Delete Film
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
