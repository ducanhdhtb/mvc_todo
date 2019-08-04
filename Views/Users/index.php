<h1>List User</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/MVC_todo/users/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Register User </a>
        <tr>
            <th>Username</th>
            <th>Address</th>
            <th>Email</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($users as $users)
        {
            echo '<tr>';
                echo "<td>" . $users['username'] . "</td>";
                echo "<td>" . $users['address'] . "</td>";
                echo "<td>" . $users['email'] . "</td>";
                echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC_todo/users/edit/" . $users["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC_todo/tasks/delete/" . $users["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>