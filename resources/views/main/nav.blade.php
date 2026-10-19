<div class="d-flex align-items-start mt-2">
    <div class="nav flex-column nav-pills me-3" 
    id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a href='/' class="nav-link {{ ($menu ?? '') == 'login' ? 'active' : '' }}" 
        id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" 
        type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>

        <a href='/courses' class="nav-link {{ ($menu ?? '') == 'courses' ? 'active' : '' }}" 
        id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" 
        type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Courses</a>
    
        <a href='/students' class="nav-link {{ ($menu ?? '') == 'courses' ? 'active' : '' }}" 
        id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" 
        type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Students</a>
    
        <a href='/grades' class="nav-link {{ ($menu ?? '') == 'courses' ? 'active' : '' }}" 
        id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" 
        type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Grades</a>
    
        <a href='/assignments' class="nav-link {{ ($menu ?? '') == 'courses' ? 'active' : '' }}" 
        id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" 
        type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Assignments</a>
    
    </div>
</div>