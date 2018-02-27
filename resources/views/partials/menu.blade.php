<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        @foreach($menu as $item)

            <li class="nav-item">
                <a href="{{$item->slug}}"
                   title="{{$item->title}}"
                   target="{{$item->target}}"
                   rel="{{$item->robot}}"
                   class="nav-link {{$item->style}}"
                >
                    {{$item->label}}
                </a>
            </li>

        @endforeach
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="index.html">Home</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="about.html">About</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="post.html">Sample Post</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="contact.html">Contact</a>--}}
        {{--</li>--}}
    </ul>
</div>