@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">CSV</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <table id="csvTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    @foreach($header as $col)
                    <th class="text-center">{{ $col }}</th>
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
<script type="module">
    let table = new DataTable('#csvTable', {
        pageLength: 25,
        responsive: true
    });
</script>
@endsection