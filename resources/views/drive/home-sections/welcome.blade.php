@extends('drive.home-sections.welcome-template')


@section('welcome-section-footer')
    @include('drive.home-sections.second')

    @include('_includes.sections.xcloud.get-started-with-1gb')

    @include('drive.home-sections.footer')
@endsection
