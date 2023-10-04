@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php 
                    if (Auth::check() && Auth::user()->role_id == '2') {?> 
                    @include('includes.admindashboard')
                     <?php
                      }
                   ?>
                   
                    <?php 
                    if (Auth::check() && Auth::user()->role_id == '1') {?> 
                    @include('includes.userdashboard')
                     <?php
                      }
                   ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
