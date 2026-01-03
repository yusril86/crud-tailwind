@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="User Create" />

    @if ($errors->any())
        <div class="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
        <div class="space-y-6">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <x-form.form-elements.user-form :user="$user" />
            </form>
        </div>
    </div>
@endsection
