@extends('layouts.auth-layout')


@section('content')

    <form method="POST"  action="{{route('sign-up')}}">
        @csrf
        <div class="mb-6">
            <input type="text" placeholder="name"
                   class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                   name="name" value="{{ old('name') }}" autocomplete="name" autofocus />
            @error('name')
            <div class="bg-red-100 rounded-lg py-3 px-3 text-base text-red-700 mb-3 mt-1" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <input type="email" placeholder="email"
                   class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                   name="email" value="{{ old('email') }}" autocomplete="email" autofocus />
            @error('email')
            <div class="bg-red-100 rounded-lg py-3 px-3 text-base text-red-700 mb-3 mt-1" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <input type="password" placeholder="Senha"
                   class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                   name="password" autocomplete="new-password" autofocus  value="{{ old('password')}}"/>
            @error('password')
            <div class="bg-red-100 rounded-lg py-3 px-3 text-base text-red-700 mb-3 mt-1" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <input type="password" placeholder="Confirmar Senha"
                   class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                   name=" password_confirmation" autocomplete="new-password" autofocus  value="{{ old('password_confirmation')}}"/>
            @error('password_confirmation')
            <div class="bg-red-100 rounded-lg py-3 px-3 text-base text-red-700 mb-3 mt-1" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-8">
            <button type="submit"
                    class="bordder-primary w-full cursor-pointer rounded-md border bg-sky-500 py-3 px-5 text-base text-white transition hover:bg-opacity-90">Criar
                conta</button>
        </div>
    </form>
    <p class="text-base text-[#adadad]">
        Já tem conta
        <a href="{{ url('sign-in') }}" class="text-primary hover:underline">
            Sign in
        </a>
    </p>
@endsection
