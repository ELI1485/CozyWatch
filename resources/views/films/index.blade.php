@extends('master')

@section('content')
<div class="container">
    <div class="row g-5">
        
        <!-- LEFT COLUMN: The "Add Film" Glass Form -->
        <div class="col-lg-4">
            <div class="glass-card p-4 position-sticky" style="top: 100px;">
                <h3 class="fw-bold mb-4 text-white">
                    <i class="fa-solid fa-film text-brand me-2"></i> Add New Film
                </h3>
                
                <form action="{{ route('films.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Title</label>
                        <input type="text" name="title" required class="form-control shadow-sm">
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label text-secondary small text-uppercase fw-bold">Director</label>
                            <input type="text" name="director" required class="form-control shadow-sm">
                        </div>
                        <div class="col-6">
                            <label class="form-label text-secondary small text-uppercase fw-bold">Year</label>
                            <input type="number" name="year" required class="form-control shadow-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Genre</label>
                        <input type="text" name="genre" required class="form-control shadow-sm">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Poster URL</label>
                        <input type="text" name="image" placeholder="https://..." class="form-control shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-secondary small text-uppercase fw-bold">Description</label>
                        <textarea name="description" rows="3" class="form-control shadow-sm"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold text-uppercase shadow">
                        Save to Database <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- RIGHT COLUMN: The Movie Grid -->
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-secondary border-opacity-25 pb-3">
                <h1 class="fw-bolder m-0 text-white display-6">Your Collection</h1>
                <span class="badge bg-secondary text-light px-3 py-2 fs-6 rounded-pill">
                    {{ $films->count() }} films
                </span>
            </div>

            @if($films->count() > 0)
                <div class="row g-4">
                    @foreach($films as $film)
                    <div class="col-md-6 col-xl-4">
                        <!-- Movie Card -->
                        <div class="card bg-transparent border-0 h-100 movie-card text-white">
                            
                            <!-- Poster Image -->
                            <div class="position-relative w-100" style="height: 350px; background-color: rgba(30, 41, 59, 0.8);">
                                @if($film->image)
                                    <img src="{{ $film->image }}" class="w-100 h-100 object-fit-cover" alt="{{ $film->title }}">
                                @else
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center text-secondary">
                                        <i class="fa-solid fa-image fa-3x"></i>
                                    </div>
                                @endif
                                
                                <!-- Dark Gradient Overlay for text readability -->
                                <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(15, 23, 42, 1) 0%, transparent 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <span class="badge text-bg-danger">{{ $film->genre }}</span>
                                        <small class="text-light fw-bold">{{ $film->year }}</small>
                                    </div>
                                    <h5 class="card-title fw-bold m-0 text-truncate" title="{{ $film->title }}">{{ $film->title }}</h5>
                                    <small class="text-secondary opacity-75 d-block text-truncate">{{ $film->director }}</small>
                                </div>

                                <!-- Button Actions container (Top Right) -->
                                <div class="position-absolute top-0 end-0 m-2 d-flex gap-2" style="opacity: 0.9;">
                                    
                                    <!-- View Details Button -->
                                    <a href="{{ route('films.show', $film->id) }}" class="btn btn-primary rounded-circle shadow-sm" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center;" title="View Details">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning rounded-circle shadow-sm text-dark" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center;" title="Edit Film">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this film?')" class="btn btn-danger rounded-circle shadow-sm" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center;" title="Delete Film">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="glass-card text-center p-5 mt-4">
                    <i class="fa-solid fa-film fa-4x text-secondary mb-3"></i>
                    <h3 class="fw-bold text-white">No films yet</h3>
                    <p class="text-secondary mb-0">Use the form on the left to add your first movie!</p>
                </div>
            @endif
        </div>

    </div>
</div>
@endsection
