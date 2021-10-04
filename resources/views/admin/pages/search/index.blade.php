@extends('layouts.admin')
    @section('siteTitle', searchPageTitle())

    @section('content')

    @include('admin.msg.message')
    
	<div class="content-wrapper">
	    <div class="content-header"></div>

	    <section class="content">
	      	<div class="container-fluid">
	        	<div class="row">
	          		<div class="col-md-12">
	          			@include('admin.pages.vacancy.component.data_table', ['vacancies' => $searchResults])
	          		</div>
	        	</div>
	      	</div>
	    </section>
	</div>

  	@endsection