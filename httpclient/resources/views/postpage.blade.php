<h1>post page</h1>
<h1>user login</h1>

<form action="userhttp" method="post">
    @csrf
    {{method_field('put')}}
    <label>Name </label>
    <input type="text" name="user" placeholder="enter username"><br>
    <label>Password </label>
    <input type="password" name="password" placeholder="enter password"><br>
    <button>Login</button>
</form>