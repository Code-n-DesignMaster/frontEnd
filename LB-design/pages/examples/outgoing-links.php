<?php
require_once('/Applications/MAMP/htdocs/LB-design/header.php');

function randomNumb(){
$randnumb = rand(20,60);

echo "$randnumb";
}

$domainRatings = [34,53,30,24,50,54,24,44,41,56,22,35];

$urlRatings = [65,45,76,23,44,30,28,50,21,22,47,37];

?>


<div class="container">

<div class="row justify-content-center">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Outgoing links for example.com</h3>
          </div>

        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Page name</th>
              <th scope="col">Link destination</th>
              <th scope="col">Domain rating</th>
              <th scope="col">URL rating</th>
              <th scope="col">Monthly income</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/
              </th>
              <th scope="row">
                bonzer.dk/
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
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverOne
              </th>
              <th scope="row">
                lorempixel.com/whater
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
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverTwo
              </th>
              <th scope="row">
                imgplaceholder.com
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
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverThree
              </th>
              <th scope="row">
                fillmurray.com/whatever
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
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverFour
              </th>
              <th scope="row">
                gemini.dk/whatever
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
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <span class="text-muted">example.com</span>/whateverFive
              </th>
              <th scope="row">
                holdet.dk/whatever
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
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>







<?php
require_once('/Applications/MAMP/htdocs/LB-design/footer.php');
?>
