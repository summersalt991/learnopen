<a href="form">back to form page</a>
<table border=1>

<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Option</th>
</tr>

@foreach($collection as $list)
<tr>
<td>{{$list['id']}}</td>
<td>{{$list['name']}}</td>
<td>{{$list['address']}}</td>
<td><a href={{"delete/".$list['id']}}>delete</a> <a href={{"edit/".$list['id']}}>edit</a></td>

</tr>
@endforeach
</table>
