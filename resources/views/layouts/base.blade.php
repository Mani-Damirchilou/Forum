@extends('root')
@section('content')
    <header style="background-image: url('./img/bg-header.jpg');background-repeat: no-repeat;background-size: cover" class="py-[5rem]"></header>
    @livewire('components.navbar')
{{$slot}}
@endsection
