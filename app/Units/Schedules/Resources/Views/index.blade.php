@extends('core::index')

@section('content')
    <div class="container">
        <div class="row" style="padding: 50px 0;">
            <div class="col-md-12">
                <h5>Agenda</h5>
            </div>
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Nome completo</label>
                                <input type="text" id="name" placeholder="Digite o seu nome completo" name="name" class="form-control">
                                <small id="emailHelp" class="form-text text-muted">
                                    <p>Digite o seu nome completo</p>
                                </small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" placeholder="Digite o seu e-mail" name="email" class="form-control">
                                <small id="emailHelp" class="form-text text-muted">
                                    <p>Digite o seu nome completo</p>
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="number">Número de contato</label>
                                <input type="text" id="number" placeholder="Digite um número para contato" name="number" class="form-control">
                                <small id="number" class="form-text text-muted">
                                    <p>Digite o seu número para contato</p>
                                </small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="emergency">Número de contato para emergência</label>
                                <input type="text" id="emergency" placeholder="Digite o número" name="emergency" class="form-control">
                                <small id="emergency" class="form-text text-muted">
                                    <p>Digite o número para emergência</p>
                                </small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="name_emergency">Nome do contato de emergência</label>
                                <input type="text" id="name_emergency" placeholder="Digite o nome do contato de emergência" name="name_emergency" class="form-control">
                                <small id="name_emergency" class="form-text text-muted">
                                    <p>Digite o nome do contato para emergência</p>
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="rg">Documento de identificação RG</label>
                                <input type="text" id="rg" placeholder="Digite o seu RG" name="rg" class="form-control">
                                <small id="rg" class="form-text text-muted">
                                    <p>Digite o seu número de RG</p>
                                </small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
