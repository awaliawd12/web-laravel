@extends('template')

@section('main')
    <h4>Hai !!!</h4>
    <p>Selamat datang di Vokasi UB, Prodi kita :</p>

    @if (!empty($namaprodi))
        <ul>
            @foreach ($namaprodi as $prodi)
                <li>{{ $prodi }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada memiliki prodi</p>
    @endif
@endsection

@section('footer')
    <footer>© 2024 Vokasi UB</footer>
@endsection
