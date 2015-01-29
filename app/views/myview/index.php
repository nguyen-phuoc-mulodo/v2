<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data['title']; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><?php echo $data['content'];?></div>
        <h2>List of Posts</h2>
        <ul>
            <?php foreach($data['posts'] as $item): ?>
            <li><strong>Number <?php echo $item->id; ?>.</strong> <?php echo $item->content; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
