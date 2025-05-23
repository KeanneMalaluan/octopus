<***Please Read The Readme.txt***>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Octopus - A Free Template For Everyone!</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Orbitron', sans-serif;
    }
    body {
      background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364);
      color: #fff;
      overflow-x: hidden;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: rgba(0, 0, 0, 0.5);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }
    header h1 {
      font-size: 2.5rem;
      color: #00d8ff;
    }
    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    nav a:hover {
      color: #00d8ff;
    }
    .hero {
      height: 90vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      animation: fadeIn 2s ease;
    }
    .hero h2 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin-bottom: 30px;
    }
    .btn {
      background-color: #00d8ff;
      color: #000;
      padding: 15px 30px;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-size: 1rem;
      transition: transform 0.3s ease;
    }
    .btn:hover {
      transform: scale(1.1);
    }
    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 60px 20px;
      background-color: #101820;
    }
    .feature {
      background-color: #1a1a2e;
      margin: 15px;
      padding: 30px;
      border-radius: 20px;
      max-width: 300px;
      text-align: center;
      transition: transform 0.4s ease, background-color 0.3s ease;
    }
    .feature:hover {
      transform: translateY(-10px);
      background-color: #2c3e50;
    }
    .feature h3 {
      margin-bottom: 10px;
      color: #00d8ff;
    }
    .feature p {
      font-size: 0.95rem;
    }
    footer {
      background-color: #000;
      padding: 20px;
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
    }
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>
  <header>
    <h1>Octopus</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#features">Features</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Welcome to Octopus Template</h2>
    <p>Edit the details!</p>
    <button class="btn">Get Started</button>
  </section>

  <section class="features" id="features">
    <div class="feature">
      <h3>Your Website Feature</h3>
      <p>About The Feauture.</p>
    </div>
    <div class="feature">
      <h3>Your Website Feature</h3>
      <p>About The Feauture.</p>
    </div>
    <div class="feature">
      <h3>Your Website Feature</h3>
      <p>About The Feauture.</p>
    </div>
  </section>

  <footer>
    &copy; 2025 KeanneMalaluan. All rights reserved.
  </footer>
</body>
</html>
