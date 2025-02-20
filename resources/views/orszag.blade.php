@extends('layout')
@section('content')

    <main class="container pb-2">
        <div class="py-4 text-center">
            @foreach ($menu as $gomb)
                <a class="btn btn-outline-dark" href="/orszagok/{{$gomb->kontinens_id}}">{{$gomb->nev}}</a>
            @endforeach
        </div>

        <h2 class="text-center display-6 py-3">{{$data->nev}} országai</h2>
        <div class="py-2">
            <table class="table table-bordered table-striped">
                    <thead class="table-dark text-center">
                        <tr>
                        <th class="col">#</th>
                        <th class="col">Név</th>
                        <th class="col">Főváros</th>
                        <th class="col">Népesség</th>
                        <th class="col">Terület</th>
                        <th class="col">Népsűrűség</th>
                        </tr>
                    </thead>
                        @foreach ( as )

                        @endforeach
            </table>
        </div>
    </main>
@endsection
