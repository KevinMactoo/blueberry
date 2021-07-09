<?php if(isset($_SESSION['message'])): ?>
    <div class="msg <?php echo  $_SESSION['type']; ?>">
        <li> <?php echo  $_SESSION['message']; ?> </li>

        <!--unset the message... so that when you refresh it
        it doesn't appear.-->
        <?php
        unset( $_SESSION['message']);
        unset( $_SESSION['type']);
        ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['msg'])):?>
    <div class="alert <?php echo  $_SESSION['type']; ?> fade show" role="alert">
    <?php echo  $_SESSION['msg']; ?>
    <?php
        unset( $_SESSION['msg']);
        unset( $_SESSION['type']);
        ?>
    </div>
<?php endif; ?>