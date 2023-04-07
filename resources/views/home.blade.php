@extends('layout')
@section('content')
    <br />
    <h2>مرحبا </h2>
    <div class="selects">
        {{-- <select name="commune" id="commune">
            <option value="جماعة">جماعة</option>
            <option value="جماعة">جماعة</option>
            <option value="جماعة">جماعة</option>
        </select>
        <select name="etablissement" id="etablissement">
            <option value="مؤسسة">مؤسسة</option>
            <option value="مؤسسة">مؤسسة</option>
            <option value="مؤسسة">مؤسسة</option>
        </select>
        <select name="unite" id="unite">
            <option value="وحدة">وحدة</option>
            <option value="وحدة">وحدة</option>
            <option value="وحدة">وحدة</option>
        </select>
        <select name="anneeScolaire" id="anneeScolaire">
            <option value="الموسم الدراسي">الموسم الدراسي</option>
            <option value="الموسم الدراسي">الموسم الدراسي</option>
            <option value="الموسم الدراسي">الموسم الدراسي</option>
        </select>
        <button class="btn btn-primary" id="filter"> بحث </button> --}}
        <a href="{{url('/search')}}" class="btn btn-primary"> البحث عن وحدة </a>

    </div>
    <hr />
    <h2> لائحة الوحدات برسم الموسم 2022/2023 </h2>
    <br />
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
            @forelse ($units as $u)
                <tr>
                    <th scope="row">{{ $u['id'] }}</th>
                    <td>{{ $u['nom'] }}</td>
                    <td>{{ $u['type'] }}</td>
                    <td>{{ $u['etab'] }}</td>
                    <td>{{ $u['assoc'] }}</td>
                    <td>{{ $u['nbClasses'] }}</td>
                    <td>{{ $u['nbEnfants'] }}</td>
                    <td>{{ $u['nbMaitresses'] }}</td>
                    <td>{{ $u['anneeSco'] }}</td>
                </tr>
            @empty
                <p>no data found</p>
            @endforelse

        </tbody>
    </table>
@endsection
