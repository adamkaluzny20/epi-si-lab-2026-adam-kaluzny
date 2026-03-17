<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Bookmarks</title>
</head>
<body>
<?php if (isset($bookmarks)) : ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>URL</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($bookmarks as $bookmark) : ?>
            <tr>
                <td><?php echo $bookmark['title'] ?? ''; ?></td>
                <td><?php echo $bookmark['url'] ?? ''; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No data!</p>
<?php endif; ?>
</body>
</html>