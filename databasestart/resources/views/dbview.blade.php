<h1> database view </h1>

<table border=1>
    <tr>
        <td> id </td>
        <td> name </td>
        <td> address </td>
    </tr>
    @foreach ($collection as $liste)
    <tr>
        <td>{{$liste['id']}}</td>
        <td>{{$liste['name']}}</td>
        <td>{{$liste['address']}}</td>
        </tr>
    @endforeach
</table>