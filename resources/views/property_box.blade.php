<div class="modal fade" id="Create_prop" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Property</h4>
      </div>
      <div class="modal-body">
       {!! Form::open(array('url' => '/saveproperties')) !!}
        <div class="form-group">
          {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required')) !!}
        </div>
        <div class="form-group">
          {!! Form::text('address', '', array('class' => 'form-control', 'placeholder' => 'Address', 'required' => 'required')) !!}
        </div>
        <div class="form-group">
          {!! Form::number('prop_value', '', array('class' => 'form-control', 'placeholder' => 'Property Value', 'required' => 'required')) !!}
        </div>
        <div class="form-group">
          {!! Form::number('mortgage', '', array('class' => 'form-control', 'placeholder' => 'Mortgage')) !!}
        </div>
        {!! Form::submit('Create', array('class' => 'btn btn-default', 'name' => 'create_prop')) !!}
      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>