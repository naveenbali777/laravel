<div class="modal fade" id="Create_tenants" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Tenants</h4>
      </div>
      <div class="modal-body">
      {!! Form::open(array('url' => '/savetenants')) !!}      
        <div class="form-group">
          {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required')) !!}
        </div>
        <div class="form-group">
          {!! Form::text('address', '', array('class' => 'form-control', 'placeholder' => 'Address', 'required' => 'required')) !!}
        </div>
        <div class="form-group">
          {!! Form::select('properties_id', $properties, null, array('class'=> 'form-control')) !!}
        </div>
        <div class="form-group">
          {!! Form::date('start_date', '', array('class' => 'form-control', 'placeholder' => 'Start Date', 'required' => 'required')) !!}
        </div>
        <div class="form-group">
          {!! Form::date('end_date', '', array('class' => 'form-control', 'placeholder' => 'End Date', 'required' => 'required')) !!}
        </div>
        <button type="submit" class="btn btn-default" name="create_prop">Create</button>
      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>