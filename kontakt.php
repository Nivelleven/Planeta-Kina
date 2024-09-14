<?php 
    include 'header.php'; 
?>

<body style="background-image: url('images/cinemaBack3.jpg');">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <h3 class="text-center">Napisz do nas</h3>
            <form action="send-contact.php" method="POST">
                <div class="mb-3">
                    <label for="login" class="form-label">Twój E-Mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="mb-3">
                    <p><label for="contactText">Sugestie, przemyślenia, skargi</label></p>
                    <textarea name="contactText" id="contactText" class="w-100" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Wyślij</button>
            </form>
        </div>
    </div>
</body>

<?php 
    include 'footer.php'; 
?>