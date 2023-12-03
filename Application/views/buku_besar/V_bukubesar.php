<div class="row mt-5">
  <div class="col mb-5 mb-xl-0">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Buku Besar</h3>
          </div>
        </div>
      </div>
      <div class="nav-wrapper mx-3">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
          <?php
          $i = 0;
          foreach ($data_jurnal as $row) :
            $i++;
          ?>
            <li class="nav-item mb-4">
              <a class="nav-link mb-sm-3 mb-md-0 tab-nav" id="tabs-icons-text-<?= $i ?>-tab" data-toggle="tab" href="#tabs-icons-text-<?= $i ?>" role="tab" aria-controls="tabs-icons-text-<?= $i ?>" aria-selected="true"><?= $row->nama_akun1 ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="card" style="border-top: 2px solid white">
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <?php
            $a = 0;
            $debit = 0;
            $kredit = 0;
            for ($i = 0; $i < $jumlah; $i++) :
              $a++;
              $s = 0;
              $deb = $saldo[$i];
            ?>
              <div class="tab-pane fade" id="tabs-icons-text-<?= $a ?>" role="tabpanel" aria-labelledby="tabs-icons-text-<?= $a ?>-tab">
                <div class="row">
                  <div class="col">
                    <b><?= $data[$i][$s]->nama_akun1 ?></b>
                  </div>
                  <div class="col text-right">
                    <b>No. <?= $data[$i][$s]->id_akun1 ?></b>
                  </div>
                </div>
                <p class="description">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th rowspan="2">Tanggal</th>
                      <th rowspan="2">Keterangan </th>
                      <th rowspan="2">Debit</th>
                      <th rowspan="2">Kredit</th>
                      <th colspan="2" class="text-center">Saldo</th>
                    </tr>
                    <tr>
                      <th>Debit</th>
                      <th>Kredit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($j = 0; $j < count($data[$i]); $j++) :
                      $timeStampt = strtotime($data[$i][$j]->tanggal);
                      $bulan = date('m', $timeStampt);

                      $tahun = date('Y', $timeStampt);
                      $tgl = date('d', $timeStampt);
                      $bulan = medium_bulan($bulan);
                    ?>
                      <tr>
                        <td><?= $tgl . ' ' . $bulan . ' ' . $tahun ?></td>
                        <td><?= $data[$i][$j]->nama_akun1 ?></td>
                        <?php
                        if ($data[$i][$j]->jenis_saldo == 'debit') {
                        ?>
                          <td>
                            <?= 'Rp. ' . number_format($data[$i][$j]->saldo, 0, ',', '.') ?>
                          </td>
                          <td>Rp. 0</td>
                        <?php
                        } else {
                        ?>
                          <td>Rp. 0</td>
                          <td>
                            <?= 'Rp. ' . number_format($data[$i][$j]->saldo, 0, ',', '.') ?>
                          </td>
                        <?php } ?>
                        <?php
                        if ($deb[$j]->jenis_saldo == "debit") {
                          $debit = $debit + $deb[$j]->saldo;
                        } else {
                          $kredit = $kredit + $deb[$j]->saldo;
                        }

                        $hasil = $debit - $kredit;
                        ?>
                        <?php if ($hasil >= 0) { ?>
                          <td><?= 'Rp. ' . number_format($hasil, 0, ',', '.') ?></td>
                          <td> - </td>
                        <?php } else { ?>
                          <td> - </td>
                          <td><?= 'Rp. ' . number_format(abs($hasil), 0, ',', '.') ?></td>
                        <?php } ?>
                      </tr>
                    <?php endfor ?>
                    <?php
                    $debit = 0;
                    $kredit = 0;
                    ?>
                    <td class="text-center" colspan="4"><b>Total</b></td>
                    <?php if ($hasil >= 0) { ?>
                      <td class="text-success"><?= 'Rp. ' . number_format($hasil, 0, ',', '.') ?></td>
                      <td> - </td>
                    <?php } else { ?>
                      <td> - </td>
                      <td class="text-danger"><?= 'Rp. ' . number_format(abs($hasil), 0, ',', '.') ?></td>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php endfor ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>