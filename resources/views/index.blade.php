@extends('layouts.app')

@section('content')

<section class="aphorisms-container aphorisms-container-main">
    @foreach($aphorisms as $aphorism)
    <div class="aphorisms-item">
        <div class="aphorisms-tags">
            <!-- TODO: map tags -->
        </div>
        <div class="aphorisms-item-body">
            <p>{{$aphorism->body}}</p>
        </div>
        <div class="aphorisms-item-bottom">
            <div class="aphorisms-authors">
                <!-- <span>{{$aphorism->author}}</span> -->
            </div>
            <div class="aphorisms-icons">
                <i name="{{$aphorism->id}}" id="fa-clone" class="fa fa-clone" aria-hidden="true"></i>
                <i name="{{$aphorism->id}}" id="fa-share" class="fa fa-share-alt" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    @endforeach
    <div class="more-button-container">
        <a href="/aphorisms" type="button" class="button more-button">Больше...</a>
    </div>
</section>

@endsection
