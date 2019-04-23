<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <div class="profileInfo">
      <div class="headingAndQR">
          <h1>CharacterName - Character Information</h1>
          <img src="img/qr.png" alt="QR Code">
      </div>
      <div class="details">
        <div class="detailsLeft">
          <p>Character Name:</p>
          <p>Family:</p>
          <p>Occupation:</p>
          <p>Patronage:</p>
          <p>Region of Origin:</p>
          <p>Name of Player:</p>
          <p>Started:</p>
          <p>Skill 1:</p>
          <p>Skill 2:</p>
          <p>Skill 3:</p>
          <p>Religion:</p>
          <p>Who you are:</p>
          <p>Event X:</p>
          <p>Event X+1:</p>
          <p>Goals:</p>
        </div>
        <div class="detailsRight">
          <p>Sample Name</p>
          <p>Sample Family</p>
          <p>Sample Occupation</p>
          <p>Sample Patronage</p>
          <p>Sample Region of Origin</p>
          <p>Sample Name of Player</p>
          <p>1</p>
          <p>Sample skill</p>
          <p>Sample skill</p>
          <p>Sample skill</p>
          <p>Sample Religion</p>
          <p>Sample description</p>
          <p>What you did at event X</p>
          <p>What you did at event X+1</p>
          <p>Goals for event</p>
        </div>
        <div class="associatedPlayers">
          <h1>Who you know:</h1>
          <table>
            <tr>
              <th>Player</th>
              <th>Character</th>
              <th>Description</th>
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
            </tr>
            <tr>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
            </tr>
            <tr>
              <td>Ernst Handel</td>
              <td>Roland Mendel</td>
              <td>Austria</td>
            </tr>
            <tr>
              <td>Island Trading</td>
              <td>Helen Bennett</td>
              <td>UK</td>
            </tr>
            <tr>
              <td>Laughing Bacchus Winecellars</td>
              <td>Yoshi Tannamuri</td>
              <td>Canada</td>
            </tr>
            <tr>
              <td>Magazzini Alimentari Riuniti</td>
              <td>Giovanni Rovelli</td>
              <td>Italy</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
