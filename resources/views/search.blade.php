@extends('layout')
@section('content')
    <div class="card-header text-primary" style="font-size: 18px; font-weight:bold;">
        Recherche d'un Etudiant
    </div>
    <div class="login-form-1" style="width:790px;">

        <form action="{{ url('/') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for=""> اكتب اسم الوحدة </label>
                <input type="text" name="nom" id="" class="form-control">
                <br>
                <button type="submit" class=" col-md-4 btn btn-primary"> بحث </button>
            </div>
        </form>
    @endsection
@section('title','البحث عن وحدة')