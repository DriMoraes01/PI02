<?php $this->load->view('layout/sidebar'); ?>

<?php $this->load->view('layout/navbar'); ?>


<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkBlue;">Animais</h6>
                                <h3 class="fw-700 text-center" style="color: DarkBlue;"><?= $totAnimais; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-star" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkBlue;">Voluntários</h6>
                                <h3 class="fw-700 text-center" style="color: DarkBlue;"><?= $totVoluntarios; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color: DarkBlue;">Doações</h6>
                                <h3 class="fw-700 text-center" style="color: DarkBlue;">R$<?php echo $totDoacoes->valor_doacoes; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkBlue;">Adoções</h6>
                                <h3 class="fw-700 text-center" style="color: DarkBlue;"><?= $totAdocoes; ?></h3>
                            </div>
                            <div class=" col-auto">
                                <i class="fas fa-sun" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkBlue;">Resgates de Animais</h6>
                                <h3 class="fw-700 text-center" style="color: DarkBlue;"><?= $totResgates; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-truck" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkBlue;">Usuários</h6>
                                <h3 class="fw-700 text-center" style="color: DarkBlue;"><?= $totUsers; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>