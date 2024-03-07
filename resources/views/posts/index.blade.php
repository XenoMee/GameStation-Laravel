@extends('layouts.app');

@section()
@foreach ($posts as $post) 
    
@endforeach
<div class="user-info grid grid-cols-[.1fr.8fr] gap-2 p-2 items-center justify-start ">
    <img class="user-avatar rounded-full w-10" src="{{$post->user_avatar}}" alt="">
      <div class="grid">
        <p class="font-bold"></p>
        <p class="text-[.75rem]"></p>
      </div>
  </div>

  <div class="post__image">
    <img src="{{$post->image_url}}" alt="">
  </div>

  <div class="px-2 py-4 grid gap-2 items-center">
    <div class="post__icons flex items-center gap-[.7rem]">
      <img class="w-6 hover:cursor-pointer" src="../assets/images/icons/icon-heart.png"
          alt="heart-icon" role="button" aria-label="Like post">
      <img class="w-6 hover:cursor-pointer" src="../assets/images/icons/icon-comment.png"
          alt="comment-icon" role="button" aria-label="Comment on post">
      <img class="w-6 hover:cursor-pointer" src="../assets/images/icons/icon-share.png"
          alt="share-icon" role="button" aria-label="Share post">
    </div>

    <span class="post__likes font-bold"> {{$post->likes_count}} likes</span>

    <p class="user-comment"> {{$post->user_name}} <span class="font-bold"></span> {{$post->description}} <span class="font-bold"></span></p>
  </div>  
@endforeach

@endsection