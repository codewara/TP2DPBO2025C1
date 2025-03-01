<?php
  require_once 'Baju.php';
  if (session_status () == PHP_SESSION_NONE) session_start();

  $list = $_SESSION ['list'];
?>

<table class="w-full bg-white w-full rounded-lg border-separate"
  style="border-collapse: collapse;" id="table_container"
>
  <thead class="bg-gray-300 sticky top-0 shadow-md">
    <tr>
      <th class="py-2 px-4 w-[50px] border-r border-gray-300">ID</th>
      <th class="py-2 px-4 w-auto border-r border-gray-300">Nama</th>
      <th class="py-2 px-4 w-[115px] border-r border-gray-300">Jenis</th>
      <th class="py-2 px-4 w-[115px] border-r border-gray-300">Bahan</th>
      <th class="py-2 px-4 w-[115px] border-r border-gray-300">Warna</th>
      <th class="py-2 px-4 w-[115px] border-r border-gray-300">Target</th>
      <th class="py-2 px-4 w-[75px] border-r border-gray-300">Size</th>
      <th class="py-2 px-4 w-auto border-r border-gray-300">Merk</th>
      <th class="py-2 px-4 w-[75px] border-r border-gray-300">Stok</th>
      <th class="py-2 px-4 w-auto border-r border-gray-300">Harga (Rp)</th>
      <th class="p-2 w-[91px]">Foto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($list as $index => $item) { ?>
    <tr class="<?php echo $index % 2 == 1 ? 'bg-gray-100' : ''; ?>">
      <td class="py-2 px-4 border-r border-gray-300 text-right"><?php echo $item->getID(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getNama(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getJenis(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getBahan(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getWarna(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getTarget(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getSize(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300"><?php echo $item->getMerk(); ?></td>
      <td class="py-2 px-4 border-r border-gray-300 text-right"><?php echo number_format($item->getStok()); ?></td>
      <td class="py-2 px-4 border-r border-gray-300 text-right"><?php echo number_format($item->getHarga()); ?></td>
      <td class="p-2 text-center">
        <img src="images/<?php echo $item->getFoto(); ?>" class="w-full h-[75px] object-cover mx-auto ratio-1x1 rounded-lg">
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>