<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BACS 200 - Forms Demo</title>
    </head>
    <body>

        <h1>BACS 200 - Forms Demo</h1>

        <h2>Subscription Successful!</h2>

        <label>Email: </label> <?php echo filter_input(INPUT_GET, 'email'); ?>

        <p>Thank you for subscribing to the news feed.</p>
        <p>This page is loaded after you do the subscribe action on a forms page.</p>

        <a href="form.html">Subscribe again</a>

    </body>
</html>
