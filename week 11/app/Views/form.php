<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4 CSRF &amp; XSS Lab</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 720px; margin: 32px auto; line-height: 1.5; }
        label, input, button { display: block; margin-bottom: 12px; }
        input { width: 100%; max-width: 360px; padding: 8px; }
    </style>
</head>
<body>
    <h1>CI4 CSRF &amp; XSS Protection Lab</h1>
    <p>This form is protected with CodeIgniter 4 CSRF tokens and escapes rendered user input with <code>esc()</code>.</p>

    <?php if (isset($user_input)): ?>
        <div style="background:#eef;border:1px solid #99c;padding:16px;margin-bottom:24px;">
            <strong>Submitted value:</strong>
            <p><?= esc($user_input) ?></p>
        </div>
    <?php endif ?>

    <form method="post" action="<?= site_url('securitylab/submit') ?>">
        <?= csrf_field() ?>

        <label for="user_input">Enter text to display:</label>
        <input type="text" id="user_input" name="user_input" value="<?= esc(old('user_input')) ?>" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
