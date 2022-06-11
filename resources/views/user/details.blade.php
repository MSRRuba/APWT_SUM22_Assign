<html>
  <head></head>
  <body>
 <h1>Details of {{$users -> name}}</h1>
  <table border="1">
  <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Eamil</th>
        <th>User Type</th>
        
      </tr>
  <tr>
        <td>{{$users -> id}}</td>
        <td>{{$users -> name}}</td>
        <td>{{$users -> dob}}</td>
        <td>{{$users -> email}}</td>
        <td>{{$users -> type}}</td>
</tr>


    </table> 
  </body>
</html>