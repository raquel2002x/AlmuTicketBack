<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $booking->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $booking->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('startTime') }}
            {{ Form::text('startTime', $booking->startTime, ['class' => 'form-control' . ($errors->has('startTime') ? ' is-invalid' : ''), 'placeholder' => 'Starttime']) }}
            {!! $errors->first('startTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('endTime') }}
            {{ Form::text('endTime', $booking->endTime, ['class' => 'form-control' . ($errors->has('endTime') ? ' is-invalid' : ''), 'placeholder' => 'Endtime']) }}
            {!! $errors->first('endTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comment') }}
            {{ Form::text('comment', $booking->comment, ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : ''), 'placeholder' => 'Comment']) }}
            {!! $errors->first('comment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numPeople') }}
            {{ Form::text('numPeople', $booking->numPeople, ['class' => 'form-control' . ($errors->has('numPeople') ? ' is-invalid' : ''), 'placeholder' => 'Numpeople']) }}
            {!! $errors->first('numPeople', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('room') }}
            {{ Form::text('room', $booking->room, ['class' => 'form-control' . ($errors->has('room') ? ' is-invalid' : ''), 'placeholder' => 'Room']) }}
            {!! $errors->first('room', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>