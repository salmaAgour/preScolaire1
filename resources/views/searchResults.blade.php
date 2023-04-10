@extends('layout')

@section('content')
    <br />
    <h1> نتائج البحث </h1>
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
                    <th>{{ $u->id }}</th>
                    <td>{{ $u->commune }}</td>
                    <td>{{ $u->etab }}</td>
                    <td>{{ $u->nom }}</td>
                    <td>{{ $u->type }}</td>
                    <td>{{ $u->assoc }}</td>
                    <td>{{ $u->anneeSco }}</td>
                    <td><a  href="{{route('prescolaires.show',$u->id)}}" class="btn btn-primary"> عرض </a></td>
                </tr>
            @empty
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     لا توجد نتائج .
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
                </div>
            @endforelse
        </tbody>
    </table>
    <a class="btn" style="background-color:orange;color:white" href="{{ route('prescolaires.index') }}"> العودة الى الرئيسة </a>
@endsection
@section('title',' نتائج البحث ')