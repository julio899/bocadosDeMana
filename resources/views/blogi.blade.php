@extends('layouts.blog')

@section('content')
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($bocados as $b)
          <div class="post-preview">
            <a href="blog/{{$b->id}}/{{str_slug($b->title)}}">
              <h2 class="post-title">
                {{$b->title}}
              </h2>
              <h3 class="post-subtitle">
                {{ str_limit( str_replace('&nbsp;','',strip_tags($b->message)),110) }}
              </h3>
            </a>
            <p class="post-meta">Publicado en {{$b->created_at}}</p>
          </div>
          <hr>
          @endforeach
        </div>
        <div class="col-lg-4 col-md-10 mx-auto">
          <pre>Entradas Recientes</pre>
          <ul class="recientes">
            @foreach($bocados as $b)
              <li>
                <a class="f-txt" href="#">
                  {{$b->title}}
                </a>
              </li>
            @endforeach          
          </ul>
        </div>

      </div>
    </div>
  </article>
@endsection

@section('contenti')
  <article>
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class="section-heading">{{$bocado->title}}</h2>
          {!!$bocado->message!!}
        </div>
      </div>
    </div>
  </article>
@endsection