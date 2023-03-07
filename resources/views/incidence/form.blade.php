<div class="box box-info padding-1">
    <div class="box-body">
        
        
        
        <div class="form-group">
            <label for="user">Usuario</label>
            {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
        </div> 
        <div class="form-group">
            <label for="category">Categoría</label>
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="area">Areas</label>
            {!! Form::select('area_id', $areas, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="location">Sede</label>
            {!! Form::select('location_id', $locations, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="state">Estado</label>
            {!! Form::select('state_id', $states, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('description', $incidence->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>