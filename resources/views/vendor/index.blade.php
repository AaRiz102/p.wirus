@extends('layouts.layout')

@section('title', 'Daftar Vendor')

@section('content')
<!-- Halaman Registrasi Vendor -->
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <!-- Form Registrasi Vendor -->
                <form action="{{ route('vendor.store') }}" method="POST" class="mx-1 mx-md-4">
                  @csrf
                  <!-- Nama Toko -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-store fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="text" id="store_name" name="store_name" class="form-control" required />
                      <label class="form-label" for="store_name">Store Name</label>
                    </div>
                  </div>

                  <!-- Deskripsi Toko -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-pencil-alt fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <textarea id="store_description" name="store_description" class="form-control" rows="4" required></textarea>
                      <label class="form-label" for="store_description">Store Description</label>
                    </div>
                  </div>

                  <!-- Alamat Toko -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <textarea id="address" name="address" class="form-control" rows="4" required></textarea>
                      <label class="form-label" for="address">Address</label>
                    </div>
                  </div>

                  <!-- Password -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" required />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  <!-- Ulangi Password -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
                      <label class="form-label" for="password_confirmation">Repeat Password</label>
                    </div>
                  </div>

                  <!-- Checkbox Setuju -->
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="terms" required />
                    <label class="form-check-label" for="terms">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <!-- Tombol Daftar -->
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Daftar Vendor -->
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <h2 class="text-center mb-5">Daftar Mitra</h2>

            @if ($vendors->isEmpty())
                <p class="text-center">Belum ada data vendor yang tersedia.</p>
            @else
                <div class="row">
                    @foreach ($vendors as $vendor)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $vendor->store_name }}</h5>
                                <p class="card-text">{{ $vendor->store_description }}</p>
                                <p class="text-muted small">{{ $vendor->address }}</p>
                                <p class="text-muted small">Bergabung sejak: {{ $vendor->created_at ? $vendor->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
