<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $incidence->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $incidence->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('program_id') }}
            {{ Form::text('program_id', $incidence->program_id, ['class' => 'form-control' . ($errors->has('program_id') ? ' is-invalid' : ''), 'placeholder' => 'Program Id']) }}
            {!! $errors->first('program_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location_id') }}
            {{ Form::text('location_id', $incidence->location_id, ['class' => 'form-control' . ($errors->has('location_id') ? ' is-invalid' : ''), 'placeholder' => 'Location Id']) }}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $incidence->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>