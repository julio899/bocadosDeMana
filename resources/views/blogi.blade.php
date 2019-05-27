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
                <a class="f-txt" href="blog/{{$b->id}}/{{str_slug($b->title)}}">
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
  @if(session('page')==='blogi')
  <style>
    article div blockquote h2 a,
    div.container>div.row>div,
    div.container>div.row>div h2 blockquote>h2,
    div.col-lg-8.col-md-10.mx-auto h2
    {
      font-weight: 100!important;
    }

    blockquote {
     font-weight: 100!important;    
     overflow:hidden;
     padding-right:1.5em;
     padding-left:1.5em;
     margin-left:0;
     font-style:italic;
     border-left:5px solid #ccc
    }
  </style>
  <article>
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
        <!--
          <h2 class="section-heading">{{$bocado->title}}</h2>
        -->
          {!!$bocado->message!!}
        </div>
      </div>
    </div>
  </article>
  @endif
@endsection