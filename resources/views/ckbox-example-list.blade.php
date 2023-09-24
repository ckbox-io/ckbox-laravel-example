@extends('ckbox-example-layout')

@section('content')
<h1>CKBox integration examples</h1>
<ul>
    <li><a href="{{ route('ckbox_example', ['example' => 'ckeditor']) }}">CKEditor integration</a></li>
    <li><a href="{{ route('ckbox_example', ['example' => 'modal']) }}">Modal file picker</a></li>
    <li><a href="{{ route('ckbox_example', ['example' => 'full-page']) }}">Full-page</a></li>
</ul>
@endsection
