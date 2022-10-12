@extends('layouts.app')
@section('meta', 'Trains')

@section('content')
    <main>
        @foreach ($trains as $train)
            <div class="testimotionals">
                <div class="card">
                    <div class="layer">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2> ID: <br> <span>{{ $train->id }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Stazione di Partenza: <br> <span>{{ $train->stazione_partenza }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Stazione di Arrivo: <br> <span>{{ $train->stazione_arrivo }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Orario di Partenza:  <br> <span>{{ $train->orario_partenza }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Orario di Arrivo: <br> <span>{{ $train->orario_arrivo }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Codice Treno: <br> <span>{{ $train->codice_treno }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Numero Carrozze: <br> <span>{{ $train->numero_carrozze }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> In orario? <br> <span>{{ $train->in_orario ? 'Sì' : 'No' }}</span></h2>
                        </div>
                        <div class="details">
                            <h2> Treno cancellato? <br> <span>{{ $train->in_orario ? 'Sì' : 'No' }}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection