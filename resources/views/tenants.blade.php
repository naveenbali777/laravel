@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tenants</div>
				<div class="panel-body">
                	<div class="row">
						<div class="col-sm-10 text-right"></div>
						<div class="col-sm-2 text-right">
							<a class="btn btn-default" href="#" data-toggle="modal" data-target="#Create_tenants">Create Tenants</a>
						</div>
					</div>
                	@foreach ($tenants as $tenant)
                	<div class="row">
	                   	<div class="col-sm-4">
						  <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
						  <p></p>
						</div>
						<div class="col-sm-8">
						  <p>Name : {!! $tenant->name !!}</p>
						  <p>Address : {!! $tenant->address !!}</p>
						  <p>Property Name : {!! $tenant->pname !!}</p>
						  <p>Start Date : {!! date('M-d-Y', strtotime($tenant->start_date)) !!}</p>
						  <p>End Date : {!! date('M-d-Y', strtotime($tenant->end_date)) !!}</p>
						</div>
			       </div>
			       @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('tenants_box')