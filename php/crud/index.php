<?php 

require_once('models/task.php');

$tasks = Task::FindAll();

include_once('templates/header.php');
?>


	<div class="container">
		<div class="row">
			<?php foreach ($tasks as $task) { ?>
				<div class="col-4 mt-3">
					<div class="card text-center">
						<div class="card-header">
							Task
						</div>
						<div class="card-body">
							<h5 class="card-title"><?php print_r($task->getTitle()); ?></h5>
							<p class="card-text"><?php print_r($task->getDescription()); ?></p>
							<form action="views/task.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $task->getId(); ?>">
								<button type="submit" class="btn btn-danger" name="task" value="finalize">Finalize</button>
							</form>
						</div>
						<div class="card-footer text-muted">
							<?php print_r($task->getCreationDate()); ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>


	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nueva tarea</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="views/task.php" method="POST">
					<div class="modal-body">
						<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
						<div class="form-group">
							<label>Title:</label>
							<input class="form-control" type="text" name="title">
						</div>
						<div class="form-group">
							<label>Description:</label>
							<textarea class="form-control" name="description"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="task" value="add">Add</button>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php

include_once('templates/footer.php');

?>