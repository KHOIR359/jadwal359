<?php include_once('components/header.php') ?>
<nav class="text-bebas-neue text-center bg-white py-2 fs-2 fw-bold shadow-sm">
  Manage
</nav>
<div class="container pt-4 container bg-white card py-3 mt-2 shadow">
  <h3 class="text-bebas-neue">Schedue List</h3>
  <div class="collectionContainer py-2 ">
    No Data Found
   <!-- <div class="card mb-2 container py-2">
      <div class="row">
        <div class="col-6">
          <h3 class="text-bebas-neue mb-0">Jadwal 12 MIPA 1</h3>
          <span class="">PJJ semester 1 tapel 2022</span>
        </div>
        <div class="col-2"></div>
        <div class="col-4">
          <a href="#" class="btn btn-sm d-block mb-2 btn-success">Select</a>
          <a href="#" class="btn btn-sm d-block btn-primary">Edit</a>
        </div>
      </div>
    </div> -->
  </div>
  <div class="add mt-2">

    <!-- Button trigger modal -->
    <a type="button" class="btn btn-success d-block text-center" data-bs-toggle="modal" data-bs-target="#addModal">
      New
    </a>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- start form -->
            <form>
              <div class="mb-3">
                <label for="titleForm" class="form-label">Title</label>
                <input required type="text" class="form-control" id="titleForm">
              </div>
              <div class="mb-3">
                <label for="descriptionForm" class="form-label">Description</label>
                <input required type="text" class="form-control" id="descriptionForm">
              </div>
            </form>
            <!-- end form -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="addBtn">Add Now</button>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Schedule</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- start form -->
            <form>
              <div class="mb-3">
                <label for="titleForm" class="form-label">Title</label>
                <input readonly type="text" class="form-control" id="titleForm">
              </div>
              <div class="mb-3">
                <label for="descriptionForm" class="form-label">Description</label>
                <input required type="text" class="form-control" id="descriptionForm">
              </div>
              <div class="mb-3">
                <label for="mondayForm" class="form-label">Monday</label>
                <textArea rows='10' required type="text" class="form-control" id="mondayForm"></textarea>
              </div>
              <div class="mb-3">
                <label for="tuesdayForm" class="form-label">Tuesday</label>
                <textArea rows='10' required type="text" class="form-control" id="tuesdayForm"></textarea>
              </div>
              <div class="mb-3">
                <label for="wednesdayForm" class="form-label">Wednesday</label>
                <textArea rows='10' required type="text" class="form-control" id="wednesdayForm"></textarea>
              </div>
              <div class="mb-3">
                <label for="thursdayForm" class="form-label">Thursday</label>
                <textArea rows='10' required type="text" class="form-control" id="thursdayForm"></textarea>
              </div>
              <div class="mb-3">
                <label for="fridayForm" class="form-label">Friday</label>
                <textArea rows='10' required type="text" class="form-control" id="fridayForm"></textarea>
              </div>
            </form>
            <!-- end form -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="saveEdit">Save</button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

<?php include_once('components/bottom-nav.php') ?>

<script src="assets/js/manage.js"></script>
<?php include_once('components/footer.php') ?>