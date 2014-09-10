<h1>User: Edit</h1>

<?php
    print_r($this->user);
?>

<form method="POST" action="<?php echo URL;?>user/editSave/<?php echo $this->user['id']; ?>">
    <label>Create new: </label><br />
    <input type="text" placeholder="Login" name="login" value="<?php echo $this->user['login']; ?>"/><br />
    <input type="text" name="password" placeholder="Password" /><br />
    <select name="role">
        <option value="default" <?php if($this->user['role'] == 'default') echo 'selected' ?> >Default</option>
        <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected' ?> >Admin</option>
        <option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected' ?> >Owner</option>
    </select><br />
    <label>&nbsp;</label><input type="submit" title="Submit"/>
</form>
