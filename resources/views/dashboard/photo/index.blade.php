@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Foto - Foto Wisata</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="dropdown">
        <a href="/dashboard/photos/create" class="btn btn-primary mb-3" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Tambah Foto Wisata</a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @foreach ($wsts as $wst)   
            <li><a class="dropdown-item" href="/dashboard/photos/create/{{ $wst->slug }}">{{ $wst->name }}</a></li>
            @endforeach
        </ul>
      </div>
    <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Wisata</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ $posts->firstItem() + $key }}</td>
                        <td>{{ $post->name }}</td>
                        <td>@if ($post->image)
                            <div style="max-width: 150px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid mt-3">
                            </div>
                        @elseif ($post->link)
                            <div style="max-width: 150px; overflow: hidden;">
                                <img src="{{ $post->link }}" alt="{{ $post->name }}" class="img-fluid mt-3">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x400/?{{ $post->name }}" alt="{{ $post->name }}"
                                class="img-fluid mt-3">
                        @endif</td>
                        <td>
                            <a href="/dashboard/photos/{{ $post->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/photos/{{ $post->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/photos/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
