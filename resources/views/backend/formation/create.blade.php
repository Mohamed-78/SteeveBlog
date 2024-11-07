@extends('layouts.backend.main', ['title' => 'DASHBOARD-NOUVEAU-FORMATION'])

@section('content')
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Nouvelle formation</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gestion des formations</a></li>
                                    <li class="breadcrumb-item active">Nouvelle formation</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Créer une nouvelle formation</h4>
                            </div>

                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Titre</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Titre de la formation" id="firstNameinput">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Type formation</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                        <option selected>Payante</option>
                                                        <option>Gratuite</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="compnayNameinput" class="form-label">Niveau de formation</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                        <option selected>Débutant</option>
                                                        <option>Intermediaire</option>
                                                        <option>Avancé</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Prix (Optionnel)</label>
                                                    <input type="text" class="form-control" placeholder="Prix">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Nom du formateur</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Profession du formateur</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Lien linkedin</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="address1ControlTextarea" class="form-label">Document</label>
                                                    <input type="file" class="form-control" id="address1ControlTextarea">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Durée (Optionnel)</label>
                                                    <input type="text" class="form-control" placeholder="Durée">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Lien formation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="citynameInput" class="form-label">Image principale</label>
                                                    <input type="file" multiple="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Description</label>
                                                    <textarea id="editor" name="texte"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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
        </div>
    </div>
@endsection
