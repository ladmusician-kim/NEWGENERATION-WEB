<?php
    foreach($users as $user) {
    ?>
    <li class="ng-user-item" data-dismiss="modal">
        <div class="ng-user-username"><?php echo $user->username ?></div>
        <input class="ng-user-id" type="hidden" value="<?php echo $user->_id?>" />
    </li>
<?php
}
?>
