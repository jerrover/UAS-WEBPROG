@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Edit Harga Galon</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('edit-harga-galon.update', $harga->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menyatakan bahwa ini adalah permintaan untuk update -->

                <!-- Menampilkan error jika ada -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="harga">Harga Galon Reguler</label>
                    <input type="number" name="harga-reguler" id="price" class="form-control" value="{{ old('harga', $harga->price) }}" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Galon Agen</label>
                    <input type="number" name="harga-agen" id="price" class="form-control" value="{{ old('harga', $harga->price) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>



        </div>
    </div>
</div>
@endsection
