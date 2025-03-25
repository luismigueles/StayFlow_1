<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $datum)
    <tr>
      <th scope="row">1</th>
      <td>{{ $datum->nombre}}</td>
      <td>{{ $datum->telefono}}</td>
      <td>{{ $datum->email}}</td>
      <td>
        <a href='huespedes/{{$datum->id_huesped}}/edit'>editar</a>
        <a href='huespedes/{{$datum->id_huesped}}'>borrar</a>
      
    </td>
    </tr>
    @endforeach
  </tbody>
</table>