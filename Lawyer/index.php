<?php include("navbar.php") ?>          

<!-- Lawyer Profile Section Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-md-4 col-lg-3">
            <div class="bg-light rounded p-4 mb-4 shadow-sm">
                <div class="text-center mb-4">
                    <img id="profile-preview" src="img/user.jpg" class="rounded-circle mb-2" alt="Profile" style="width: 150px; height: 150px; object-fit: cover;">
                    <h4 id="summary-name">John Doe</h4>
                    <span class="badge bg-primary" id="summary-specialization">Criminal Law</span>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span><i class="fa fa-envelope me-2"></i> Email</span>
                    <span id="summary-email" class="text-muted">john@example.com</span>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span><i class="fa fa-phone me-2"></i> Phone</span>
                    <span id="summary-phone" class="text-muted">+1 234 5678</span>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span><i class="fa fa-certificate me-2"></i> Experience</span>
                    <span id="summary-exp" class="text-muted">12 years</span>
                </div>
            </div>
            
            <!-- Quick Stats -->
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Quick Stats</h5>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <p class="mb-1">Cases Won</p>
                        <h6 class="mb-0">85%</h6>
                    </div>
                    <div class="bg-primary rounded p-2">
                        <i class="fa fa-trophy fa-2x text-white"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <p class="mb-1">Active Cases</p>
                        <h6 class="mb-0">12</h6>
                    </div>
                    <div class="bg-success rounded p-2">
                        <i class="fa fa-gavel fa-2x text-white"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-1">Client Rating</p>
                        <h6 class="mb-0">4.9/5.0</h6>
                    </div>
                    <div class="bg-warning rounded p-2">
                        <i class="fa fa-star fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Profile Form -->
        <div class="col-md-8 col-lg-9">
            <div class="bg-light rounded p-4 shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="mb-0">Lawyer Profile</h4>
                    <button id="edit-btn" class="btn btn-primary">
                        <i class="fa fa-edit me-2"></i>Edit Profile
                    </button>
                </div>
                
                <form id="profile-form">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full-name" value="John Doe" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="john@example.com" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" value="42" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Gender</label>
                            <select class="form-select" id="gender" readonly>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" value="+1 234 5678" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="2" readonly>123 Law Street, Suite 400, Boston, MA 02108</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Specialization</label>
                            <select class="form-select" id="specialization" readonly>
                                <option>Criminal Law</option>
                                <option>Family Law</option>
                                <option>Corporate Law</option>
                                <option>Intellectual Property</option>
                                <option>Real Estate Law</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Experience (years)</label>
                            <input type="number" class="form-control" id="experience" value="12" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Certification</label>
                            <input type="text" class="form-control" id="certification" value="Juris Doctor" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Institution</label>
                            <input type="text" class="form-control" id="institution" value="Harvard Law School" readonly>
                        </div>
                        

                        <div class="col-12">
                            <label class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" id="profile-pic" accept="image/*" disabled>
                        </div>
                        

                        <div class="col-12">
                            <label class="form-label">Certification Document (PDF)</label>
                            <input type="file" class="form-control" id="certification-doc" accept=".pdf" disabled>
                        </div>
                    </div>
                    
                    <div class="mt-4 d-none" id="save-section">
                        <button type="button" id="save-btn" class="btn btn-success me-2">
                            <i class="fa fa-save me-2"></i>Save Changes
                        </button>
                        <button type="button" id="cancel-btn" class="btn btn-secondary">
                            <i class="fa fa-times me-2"></i>Cancel
                        </button>
                    </div>
                </form>
            </div>
            

            <div class="bg-light rounded p-4 mt-4 shadow-sm">
                <h5 class="mb-4">Recent Cases</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Case ID</th>
                                <th>Client</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#C-2023-045</td>
                                <td>Smith & Co.</td>
                                <td>Corporate</td>
                                <td><span class="badge bg-success">Won</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                            <tr>
                                <td>#C-2023-044</td>
                                <td>Jane Miller</td>
                                <td>Family</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lawyer Profile Section End -->

<script>
// Toggle Edit Mode
document.getElementById('edit-btn').addEventListener('click', function() {
    const formControls = document.querySelectorAll('input, select, textarea');
    const saveSection = document.getElementById('save-section');
    
    formControls.forEach(control => {
        if (control.id !== 'profile-pic' && control.id !== 'certification-doc') {
            control.toggleAttribute('readonly');
        } else {
            control.disabled = !control.disabled;
        }
    });
    
    saveSection.classList.toggle('d-none');
    this.innerHTML = this.innerHTML.includes('Cancel Edit') 
        ? '<i class="fa fa-edit me-2"></i>Edit Profile' 
        : '<i class="fa fa-times me-2"></i>Cancel Edit';
});

// Image Preview Functionality
document.getElementById('profile-pic').addEventListener('change', function(e) {
    if (e.target.files.length > 0) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('profile-preview').src = event.target.result;
        };
        reader.readAsDataURL(e.target.files[0]);
    }
});

// Save button (front-end only for now)
document.getElementById('save-btn').addEventListener('click', function() {
    alert('Profile updated successfully! (This would submit to server in a real application)');
    // Here you would typically submit the form via AJAX
});
</script>

<?php include("footer.php") ?>