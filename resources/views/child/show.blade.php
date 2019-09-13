@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $child->first_name }} {{ $child->last_name }}</div>

                    <div class="card-body">
                        <h3>At Bats</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Inning</th>
                                    <th>Balls</th>
                                    <th>Strikes</th>
                                    <th>Outcome</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($child->atbats as $atbat)
                                    <tr>
                                        <td>{{ $atbat->date }}</td>
                                        <td>{{ $atbat->inning }}</td>
                                        <td>{{ $atbat->balls }}</td>
                                        <td>{{ $atbat->strikes }}</td>
                                        <td>{{ $atbat->outcome }}</td>
                                        <td>{{ $atbat->notes }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h3>Pitching</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Inning</th>
                                <th>Balls</th>
                                <th>Strikes</th>
                                <th>Outcome</th>
                                <th>Notes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($child->pitches as $pitch)
                                <tr>
                                    <td>{{ $pitch->date }}</td>
                                    <td>{{ $pitch->inning }}</td>
                                    <td>{{ $pitch->balls }}</td>
                                    <td>{{ $pitch->strikes }}</td>
                                    <td>{{ $pitch->outcome }}</td>
                                    <td>{{ $pitch->notes }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
