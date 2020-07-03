<!-- <h3>Регистрация</h3>
<form action="/account/register" method="post">
    <p>Логин</p>
    <p><input type="text" name="login"></p>
    <p>Пароль</p>
    <p><input type="text" name="password"></p>
    <b><button type="submit" name="enter">Регистрация</button></b>
</form> -->
<div class="text-center">
  <form class="form-signin">
    <!-- <div id=logo>Camagru</div> -->
    <h3 class="account">Sign up to see photos and videos from your friends</h3>
    <!-- <label for="inputEmail" class="sr-only">Email address</label> -->
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <!-- <label for="inputEmail" class="sr-only">Email address</label> -->
    <input type="text" id="inputNickname" class="form-control" placeholder="Nickname" required>
    <!-- <label for="inputPassword" class="sr-only">Password</label> -->
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <!-- <label for="inputPasswordRep" class="sr-only">Password</label> -->
    <input type="password" id="inputPasswordRep" class="form-control" placeholder="Repeat password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
  </form>
</div>
