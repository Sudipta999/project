@section('title')
    {{ 'Blogs' }}
@endsection
<x-app-layout>
    <!--<section>-->
    <!--    <div class="total_blog_details">-->
    <!--        <h3>{{ $blog->blog_title }}</h3>-->
    <!--        <p class="blog_date">{{ date('F d, Y', strtotime($blog->created_at)) }}</p>    -->
    <!--        <div class="total_blog_img">-->
    <!--            <img src="{{ $blog->image }}" alt="">-->
    <!--        </div>-->
    <!--        <div class="text_div">-->
    <!--            {!! $blog->blog_description !!} -->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--@if (count($blogs) > 0)
-->
    <!--<section>-->
    <!--    <div class="main_blog_sec" style="padding-top: 0;">-->
    <!--      <h3>Related Articles</h3>-->
    <!--      <div class="total_blog_sec">-->
    <!--        @foreach ($blogs as $key => $value)
-->
    <!--        <div class="same_div">-->
    <!--          <a href="{{ url('blog') }}/{{ $value->blog_slug }}"> -->
    <!--            <div class="blog_detail_img">-->
    <!--                <img src="{{ $value->image }}" alt="">-->
    <!--            </div>-->
    <!--            <div class="text_div">-->
    <!--              <h5>{{ $value->blog_type }}</h5>-->
    <!--              <h4>{{ $value->blog_title }}</h4>-->
    <!--              <p>{!! $value->blog_description !!}</p>-->
    <!--            </div>-->
    <!--          </a>-->
    <!--        </div>-->
    <!--
@endforeach -->
    <!--      </div>-->
    <!--    </div>-->
    <!--</section>  -->
    <!--
@endif -->

    <section>
        <!-- total_blog_details_odhney start here -->
        <div class="total_blog_details_odhney">
            <div class="left_panel">
                <div class="first_div">
                    <img src={{ $blog->image }} alt="">
                    <div class="number_title_div">
                        <div class="left_part">
                            <h4>{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</h4>
                            <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('F') }}<br><span>{{ \Carbon\Carbon::parse($blog->created_at)->format('Y') }}</span>
                            </p>
                        </div>
                        <div class="right_part">
                            <div class="title">
                                <h3>{{ $blog->blog_title }}</h3>
                            </div>
                            {{-- <div class="edit_div">
                                    <div class="same_div">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#8d8d8d" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                        <a href="#"><h6>JOHN DOE</h6></a>
                                    </div>
                                    <div class="same_div">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#8d8d8d" class="bi bi-folder" viewBox="0 0 16 16">
                                            <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                                          </svg>
                                        <a href="#"><h6>FIT ROW</h6></a>
                                    </div>
                                    <div class="same_div">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#8d8d8d" class="bi bi-chat" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                          </svg>
                                        <a href="#"><h6>2</h6></a>
                                    </div>
                                </div> --}}
                            <div class="details_div">
                                <p>{!! $blog->blog_description !!}</p>
                            </div>
                            <div class="tag_div">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#8d8d8d"
                                    class="bi bi-tag-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                                <a href="#">
                                    {{$blog->meta_tag_1}}
                                </a>
                                <a href="#">
                                    {{$blog->meta_tag_2}}
                                </a>
                                <a href="#">
                                    {{$blog->meta_tag_3}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="share_post">
                        <h5>Share Post:</h5>
                        <div class="social_div">
                            {!! $shareComponent !!}
                        </div>



                    </div>
                    {{-- <div class="author_div">
                        <div class="title">
                            <h4>ABOUT POST AUTHOR</h4>
                        </div>
                        <div class="details">
                            <div class="left_div">
                                <img src="{{ asset('app-assets/images/67b587616031ee8e892e9418558406ed.png') }}"
                                    alt="">
                            </div>
                            <div class="right_div">
                                <a href="#">
                                    <h6>John Doe</h6>
                                </a>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus
                                    porttitor. Cum sociis natoque penatibus et.</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="response_div mt-4">

                        <div class="comment_div">
                            <h6>Comment</h6>

                            <div class="anchor_div">
                                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                                    </svg>
                                    Reply
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="collapseExample">
                            <div class="card card-body collape_example_for_reply">

                                <div class="title_head">
                                    <h6>REPLY TO JOHN DOE</h6>
                                </div>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-row" style="display: flex;">
                                            <div class="form-group col-md-6 px-2">
                                                <input type="text" name="name" class="form-control" id="inputCity"
                                                    placeholder="Name">
                                                <span class="text-danger">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-6 px-2">
                                                <input type="text" name="email" class="form-control" id="inputZip"
                                                    placeholder="Email">
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                            <span class="text-danger">
                                                @error('comments')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn"
                                        style="background-color: #bc055c; color: #fff;">POST COMMENT</button>
                                </form>

                            </div>
                        </div>
                        @foreach ($comment as $comment)
                            <div class="same_div">
                                <div class="img_div">
                                    <img src="{{ asset('app-assets/images/67b587616031ee8e892e9418558406ed.png') }}"
                                        alt="">
                                </div>
                                <div class="text_div">
                                    <h5>{{$comment->name}}</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                        {{\Carbon\Carbon::parse($comment->created_at)->format('F m, Y , g:i A')}}
                                        {{-- December 3, 2013 at 7:24 pm --}}
                                    </p>
                                    <h4>{{$comment->comments}}</h4>
                                    {{-- <div class="anchor_div">
                                    <a data-toggle="collapse" href="#collapseExample" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                                        </svg>
                                        Reply
                                    </a>
                                </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="right_panel">
                {{-- <div class="text_wing">
                    <h6>TEXT WIDGET</h6>
                    <p>Hi omnes lingua, institutis, legibus inter se differunt. Praeterea iter est quasdam res quas ex
                        communi. Ab illo tempore, ab est sed immemorabili. Mercedem aut nummos unde unde extricat,
                        amaras.</p>
                </div> --}}
                <div class="archive_div">
                    <h6>ARCHIVES</h6>
                    <ul>
                        <li>
                            <a
                                href="{{ url('blogs') }}/{{ \Carbon\Carbon::now()->modify('-1 months')->format('Y-m') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                {{ \Carbon\Carbon::now()->modify('-1 months')->format('F Y') }}
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('blogs') }}/{{ \Carbon\Carbon::now()->modify('-2 months')->format('Y-m') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                {{ \Carbon\Carbon::now()->modify('-2 months')->format('F Y') }}
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('blogs') }}/{{ \Carbon\Carbon::now()->modify('-3 months')->format('Y-m') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                {{ \Carbon\Carbon::now()->modify('-3 months')->format('F Y') }}
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('blogs') }}/{{ \Carbon\Carbon::now()->modify('-4 months')->format('Y-m') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                {{ \Carbon\Carbon::now()->modify('-4 months')->format('F Y') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="popular_post">
                    <h6>POPULAR POST</h6>
                    <ul>
                        @foreach ($topBlog as $topBlog)
                            <li>
                                <a href="{{ url('blog') }}/{{ $topBlog->blog_slug }}">
                                    <div class="full_div">
                                        <div class="img_div" style="width: 20%">
                                            <img src="{{ $topBlog->image }}" alt="" width="50px"
                                                height="50px">
                                        </div>
                                        <div class="text_div" style="width: 80%">
                                            <h6>{{ substr($topBlog->blog_title, 0, 20) }}...</h6>
                                            <p>{{ substr($topBlog->blog_sort_description, 0, 35) }}...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="post_slider">
                    <h6>POST SLIDER</h6>

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            @foreach ($slideBlogs as $key => $slideBlogs)
                                <div class="carousel-item @if ($key == 1) active @endif">
                                    <img class="d-block w-100" src="{{ $slideBlogs->image }}" alt="First slide">
                                    <div class="bottom_div">
                                        <a href="{{ url('blog') }}/{{ $slideBlogs->blog_slug }}">
                                            {{ substr($slideBlogs->blog_title, 0, 30) }}...
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- <div class="tag_cloud">
                    <h6>CATEGORY CLOUD</h6>

                    <div class="same_div">
                        <a href="#">
                            Blog
                        </a>

                        <a href="#">
                            Life Style
                        </a>

                        <a href="#">
                            Daily
                        </a>

                        <a href="#">
                            Stylish
                        </a>

                        <a href="#">
                            Heavy
                        </a>

                        <a href="#">
                            Dark
                        </a>

                        <a href="#">
                            Good Looking
                        </a>

                        <a href="#">
                            Travel
                        </a>

                        <a href="#">
                            Hand Making
                        </a>
                    </div>
                </div> --}}
                <div class="video_widget">
                    <h6>SUBSCRIBE TO</h6>

                    <div class="video_div">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/YbUE_OmoDhs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- total_blog_details_odhney end here -->
    </section>








    <!-- wpp-btn-mobile -->
    <div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="">
        <a id="WhatsApp-button" href="https://wa.me/9875351380" target="_blank" class="phoneJs"
            title="WhatsApp 360imagem">
            <div class="cbh-ph-circle"></div>
            <div class="cbh-ph-circle-fill"></div>
            <div class="cbh-ph-img-circle1"></div>
        </a>
    </div>
    <!-- wpp-btn-mobile -->
</x-app-layout>

<style>
    #social-links {
        margin-top: 0 !important;
    }
</style>
