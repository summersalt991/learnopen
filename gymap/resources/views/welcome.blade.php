<h1>welcome</h1>
<a href="datapage">data page</a>
<h1>this is data entery page</h1>

<form action="/savedata" method="post">
@csrf
<input name="eno" type="number" placeholder="exercise number"><br>
<input name="ename" type="text" placeholder="exercise name"><br>
<input name="weight" type="number" placeholder="weight(kg)"><br>
<input name="sets" type="number" placeholder="sets"><br>
<input name="reps" type="number" placeholder="reps"><br>
<button>submit</button>
</form>