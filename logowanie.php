<?php 
    include 'header.php';
 ?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
        <h3 class="text-center">Logowanie</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="login" class="form-label">E-Mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Hasło" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
        </form>
        <div class="text-center mt-3">
            <span>Jeszcze nie masz konta?</span>
            <a href="rejestracja.php">Zarejestruj</a>
        </div>
    </div>
</div>

<?php 
    include 'footer.php';
 ?>