@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Favoritos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label >Título URL *</label>
                            <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="body" rows="6" class="form-control">{{ old('body', $post->body) }}</textarea>
                        </div>                        
                        <div class="form-group">
                            <label>URL *</label>
                            <textarea name="iframe" class="form-control" required>{{ old('iframe', $post->iframe) }}</textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn.sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection