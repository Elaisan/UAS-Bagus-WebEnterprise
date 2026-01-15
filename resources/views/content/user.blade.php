@extends('content.app')
@section('title', 'User')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection
@section('content')
    <div class="row g-4 mb-5">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card">
                <h3>Total Users</h3>
                <div class="stat-content">
                    <span class="material-icons-outlined stat-icon">perm_identity</span>
                    <span class="stat-number">4500</span>
                </div>
                <div class="stat-glow glow-primary"></div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card">
                <h3>Active Users</h3>
                <div class="stat-content">
                    <span class="material-icons-outlined stat-icon">person</span>
                    <span class="stat-number">3500</span>
                </div>
                <div class="stat-glow glow-green"></div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card">
                <h3>New Users</h3>
                <div class="stat-content">
                    <span class="material-icons-outlined stat-icon">person_add</span>
                    <span class="stat-number">500</span>
                </div>
                <div class="stat-glow glow-blue"></div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card">
                <h3>Inactive Users</h3>
                <div class="stat-content">
                    <span class="material-icons-outlined stat-icon">person_off</span>
                    <span class="stat-number">500</span>
                </div>
                <div class="stat-glow glow-red"></div>
            </div>
        </div>
    </div>

    <!-- Table Card -->
    <div class="table-card">
        <div class="table-header">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="position-relative">
                        <span class="material-icons-outlined search-icon">search</span>
                        <input type="text" class="form-control table-search" placeholder="Search by name, email, or ID">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="d-flex gap-2 justify-content-md-end">
                        <button class="btn-filter">
                            <span class="material-icons-outlined" style="font-size: 18px;">filter_list</span>
                            Sort by
                        </button>
                        <button class="btn-filter">
                            <span class="material-icons-outlined" style="font-size: 18px;">refresh</span>
                            Refresh
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table custom-table mb-0">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Contact</th>
                        <th>Sleep Status</th>
                        <th>Status</th>
                        <th>Last Active</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="user-avatar-table">
                                    <span class="material-icons-outlined" style="font-size: 32px;">account_circle</span>
                                </div>
                                <div>
                                    <div class="fw-medium">Alfonso de</div>
                                    <div class="small text-secondary">ID #418230</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column gap-1 small">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="material-icons-outlined" style="font-size: 14px;">email</span>
                                    Alfonso.de@gmail.com
                                </div>
                                <div class="d-flex align-items-center gap-2 text-secondary" style="font-size: 0.75rem;">
                                    <span class="material-icons-outlined" style="font-size: 14px;">phone</span>
                                    +62123456789
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="small">
                                <div>Avg. Sleep: <span class="fw-semibold">7.2h</span></div>
                                <div class="text-secondary" style="font-size: 0.75rem;">Quality: 85%</div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-active">Active</span>
                        </td>
                        <td class="small text-secondary">
                            <div>2024-02-01</div>
                            <div style="font-size: 0.75rem; margin-top: 0.125rem;">14:30</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="user-avatar-table">
                                    <span class="material-icons-outlined" style="font-size: 32px;">account_circle</span>
                                </div>
                                <div>
                                    <div class="fw-medium">Alfonso de</div>
                                    <div class="small text-secondary">ID #418230</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column gap-1 small">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="material-icons-outlined" style="font-size: 14px;">email</span>
                                    Alfonso.de@gmail.com
                                </div>
                                <div class="d-flex align-items-center gap-2 text-secondary" style="font-size: 0.75rem;">
                                    <span class="material-icons-outlined" style="font-size: 14px;">phone</span>
                                    +62123456789
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="small">
                                <div>Avg. Sleep: <span class="fw-semibold">1.2h</span></div>
                                <div class="text-secondary" style="font-size: 0.75rem;">Quality: 20%</div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-inactive">Not Active</span>
                        </td>
                        <td class="small text-secondary">
                            <div>2024-02-01</div>
                            <div style="font-size: 0.75rem; margin-top: 0.125rem;">14:30</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="empty-state">
                            No more users to display
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-footer d-flex justify-content-between align-items-center small text-secondary">
            <span>Showing 1-2 of 4500</span>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-outline-secondary" disabled>Prev</button>
                <button class="btn btn-sm btn-outline-secondary">Next</button>
            </div>
        </div>
    </div>
@endsection