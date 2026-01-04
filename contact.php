<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background: #815b5bff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
    
        .container {
            background: #e8cfcfff;
            width: 400px;
            margin-top: 40px;
            padding: 25px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: black;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 2px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        input:focus, textarea:focus {
            border-color: #4A90E2;
            outline: none;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            background: #4A90E2;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: 0.3s ease;
        }

        button:hover {
            background: #357ABD;
        }

    </style>
</head>
<body>
    <div class="container">
    <h1>Formulaire</h1>
    <form method="post" action="traitement.php">

    <label for="firstname">Prénom :</label>
    <input type="text" name="firstname" id="firstname"><br><br>

    <label for="lastname">Nom :</label>
    <input type="text" name="lastname" id="lastname"><br><br>

    <label for="mail">Email :</label>
    <input type="email" name="mail" id="mail"><br><br>

    <label for="number">Téléphone :</label>
    <input type="text" name="number" id="number"><br><br>

    <label for="object">Objet :</label>
    <textarea id="object" name="object"></textarea><br><br>

    <label for="message">Message :</label>
    <textarea id="message" name="message"></textarea><br><br>

    <button type="submit" name="valider" >Soumettre</button>
</form>
</div>


</body>
</html>