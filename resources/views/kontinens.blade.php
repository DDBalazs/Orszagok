@extends('layout')
@section('content')

    <main class="container pb-2">
        <div class="py-4 text-center">
            @foreach ($menu as $gomb)
                <a class="btn btn-outline-dark" href="/kontinensek/{{$gomb->kontinens_id}}">{{$gomb->nev}}</a>
            @endforeach
        </div>

        <h2 class="text-center display-6 py-3">{{$data->nev}}</h2>
        <div class="container">
            <div class="row">
                <div class="col py-2">
                    <img src="{{asset('assets/img/'.$data->kontinens_id.'.jpg')}}" alt="{{$data->nev}}" class="mx-auto d-flex w-100">
                </div>
                <div class="col py-2">
                    <table class="table table-bordered table-striped border border-dark">
                        <tr>
                            <td><b>Terület</b></td>
                            <td>{{number_format($data->terulet,0,',',' ')}} km2</td>
                        </tr>
                        <tr>
                            <td><b>Legmagasabb pontja</b></td>
                            <td>{{number_format($data->max,0,',',' ')}} m - {{$data->max_nev}}</td>
                        </tr>
                        <tr>
                            <td><b>Legmélyebb pontja</b></td>
                            <td>{{number_format($data->min,0,',',' ')}} m - {{$data->min_nev}}</td>
                        </tr>
                        <tr>
                            <td><b>Leghosszabb folyó</b></td>
                            <td>{{number_format($data->folyo,0,',',' ')}} km - {{$data->folyo_nev}}</td>
                        </tr>
                        <tr>
                            <td><b>Országok száma</b></td>
                            <td>
                                @if ($db==0)
                                    Nincs ország a területen
                                @else
                                    {{$db}} db
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </main>

@endsection
