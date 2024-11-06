@extends('layouts.backend.main', ['title' => 'DASHBOARD-NOUVEAU-BLOG'])

@section('content')
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Nouveau blog</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gestion de blog</a></li>
                                    <li class="breadcrumb-item active">Nouveau blog</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Créer un nouveau article</h4>
                            </div>

                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Titre</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Titre de la publication" id="firstNameinput">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Choisir la catégorie</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="compnayNameinput" class="form-label">Date de publication (Optionnel)</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Etat de publication</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                        <option selected>Publier</option>
                                                        <option>Brouillon</option>
                                                        <option>En attente</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Auteur de la publication</label>
                                                    <input type="text" class="form-control" id="emailidInput">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="address1ControlTextarea" class="form-label">Image principale</label>
                                                    <input type="file" class="form-control" id="address1ControlTextarea">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="citynameInput" class="form-label">Image secondaire (Optionnel)</label>
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
