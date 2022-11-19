<h1>User Login</h1>
<form action="\profilecheck" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter User Name">
    <br>
    <input type="password" name="password" placeholder="Enter Password">    <br>
    <button>Login</button>    <br>
</form>
<br>
<br>
<a href="/profile">profile</a>
<br>
<a href="/loginx">- goto flash login -</a>