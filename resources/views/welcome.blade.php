@extends('layouts.blog')

@section('title')
  Allbike Blog
@endsection


@section('header')
        <!-- Header -->
        <header class="header text-center text-white" style="background-image: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */;">
          <div class="container">
    
            <div class="row">
              <div class="col-md-8 mx-auto">
    
                <h1>Allbike Blog</h1>
                <p class="lead-2 opacity-90 mt-6">Dapatkan informasi terbaru tentang dunia persepedaan tanah air.</p>
    
              </div>
            </div>
    
          </div>
        </header><!-- /.header -->
@endsection

@section('content')
        <!-- Main Content -->
        <main class="main-content">
          <div class="section bg-gray">
            <div class="container">
              <div class="row">
    
    
                <div class="col-md-8 col-xl-9">
                  <div class="row gap-y">
                    @foreach ($posts->sortByDesc('published_at') as $post)
                      <div class="col-md-6">
                        <div class="card border hover-shadow-6 mb-6 d-block ">
                          <a href="{{ route('blog.show', $post->id) }}"><img  class="card-img-top" src="{{ asset('storage/' .$post->image) }}" alt="Card image cap"></a>
                          <div class="p-6 text-center">
                            <p>
                              <a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">
                                {{ $post->category->name }}
                              </a>
                            </p>
                            <h5 class="mb-0">
                              <a class="text-dark" href="{{ route('blog.show', $post->id) }}">
                                {{ $post->title }}
                              </a>
                            </h5>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
    
    
                  <nav class="flexbox mt-30">
                    <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                    <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
                  </nav>
                </div>
    
    
    
                <div class="col-md-4 col-xl-3">
                  <div class="sidebar px-4 py-md-0">
    
                    <h6 class="sidebar-title">Search</h6>
                    <form class="input-group" target="#" method="GET">
                      <input type="text" class="form-control" name="s" placeholder="Search">
                      <div class="input-group-addon">
                        <span class="input-group-text"><i class="ti-search"></i></span>
                      </div>
                    </form>
    
                    <hr>
    
                    <h6 class="sidebar-title">Categories</h6>
                    <div class="row link-color-default fs-14 lh-24">
                      @foreach ($categories as $category)
                        <div class="col-6">
                          <a href="#">
                            {{ $category->name }}
                          </a>
                        </div>
                      @endforeach
                    </div>
    
                    <hr>
    
                    <h6 class="sidebar-title">Tags</h6>
                    <div class="gap-multiline-items-1">
                      @foreach ($tags as $tag)
                        <a class="badge badge-secondary" href="#">
                          {{ $tag->name }}
                        </a>
                      @endforeach
                    </div>
    
                    <hr>
    
                  </div>
                </div>
    
              </div>
            </div>
          </div>
        </main>
@endsection

