<div class="container">
  <div class="">
    <div class="">
      <table class="table table-bordered">
        <thead>
          <th>NOMBRE</th><th>ESTADO</th><th>AC</th>
        </thead>
        <tbody>
          <?php while ($a = mysqli_fetch_array($res)): ?>
          <tr>
            <td><?php echo $a['nombres']." ".$a['apellidos']; ?></td>
          </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
