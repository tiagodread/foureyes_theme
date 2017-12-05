<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<section>
			<h2>ENTRE EM CONTATO</h2>
			<form method="post" action="<?php echo SITE_URL;?>/#contato" id="contato">
				<input type="hidden" name="contact" value="1">
				<?php 
				global $erro;

				if($erro){
					printf('<p style="color:red;">%s</p>', $erro);
				}
				?>

				<div class="field half first">
					<input type="text" name="name" id="name" placeholder="Nome" />
				</div>
				<div class="field half">
					<input type="email" name="email" id="email" placeholder="Email" />
				</div>
				<div class="field">
					<textarea name="message" id="message" placeholder="Mensagem"></textarea>
				</div>
				<ul class="actions">
					<li><input type="submit" value="Enviar" class="special" /></li>
				</ul>
			</form>
		</section>
		<section>
			<h2>SIGA</h2>
			<ul class="icons">
				<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
				<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
				<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
		</section>
		<ul class="copyright">
			<li>&copy; Tiago G. All rights reserved</li>
		</ul>
	</div>
</footer>

</div>

<!-- Scripts -->
<script src="<?php echo THEME_URL; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo THEME_URL; ?>assets/js/skel.min.js"></script>
<script src="<?php echo THEME_URL; ?>assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php echo THEME_URL; ?>assets/js/main.js"></script>
<?php wp_footer();?>
</body>
</html>