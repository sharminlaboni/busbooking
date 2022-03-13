@extends('welcome')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">source</th>
      <th scope="col">Destination</th>
      <th scope="col">ID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dhaka</td>
      <td>chittagong</td>
      <td>118</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>khulna</td>
      <td>dhaka</td>
      <td>115</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>rajshahi</td>
      <td>chittagong</td>
      <td>116</td>
    </tr>
  </tbody>
</table>

@endsection