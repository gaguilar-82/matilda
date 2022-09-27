@extends('layouts.admin')
@section('title')
    {{ __('Usuarios / Agregar usuario') }}
@endsection
@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('forms.Name')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('forms.Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('forms.Password')" />

        <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('forms.Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required />
    </div>

    <!-- Is Active -->
    <div class="mt-4">
        <x-label for="is_active" :value="__('forms.Is Active')" />

        <x-input id="password_confirmation" class="block mt-1"
                        type="checkbox"
                        name="is_active"/>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('forms.Save') }}
        </x-button>
    </div>
</form>
@endsection