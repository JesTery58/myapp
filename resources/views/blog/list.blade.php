@extends('layouts.app')

@section('content')

	<div class="header-title white" data-parallax="scroll" data-position="top" data-natural-height="650" data-natural-width="1920" data-image-src="{{ asset('assets/images/bg-10.png') }}" style="height: 201px;">
		<div class="container">
			<div class="title-base">
				<hr class="anima" />
				<h1>{{__('words.blog')}}</h1>
				<p>{{__('words.blogaltyazi')}}</p>
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
							sdfsdfsdgfsdfsfsd<?php die();?>
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
									<a href="{{ url('/blog/'.$category.'/'.$blog->seo_url.'') }}">
										<img src="{{asset(''.$blog->image.'')}}" alt="" style="margin-top: -34px;">
									</a>
									<p class="excerpt">
										{{ unserialize( $blog->caption_two)[$lang] ?? '' }}
									</p>
									<a class="btn btn-sm" href="{{ url('/blog/'.$blog->cateseo_url.'') }}">{{ __('words.more') }}</a>
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
					<div class="input-group search-blog list-blog">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
					</div>
					<hr class="space s">
					<div class="list-group list-blog">
						<p class="list-group-item active">{{__('words.blogcategory')}}</p>
						@foreach($blogCategory as $blogCat)
							<a href="{{ url('blog/'.$blogCat->seo_url.'')}}" class="list-group-item">{{ unserialize($blogCat->name)[$lang] ?? '' }}</a>

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
										<a href="{{ url('/blog/'.$blog->cateseo_url.'') }}">
											<h5>{{ unserialize( $blog->caption)[$lang] ?? '' }}</h5>
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
