@extends('layouts.app')

@section('template_title')
    {{ $booking->name ?? 'Show Booking' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Booking</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $booking->description }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $booking->date }}
                        </div>
                        <div class="form-group">
                            <strong>Starttime:</strong>
                            {{ $booking->startTime }}
                        </div>
                        <div class="form-group">
                            <strong>Endtime:</strong>
                            {{ $booking->endTime }}
                        </div>
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $booking->comment }}
                        </div>
                        <div class="form-group">
                            <strong>Numpeople:</strong>
                            {{ $booking->numPeople }}
                        </div>
                        <div class="form-group">
                            <strong>Room:</strong>
                            {{ $booking->room }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
