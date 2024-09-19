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
                            <form name="form_core" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label>CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf'); ?>" placeholder="111.111.111-01">
                                        <?= form_error('cpf', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome'); ?>" style="text-transform: uppercase;">
                                        <?= form_error('nome', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= set_value('data_nascimento'); ?>">
                                        <?= form_error('data_nascimento', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label>
                                            <select name="sexo" id="sexo">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Prefiro não Dizer</option>
                                            </select>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="voluntario">É Voluntário</label> <br>
                                        <select name="voluntario" id="voluntario">
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                        <small></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 ">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" placeholder="(99)99999-9999">
                                            <?= form_error('celular', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="uf">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label for="cep">CEP</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="00000-000" id="cep" name="cep" maxlength="9" onblur="pesquisacep(this.value)">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                            </div>
                                            <?= form_error('cep', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logradouro">Logradouro</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                                            <?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="numero">N°</label>
                                            <input type="text" class="form-control" id="numero" name="numero">
                                            <?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento">
                                        </div>
                                    </div>
                                    <div class="col-md-3 ml-20">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                            <?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="localidade">Cidade</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade">
                                            <?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="uf">UF</label>
                                            <input type="text" class="form-control" id="uf" name="uf">
                                            <?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_cadastro">Data de Cadastro</label>
                                            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro">
                                            <?= form_error('data_cadastro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto" value=" <?= set_value('foto'); ?>" required>
                                            <?= form_error('foto', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 ml-20">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-info ml-20">Voltar</a>
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
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf'); ?>" placeholder="111.111.111-01" aria-describedby="cpfHelp">
                                        <?= form_error('cpf', '<div class="text-danger" id="cpfHelp">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome'); ?>" style="text-transform: uppercase;" aria-describedby="nomeHelp">
                                        <?= form_error('nome', '<div class="text-danger" id="nomeHelp">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= set_value('data_nascimento'); ?>" aria-describedby="dataNascimentoHelp">
                                        <?= form_error('data_nascimento', '<div class="text-danger" id="dataNascimentoHelp">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label>
                                            <select name="sexo" id="sexo" class="form-control" aria-describedby="sexoHelp">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Prefiro não Dizer</option>
                                            </select>
                                            <small id="sexoHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="voluntario">É Voluntário</label> <br>
                                        <select name="voluntario" id="voluntario" class="form-control" aria-describedby="voluntarioHelp">
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                        <small id="voluntarioHelp" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" placeholder="(99)99999-9999" aria-describedby="celularHelp">
                                            <?= form_error('celular', '<div class="text-danger" id="celularHelp">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                            <?= form_error('email', '<div class="text-danger" id="emailHelp">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label for="cep">CEP</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="00000-000" id="cep" name="cep" maxlength="9" onblur="pesquisacep(this.value)" aria-describedby="cepHelp">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                            </div>
                                            <?= form_error('cep', '<div class="text-danger" id="cepHelp">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logradouro">Logradouro</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro" aria-describedby="logradouroHelp">
                                            <?= form_error('logradouro', '<div class="text-danger" id="logradouroHelp">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="numero">N°</label>
                                            <input type="text" class="form-control" id="numero" name="numero" aria-describedby="numeroHelp">
                                            <?= form_error('numero', '<div class="text-danger" id="numeroHelp">', '</div>'); ?>
                                            <small id="numeroHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento" aria-describedby="complementoHelp">
                                            <small id="complementoHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ml-20">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" aria-describedby="bairroHelp">
                                            <?= form_error('bairro', '<div class="text-danger" id="bairroHelp">', '</div>'); ?>
                                            <small id="bairroHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="localidade">Cidade</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade" aria-describedby="localidadeHelp">
                                            <?= form_error('localidade', '<div class="text-danger" id="localidadeHelp">', '</div>'); ?>
                                            <small id="localidadeHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="uf">UF</label>
                                            <input type="text" class="form-control" id="uf" name="uf" aria-describedby="ufHelp">
                                            <?= form_error('uf', '<div class="text-danger" id="ufHelp">', '</div>'); ?>
                                            <small id="ufHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_cadastro">Data de Cadastro</label>
                                            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" aria-describedby="dataCadastroHelp">
                                            <?= form_error('data_cadastro', '<div class="text-danger" id="dataCadastroHelp">', '</div>'); ?>
                                            <small id="dataCadastroHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto" value=" <?= set_value('foto'); ?>" required aria-describedby="fotoHelp">
                                            <?= form_error('foto', '<div class="text-danger" id="fotoHelp">', '</div>'); ?>
                                            <small id="fotoHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 ml-20">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-info ml-20">Voltar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>