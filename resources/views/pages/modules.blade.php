@extends('template.app')

@section('content')
<h3>My Learning</h3>
<div class="row">
    <div class="col-sm-6 col-lg-6 log-md-6">
        <livewire:my-learning lazy/>
    </div>
    <div class="col-sm-6 col-lg-6 log-md-6">
        <livewire:show-module lazy/>
    </div>
</div>
@endsection