<a href="/">back to form page</a>
<table border=1>

<tr>
<th>Exercise no</th>
<th>Exerccise Name</th>
<th>Weight(Kg)</th>
<th>Sets</th>
<th>Reps</th>
<th>Option</th>
</tr>

@foreach($collection as $list)
<tr>
<td>{{$list['exerciseno']}}</td>
<td>{{$list['exercise']}}</td>
<td>{{$list['weight']}}</td>
<td>{{$list['sets']}}</td>
<td>{{$list['reps']}}</td>
<td><a href={{"delete/".$list['id']}}>delete</a> <a href={{"edit/".$list['id']}}>edit</a></td>

</tr>
@endforeach
</table>
