@extends('layout')
@section('content')
<br />
<h2>مرحبا </h2>
<div class="selects">
    <select name="commune" id="commune">
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
    <button class="btn btn-primary"> بحث </button>
</div>
<hr/>
<h2> لائحة الوحدات برسم الموسم 2022/2023 </h2>
<br/>
<table class="table align-middle table-hover">
    <thead class=" table-secondary">
      <tr>
        <th scope="col"> رقم الوحدة </th>
        <th scope="col" class="clo-2"> الاسم </th>
        <th scope="col" class="clo-2"> النوع </th>
        <th scope="col"> عدد الاقسام </th>
        <th scope="col"> عدد الاطفال </th>
        <th scope="col"> عدد المربيات </th>
        <th scope="col" class="clo-2"> الموسم الدراسي </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Thornton</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Larry</td>
        <td>Larry</td>
        <td>Larry</td>
        <td>Larry</td>
        <td>Larry</td>
      </tr>
    </tbody>
  </table>
@endsection