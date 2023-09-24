@extends('ckbox-example-layout')

@push('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
@endpush

@section('content')
    <textarea id="editor"><?php echo htmlspecialchars('<h1>Example</h1><p>Hello world</p>'); ?></textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                ckbox: {
                    tokenUrl: '{{ route('ckbox_token') }}',
                    theme: 'lark'
                },
                toolbar: [
                    'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                    'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                ],
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
