@extends('layout')
@section('content')

    <main class="container pb-2">
        <div class="py-2 mx-auto">
            @foreach ($menu as $gomb)
                <a class="btn btn-outline-dark" href="/kontinens/{{$gomb->kontinens_id}}">{{$gomb->nev}}</a>
            @endforeach
        </div>

        <h2 class="text-center display-6 py-3">{{$data->nev}}</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('assets/img/'.$data->kontinens_id.'.jpg')}}" alt="{{$data->nev}}">
                </div>
                <div class="col">
                    <table>
                        <tr>
                            <td><b>Terület</b></td>
                            <td>{{$data->terulet}} km2</td>
                        </tr>
                        <tr>
                            <td><b>Legmagasabb pontja</b></td>
                            <td>{{$data->max}} m - {{$data->max_nev}}</td>
                        </tr>
                        <tr>
                            <td><b>Legmélyebb pontja</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Leghosszabb folyó</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Országok száma</b></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </main>

@endsection
