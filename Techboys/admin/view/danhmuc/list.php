<main>
  <h1>Danh mục</h1>
  <div class="recent-orders">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên danh mục</th>
          <th colspan="3">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($listdanhmuc as $key => $item){
        ?>
          <tr>
            <td><?= $item['id_danhmuc'] ?></td>
            <td><?= $item['ten_danhmuc'] ?></td>
            <td><a class="btn btn-warning" href="index.php?act=listsanpham&id=<?= $item['id_danhmuc'] ?>">Chi Tiết</a></td>
            <td><a class="btn btn-warning" href="index.php?act=suadanhmuc&id=<?= $item['id_danhmuc'] ?>">Sửa</a></td>
            <td><a class="btn btn-warning" href="index.php?act=xoadanhmuc&id=<?= $item['id_danhmuc'] ?>">Xoá</a></td>
          </tr>
        <?php
         }
        ?>
      </tbody>
    </table>
    <a href="index.php?act=themdanhmuc">THÊM MỚI</a>
  </div>
</main>