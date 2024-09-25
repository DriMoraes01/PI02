<?php $this->load->view('layout/sidebar'); ?>

<?php $this->load->view('layout/navbar'); ?>


<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: MintCream;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color: maroon;">Animais</h6>
                                <h3 class="fw-700 text-center" style="color: maroon;"><?= $totAnimais; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-star" style="background-color: Maroon;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card" style="background-color: MintCream;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkOrange;">Voluntários</h6>
                                <h3 class="fw-700 text-center" style="color: DarkOrange;"><?= $totVoluntarios; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user" style="background-color: DarkOrange;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card" style="background-color: MintCream;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color: DodgerBlue;">Doações</h6>
                                <h3 class="fw-700 text-center" style="color: DodgerBlue;">R$<?php echo $totDoacoes->valor_doacoes; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign" style="background-color: DodgerBlue;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: MintCream;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:DarkGreen;">Adoções</h6>
                                <h3 class="fw-700 text-center" style="color: DarkGreen;"><?= $totAdocoes; ?></h3>
                            </div>
                            <div class=" col-auto">
                                <i class="fas fa-sun" style="background-color: DarkGreen;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: MintCream;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:FireBrick;">Resgates de Animais</h6>
                                <h3 class="fw-700 text-center" style="color: FireBrick;"><?= $totResgates; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-truck" style="background-color: FireBrick;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: MintCream;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Crimson;">Usuários</h6>
                                <h3 class="fw-700 text-center" style="color: Crimson;"><?= $totUsers; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users" style="background-color: Crimson;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>