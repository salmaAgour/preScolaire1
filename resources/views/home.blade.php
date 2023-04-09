@extends('layout')
@section('content')
    <br />
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

    </div>
    
    <h2> لائحة الوحدات برسم الموسم 2022/2023 </h2>
    <br />
    <hr />
    <br/>
    <a href="{{ url('prescolaire/search') }}" class="btn" style="background-color: orange;color:white"> البحث عن وحدة </a>
    <br />
    <br />
    <table class="table text-center table-hover">
        <thead class=" table-secondary">
            <tr>
                <th scope="col"> رقم الوحدة </th>
                <th scope="col"> الجماعة </th>
                <th scope="col"> المؤسسة التعليمية </th>
                <th scope="col"> اسم الوحدة </th>
                <th scope="col"> نوعها </th>
                <th scope="col"> الجمعية المكلفة </th>
                <th scope="col"> الموسم الدراسي </th>
                <th scope="col"> معلومات اضافية </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($units as $u)
                <tr>
                    <th>{{ $u['id'] }}</th>
                    <td>{{ $u['commune'] }}</td>
                    <td>{{ $u['etab'] }}</td>
                    <td>{{ $u['nom'] }}</td>
                    <td>{{ $u['type'] }}</td>
                    <td>{{ $u['assoc'] }}</td>
                    <td>{{ $u['anneeSco'] }}</td>
                    <td><a  href="{{route('prescolaires.show',$u->id)}}" class="btn btn-primary"> عرض </a></td>
                </tr>
            @empty
                <p>no data found</p>
            @endforelse

        </tbody>
    </table>
@endsection

@section('title','الرئيسية- لائحة الوحدات')