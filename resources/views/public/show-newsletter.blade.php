@extends('layouts.app')
{{-- @section('styles')
    <link rel="stylesheet" type="text/css" href="/path/to/turnjs4/lib/turn.min.css" />
@endsection --}}
@section('content')
<div id="newsletter-flipbook"></div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/turn.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // initialize the flipbook
            $('#newsletter-flipbook').turn({
                width: 800,
                height: 600,
                pages: Math.ceil('{{ strlen($pdf) }}' / 1000),
                display: 'double',
                acceleration: true,
                autoCenter: true,
                turnCorners: 'bl,br',
                when: {
                    turning: function(event, page, view) {
                        // hide the contents of the flipping pages while turning
                        $('#newsletter-flipbook .page').css('visibility', 'hidden');
                    },
                    turned: function(event, page, view) {
                        // show the contents of the flipping pages after turning
                        $('#newsletter-flipbook .page').css('visibility', 'visible');
                    }
                }
            });
        
            // add the pages of the PDF to the flipbook
            var pdf = '{{ $pdf }}';
            for (var i = 0; i < pdf.length; i += 1000) {
                var page = pdf.substr(i, 1000);
                $('#newsletter-flipbook').turn('addPage', '<div class="page">' + page + '</div>');
            }
        });
        </script>
@endsection
