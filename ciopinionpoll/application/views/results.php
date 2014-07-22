<html>
    <head>
        <title>US Presidency Poll Results</title>
    </head>
 
    <body>
        <h2>Opinion Poll Results</h2>
        <p><b>Who do you think will win the US presidency?</b></p>
        <p>
            <b><?php echo $total_votes; ?></b> people have thus far taken part in this poll:
        </p>
 
        <p>
            <table>
                <?php print($rows); ?>
            </table>
        </p>
 
        <p><a href="/phplessons/ciopinionpoll">Return to voting page</a></p>
    </body>
</html>