<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Blog</p>
            </div>
            <div class="container">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="post-teaser">
                        <div class="align-items-center justify-content-center mx-auto d-block bg-white rounded-circle mb-4 h-50 w-50">
                            <img class="card-img-top rounded" src="img/Blog/<?= esc($foto) ?>" alt="">
                        </div>
                        <h1 class="mb-3 text-center rounded-pill"><?= esc($title) ?></h1>
                        <p><?= $description ?></p>
                    </div>
                </div>
            </div>