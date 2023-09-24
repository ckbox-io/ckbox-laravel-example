@extends('ckbox-example-layout')

@push('head')
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100vh;
        }
    </style>
@endpush

@section('content')
    <script>
        CKBox.mount(document.body, {
            tokenUrl: '{{ route('ckbox_token') }}'
        });
    </script>
@endsection
