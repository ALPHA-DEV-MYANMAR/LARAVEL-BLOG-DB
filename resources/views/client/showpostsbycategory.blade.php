@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12">

            </div>
        </div>

        {{--    Post --}}
        <div class="row">
            <div class="col-12">
                <div class="header-text">
                    @foreach($posts as $post)
                        {{ $post->category->name }}
                    @endforeach
                </div>
                <div>
                    <div class="row">

                        @foreach($posts as $post)

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
                                        <span>{{ $post->category->name }}</span>
                                        <br>
                                        <span>{{ $post->title }}</span>
                                        <br>
                                        <span>{{ $post->price }}$</span>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        {{--    Post --}}
    </div>

@endsection
