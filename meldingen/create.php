<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="">-- kies een type --</option>
                    <option value="Achtbaan">achtbaan</option>
                    <option value="Draaiend">draaiend</option>
                    <option value="Kinder">kinder</option>
                    <option value="Horeca">horeca</option>
                    <option value="Show">show</option>
                    <option value="Water">water</option>
                    <option value="Overig">overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="prioriteit">prio:</label>
                <input type="checkbox" name="prioriteit" id="prioriteit">
                <label for="prioriteit">melding met prioriteit</label>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="overige_info">overig</label>
                <textarea name="overige_info" id="overige_info" cols="30" rows="4" class="form-input"></textarea>
            </div> 
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
