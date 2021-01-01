<div class="main">
    <header>
        <nav class="navbar">
            <div class="container-fluid d-flex justify-content-between">
                <a href="javascript:void(0)" class="type">Inbox:<?php echo $target_mail['id'] ?></a>
            </div>
        </nav>
    </header>
    <div class="content">
        <div class="head">
            <dl>
                <dt>Betreff:</dt>
                <dd><?php echo $target_mail['subject'] ?></dd>
            </dl>
            <div class="couple">
                <dl>
                    <dt>Von:</dt>
                    <dd title='"<?php echo $target_mail['name'] ?>" <<?php echo $target_mail['email'] ?>>'>
                        <?php echo $target_mail['name'] ?>
                    </dd>
                </dl>
                <dl>
                    <dd>
                        <?php echo $target_mail['timestamp'] ?>
                    </dd>
                </dl>
            </div>

        </div>
        <div class="body">
            <div class="container">
                <p><?php echo $target_mail['text'] ?></p>
            </div>
        </div>
        <div class="action">

        </div>
    </div>
</div>