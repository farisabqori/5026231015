<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Frontend</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f8f0;
      margin: 0;
      padding: 30px;
    }

    h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #2d2d2d;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s, box-shadow 0.2s;
      text-decoration: none;
      color: inherit;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .icon {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .title {
      font-weight: bold;
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .desc {
      font-size: 0.95rem;
      color: #555;
    }

    .card.ets {
      grid-column: span 2;
      text-align: center;
      font-size: 1rem;
      background-color: #f0f8ff;
    }

    @media (max-width: 768px) {
      .card.ets {
        grid-column: span 1;
      }
    }
  </style>
</head>
<body>

<h1>Week 1 - ETS</h1>

<div class="grid">

  <a href="pertemuan1" class="card">
    <div class="icon">💻</div>
    <div class="title">Session 1: Onboarding</div>
    <div class="desc">Onboarding.</div>
  </a>

  <a href="pertemuan3" class="card">
    <div class="icon">🅱️</div>
    <div class="title">Session 3: Bootstrap Basics</div>
    <div class="desc">Bootstrap 4 Basics.</div>
  </a>

  <a href="pertemuan4" class="card">
    <div class="icon">🅱️</div>
    <div class="title">Session 4: UI Makeover</div>
    <div class="desc">UI Makeover with Bootstrap 4..</div>
  </a>

  <a href="pertemuan5" class="card">
    <div class="icon">🌲</div>
    <div class="title">Linktree Project</div>
    <div class="desc">Linktree Project.</div>
  </a>

  <a href="pertemuan7a" class="card">
    <div class="icon">📟</div>
    <div class="title">Session 7: JavaScript Calculator</div>
    <div class="desc">JavaScript Calculator.</div>
  </a>

  <a href="pertemuan7b" class="card">
    <div class="icon">🧪</div>
    <div class="title">Session 7: Form Validation</div>
    <div class="desc">Form Validation using JavaScript and SweetAlert2.</div>
  </a>

  <a href="ets" class="card ets">
    <div class="icon">📘</div>
    <div class="title">Final Project</div>
    <div class="desc">ETS Web Redesign.
