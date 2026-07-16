<?php
include("master-template/header.php");
?>

<!-- Welcome Section -->
<section class="dc-haslayout dc-main-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 text-center">

                <h1>Welcome to City Hospital</h1>

                <p class="mt-3">
                    We are committed to providing quality healthcare services with experienced doctors,
                    modern facilities, and easy online appointment booking.
                </p>

                <img src="doclist/images/doc-imgs/img-01.png"
                     class="img-fluid mt-4"
                     alt="Doctor">

                <div class="mt-4">
                    <a href="doctors.php" class="dc-btn">
                        View Doctors
                    </a>

                    <a href="appointment.php" class="dc-btn dc-btnactive">
                        Book Appointment
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
include("master-template/footer.php");
?>
