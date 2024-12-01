<!-- resources/views/search-results.blade.php -->
<h1>Hasil Pencarian</h1>
@foreach ($vendors as $vendor)
    <div>
        <h3>{{ $vendor->name }}</h3>
        <p>{{ $vendor->description }}</p>
    </div>
@endforeach
