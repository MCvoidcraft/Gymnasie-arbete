<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="index.php">
            <button type="submit" name="submit">Home</button>
        </form>
        <h1>Create new account</h1>
        <form method="post" action="accountCreationFunction.php">
            <input type="text" name="uid" placeholder="New Username">
            <input type="password" name="pwd" placeholder="New Password">
            <button type="submit" name="submit">Create account</button>
        </form>

        <br>
        
        <form method="post" action="logginPage.php">
            <button type="submit" name="submit">Sign in to existing account</button>
        </form>
    </body>
</html>