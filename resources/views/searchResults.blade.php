@extends('layout')

@section('content')
    <br />
    <h1>search results</h1>
    <table class="table text-center table-hover">
        <thead class=" table-secondary">
            <tr>
                <th scope="col"> رقم الوحدة </th>
                <th scope="col"> الاسم </th>
                <th scope="col"> النوع </th>
                <th scope="col"> المؤسسة التابعة </th>
                <th scope="col"> الجمعية المكلفة </th>
                <th scope="col"> عدد الاقسام </th>
                <th scope="col"> عدد الاطفال </th>
                <th scope="col"> عدد المربيات </th>
                <th scope="col"> الموسم الدراسي </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($unit as $u)
                <tr>
                    <th scope="row">{{ $u->id }}</th>
                    <td>{{ $u->nom }}</td>
                    <td>{{ $u->type }}</td>
                    <td>{{ $u->etab }}</td>
                    <td>{{ $u->assoc }}</td>
                    <td>{{ $u->nbClasses}}</td>
                    <td>{{ $u->nbEnfants}}</td>
                    <td>{{ $u->nbMaitresses }}</td>
                    <td>{{ $u->anneeSco }}</td>
                </tr>
            @empty
                <p>no data</p>
            @endforelse
        </tbody>
    </table>
    <a class="btn btn-danger" href="{{ route('index') }}"> العودة الى الرئيسة </a>
@endsection

{{-- @section('title',{{ $u->nom }}.' نتائج البحث عن  ') --}}
