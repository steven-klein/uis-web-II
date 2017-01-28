<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>UIS Web II Projects</title>
    </head>
    <body>
        <ul>
        <?php
            function scanner( $dir = '.', $exceptions = array() ) {
                return array_diff( scandir('.'), array_merge( array('..', '.'), $exceptions ) );
            }
            $projectDirs = scanner('.', array('index.php'));
            foreach($projectDirs as $dir): ?>
                <?php if(in_array('index.php', scanner($dir))): ?>
                <li>
                    <a href="/<?php echo $dir; ?>">Project <?php echo $dir; ?></a>
                </li>
                <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </body>
</html>
