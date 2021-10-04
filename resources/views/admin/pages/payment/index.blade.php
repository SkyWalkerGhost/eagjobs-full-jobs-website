@extends('layouts.admin')
    @section('siteTitle', paymentTableTitle())

    @section('content')

    @include('admin.msg.message')
    
	<div class="content-wrapper">
	    <div class="content-header"></div>

	    <section class="content">
	      	<div class="container-fluid">
	        	<div class="row">
	          		<div class="col-md-12">
	          			@include('admin.pages.payment.component.data_table')
	          		</div>
	        	</div>
	      	</div>
	    </section>
	</div>

  	@endsection