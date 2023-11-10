@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            {{ $user->name  }}
        </div>
    </div>
@endsection