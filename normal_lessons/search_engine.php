<!DOCTYPE>
<html>
    <head>
        <title>Simple Search Engine</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- if -->
        <?php if (isset($_GET['form_submitted'])): ?>
        <h2>
            Search Results For <?php echo $_GET['search_term']; ?>
        </h2>
            <?php if ($_GET['search_term'] == "GET"): ?>
            <p>The GET method displays its values in the URL</p>
            <?php else: ?> 
            <p>Sorry, no matches found for your search</p>
            <?php endif; ?>
        <p>Go <a href="./search_engine.php">back</a> to the form</p>
        
        <!-- else -->
        <?php else: ?>
        <h2>Simple Search Engine - Type in GET</h2>
        <form action="search_engine.php" method="GET">
            Search Term: <input type="text" name="search_term"> <br /> <br />
            <input type="hidden" name="form_submitted" value="1"/>
            <input type="submit" name="Submit">
        </form>
        
        <!-- endif -->
        <?php endif; ?>
    </body>
</html>