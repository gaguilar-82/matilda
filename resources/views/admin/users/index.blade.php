@extends('layouts.admin')
@section('title')
    {{ __('Usuarios') }}
@endsection
@section('content')
    <p class="pb-3 text-right">
        <a href="{{ route('admin.users.create') }}">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Agregar usuario
            </button>
        </a>
    </p>
    <table class="table-auto bg-white w-full">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($users as $user)
                <tr class="border-b even:bg-white-100 odd:bg-blue-100">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_active ? 'activo' : 'inactivo' }}</td>
                    <td> Ver / Editar / Eliminar</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pt-4">
        {{ $users->links() }}
    </div>
@endsection
