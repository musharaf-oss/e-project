<?php include("navbar.php") ?>

<!-- Activity Dashboard Start -->
 
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4 shadow-sm">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs mb-4" id="activityTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="requests-tab" data-bs-toggle="tab" href="#requests" role="tab">
                    <i class="fa fa-envelope me-2"></i>Requests (3)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="due-tab" data-bs-toggle="tab" href="#due" role="tab">
                    <i class="fa fa-calendar-check me-2"></i>Due Appointments (2)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="history-tab" data-bs-toggle="tab" href="#history" role="tab">
                    <i class="fa fa-history me-2"></i>History
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="activityTabsContent">
            <!-- REQUESTS TAB -->
            <div class="tab-pane fade show active" id="requests" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Request Date</th>
                                <th>Preferred Date</th>
                                <th>Case Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/user.jpg" class="rounded-circle me-2" width="40" height="40">
                                        <span>Emma Wilson</span>
                                    </div>
                                </td>
                                <td>2023-10-05</td>
                                <td>2023-10-20</td>
                                <td><span class="badge bg-info">Divorce</span></td>
                                <td>
                                    <button class="btn btn-sm btn-success me-1"><i class="fa fa-check"></i> Accept</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Reject</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/user.jpg" class="rounded-circle me-2" width="40" height="40">
                                        <span>James Rodriguez</span>
                                    </div>
                                </td>
                                <td>2023-10-06</td>
                                <td>2023-10-18</td>
                                <td><span class="badge bg-warning">Contract</span></td>
                                <td>
                                    <button class="btn btn-sm btn-success me-1"><i class="fa fa-check"></i> Accept</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Reject</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- DUE APPOINTMENTS TAB -->
            <div class="tab-pane fade" id="due" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Appointment Date</th>
                                <th>Time</th>
                                <th>Case Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/user.jpg" class="rounded-circle me-2" width="40" height="40">
                                        <span>Sarah Johnson</span>
                                    </div>
                                </td>
                                <td>2023-10-15</td>
                                <td>10:30 AM</td>
                                <td><span class="badge bg-primary">Criminal</span></td>
                                <td><span class="badge bg-warning">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/user.jpg" class="rounded-circle me-2" width="40" height="40">
                                        <span>Michael Brown</span>
                                    </div>
                                </td>
                                <td>2023-10-17</td>
                                <td>2:00 PM</td>
                                <td><span class="badge bg-success">Family</span></td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HISTORY TAB -->
            <div class="tab-pane fade" id="history" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Requested Date</th>
                                <th>Decision Date</th>
                                <th>Status</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/user.jpg" class="rounded-circle me-2" width="40" height="40">
                                        <span>David Kim</span>
                                    </div>
                                </td>
                                <td>2023-09-28</td>
                                <td>2023-09-30</td>
                                <td><span class="badge bg-success">Accepted</span></td>
                                <td>Case: Property Dispute</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/user.jpg" class="rounded-circle me-2" width="40" height="40">
                                        <span>Lisa Ray</span>
                                    </div>
                                </td>
                                <td>2023-10-01</td>
                                <td>2023-10-02</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                                <td>Conflict of interest</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Activity Dashboard End -->

<?php include("footer.php") ?>