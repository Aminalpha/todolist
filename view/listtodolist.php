<?php $title = "List To Do List"?>
<?php ob_start() ?>
  <div class="container">
    <h2>LIST "TO DO LIST"</h2>
    <br>
    <table class="table table-md table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Numéro Todolist</th>
          <th scope="col">TITLE</th>
          <th scope="col">DATE</th>
          <th scope="col">ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $num_todolist = 1;
        while($data = $listTodo->fetch()){ 
      ?>
        <tr>
          <th scope="row"> <?= $num_todolist ?> </th>
          <td><?= $data["title"] ?></td>
          <td><?= $data["creation_date"] ?></td>
          <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-details">Details</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">Edit</button>
          </td>
        </tr>
        
      <?php  
          $num_todolist += 1;
        } 
      ?>
      </tbody>
    </table>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">ADD To do</button>
  </div>

  <!--Start Modal Details-->
    <div class="modal" role="dialog" id="modal-details" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id=""> Titre to do </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="" class="">Title</label>
                <input type="text" readonly value="Title" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <input type="text" readonly value="Description" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Author</label>
                <input type="text" readonly value="Author" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Creation Date</label>
                <input type="text" readonly value="Creation Date" name="" class="form-control" id="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </diV>
  <!--End Modal Details-->

  <!--Start Modal Edit-->
  <div class="modal" role="dialog" id="modal-edit" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id=""> Titre to do </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="" class="">Title</label>
                <input type="text" value="Title" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <input type="text" value="Description" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Author</label>
                <input type="text" value="Author" name="" class="form-control" id="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
    </diV>
  <!--End Modal Edit-->

  <!--Start Modal Add-->
  <div class="modal" role="dialog" id="modal-add" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id=""> Titre to do </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" method="post" id="form-add">
              <div class="form-group">
                <label for="" class="">Title</label>
                <input type="text" value="Title" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <input type="text" value="Description" name="" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Author</label>
                <select name="" class="form-control" id="">
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
    </diV>
  <!--End Modal Add-->



<?php $content = ob_get_clean() ?>
<?php require_once("template.php") ?>