<?php
require_once('/Applications/MAMP/htdocs/ligobase/LB-design/header.php');


function randomNumb(){
$randnumb = rand(20,60);

echo "$randnumb";
}

$domainRatings = [34,53,30,24,50,54,24,44,41,56,22,35];

$urlRatings = [65,45,76,23,44,30,28,50,21,22,47,37];


?>


<div class="row justify-content-center mb-5">

    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
      <div class="form-group mb-0">
        <div class="input-group input-group-alternative input-group-merge">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
          </div>
          <input class="form-control" placeholder="Search for links" type="text">
        </div>
      </div>
      <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </form>

</div>



<div class="row justify-content-center">
  <div class="col-md-8 col-xl-12">
    <div class="card">

      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Page name</th>
              <th scope="col">Category</th>
              <th scope="col">Domain rating</th>
              <th scope="col">URL rating</th>
              <th scope="col">Monthly price</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/
              </th>
              <th scope="row">
                Sport
              </th>
              <td>
                <?php echo $domainRatings[0]; ?>
              </td>
              <td>
                <?php echo $urlRatings[0]; ?>
              </td>
              <td>
                <strong><?php echo $urlRatings[0]*10; ?> DKK</strong>

              </td>
              <td>
                <a href="#!" class="btn btn-sm btn-success">Lease now</a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverOne
              </th>
              <th scope="row">
                Health
              </th>
              <td>
                <?php echo $domainRatings[1]; ?>
              </td>
              <td>
                <?php echo $urlRatings[1]; ?>
              </td>
              <td>
                <strong><?php echo $urlRatings[1]*10; ?> DKK</span>
              </td>
              <td>
                <a href="#!" class="btn btn-sm btn-success">Lease now</a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverTwo
              </th>
              <th scope="row">
                Personal blog
              </th>
              <td>
                <?php echo $domainRatings[2]; ?>
              </td>
              <td>
                <?php echo $urlRatings[2]; ?>
              </td>
              <td>
                <strong><?php echo $urlRatings[2]*10; ?> DKK</span>
              </td>
              <td>
                <a href="#!" class="btn btn-sm btn-success">Lease now</a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverThree
              </th>
              <th scope="row">
                News magazine
              </th>
              <td>
                <?php echo $domainRatings[3]; ?>
              </td>
              <td>
                <?php echo $urlRatings[3]; ?>
              </td>
              <td>
                <strong><?php echo $urlRatings[3]*10; ?> DKK</span>
              </td>
              <td>
                <a href="#!" class="btn btn-sm btn-success">Lease now</a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverFour
              </th>
              <th scope="row">
                Tech
              </th>
              <td>
              <?php echo $domainRatings[4]; ?>
              </td>
              <td>
                <?php echo $urlRatings[4]; ?>
              </td>
              <td>
                <strong><?php echo ($urlRatings[4]*10)*0.8; ?> DKK</span>
              </td>
              <td>
                <a href="#!" class="btn btn-sm btn-success">Lease now</a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverFive
              </th>
              <th scope="row">
                Kids
              </th>
              <td>
                <?php echo $domainRatings[5]; ?>
              </td>
              <td>
                <?php echo $urlRatings[5]; ?>
              </td>
              <td>
                <strong><?php echo $urlRatings[5]*10; ?> DKK</span>
              </td>
              <td>
                <a href="#!" class="btn btn-sm btn-success">Lease now</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php
require_once('/Applications/MAMP/htdocs/ligobase/LB-design/footer.php');
?>
