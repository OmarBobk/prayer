@extends('layouts.app')

@section('content')

<div class="container">
    @include('includes.breadcrumb', ['breadcrumbs' => ['route' => 'home', 'title' => 'Year']])
    <div class="row justify-content-center">

        @forelse($months as $month)
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-header"><a href="{{route('month.show', $month->name)}}">{{$month->name}}</a></div>
                    <div class="card-body">
                        <div class="row">
                            @for($i=1;$i<=31;$i++)
                                    @if($i > $month->days_number)
                                        <div class="text-center col-1" style="padding:5px;">
                                            -
                                        </div>
                                    @else
                                        @if($i == 1 | $i % 7 == 0 | ($i - 1) % 7 == 0)
                                            <div class="text-center col-1 {{$data($month, $i)}}"
                                                 style="padding:5px;">
                                                <div class="today_circle_child">
                                                    <a href="{{route('day.show', [$month->name, $i])}}">{{$i}}</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-center col-2 {{$data($month, $i)}}"
                                                 style="padding:5px;">
                                                <div class="today_circle_child">
                                                    <a href="{{route('day.show', [$month->name, $i])}}">{{$i}}</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @empty
            empty
        @endforelse
    </div>
</div>
@endsection
