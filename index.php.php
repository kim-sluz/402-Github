<!DOCTYPE html>
<html lang="de">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #00142d;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    .header-content {
        max-width: 600px;
        margin: 0 auto;
    }

    .progress-bar {
        /* Hier die Styles für die Fortschrittsleiste einfügen */
    }

    main {
        padding: 20px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    button {
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    footer {
        background-color: #00142d;
        padding: 20px;
        text-align: center;
        color: #fff;
    }

    .links {
        color: #fff;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldeformular</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="header-content">
            <img src="Bilder/t-shirt_logo_hinten_weiss.png" alt="Logo">
            <h1>Anmeldeformular</h1>
        </div>
    </header>
    <div class="progress-bar">
        <!-- Fortschrittsleiste -->
    </div>
    <main>
        <form>
            <label for="strasse">Strasse:</label>
            <input type="text" id="strasse" name="strasse" required>

            <label for="ort">Ort:</label>
            <input type="text" id="ort" name="ort" required>

            <label for="plz">PLZ:</label>
            <input type="text" id="plz" name="plz" required>

            <label for="geburtstag">Geburtstag:</label>
            <input type="date" id="geburtstag" name="geburtstag" required>

            <label for="telefonnummer">Telefonnummer:</label>
            <input type="tel" id="telefonnummer" name="telefonnummer" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <div class="button-container">
                <button type="button" id="zurueck">Zurück</button>
                <button type="button" id="weiter">Weiter</button>
            </div>
        </form>
    </main>
    <footer>
        <p>Email: kontakt@example.com</p>
        <p class="links">Webseite: <a href="http://www.example.com">www.example.com</a></p>
    </footer>
</body>

</html>