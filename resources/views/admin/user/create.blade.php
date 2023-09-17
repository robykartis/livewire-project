@extends('admin.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render() }}
@endsection
@section('content')
    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">{{ $title }}</h4>
                </div>
                <div class="card-body">
                    @livewire('user.create')
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
