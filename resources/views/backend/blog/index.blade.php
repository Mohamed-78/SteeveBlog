@extends('layouts.backend.main', ['title' => 'DASHBOARD-LISTE BLOG'])

@section('content')
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Liste des articles</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gestion du blog</a></li>
                                    <li class="breadcrumb-item active">Liste des articles</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div>
                            <div class="card">

                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                        Tous <span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab">
                                                        Brouillon <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab">
                                                        En attente
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                            <div id="selection-element">
                                                <div class="my-n1 d-flex align-items-center text-muted">
                                                    Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card" id="customerList">
                                                        <div class="card-header border-bottom-dashed">

                                                            <div class="row g-4 align-items-center">
                                                                <div class="col-sm">
                                                                    <div>
                                                                        <h5 class="card-title mb-0">Tous les articles</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-auto">
                                                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                                                        <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()">
                                                                            <i class="ri-delete-bin-2-line"></i>
                                                                        </button>
                                                                        <a href="{{route('blog.create')}}" class="btn btn-success add-btn">
                                                                            <i class="ri-add-line align-bottom me-1"></i>
                                                                            Nouveau blog
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div>
                                                                <div class="table-responsive table-card mb-1">
                                                                    <table class="table align-middle" id="customerTable">
                                                                        <thead class="table-light text-muted">
                                                                            <tr>
                                                                                <th scope="col" style="width: 50px;">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                                    </div>
                                                                                </th>

                                                                                <th class="sort" data-sort="customer_name">Customer</th>
                                                                                <th class="sort" data-sort="email">Email</th>
                                                                                <th class="sort" data-sort="phone">Phone</th>
                                                                                <th class="sort" data-sort="date">Joining Date</th>
                                                                                <th class="sort" data-sort="status">Status</th>
                                                                                <th class="sort" data-sort="action">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="list form-check-all">
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                                    </div>
                                                                                </th>
                                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                                <td class="customer_name">Mary Cousar</td>
                                                                                <td class="email">marycousar@velzon.com</td>
                                                                                <td class="phone">580-464-4694</td>
                                                                                <td class="date">06 Apr, 2021</td>
                                                                                <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span>
                                                                                </td>
                                                                                <td>
                                                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                                            <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                                <i class="ri-pencil-fill fs-16"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                            <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="noresult" style="display: none">
                                                                        <div class="text-center">
                                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                            <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="pagination-wrap hstack gap-2">
                                                                        <a class="page-item pagination-prev disabled" href="#">
                                                                            Previous
                                                                        </a>
                                                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                                                        <a class="page-item pagination-next" href="#">
                                                                            Next
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="mt-2 text-center">
                                                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                    <h4>Are you sure ?</h4>
                                                                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end modal -->
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card" id="customerList">
                                                        <div class="card-header border-bottom-dashed">

                                                            <div class="row g-4 align-items-center">
                                                                <div class="col-sm">
                                                                    <div>
                                                                        <h5 class="card-title mb-0">Brouillon</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-auto">
                                                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                                                        <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()">
                                                                            <i class="ri-delete-bin-2-line"></i>
                                                                        </button>
                                                                        <a href="{{route('blog.create')}}" class="btn btn-success add-btn">
                                                                            <i class="ri-add-line align-bottom me-1"></i>
                                                                            Nouveau blog
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div>
                                                                <div class="table-responsive table-card mb-1">
                                                                    <table class="table align-middle" id="customerTable">
                                                                        <thead class="table-light text-muted">
                                                                            <tr>
                                                                                <th scope="col" style="width: 50px;">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                                    </div>
                                                                                </th>

                                                                                <th class="sort" data-sort="customer_name">Customer</th>
                                                                                <th class="sort" data-sort="email">Email</th>
                                                                                <th class="sort" data-sort="phone">Phone</th>
                                                                                <th class="sort" data-sort="date">Joining Date</th>
                                                                                <th class="sort" data-sort="status">Status</th>
                                                                                <th class="sort" data-sort="action">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="list form-check-all">
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                                    </div>
                                                                                </th>
                                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                                <td class="customer_name">Mary Cousar</td>
                                                                                <td class="email">marycousar@velzon.com</td>
                                                                                <td class="phone">580-464-4694</td>
                                                                                <td class="date">06 Apr, 2021</td>
                                                                                <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span>
                                                                                </td>
                                                                                <td>
                                                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                                            <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                                <i class="ri-pencil-fill fs-16"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                            <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="noresult" style="display: none">
                                                                        <div class="text-center">
                                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                            <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="pagination-wrap hstack gap-2">
                                                                        <a class="page-item pagination-prev disabled" href="#">
                                                                            Previous
                                                                        </a>
                                                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                                                        <a class="page-item pagination-next" href="#">
                                                                            Next
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                            <div class="py-4 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                                </lord-icon>
                                                <h5 class="mt-4">Oups! Aucun resultat</h5>
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
@endsection
