<?php
require_once('/Applications/MAMP/htdocs/ligobase/LB-design/header.php');

function randomNumb(){
$randnumb = rand(20,60);

echo "$randnumb";
}

$domainRatings = [34,53,30,24,50,54,24,44,41,56,22,35];

$urlRatings = [65,45,76,23,44,30,28,50,21,22,47,37];

?>


<div class="container">


<div class="row justify-content-center">
  <div class="col-xl-10">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">My links</h3>
          </div>

        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Page name</th>
              <th scope="col">Domain rating</th>
              <th scope="col">URL rating</th>
              <th scope="col">Monthly price</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                https://ekstrabladet.dk/whatever
              </th>
              <td>
                <?php echo $domainRatings[0]; ?>
              </td>
              <td>
                <?php echo $urlRatings[0]; ?>
              </td>
              <td>
                <?php echo $urlRatings[0]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://holdet.dk/whatever
              </th>
              <td>
                <?php echo $domainRatings[1]; ?>
              </td>
              <td>
                <?php echo $urlRatings[1]; ?>
              </td>
              <td>
                <?php echo $urlRatings[1]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://bonzer.dk/seo
              </th>
              <td>
                <?php echo $domainRatings[2]; ?>
              </td>
              <td>
                <?php echo $urlRatings[2]; ?>
              </td>
              <td>
                <?php echo $urlRatings[2]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://lorempixel.com/whater
              </th>
              <td>
                <?php echo $domainRatings[3]; ?>
              </td>
              <td>
                <?php echo $urlRatings[3]; ?>
              </td>
              <td>
                <?php echo $urlRatings[3]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://imgplaceholder.com
              </th>
              <td>
              <?php echo $domainRatings[4]; ?>
              </td>
              <td>
                <?php echo $urlRatings[4]; ?>
              </td>
              <td>
                <?php echo $urlRatings[4]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://loremflickr.com
              </th>
              <td>
                <?php echo $domainRatings[5]; ?>
              </td>
              <td>
                <?php echo $urlRatings[5]; ?>
              </td>
              <td>
                <?php echo $urlRatings[5]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://example.com/whatever
              </th>
              <td>
                <?php echo $domainRatings[6]; ?>
              </td>
              <td>
                <?php echo $urlRatings[6]; ?>
              </td>
              <td>
                <?php echo $urlRatings[6]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://www.festogfarver.dk/whatever
              </th>
              <td>
                <?php echo $domainRatings[7]; ?>
              </td>
              <td>
                <?php echo $urlRatings[7]; ?>
              </td>
              <td>
                <?php echo $urlRatings[7]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-primary">Pending</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://placekitten.com/whatever
              </th>
              <td>
                <?php echo $domainRatings[8]; ?>
              </td>
              <td>
                <?php echo $urlRatings[8]; ?>
              </td>
              <td>
                <?php echo $urlRatings[8]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-primary">Pending</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://fillmurray.com/whatever
              </th>
              <td>
                <?php echo $domainRatings[9]; ?>
              </td>
              <td>
                <?php echo $urlRatings[9]; ?>
              </td>
              <td>
                <?php echo $urlRatings[9]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-primary">Pending</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://picsum.photos/whatever
              </th>
              <td>
                <?php echo $domainRatings[10]; ?>
              </td>
              <td>
                <?php echo $urlRatings[10]; ?>
              </td>
              <td>
                <?php echo $urlRatings[10]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-danger">Not Active</span>
              </td>
            </tr>
            <tr>
              <th scope="row">
                https://gemini.dk/whatever
              </th>
              <td>
                <?php echo $domainRatings[11]; ?>
              </td>
              <td>
                <?php echo $urlRatings[11]; ?>
              </td>
              <td>
                <?php echo $urlRatings[11]*10; ?> DKK
              </td>
              <td>
                <span class="badge badge-pill badge-danger">Not Active</span>
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
require_once('/Applications/MAMP/htdocs/ligobase/LB-design/footer.php');
?>
