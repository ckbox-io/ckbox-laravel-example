@extends('ckbox-example-layout')

@section('content')
    <input type="text" id="file-url"></input><button id="choose">Choose file</button>
    <div id="ckbox"></div>
    <script>
        document.getElementById('choose').addEventListener('click', function () {
            CKBox.mount(document.querySelector('#ckbox'), {
                tokenUrl: '{{ route('ckbox_token') }}',
                dialog: true,
                assets: {
                    // Callback executed after choosing assets
                    onChoose: (assets) => {
                        document.getElementById('file-url').value = assets[0].data.url;

                        assets.forEach((asset) => {
                            console.log(asset.data.url);
                        })
                    }
                }
            });
        });
    </script>
@endsection
