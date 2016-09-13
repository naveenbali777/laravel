@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Properties</div>
				<div class="panel-body">
                	<div class="row">
						<div class="col-sm-10 text-right"></div>
						<div class="col-sm-2 text-right">
							<a class="btn btn-default" href="#" data-toggle="modal" data-target="#Create_prop">Create Property</a>
						</div>
					</div>
                	@foreach ($properties as $propertie)
                	<div class="row">
	                   	<div class="col-sm-4">
						  <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
						  <p></p>
						</div>
						<div class="col-sm-8">
						  <p>Name : {!! $propertie->name !!}</p>
						  <p>Address : {!! $propertie->address !!}</p>
						  <p>Property Value : {!! $propertie->prop_value !!}</p>
						  <p>Mortgage : {!! $propertie->mortgage !!}</p>
						</div>
			       </div>
			       @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('property_box')