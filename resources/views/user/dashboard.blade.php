<html>
  <head></head>
  <body>
    <h1> Customers Dashboard!!</h1><br>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> name}}</td>
        <td>
          <button><a href="/user/details/{{$user -> id}}">View</a></button>
        </td>
      </tr>
      @endforeach
    </table>
  </body>