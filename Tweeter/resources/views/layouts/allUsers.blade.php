@extends('layouts.app')

@php

    function checkFollowing($userToCheck, $follow_relationship) {
        foreach($follow_relationship as $follow) {
            if($follow->followed_id == $userToCheck) {
                return true;
            }
        }
        return false;
    }

@endphp

@section('content')
    <h1> List of Users!</h1>
        <br><br>
        @foreach ($users as $user)
            <p> {{$user->id}} </p>
        @if (checkFollowing($user->id, $follow_relationship))
            <p> Already following! </p>

        @else
            <form action="/followUsers" method="get">
                @csrf
                <input type="submit" value="Follow">
                {{-- <input type="submit" value="Unfollow"> --}}
            </form>

        @endif

        @endforeach

@endsection
