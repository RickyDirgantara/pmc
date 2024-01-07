
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Progress</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->

<link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Customized Bootstrap Stylesheet -->
<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
</head>
<body>
  <?= $this->include('layouts/navbar') ?>
  <div class="container py-9 py-lg-11 position-relative z-index-1">
    <div class="row">
        <div class="col-lg-5 mb-5 mb-lg-0">
            <?php if (!empty($progressData)) : ?>
                <h5 class="mb-4 text-info aos-init aos-animate" data-aos="fade-up">Your Progress</h5>
                <div class="nav nav-pills flex-column aos-init aos-animate" id="myTab" role="tablist" data-aos="fade-up">
                    <?php
                    $uniqueWeeks = [];

                    foreach ($progressData as $progress) {
                        if (!in_array($progress['week'], $uniqueWeeks)) {
                            $uniqueWeeks[] = $progress['week'];
                        }
                    }

                    foreach ($uniqueWeeks as $index => $week) : ?>
                        <button class="nav-link px-4 text-start mb-3 <?= ($index === 0) ? 'active' : ''; ?>" id="week<?= $index; ?>" data-bs-toggle="tab" data-bs-target="#tabWeek<?= $index; ?>" type="button" role="tab" aria-controls="tabWeek<?= $index; ?>" aria-selected="<?= ($index === 0) ? 'true' : 'false'; ?>">
                            <span class="d-block fs-5 fw-bold"><?= $week; ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p>Tidak ada data progress.</p>
            <?php endif; ?>
        </div>

        <?php if (!empty($progressData)) : ?>
            <div class="col-lg-7 col-xl-6">
                <div data-aos="fade-up" class="tab-content aos-init aos-animate" id="myTabContent">
                    <?php foreach ($uniqueWeeks as $index => $week) : ?>
                        <div class="tab-pane fade <?= ($index === 0) ? 'active show' : ''; ?>" id="tabWeek<?= $index; ?>" role="tabpanel" aria-labelledby="week<?= $index; ?>">
                            <ul class="pt-4 list-unstyled mb-0">
                                <?php foreach ($progressData as $progress) : ?>
                                    <?php if ($progress['week'] === $week) : ?>
                                        <li class="d-flex flex-column flex-md-row py-4">
                                            <span class="flex-shrink-0 width-13x me-md-4 d-block mb-3 mb-md-0 small text-muted"><?= $progress['start_time']; ?> - <?= $progress['end_time']; ?></span>
                                            <div class="flex-grow-1 ps-4 border-start border-3">
                                                <h4><?= $progress['subject']; ?></h4>
                                                <p class="mb-0">
                                                    <?= $progress['notes']; ?>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>