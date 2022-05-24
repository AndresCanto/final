    <footer class="container-fluid bg-dark fixed-bottom">
      <div class="row">
        <div class="col-md text-light py-1">
          andres03.cb@gmail.com
        </div>
      </div>
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready(function () {
        $('#example').DataTable();
      });
      $(document).ready(function () {
        $('#gastos').DataTable();
      });
    </script>
  </body>
</html>