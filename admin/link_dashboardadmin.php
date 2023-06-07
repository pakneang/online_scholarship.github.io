<div class="text">
          <i class="fa-solid fa-bars hide show"></i>

        </div>
        <ul class="menu-admin">
          <div class="text1">
            <h2 class="title">អ្នកគ្រប់គ្រង</h2>
          </div>
          <li><a href="#" class="feat-btn">បញ្ជីសិស្សចុះឈ្មោះតាមជំនាញ
              <span class="fa-solid fa-angle-right first"> </span>
            </a>
            <ul class="feat-show">
              <?php
              $select = "SELECT * FROM tb_major";
              $select_run = mysqli_query($conn, $select);
              if (mysqli_num_rows($select_run) > 0) {
                while ($major = mysqli_fetch_assoc($select_run)) {
                  ?>
                  <a href="..\admin\adminpageview1.php?major=<?= $major['major_name']; ?>">
                    <button type="text" class="colmenu" id="colFormLabel" placeholder="">
                      <?= $major['major_name']; ?>
                    </button></a>
                  <?php
                }
              }
              ?>
              <!-- <li><a href="">វិទ្យាសាស្ត្រសត្វ</a></li>
              <li><a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a></li>
              <li><a href="">បច្ចេកវិទ្យាអាហារ</a></li>
              <li><a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a></li>
              <li><a href="">បច្ចេកវិទ្យាមេកានិក</a></li> -->
              <li><a href="../admin\all-students.php">សិស្សចុះឈ្មោះសរុប</a></li>
            </ul>
          </li>
          <li><a href="..\admin\adminpageinfo.php" class="info-btn">ប្រវត្តិរូបសិស្ស</a>
            <!-- <li><a href="">វិទ្យាសាស្ត្រដំណាំ</a></li>
              <li><a href="">វិទ្យាសាស្ត្រសត្វ</a></li>
              <li><a href="">បច្ចេកវិទ្យាកុំព្យូទ័រ</a></li>
              <li><a href="">បច្ចេកវិទ្យាអាហារ</a></li>
              <li><a href="">ការដំឡើងប្រព័ន្ធអគ្គិសនី</a></li>
              <li><a href="">បច្ចេកវិទ្យាមេកានិក</a></li> 
            </ul>-->
          </li>
          <li><a href="#" class="serv-btn">សេចក្ដីជូនដំណឹង
              <span class="fa-solid fa-angle-right second"></span>
            </a>
            <ul class="serv-show">
              <li><a href="">អំពីការប្រឡង</a></li>
              <li><a href="">អំពីលទ្ធផលការប្រឡង</a></li>
            </ul>
          </li>
          <li><a href="adminview_member.php" class="add-btn">ចំនួនអ្នកគ្រប់គ្រង
              <span class="fa-solid fa-angle-right third"></span>
            </a>
          </li>
        </ul>