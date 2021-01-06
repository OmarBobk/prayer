@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding:0 85px;">
    @include('includes.breadcrumb', ['breadcrumbs' => [
            ['route' => 'home', 'title' => '2021'],
            ['route' => 'month.show', 'parameter' => $month->name, 'title' => $month->name],
        ]])
    <div class="row">
        @for($i=1;$i<=$month->days_number;$i++)
            @if(($i-1) % 7 == 0 && $i != 1)
                </div>
                <div class="row">
            @endif
            <div class="col">
                <div class="card mb-5">
                    <div class="card-header text-center">
                        <div><a href="{{route('day.show', [$month->name, $i])}}">{{$month->days()->wherePivot('day_arrangement', $i)->first()->name}}</a></div>
                        <div><a href="{{route('day.show', [$month->name, $i])}}">{{$i}}</a></div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            @forelse($prayers as $prayer)
                                @if($prayer->pivot->day_arrangement == $i)
                                    <div class="" style="padding:0 5px">
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
                                    </div>
                                @endif
                            @empty
                                There is no prayers for you in database.
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
