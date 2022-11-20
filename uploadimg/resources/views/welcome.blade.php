<h1>this is main page</h1>
<form action="up" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="doc" placeholder="select">
<button type="submit">upload</button>
</form>