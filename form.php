<?php include "common/header.php"?>
<!-- start breadcrumbs block -->
<div class="tms-breadcrumbs">
    <div class="container-fluid tms-container">
        <h2>PROFISSIONAIS DA SAÚDE</h2>
    </div>
</div>
<!-- end breadcrumbs block -->

<!-- start page image block -->
<div class="tms-page-img">
    <img src="images/form.png" class="w-100">
</div>
<!-- end page image block -->

<section class="tms-attendance">
        <div class="container-fluid tms-container">
            <h3>Entre em contato com a TMs</h3>
            <div class="row justify-content-between">
                <div class="col-lg-auto col-md-6 col-12">
                    <h3 class="text-blue">Formulário para Contato</h3>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <img src="images/mail.png" class="form-icon">
                            <input type="email" class="form-control" id="E-mail" placeholder="E-mail">
                        </div>
                        <div class="mb-3">
                            <img src="images/user.png" class="form-icon">
                            <input type="text" class="form-control" id="Nome" placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <img src="images/phone.png" class="form-icon">
                            <input type="tel" class="form-control" id="Celular" placeholder="Celular">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="pt-3 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Ao aceitar e clicar em enviar, você concorda que leu e aceita os <a href="terms.php">Termos de Uso</a> e a <a href="privacy.php">Política de Privacidade</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg col-md-6 col-12">
                    <h3 class="text-blue">Atendimento</h3>
                    <div class="locations">
                        <p>
                            Atendimento de segunda a sexta-feira, das 08h às 18h
                        </p>
                        <div class="d-flex">
                            <img src="images/loc2.png">
                            <div>
                                <p>
                                    <strong>Lauro de Freitas - BA</strong> Rua Itagi - 590 - Milmares Center +55 (71) 3599-0806Atendimento: Sáb das 08h às 12h00
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img src="images/loc2.png">
                            <div>
                                <p>
                                    <strong>Anápolis - GO</strong> Av. Prof. Benvindo Machado, 919 casa 2. Jardim Santana +55 (62) 3333-0830
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img src="images/loc2.png">
                            <div>
                                <p>
                                    <strong>Parauapebas - PA</strong> Rua Jurunas, s/n - Parque dos Carajas - Cidade Jardim +55 (94) 8422-3852
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "common/features.php"?>
<?php include "common/footer.php"?>