<h1>User</h1>

<form method="POST" action="<?php echo URL;?>user/create">
    <label>Create new: </label><br />
    <input type="text" placeholder="Login" name="login"/><br />
    <input type="text" name="password" placeholder="Password" /><br />
    <select name="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br />
    <label>&nbsp;</label><input type="submit" title="Submit"/>
</form>
<hr />
<table>
    <th>Id</th>
    <th>Username</th>
    <th>Role</th>
    <?php
        foreach ($this->userList as $key => $value){
            echo '<tr>';
            echo '<td>'.$value['id'].'</td>';
            echo '<td>'.$value['login'].'</td>';
            echo '<td>'.$value['role'].'</td>';
            echo '<td><a href="'.URL.'user/edit/'.$value['id'].'">Edit</a> | 
                      <a href="'.URL.'user/delete/'.$value['id'].'">Delete</a></td>';
            echo '</tr>';
        }
    ?>
</table>