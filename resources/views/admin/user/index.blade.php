@extends('admin.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">{{ $title }}</h4>
                    @livewire('user.index')
                </div>
            </div>
        </div>
    </div>
@endsection
