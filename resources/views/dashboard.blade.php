@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-3">
            <!--- Profile --->

            <div class="card">
            <img src="https://media.licdn.com/dms/image/C5103AQFnUKVQYXJfqA/profile-displayphoto-shrink_200_200/0?e=1558569600&v=beta&t=kXGlEqEmUc7ekOcREL7f8e7L4MEnZTLf6g4YS4eWvBg" alt="John" style="width:100%">
            <h4 class="first_name">
            {{ $user->first_name }}
            </h4>
            <!--<p class="title"></p>
            <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a>  
                <a href="#"><i class="fa fa-linkedin"></i></a>  
                <a href="#"><i class="fa fa-facebook"></i></a> 
            </div>
            -->
            <p><button><?php echo '@';?>{{ $user->user_name }}</button></p>
            </div>


        </div>
        <div class="col-md-5">
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <div class="text-right">
                <button type="submit" class="btn btn-primary ">Post</button>
                </div>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
       
        <div class="clearfix">
         <!-- <header><h3>What other people say...</h3></header>-->
         @foreach($posts as $post)
                <article style="padding-top:5px;" class="post row" data-postid="{{ $post->id }}">
                <div class="col-md-1">
                <img style="width:40px;height:40px;" class='img-circle' src='https://media.licdn.com/dms/image/C5103AQFnUKVQYXJfqA/profile-displayphoto-shrink_200_200/0?e=1558569600&v=beta&t=kXGlEqEmUc7ekOcREL7f8e7L4MEnZTLf6g4YS4eWvBg' />
                </div>
                <div class="col-md-10">
                <span style="font-size:14px; font-weight:700">{{ $post->user->first_name }}</span>
                <span style="font-size:14px; color:#808080	;"><?php echo "@"; ?>{{ $post->user->user_name }} </span>
               
               <!-- <p>Posted by: {{ $post->user->first_name }} at {{ $post->created_at }}</p> -->
                    <p class="tweet">{{ $post->body }}</p>
                    <div class="interaction row">
                    <div class="col-md-6">
                        <a href="#" class="like col-md-2"><i class="far fa-thumbs-up"></i>
<!--
{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : '<i class="fas fa-thumbs-up"></i>' : '<i class="fas fa-thumbs-up"></i>'  }}
-->
</a> 
                        <a href="#" class="like  col-md-2  col-md-offset-1">
                        
                        <!--
                        
                        {{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'  }}
                        -->
                        <i class="far fa-thumbs-down"></i>
                        </a>
                        @if(Auth::user() == $post->user)
                            <a href="#" class="edit   col-md-2  col-md-offset-1"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('post.delete', ['post_id' => $post->id]) }}"><i class="fa fa-trash   col-md-2  col-md-offset-1"></i></a>
                        @endif
                    </div>
                    </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1 copyright">
        <h3>Trending News</h3>






        <div id="ember251" class="feed-shared-news-module pv3 ember-view"><div class="feed-shared-news-module__header display-flex ph3">

<ul class="mt2 list-style-none mb1">
    <li class="feed-shared-news-module__storyline ">
<a title="Mueller report submitted to DOJ" href="/feed/news/mueller-report-submitted-to-doj-4384723/" id="ember254" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>Mueller report submitted to DOJ        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  22h ago • 6,511 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline ">
<a title="The tough part of remote work" href="/feed/news/the-tough-part-of-remote-work-4378555/" id="ember256" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>The tough part of remote work        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  14h ago • 44,125 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline ">
<a title="A tiny break can have a huge impact" href="/feed/news/a-tiny-break-can-have-a-huge-impact-3914649/" id="ember258" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>A tiny break can have a huge impact        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  3d ago • 1,363 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline ">
<a title="US cities with biggest income gaps" href="/feed/news/us-cities-with-biggest-income-gaps-3904121/" id="ember260" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>US cities with biggest income gaps        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  1d ago • 11,567 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline ">
<a title="Americans see robots on the horizon" href="/feed/news/americans-see-robots-on-the-horizon-4982234/" id="ember262" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>Americans see robots on the horizon        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  23h ago • 22,944 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline  feed-shared-news-module__storyline--hidden focused-easeOut-motion">
<a title="Making your commute less miserable" href="/feed/news/making-your-commute-less-miserable-4982226/" id="ember264" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>Making your commute less miserable        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  3d ago • 719 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline  feed-shared-news-module__storyline--hidden focused-easeOut-motion">
<a title="Bitcoin trading vastly inflated: Study" href="/feed/news/bitcoin-trading-vastly-inflated-study-4983626/" id="ember266" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>Bitcoin trading vastly inflated: Study        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  1d ago • 8,167 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline  feed-shared-news-module__storyline--hidden focused-easeOut-motion">
<a title="Treasury yield curve inverts" href="/feed/news/treasury-yield-curve-inverts-4376435/" id="ember268" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>Treasury yield curve inverts        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  21h ago • 2,217 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline  feed-shared-news-module__storyline--hidden focused-easeOut-motion">
<a title="When forgetfulness can help at work" href="/feed/news/when-forgetfulness-can-help-at-work-4982922/" id="ember270" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>When forgetfulness can help at work        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  3d ago • 369 readers
            </span>
</a>    </li>
    <li class="feed-shared-news-module__storyline  feed-shared-news-module__storyline--hidden focused-easeOut-motion">
<a title="How our rivals help us" href="/feed/news/how-our-rivals-help-us-4624788/" id="ember272" class="feed-shared-news-module__link link-without-hover-state ember-view">        <div class="feed-shared-news-module__headline t-14 t-bold pr4 t-black mt1 truncate">
            <span class="feed-shared-news-module__headline-bullet" aria-role="presentation"></span>How our rivals help us        </div>

            <span class="feed-shared-news-module__subtext t-12 t-black--light t-normal inline-block full-width truncate pr3">
                  3d ago • 169 readers
            </span>
</a>    </li>
</ul>
</div>








    </div>
        </div>

 
    </section>







    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
        var urlLike = '{{ route('like') }}';
    </script>
@endsection
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  /* max-width: 300px; */
  margin: auto;
  text-align: center;
  font-family: arial;
  background: #FFF !important;
}

.card .title {
  color: grey;
  font-size: 18px;
}

.card button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #4AB3F4;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.card button:hover, a:hover {
  opacity: 0.7;
}





    body{
        background-color: #e6ecf0 !important;
    }
    .navbar,.sign_up,.sign_in,.copyright{
        background-color: #FFFFFF !important;
    }



    article{
        background-color: #FFFFFF !important;
        border-bottom:1px solid #cccccc;
    }
   .tweet{
       font-size:15px;
   }

   
   .first_name{
       font-weight:700;
   }
   .interaction, i{
       color: #808080 !important;
       padding-bottom: 5px;
   }

</style>