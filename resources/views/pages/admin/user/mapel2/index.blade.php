@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @foreach ($mapel2 as $mapel)
                    {{ $mapel->nama }}
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
 b 