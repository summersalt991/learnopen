<table border=1>
 <tr>
    <th>id</th>
    <th>name</th>
    <th>address</th>
</tr>
@foreach($collection as $list)
<tr>
    <td> 
        {{$list->id}}
    </td>
    <td> 
        {{$list->name}}
    </td>
    <td> 
        {{$list->address}}
    </td>
</tr>
@endforeach
</table>