@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/black-zen-stones-and-a-yellow.jpg" style="height: 100px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->name }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
            <div class="pr-3"><strong>124</strong>Posts</div>
            <div class="pr-3"><strong>125</strong>Followers</div>
            <div class="pr-3"><strong>200</strong>Following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/Blooming-Pink-Cherry-Blossom-pink-color.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/images/cherry-blossom-natural-pink.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/images/cherry-blossom.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
