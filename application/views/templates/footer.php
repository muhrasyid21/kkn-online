  <footer class="font-small bg-primary text-white">
    <div class="row m-3">
    
      <div class="col-md-3 col-lg-2 my-4">
        <img src="<?= base_url('assets/images/Logo_UMB_Putih_besar.png');?>" class="img-fluid" alt="logo">
      </div>
      <div class="col-md-9 col-lg-10 my-3">
        <h5>Kontak Kami</h5>
        <p>Muhammad Rasyid</p>
        <p>41518310002</p>
        <p>Jl Delima Selatan 2 Blok C2/22 Bekasi</p>
      </div>
    </div>
    <div class="text-center py-3 bg-info">© Muhammad Rasyid - 41518310002 2020</div>
  </footer>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure wanna logout?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <a href="<?= base_url('admin/logout'); ?>" class="btn btn-outline-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>