@extends('layouts.index')

@section('content')
<div class="container">
    <h2>Profile</h2>
    <div class="row">
        @if ($erros->any())
        @foreach ($erros->all() as $error)
        {{$error}}
        @endforeach
        @endif
        <div class="col-lg-5">
            <form action="{{ route('aksi_edit_profile') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->nama }}" name="nama">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" disabled class="form-control" value="{{ auth()->user()->email }}" name="email">
                </div>
                <button type="submit" class="btn btn-primary">
                    Edit Profile
                </button>
            </form>
        </div>
    </div>
</div>
@endsection