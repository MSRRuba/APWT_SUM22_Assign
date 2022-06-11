<html>
  <head></head>
  <body>
    <h1> Admin Dashboard!!</h1><br>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Eamil</th>
        <th>User Type</th>

        <th colspan="3">Actions</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> name}}</td>
        <td>{{$user -> dob}}</td>
        <td>{{$user -> email}}</td>
        <td>{{$user -> type}}</td>

        <td><button>View<button></td>
        <td><button>Edit<button></td>
        <td><button>Delete<button></td>
      </tr>
      @endforeach
    </table>
  </body>
</html>