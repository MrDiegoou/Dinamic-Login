<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Login</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" required>
                        <label for="type">Correo</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" required>
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Recordar <a href="#">Contraseña</a></label>

                    </div>
                    <button id="loginButton">Log in</button>
                    <div class="register">
                        <p>Olvidaste tu <a href="forgotpassword.php">Contraseña?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        document.getElementById('email').addEventListener('input', function () {
            if (this.value.toLowerCase() === 'texto_específico') {
                this.nextElementSibling.classList.add('active');
            } else {
                this.nextElementSibling.classList.remove('active');
            }
        });

        document.getElementById('password').addEventListener('input', function () {
            if (this.value === 'texto_específico') {
                this.nextElementSibling.classList.add('active');
            } else {
                this.nextElementSibling.classList.remove('active');
            }
        });
    </script>
    <script src="scrip.js"></script>
</body>

</html>
