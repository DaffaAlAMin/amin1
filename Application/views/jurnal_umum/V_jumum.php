<div class="col mb-5 mb-xl-0">
  <div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Jurnal Umum</h3>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Akun</th>
            <th scope="col">Ref</th>
            <th scope="col">Debet</th>
            <th scope="col">Kredit</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $debit = 0;
          $kredit = 0;
          foreach ($tb_tjurnal as $row) :
            if ($row->jenis_saldo == 'debit') :
              $debit += $row->saldo;
          ?>
              <tr>
                <td>
                  <?= date_indo($row->tanggal) ?>
                </td>
                <td>
                  <?= $row->nama_akun1 ?>
                </td>
                <td>
                  <?= $row->id_akun1 ?>
                </td>
                <td>
                  <?= 'Rp. ' . number_format($row->saldo, 0, ',', '.') ?>
                </td>
                <td>
                  Rp. 0
                </td>
              </tr>
            <?php
            endif;
            if ($row->jenis_saldo == 'kredit') :
              $kredit += $row->saldo;
            ?>
              <tr>
                <td>
                  <?= date_indo($row->tanggal) ?>
                </td>
                <td class="text-right"><?= $row->nama_akun1 ?></td>
                <td><?= $row->id_akun1 ?></td>
                <td>
                  Rp. 0
                </td>
                <td>
                  <?= 'Rp. ' . number_format($row->saldo, 0, ',', '.') ?>
                </td>
              </tr>
            <?php endif; ?>
          <?php endforeach ?>
          <?php if($debit != $kredit){ ?>
            <tr>
                    <td colspan="3" class="text-center"><b>Jumlah Total</b></td>
                    <td class="text-danger"><b><?= rupiah($debit)?></b></td>
                    <td colspan="2" class="text-danger"><b><?= rupiah($kredit) ?></b></td>
                  </tr>
                  <tr  class="text-center bg-danger ">
                    <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">TIDAK SEIMBANG</td>
                  </tr>
                  <?php }else{  ?>
                    <tr>
                    <td colspan="3" class="text-center"><b>Jumlah Total</b></td>
                    <td class="text-success"><b><?= 'Rp. '.number_format($debit) ?></b></td>
                    <td colspan="2" class="text-success"><b><?= 'Rp. '.number_format($kredit) ?></b></td>
                  </tr>
                  <tr class="text-center bg-success">
                    <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">SEIMBANG</td>
                  </tr>
                  <?php } ?>
          <!-- <tr>
            <td colspan="3" class="text-center">Total Saldo</td>
            <td><?= rupiah($debit) ?></td>
            <td><?= rupiah($kredit) ?></td>
          </tr> -->
        </tbody>
      </table>
    </div>
    
  </div>
  
 