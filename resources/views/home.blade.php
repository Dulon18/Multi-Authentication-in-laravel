@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(auth()->user()->user_type == 1)
                    <h2 class="text-center m-3">Admin Dashboard</h2>
                    @else
                    <h2 class="text-center m-4">Normal User Dashboard</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
