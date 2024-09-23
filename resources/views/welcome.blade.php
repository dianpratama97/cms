@extends('frontend.layouts.app')
@section('content')
    <!-- Hero: Start -->
    @include('frontend.component.hero')
    <!-- Hero: End -->
    @include('frontend.component.menu')
    <!-- Sambutan features: Start -->
    @include('frontend.component.sambutan')
    <!-- Sambutan features: End -->

    <!-- Jurusan: Start -->
    @include('frontend.component.jurusan')
    <!-- Jurusan: End -->

    <!-- waka: Start -->
    @include('frontend.component.waka')
    <!-- waka: End -->

    <!-- visi dan misi: Start -->
    @include('frontend.component.visiMisi')
    <!-- visi dan misi: End -->

    <!-- Menu: Start -->

    <!-- Menu: End -->

    <!-- kontak: Start -->
    @include('frontend.component.kontak')
    <!-- kontak: End -->
@endsection
