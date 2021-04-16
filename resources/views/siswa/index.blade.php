@extends('menu')
@section('content')
@if ($message = Session::get('success'))
    <div>
        <p>{{ $message }}</p>
    </div>
@endif
<center>
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        @foreach ($data_siswa as $siswa)
       <tr>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jns_kelamin }}</td>
            <td>{{ $siswa->temp_lahir }}</td>
            <td>{{ $siswa->tgl_lahir }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->asal_sekolah }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->jurusan }}</td>
            <td>
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                    <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
       </tr>
       @endforeach
    </table>
</center>
@endsection