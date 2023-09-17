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
                    <h4 class="header-title">{{ $title }}
                        {{-- <a href="{{ route('user.create') }}" class="btn btn-primary float-end">add</a> --}}
                    </h4>
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <a href="{{ route('user.create') }}" class="btn btn-primary justify-content-end">add</a>
                    </div>
                    @livewire('user.index')
                </div>
            </div>
        </div>
    </div>
@endsection
