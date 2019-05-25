<?php
include 'database.php';
$db = new database();
error_reporting(0);
?>
<html>
<head>
  <title>Programmer</title>
  <link href="bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style>
    .row.content {
      height: 100%;
    }
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {
        height: auto;
      }
    }
    .lbr {
      width: 50%;
    }
  </style>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-3 sidenav"></div>
      <div class="col-sm-6 text-left"><br />
        <table class="table table-bordered text-center">
          <td class="lbr success">
            <form class="form-inline" action="proses.php?aksi=tambah" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Tambah Programmer" name="name">
              </div>
              <button type="submit" class="btn btn-default">Tambah</button>
            </form>
          </td>
        </table>
        <?php foreach ($db->tampil() as $z) { ?>
          <table class="table table-bordered">
            <tr>
              <td class="lbr info"><?php echo $z['name'] ?></td>
              <td rowspan="2">
                <form action="proses.php?aksi=skill" method="post" class="form-inline">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $z['id'] ?>">
                    <input type="text" placeholder="Tambah Skill" name="nama" class="form-control">
                    <button type="submit" class="btn btn-default">Tambah</button>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td><?php foreach ($db->tampil_skill($z['id']) as $y) { echo $y['nama'] . ", ";} ?></td>
            </tr>
          </table>
        <?php } ?>
      </div>
      <div class="col-sm-3 sidenav"></div>
    </div>
  </div>
</body>
<script src="bootstrap.min.js"></script>
</html>