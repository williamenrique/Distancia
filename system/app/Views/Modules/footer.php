
		<script>
const base_url = "<?= base_url()?>";
var page_link = "<?= $data['page_link']?>";
if (document.querySelector("." + page_link)) {
	var activar = document.querySelector("." + page_link);
	var page_menu_open = "<?= $data['page_menu_open']?>";
	activar.classList.add('active');
}
if (document.querySelector("." + page_menu_open)) {
	var page_link_acitvo = "<?= $data['page_link_acitvo']?>";
	var activarMenu = document.querySelector("." + page_menu_open);
	var activarLink = document.querySelector("." + page_link_acitvo);
	activarMenu.classList.add('menu-is-opening');
	activarMenu.classList.add('menu-open');
	activarLink.classList.add('active');
}
		</script>
		<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
		<script src="<?= PLUGINS?>jquery/jquery.min.js"></script>
		<script src="<?= PLUGINS?>sweetalert/sweetalert2@10.js"></script>
		<script src="<?= PLUGINS?>perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="<?= PLUGINS?>bootstrap/bootstrap.bundle.min.js"></script>
		<!-- <script src="<?= PLUGINS?>DataTable/jquery.dataTables.min.js"></script>
		<script src="<?= PLUGINS?>DataTable/dataTables.bootstrap5.min.js"></script> -->
		<script src="<?= PLUGINS?>fontawesome/all.min.js"></script>
		<script src="<?= JS.$data['page_function']?>"></script>
		<script src="<?= JS?>function.main.js"></script>
		<!-- <script src="<?= JS?>main.js"></script> -->
		<script src="<?= JS?>functions.js"></script>
		</body>

		</html>