@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">{{ __('Главная - Администраторы') }}</li>
        </ol>
    </div>
    <div class="container">

    </div>
</div>
@endsection
