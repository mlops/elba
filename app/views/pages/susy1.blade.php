@extends('layout.master2')
@section('title', '/////#Susy 2 ')@stop
@section('head-script')
    @parent
@stop
    @section('content')

    <header class="site-header">
        <div class="wrap">
            <div class="logo"><a href="#">Logo</a>
            </div>
            <nav>
                <ul>
                    <li><a href="#">item01</a>
                    </li>
                    <li><a href="#">item02</a>
                    </li>
                    <li><a href="#">item03</a>
                    </li>
                    <li><a href="#">item04</a>
                    </li>
                    <li><a href="#">item05</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="wrap">
        <main class="content">
            <h2>Gallery Content</h2> 
            <ul class="gallery">
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
                <li class="gallery__item">
                    <img src="http://www.placehold.it/300x300" alt="">
                </li>
            </ul>
        </main>
        <aside class="sidebar">
            <h2>Sidebar</h2> 
            <ul>
                <li><a href="#">A link to someplace else</a>
                    <li><a href="#">A link to someplace else</a> 
                    </li>
                    <li><a href="#">A link to someplace else</a> 
                    </li>
                    <li><a href="#">A link to someplace else</a> 
                    </li>
                    <li><a href="#">A link to someplace else</a> 
                    </li>
                    <li><a href="#">A link to someplace else</a> 
                    </li>
            </ul>
        </aside>
    </div>
    <footer class="site-footer">
        <div class="wrap">
            <div class="widget">
                <h2>Widget</h2>
            </div>
            <div class="widget">
                <h2>Widget</h2>
            </div>
            <div class="widget">
                <h2>Widget</h2>
            </div>
            <div class="widget">
                <h2>Widget</h2>
            </div>
        </div>
    </footer>


    @stop
@section('script-js')
<script type="text/javascript"></script>
@stop

