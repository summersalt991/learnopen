<h1>this is edit form page</h1>

<form action="/update" method="post">
@csrf 

<input name="id" type="hidden" value={{$edidat['id']}}>
<input name="name" type="text" value={{$edidat['name']}}>
<br>    
<input name="address" type="text" value={{$edidat['address']}}>
<br>   

<button>Submit</button>
</form>