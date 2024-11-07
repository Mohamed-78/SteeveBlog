@extends('layouts.backend.main', ['title' => 'DASHBOARD-MODERATION'])

@section('content')
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Commentaire sur les articles</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gestion des commentaires</a></li>
                                    <li class="breadcrumb-item active">Liste des commentaires</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div>
                            <div class="row">
                                <div class="col-xxl-6 col-sm-6 project-card">
                                    <div class="card card-height-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-column h-100">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-4">Publié il y a 2 minutes</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <div class="dropdown">
                                                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                                                    <span class="avatar-title fs-15">
                                                                        <i class="ri-check-line"></i>
                                                                    </span>
                                                                </button>
                                                                <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    <i data-feather="more-horizontal" class="icon-sm"></i>
                                                                </button>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="apps-projects-overview.html">
                                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        Approuver
                                                                    </a>
                                                                    <a class="dropdown-item" href="">
                                                                        <i class="ri-edit-fill align-bottom me-2 text-muted"></i>
                                                                        Repondre
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#removeProjectModal">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Supprimer
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fs-15">
                                                            <a href="apps-projects-overview.html" class="text-dark">
                                                                Les dernieres MAJ sur ChatGPT
                                                            </a>
                                                        </h5>
                                                        <p class="text-muted text-truncate-two-lines mb-3">
                                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, iusto optio! Odit facere incidunt
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-sm-6 project-card">
                                    <div class="card card-height-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-column h-100">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-4">Publié il y a 2 minutes</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <div class="dropdown">
                                                                <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    <i data-feather="more-horizontal" class="icon-sm"></i>
                                                                </button>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="apps-projects-overview.html">
                                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        Approuver
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#removeProjectModal">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Supprimer
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fs-15">
                                                            <a href="apps-projects-overview.html" class="text-dark">
                                                                Importance des outils de gestion
                                                            </a>
                                                        </h5>
                                                        <p class="text-muted text-truncate-two-lines mb-3">Create a Brand logo design for a velzon admin.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-sm-6 project-card">
                                    <div class="card card-height-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-column h-100">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-4">Publié il y a 2 minutes</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <div class="dropdown">
                                                                <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    <i data-feather="more-horizontal" class="icon-sm"></i>
                                                                </button>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="apps-projects-overview.html">
                                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        Approuver
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#removeProjectModal">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Supprimer
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fs-15">
                                                            <a href="apps-projects-overview.html" class="text-dark">
                                                                Les dernieres prouesse d'Elon Musk
                                                            </a>
                                                        </h5>
                                                        <p class="text-muted text-truncate-two-lines mb-3">Create a Brand logo design for a velzon admin.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="retour_modal"></div>
@endsection
@push('script.footer')
<script type="text/javascript">
    $(document).on("click", ".reponse_commentaire", function(e) {
        e.preventDefault();
        var a = $(this);
        $.ajax({
            method: 'get'
            , url: a.attr("href")
            , success: function(response) {
                console.log(response);
                $('.retour_modal').html(response);
                $('.affiche').modal('show');
            }
        })
    });
</script>
@endpush
