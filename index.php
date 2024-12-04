<?php include('templates/head.php') ?>
<?php include('templates/navbar.php') ?>
<?php include('templates/header.php') ?>
    <!-- Main Content -->
    <div class="container my-5">
      <div class="row">
        <!-- Blog Posts -->
        <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6" data-aos="fade-up">
                <div class="card mb-4">
                  <img
                    src="images/1.png"
                    class="card-img-top"
                    alt="Post Image"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">
                      Artikel ini sangat menarik dan inspiratif.
                    </p>
                    <a href="article.html" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up">
                <div class="card mb-4">
                  <img
                    src="images/2.png"
                    class="card-img-top"
                    alt="Post Image"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Judul Artikel Lain</h5>
                    <p class="card-text">
                      Artikel ini juga membahas topik yang sangat menarik.
                    </p>
                    <a href="article.html" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          <div class="card mb-4" data-aos="fade-up">
            <img
              src="images/3.png"
              class="card-img-top"
              alt="Post Image"
            />
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">
                Artikel ini sangat menarik dan inspiratif.
              </p>
              <a href="article.html" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>

          <div class="card mb-4" data-aos="fade-up">
            <img
              src="images/4.png"
              class="card-img-top"
              alt="Post Image"
            />
            <div class="card-body">
              <h5 class="card-title">Judul Artikel Lain</h5>
              <p class="card-text">
                Artikel ini juga membahas topik yang sangat menarik.
              </p>
              <a href="article.html" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header">Cari Artikel</div>
            <div class="card-body">
              <form>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Cari..."
                  />
                  <button class="btn btn-primary" type="button">Cari</button>
                </div>
              </form>
            </div>
          </div>

          <div class="card mb-4">
            <div class="card-header">Kategori</div>
            <div class="card-body">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Teknologi</a></li>
                <li><a href="#">Gaya Hidup</a></li>
                <li><a href="#">Pendidikan</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('templates/footer.php') ?>
