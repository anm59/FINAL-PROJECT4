<?php include('view/header.php'); ?>

    <a href=".?action=display_question_form&userId=<?php echo $userId ?>">Add Questions</a>
    <div>
        <table>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Skills</th>
            </tr>
            <?php foreach($questions as $question) :
            ?>

                <tr>
                    <td><?php echo $question['title']; ?></td>
                    <td><?php echo $question['body']; ?></td>
                    <td><?php echo $question['skills'];?></td>
                    <td><?php echo $question['ownerid'];?></td>
                    <td> <form action="../.." method="post">
                            <input type="hidden" name="action"
                                   value="delete_question">
                            <input type="hidden" name="id"
                                   value="<?php echo $question['id'];?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php include('view/footer.php'); ?>