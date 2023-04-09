@extends('layout')

@section('content')
    <br />
    <h1>{{ ' وحدة ' . $unit->nom }}</h1>
    <br>
        <table class="table text-center table-hover border w-50 ">
            <tbody>
                <tr>
                    <th class="text-primary"> رقم الوحدة </th>
                    <td class="border">{{ $unit->id }}</td>
                </tr>
                <tr>
                    <th class="text-primary"> الجماعة </th>
                <td class="border">{{ $unit->commune }}</td>
            </tr>
            <tr>
                <th class="text-primary"> المؤسسة التعليمية </th>
                <td class="border">{{ $unit->etab }}</td>

            </tr>
            <tr>
                <th class="text-primary" > اسم الوحدة </th>
                <td class="border">{{ $unit->nom }}</td>
            </tr>
            <tr>
                <th class="text-primary" > نوعها </th>
                <td class="border">{{ $unit->type }}</td>
            </tr>
            <tr>
                <th class="text-primary" > الجمعية المكلفة </th>
                <td class="border">{{ $unit->assoc }}</td>
            </tr>
            <tr>
                <th class="text-primary" > عدد الاقسام </th>
                <td class="border">{{ $unit->nbClasses }}</td>
            </tr>
            <tr>
                <th class="text-primary" > عدد الاطفال </th>
                <td class="border">{{ $unit->nbEnfants }}</td>
            </tr>
            <tr>
                <th class="text-primary" > عدد المربيات </th>
                <td class="border">{{ $unit->nbMaitresses }}</td>
            </tr>
            <tr>
                <th class="text-primary" > الموسم الدراسي </th>
                <td class="border">{{ $unit->anneeSco }}</td>
                </tr>
            </tbody>
        </table>
        <br>
    <a class="btn" style="background-color: orange;color:white" href="{{ route('prescolaires.index') }}"> العودة الى الرئيسة
    </a>
@endsection

@section('title', 'معلومات الوحدة')
