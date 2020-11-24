<?php $__env->startSection('content'); ?>



<div class="conatiner">
    <div style="margin-bottom: 60px" class="text-center">
        <h1 for=""> The List Of All Users </h1>
        <div class="d-flex justify-content-end" style="display: inline-block">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th class="d-none d-xl-block d-lg-block d-md-block" scope="col">Email</th>
                <th scope="col">Nation Id</th>
                <th scope="col">Mobile</th>
                <th scope="col">Info</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mohamed</td>
                <td>aboahmed</td>
                <td class="d-none d-xl-block d-lg-block d-md-block">mh24409@gmail.com</td>
                <td>12345678912345</td>
                <td>01279783447</td>
                <td><button>more</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mohamed</td>
                <td>aboahmed</td>
                <td class="d-none d-xl-block d-lg-block d-md-block">mh24409@gmail.com</td>
                <td>12345678912345</td>
                <td>01279783447</td>
                <td><button>more</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mohamed</td>
                <td>aboahmed</td>
                <td class="d-none d-xl-block d-lg-block d-md-block">mh24409@gmail.com</td>
                <td>12345678912345</td>
                <td>01279783447</td>
                <td><button>more</button></td>
            </tr>

        </tbody>
    </table>

    <div class="d-flex justify-content-center" style="margin-top: 30px;">

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>







</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/dashboard/allusers.blade.php ENDPATH**/ ?>