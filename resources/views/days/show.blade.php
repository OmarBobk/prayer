@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding:0 85px;">
        @include('includes.breadcrumb', ['breadcrumbs' => [
            ['route' => 'home', 'title' => '2021'],
            ['route' => 'month.show', 'parameter' => request('month'), 'title' => request('month')],
            ['route' => 'day.show', 'parameter' => [request('month'), $day->pivot->day_arrangement], 'title' => $day->name],
        ]])

        <div class="row">
            <div class="col">
                <div class="card mb-5">
                    <div class="card-header text-center">{{$day->name}}</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Fajr</th>
                                        <th scope="col">Zuher</th>
                                        <th scope="col">Asr</th>
                                        <th scope="col">Maghreb</th>
                                        <th scope="col">Eshaa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @forelse($prayers as $prayer)
                                            <td>
                                            @if($prayer->pivot->status == 0)
                                                <!-- Close -->
                                                    <svg style="color:red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                                    </svg>
                                            @elseif($prayer->pivot->status == 1)
                                                <!-- Plus -->
                                                    <svg style="color:green;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                                    </svg>
                                            @else
                                                <!-- minus -->
                                                    <svg style="color:yellow;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                                    </svg>
                                                @endif
                                            </td>
                                        @empty
                                            <div class="alert alert-danger">There is no prayers for you in database.</div>
                                        @endforelse
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <th scope="row"></th>
                                        <th scope="row"></th>
                                        <th scope="row"></th>
                                        <th scope="row"></th>
                                    </tr>
                                    </tbody>
                                </table>
                                @if(!$date)
                                    <a href="{{route('prayer.edit', [$prayers->first()->pivot->month, $prayers->first()->pivot->day_arrangement])}}" class="btn btn-primary float-right">Edit</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
