<?php $this->load->view('layout/navbar'); ?>
<div class="page-wrap">

    <?php $this->load->view('layout/sidebar'); ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="<?= $icone_view; ?> bg-blue"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?php if ($error = $this->session->flashdata('error')) : ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
                            <strong><?= $error; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!--<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" enctype="multipart/form-data" value="">
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label>Tipo de Animal</label>
                                        <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<//?= set_value('tipo_animal'); ?>" style="text-transform: uppercase;">
                                        <//?= form_error('tipo_animal', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Nome do Animal</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<//?= set_value('nome'); ?>" style="text-transform: uppercase;">
                                        <//?= form_error('nome', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Raça</label>
                                        <input type="text" class="form-control" id="raca" name="raca" value=" <//?= set_value('raca'); ?>" style="text-transform: uppercase;">
                                        <//?= form_error('raca', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Cor</label>
                                        <input type="text" class="form-control" id="cor" name="cor" value=" <//?= set_value('cor'); ?>" style="text-transform: uppercase;">
                                        <//?= form_error('cor', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_cadastro">Data de Cadastro</label>
                                            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<//?= set_value('porte'); ?>">
                                            <//?= form_error('data_cadastro', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label> <br>
                                            <select name="sexo" id="sexo">
                                                <option value="Macho">Macho</option>
                                                <option value="Fêmea">Fêmea</option>
                                            </select>
                                            <//?= form_error('sexo', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="castrado">Castrado</label> <br>
                                            <select name="castrado" id="castrado">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                                <//?= form_error('castrado', '<div class="text-danger">', '</div>'); ?>
                                            </select>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="porte">Porte</label> <br>
                                            <select name="porte" id="porte">
                                                <option value="Pequeno">Pequeno</option>
                                                <option value="Médio">Médio</option>
                                                <option value="Grande">Grande</option>
                                                <//?= form_error('porte', '<div class="text-danger">', '</div>'); ?>
                                            </select>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="observacao">Observação</label>
                                            <input type="observacao" class="form-control" id="observacao" name="observacao" value=" <//?= set_value('observacao'); ?>">
                                            <//?= form_error('observacao', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="foto">Foto do Animal</label>
                                            <input type="file" class="form-control" id="foto" name="foto" value=" <//?= set_value('foto'); ?>">
                                            <//?= form_error('foto', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 ml-20">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            <a href="<//?= base_url($this->router->fetch_class()); ?>" class="btn btn-info ml-20">Voltar</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-block">
                            <a data-toggle="tooltip" data-placement="right" title="Cadastrar <?= $this->router->fetch_class(); ?>" class="btn bg-blue float-right text-white" href="<?= base_url($this->router->fetch_class() . '/cadastrar/'); ?>">+ Novo</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table data-table table-sm pl-20 pr-20">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Foto</th>
                                            <th scope="col" class="text-center">Nome</th>
                                            <th scope="col" class="text-center">Sexo</th>
                                            <th scope="col" class="text-center">Raça</th>
                                            <th scope="col" class="text-center">Porte</th>
                                            <th scope="col" class="text-center">Castrado</th>
                                            <th scope="col" class="text-center">Data de Cadastro</th>
                                            <th scope="col" class="nosort text-right pr-25">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($animais)) : ?>
                                            <?php foreach ($animais as $animal) : ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <img width="50" height="50" class="rounded-circle" src="<?= base_url($animal->foto) ?>" alt="Foto do animal <?= isset($animal->nome) ? $animal->nome : 'desconhecido'; ?>">
                                                    </td>
                                                    <td class="text-center"><?= mb_strtoupper($animal->nome); ?></td>
                                                    <td class="text-center"><?= $animal->sexo; ?></td>
                                                    <td class="text-center"><?= $animal->raca; ?></td>
                                                    <td class="text-center"><?= $animal->porte; ?></td>
                                                    <td class="text-center">
                                                        <?= $animal->castrado == '0' ? "Não" : "Sim"; ?>
                                                    </td>
                                                    <td class="text-center"><?= formata_data_banco_sem_hora($animal->data_cadastro); ?></td>
                                                    <td class="nosort text-right pr-100">
                                                        <div class="table-actions">
                                                            <a data-toggle="tooltip" data-placement="bottom" title="Visualizar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/visualizar/' . $animal->id_animal; ?>" class="btn btn-icon btn-primary" aria-label="Visualizar <?= $animal->nome; ?>">
                                                                <i class="ik ik-eye text-info" aria-hidden="true"></i>
                                                            </a>
                                                            <a data-toggle="tooltip" data-placement="bottom" title="Editar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/alterar/' . $animal->id_animal; ?>" class="btn btn-icon btn-primary" aria-label="Editar <?= $animal->nome; ?>">
                                                                <i class="ik ik-edit-2" aria-hidden="true"></i>
                                                            </a>
                                                            <button type="button" data-toggle="modal" data-target="#categoria-<?= $animal->id_animal; ?>" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" class="btn btn-icon btn-danger" aria-label="Excluir <?= $animal->nome; ?>">
                                                                <i class="ik ik-trash-2" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="categoria-<?= $animal->id_animal; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterLabel">
                                                                    <i class="fas fa-exclamation-triangle text-danger" aria-hidden="true"></i>&nbsp;Tem certeza que quer excluir?
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Para apagar o registro, clique em <strong>Sim, excluir</strong></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button data-toggle="tooltip" data-placement="bottom" title="Cancelar Exclusão" type="button" class="btn btn-secondary" data-dismiss="modal">Não, voltar</button>
                                                                <a data-toggle="tooltip" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/del/' . $animal->id_animal; ?>" class="btn btn-danger">Sim, excluir</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>