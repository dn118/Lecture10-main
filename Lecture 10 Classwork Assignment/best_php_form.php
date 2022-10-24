<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best PHP Form</title>
</head>
<body>

<?php if (isset($_POST['form_submitted'])): ?>

    <h2>Thank You, <?php echo $_POST['Name']; ?> </h2>

    <p>You provided:
        <?php echo $_POST['Name'] . '  ' . $_POST['Surname'] . '  ' . $_POST['Date']; ?>
    </p>

    <p>Go <a href="best_php_form.php">BACK</a> to the form</p>

<?php else: ?>

    <div class="contact-form">
        <form action="best_php_form.php" method="POST">
            <h3>Tell us about yourself</h3>
            <div>
                <input name="Name" placeholder="Your name" type="text" tabindex="1" required>
            </div>
            <div>
                <input name="Surname" placeholder="Your surname" type="text" tabindex="2" required>
            </div>
            <div>
                <input name="Date" placeholder="Your Date of Birth" type="Date" tabindex="3" required>
            </div>
            <input type="hidden" name="form_submitted" value="1" />
            <button type="submit" tabindex="5">Submit</button>
        </form>
    </div>

<?php endif; ?>
</body>
</html>