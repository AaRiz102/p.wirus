<h1>Daftar Produk</h1>
<table>
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="{{ route('products.edit', $product->id) }}">Edit</a></td>
        </tr>
    @endforeach
</table>
