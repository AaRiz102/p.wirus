<!-- resources/views/register-vendor.blade.php -->
<h1>Daftar Jadi Vendor</h1>
<!-- Formulir pendaftaran vendor akan ditambahkan di sini -->
<form action="{{ route('vendor.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama Vendor:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="service">Layanan yang Ditawarkan:</label>
        <input type="text" id="service" name="service" required>
    </div>
    <button type="submit">Daftar</button>
</form>
