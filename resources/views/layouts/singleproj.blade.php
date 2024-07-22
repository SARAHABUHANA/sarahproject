@extends('layouts.app')
@vite(['resources/css/single.css'])
@section('content')
<div class="card2">
  <img  class="card__image" src="{{ asset('images/'.$project->image) }}" alt="{{ $project->name }}">  
  <div class="card__content">
    <time datetime="2021-03-30" class="card__date">{{ $project->created_at }}</time>
    <br>
    <br>
    <span class="card__title">{{ $project->title }}<span>
      <br>
      <br>
      <span class="card__title">{{ $project->content }}<span>
        <br>
        <br>
        <span >{{ $project->user->name }}<span>
  </div>
</div>
<div class="comment">
  <div class="be-comment-block">
    <h1 class="comments-title">{{ $project->comments->count() }} تعليق</h1>
    
      
  
    @if($comments)
    @foreach($comments as $comment)
       
  
    <div class="be-comment">
      <div class="be-img-comment">	
        <a href="blog-detail-2.html">
          <img src="{{ asset('images/'.$comment->user->profile_picture) }}"   class="be-ava-comment">
        </a>
      </div>
      <div class="be-comment-content">
        <span class="be-comment-name">
          <a href="blog-detail-2.html"> {{ $comment->user->name }}</a>
        </span>
        <span class="be-comment-time">
          <i class="fa fa-clock-o"></i>
          {{ $comment->created_at}}
        </span>
        <p class="be-comment-text">
          {{ $comment->body }}
        </p>
      </div>
    </div>
    @endforeach
    @else
        <p>لا يوجد تعليقات </p>
    @endif

      <form  class="form-block" action="{{ route('projects.storeComment', ['id' => $project->id]) }}" method="post">
        @csrf
        <div class="row">
        
        <div class="col-xs-12 col-sm-6 fl_icon">
          <div class="form-group fl_icon">
            <div class="icon"><i class="fa fa-envelope-o"></i></div>
            
          </div>
        </div>
        <div class="col-xs-12">									
          <div class="form-group">
            <textarea class="form-input"  name="body" required="" placeholder="اكتب تعليقك هنا "></textarea>
          </div>
        </div>
        <button  type="submit" class="btn ">أضافة التعليق</button>
      </div>
    </form>
  </div>
</div>




@endsection