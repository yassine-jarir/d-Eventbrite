<div class="card radius-10">
    <!-- <h6 class="mb-0 text-uppercase">Input Mask</h6> -->
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Listes des Evenementes</h5>
                </div>
                <div class="ms-auto dropdown">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <i class='bx-dots-horizontal-rounded font-22 text-option bx'></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="table-responsive">
                <table class="table mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Ev_id</th>
                            <th>Evenementes</th>
                            <th>location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $key => $value) { ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="assets/images/icons/chair.png" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14"><?= $value['title'] ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $value['location'] ?></td>
                                <td>
                                    <div class="d-flex align-items-center text-white"> <i
                                            class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
                                        <span><?= $value['status'] ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions"> <a href="javascript:;" class=""><i
                                                class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bxs-message-square-minus'></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>