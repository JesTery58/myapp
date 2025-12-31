@extends('layouts.app')

@section('content')
	<div class="header-base bg-cover" style="background-image:url({{ asset('assets/images/bg-10.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="title-base text-left">
						<h1 style="color:#fff">{{__('words.blog')}}</h1>
						<p style="color:#fff">{{__('words.blogaltyazi')}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<div class="section-empty section-item">
		<div class="container content">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<div class="grid-list one-row-list">
						<div class="grid-box row">
							@if($blogs->isEmpty())
								<div class="title-base text-left">
									<h3>{{__('words.noitemsfound')}}</h3>
									<p></p>

								</div>
							@else
							@foreach ($blogs as $blog)
								<div class="grid-item col-md-12" style="display: block;">
									<div class="advs-box niche-box-blog">
										<div class="block-top">
											<div class="block-title">
												<h2><a href="{{ url('/blog/'.$blog->cateseo_url.'') }}">{{ unserialize( $blog->caption)[$lang] ?? '' }}</a></h2>
												<div class="tag-row">
													<span><i class="fa fa-bookmark"></i> <a href="#">{{ unserialize($blog->name)[$lang] ?? '' }}</a></span>
													<span><i class="fa fa-pencil"></i><a>{{ $blog->blogdate }}</a></span>
												</div>
											</div>
										</div>
										<a class="img-box" href="{{ url('/blog/'.$category.'/'.$blog->blog_seo_url.'') }}">
											<img src="{{asset(''.$blog->image.'')}}" alt="" style="margin-top: -34px;">
										</a>
										<p class="excerpt">
											{{ unserialize( $blog->caption_two)[$lang] ?? '' }}
										</p>
										<a class="btn btn-sm" href="{{ url('/blog/'.$category.'/'.$blog->blog_seo_url.'') }}">{{ __('words.more') }}</a>
										<hr class="space">
									</div>
								</div>
							@endforeach
								@endif
						</div>
						<!---
						<div class="list-nav">
							<ul class="pagination pagination-grid hide-first-last" data-page-items="3" data-pagination-anima="show-scale" data-options="scrollTop:true">
								<li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i> <span>First</span></a></li>
								<li class="prev disabled"><a href="#"> <i class="fa fa-angle-left"></i> <span>Previous</span></a></li>
								<li class="page active"><a href="#">1</a></li><li class="page"><a href="#">2</a></li>
								<li class="next"><a href="#"><span>Next</span> <i class="fa fa-angle-right"></i></a></li>
								<li class="last"><a href="#"><span>Last</span> <i class="fa fa-angle-double-right"></i></a>
								</li>
							</ul>
						</div>--->
					</div>
				</div>
				<div class="col-md-3 col-sm-12 widget">

					<div class="list-group list-blog">
						<p class="list-group-item active">{{__('words.blogcategory')}}</p>
						@foreach($blogCategory as $blogCat)
							@if($blogCat->status == 1)
							<a href="{{ url('blog/'.$blogCat->seo_url.'')}}" class="list-group-item">{{ unserialize($blogCat->name)[$lang] ?? '' }}</a>
						@endif
								@endforeach
					</div>
					<div class="list-group list-blog">
						<p class="list-group-item active">{{__('words.blogsoneklenen')}}</p>
						@foreach($bloglatest as $bloglates)
							<div class="list-group-item">
								<div class="row">
									<div class="col-md-4">
										<a class="img-box circle">
											<img src="{{asset(''.$bloglates->image.'')}}" alt="">
										</a>
									</div>
									<div class="col-md-8">
										<a href="{{ url('/blog/'.$category.'/'.$bloglates->blog_seo_url.'') }}">
											<h5>{{ unserialize( $bloglates->caption)[$lang] ?? '' }}</h5>
										</a>
										<div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>{{$bloglates->created_at}}</span></div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
@endsection
