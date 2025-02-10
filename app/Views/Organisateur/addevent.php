<?php include __DIR__ . "/../parties/_headerOrganisateur.php" ?>

<h6 class="mb-0 text-uppercase">Input Mask</h6>
<hr />
<div class="card">
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Date time:</label>
                <input type="datetime-local" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control" value="........">
            </div>
            <div class="mb-3">
                <label class="form-label">Input File:</label>
                <input type="file" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Month:</label>
                <input type="month" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Search:</label>
                <input type="search" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tel:</label>
                <input type="tel" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Time:</label>
                <input type="time" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Url:</label>
                <input type="url" class="form-control" placeholder="https://example.com/users/">
            </div>
            <div class="mb-3">
                <label class="form-label">Week:</label>
                <input type="week" class="form-control">
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . "/../parties/_sideBarOrganisateur.php" ?>