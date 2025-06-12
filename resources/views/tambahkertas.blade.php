@extends('template')

@section('content')
    <h3> Kertas</h3>

    <a href="/kertas/tambah" class="btn btn-info"> + Tambah Kertas Baru</a>


	<form action="/kertas/cari" method="GET" class="form-inline">  <!-- form-inline (dipaksa 1 baris) -->
        <div class="mb-3">
		<label class="form-label">Cari Kertas :</label>
        <input type="text" name="cari" placeholder="Cari kertas .." class="form-control">
        </div>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>


    <table class="table table-striped">
        <tr>
            <th>Kertas</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kertas as $k)
            <tr>
                <td>{{ $k->merkkertas }}</td>
                <td>{{ $k->hargakertas }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>{{ $k->berat }}</td>
                <td>
                    <a href="/kertas/edit/{{ $k->ID }}" class="btn btn-success">Edit</a>
                    <a href="/kertas/hapus/{{ $k->ID }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $kertas->links() }}  <!-- hanya bisa di pakai dengan peginate , saat get() harus dihapus -->
@endsection

