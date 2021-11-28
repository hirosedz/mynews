@extends('layouts.profilefront')

@section('content')
  <div class="container">
      <hr color="#c0c0c0">
      @if (!is_null($headline))
        <div class="row">
           <div class="headline col-md-10 mx-auto">
               <div class="row">
                   <div class="col-md-6">
                       <div class="caption mx-auto">
                           <div class="name">
                               <h1>{{ str_limit($headline->name, 70)}}</h1>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <p class="gender mx-auto">{{ str_limit($headline->gender, 100)}}</p>
                   </div>
                   <div class="col-md-6">
                       <p class="hobby mx-auto">{{ str_limit($headline->hobby, 100)}}</p>
                   </div>
                   <div class="col-md-6">
                       <p class="introduction mx-auto">{{ str_limit($headline->introduction,200)}}</p>
                   </div>
               </div>
           </div>
        </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
          <div class="posts col-md-8 mx-auto mt-3">
              @foreach($posts as $post)
                <div class="post">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="date">
                                {{ $posts->updated_at->format('Y年m月d日') }}
                            </div>
                            <div class="name">
                                {{ str_limit($post->name, 100) }}
                            </div>
                            <div class="gender mt-3">
                                {{ str_limit($post->gender, 100) }}
                            </div>
                            <div class="hobby mt-3">
                                {{ str_limit($post->hobby, 100) }}
                            </div>
                            <div class="introduction mt-3">
                                {{ str_limit($post->introduction, 200) }}
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                    @endforeach
                </div>
          </div>
        </div>
  </div>
  @endsection