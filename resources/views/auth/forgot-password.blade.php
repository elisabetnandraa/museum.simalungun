@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center py-12 bg-gray-100">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-semibold text-center mb-3">
                {{ $isAdmin ? 'Lupa Password Admin' : 'Lupa Password Pengguna' }}
            </h2>

            @if(session('status'))
                <div class="mb-2">
                    <div class="flex items-center p-3 text-sm text-green-800 rounded-lg bg-green-100" role="alert">
                        <svg class="flex-shrink-0 w-5 h-5 me-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 
                            5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 
                            0 000-1.414z" clip-rule="evenodd"/>
                        </svg>
                        <div>{{ session('status') }}</div>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-2">
                    <div class="p-3 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ $isAdmin ? route('admin.forgot-password.submit') : route('tamu.forgot-password.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Masukkan Email</label>
                    <input type="email" name="email" id="email" required
                        class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500" />
                </div>

                <button type="submit"
                    class="text-white bg-[#A91B0D] hover:bg-[#871408] focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center w-full max-w-xs mx-auto block">
                    Kirim Permintaan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
