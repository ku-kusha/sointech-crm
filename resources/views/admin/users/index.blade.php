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
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Главная - Администраторы</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Управление пользователями') }}</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Email</th>
                        <th scope="col">Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>Тут будут кнопки</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
