<table border=1 align=center >
    <tr>
        <th>Sno</th>
        <th>EName</th>
        <th>Email</th>
        <th>phone</th>
        <th>Address</th>
        <th>DOJ</th>
        <th>Salary</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Add</th>
    </tr>
    @foreach($employeeData as $employee)
    <tr>
     <td>{{ $employee->sno}}</td>
     <td>{{ $employee->Ename}}</td>
     <td>{{ $employee->Email}}</td>
     <td>{{ $employee->phone}}</td>
     <td>{{ $employee->address}}</td>
     <td>{{ $employee->Doj}}</td>
     <td>{{ $employee->salary}}</td>
     <td><a href='edit/{{$employee->sno}}'>Edit</a></td>
     <td><a href='delete/{{$employee->sno}}'>Delete</a></td>
     <td><a href='/'>Add</a></td>
    </tr>
    @endforeach
</table>
