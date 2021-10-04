@extends('layouts.admin')
    @section('siteTitle', categoryPageTitle())

    @section('content')

    @include('admin.msg.message')
    
	<div class="content-wrapper">
	    <div class="content-header"></div>

	    <section class="content">
	      	<div class="container-fluid">
	        	<div class="row">
	          		<div class="col-md-4">
	          			@livewire('category.create-category')
	          		</div>

	          		<div class="col-md-8">
	          			@livewire('category.get-category')
	          		</div>
	        	</div>
	      	</div>
	    </section>
	</div>

  	@endsection