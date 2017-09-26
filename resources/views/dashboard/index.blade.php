@extends('layouts.dashboard') @section('content')
    <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
        <option>Select</option>
        @foreach($assessors as $assessor)
            {{--<option value="{{URL::to('/')}}/user/{{$user->id}}">{{$user->name}}</option>--}}
            <option value="{{URL::to('/')}}/dashboard/{{$assessor->id}}"> {{$assessor->name}} - {{$assessor->team_name}}</option>
        @endforeach
    </select>
@endsection