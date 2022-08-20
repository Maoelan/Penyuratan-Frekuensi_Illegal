@extends('layouts.app')
@extends('admin.panel')

@section('content')
<div class="content-wrapper" style="background-color:white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Berhasil Login!') }}
                </div>
            </div>
        </div>  
    </div>
</div>
</div>
@endsection

