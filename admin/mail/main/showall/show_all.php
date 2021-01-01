<div class="main">
    <header>
        <nav class="navbar">
            <div class="container-fluid d-flex justify-content-between">
                <a href="javascript:void(0)" class="type">Inbox</a>
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
    </header>
    <div class="content">
        <div class="head">

        </div>
        <div class="body">
            <table>
                <tbody>
                    <?php $Email_ID = 1;
                    foreach ($submits as $submit) :
                        if ($Email_ID >= maxInt("submits") + 1) {
                            break;
                        }

                    ?>
                        <tr id="submit-tr-<?php echo $Email_ID ?>" data-href="?mail&action=show:<?php echo $submit['id'] ?>">
                            <th title="<?php echo htmlentities($submit['id']) ?>"><?php echo $Email_ID ?></th>
                            <td class="marked <?php if ($submit['highlight'] == "1") echo "active";  ?>">
                                <a href="?mail&action=highlight:<?php echo $submit['id'] ?>:<?php if ($submit['highlight'] == "1") echo "0";
                                                                                            else echo "1"; ?>">
                                    <i class="fas fa-star"></i>
                                </a>
                            </td>
                            <td><?php echo htmlentities($submit['email']) ?></td>
                            <td>Subject</td>
                            <td><?php echo htmlentities($submit['timestamp']) ?></td>
                        </tr>
                    <?php $Email_ID++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>