@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach(\App\Models\Post::all() as $post)

                <div class="col-12 col-lg-3">
                    <div class="item-card">
                        <div class="item-card-img">
                            @forelse($post->photos()->latest('id')->limit(1)->get() as $photo)
                                <img src="{{ asset('storage/thumbnail/'.$photo->name) }}" />
                            @empty
                                <p class="text-muted">No Photo</p>
                            @endforelse
                        </div>
                        <div>
                            <span>{{ $post->title }}</span>
                            <br>
                            {{ $post->price }} $
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
