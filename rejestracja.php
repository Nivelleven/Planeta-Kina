<?php 
    include 'header.php'; 
?>
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
        <h3 class="text-center">Rejestracja</h3>
        <form action="register-client.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Imię użytkownika</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Zarejestruj</button>
        </form>
        <div class="text-center mt-3">
            <span>Już jesteś zarejestrowany?</span>
            <a href="logowanie.php">Zaloguj</a>
        </div>
    </div>
</div>

<?php 
    include 'footer.php'; 
?>