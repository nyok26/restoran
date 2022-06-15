@extends('app.main')

@section('main')
  <div class="container">
    <div class="col-lg-4">
      <a href="{{ route('food.index') }}" class="btn btn-danger mt-2"><i class="bi bi-arrow-left"></i> kembali</a>
    </div>
  </div>
  <div class="container">
    <div class="row mb-3 d-flex justify-content-center">
      <div class="col-lg-8">
        <h1 class="mb-2">{{ $food->nama }}</h1>
        <p class="fs-5">harga : {{ $food->harga }}</p>
        <a href="{{ $food->id }}/edit" class="btn btn-warning mb-3">Edit Buku</a>
        <form action="{{ url('food', $food->id) }}" method="post" class="d-inline">
          @method('Delete')
          @csrf
          <button class="btn btn-danger mb-3">Hapus Buku</button>
      </form>
        <article class="my-3 fs-5">
          {!!$food->sinopsis!!}
        </article>
      </div>
    </div>
  </div>

@endsection
