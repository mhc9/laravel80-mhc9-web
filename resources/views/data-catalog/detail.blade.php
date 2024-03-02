@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">CSV</h1>

    <hr class="my-2" />

    <div class="about-wrapper">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    @foreach($header as $col)
                    <th>{{ $col }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    @for($i = 0; $i  < count($header); $i++)
                    <td>{{ $row[$i] }}</td>
                    @endfor
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection