<div class="section-pro">
      <div class="toplogo">

        <a href="../admin/admin_dashboard.php"><button class="toplogo-button"><img src="../admin/imges/toplogo.png" alt=""></button></a>
      </div>
      <div class="profile-add">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary profile-button fa-solid fa-user" data-bs-toggle="modal"
          data-bs-target="#exampleModal">

        </button>
        <!-- Modal -->
        <div class="modal fade modal-fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog2 ">
            <div class="card">
              <div class="card-icon">
                <i class="fa-solid fa-user card-img"></i>
              </div>
              <?php

              if (isset($_SESSION['login_username'])) {

              }
              echo
                "<h1>" . $_SESSION['login_username'] . "</h1>";
              ?>

              <div class="modal-footer">
                <a href="log_out.php" class="admlogout btn btn-danger pe-auto"> ចាកចេញ <i class="fa-solid fa-right-from-bracket icon-logout-admin"></i></a>
            
             
              </div>

             
            </div>
            
          </div>
        </div>
      </div>
    </div>