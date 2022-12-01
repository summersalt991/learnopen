<h1>welcome</h1>
<a href="datapage">data page</a><br>
<a href="/">back to moc page</a>

<h1>this is data entery page</h1>

<form action="/savedata" method="post">
@csrf

<input name="eno" type="number" placeholder="exercise number"><br>
<!-- <input name="ename" type="text" placeholder="exercise name"> -->

<label for="ename">exercise list</label>
<select name="ename" id="ename" type="text">
  @foreach($selecti as $sic)
 @if($sic['exerciselist'] !== NULL)
<option value={{$sic['exerciselist']}}>{{$sic['exerciselist']}}</option>
 @else

    @endif
@endforeach
</select>
<br>

<label for="weight">Weight in Kg</label>
<select name="weight" id="weight" type="number">
  @foreach($selecti as $sic)
  @if($sic['weighlist'] !== NULL)
    <option value={{$sic['weighlist']}}>{{$sic['weighlist']}}</option>
    @else

    @endif
@endforeach
</select>
<br>
<!-- <input name="sets" type="number" placeholder="sets"> -->

<label for="sets">no of sets</label>
<select name="sets" id="sets " type="number">
{{$no = 1}}
@while($no<10)
<option value={{$no}}>{{$no}}</option>
{{$no++;}}
@endwhile
</select>
<br><br>
<!-- <input name="reps" type="number" placeholder="reps"> -->
<label for="reps">no of reps</label>
<select name="reps" id="reps" type="number">
{{$no = 1}}
@while($no<101)
<option value={{$no}}>{{$no}}</option>
{{$no++;}}
@endwhile

</select>
<br>
<button>submit</button>
</form>