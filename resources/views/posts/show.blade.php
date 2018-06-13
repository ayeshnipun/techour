@extends('layouts.app')
<div>
    @include('inc.dashnav')
</div>
@section('content')
<div class="text-center"  style="width:40%;">
     <h1>Posts</h1>
     @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class='well text-center'>
                <h3>{{ $post->title }}</h3>

            </div>
        @endforeach
     @else
        <h3>No Post Found</h3>
     @endif
</div>
@endsection

<style>
    .well {
        background-color: aquamarine;
    }

</style>
