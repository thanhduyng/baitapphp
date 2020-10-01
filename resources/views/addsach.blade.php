<form method="post" action="<?= route("store") ?>">
  @csrf
  Id :<input type="hidden" name="id"><br>
  Ten sach :<input type="text" name="tensach"><br>

  <button type="submit">Submit</button>
</form>