<?php
	require 'includes/funciones.php'; //sirve para cargar codigo mas complejo codigo php codigo con logica

	//include "./includes/templates/header.php"; // include: sirve para incluir templates codigo html

	incluirTemplate('header', $inicio = true);
?>
	<section id="home" class="Portada">
		<div class="contenedor Portada-contenedor">
			<h2 class="Portada-title anch-portada">Home Construction & Remodeling</h3>
			<p class="Portada-subdetail anch-portada">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quam eum, eveniet perspiciatis nostrum a eaque, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quam eum, eveniet perspiciatis nostrum a eaque.</p>
			<a href="#" class="Portada-link">Learn More</a>
		</div>
	</section>
	<div class="Slogan">
		<div class="Slogan-contenedor">
			
			<div class="Slogan__right">
				<h3 class="Slogan__right-title">Cost for you home renovation project</h3>
				<p class="">Get started today and complete our firmate request your free stimate</p>
			</div>

			<a href="#" class="Slogan__link">Free Stimate</a>
		</div>
	</div>

	<section id="about" class="Wware">
		<div class="contenedor Wware-contenedor">
			<div class="Wware-left">
				<picture>
					<source srcset="./build/img/viejo.webp"/>
					<img src="./build/img/viejo.jpg" alt="Imagen de Acerca">
				</picture>
			</div>
			<div class="Wware-right">
				<p class="Wware-right__title">Who we Are</p>
				<p class="Wware-right__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p class="Wware-right__titleItems">Why choose Us?</p>
				<ul class="Wware-right__bottom fa-ul">
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 1
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 2
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 3
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 4
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 5
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 6
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 7
					</li>
					<li class="Wware-right__bottom-li">
						<i class="fa-li fa fa-check"></i>
						Item Expressed 8
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="works" class="Residences">
		<div class="contenedor Residences-contenedor">
			<p class="Residences__title">Our Works</p>

			<?php
				$limite = 3;
				include "includes/templates/anuncios.php";
			?>

			<div class="Residences-btnContainer">
				<a href="works.php" class="btn-primary">See More...</a>
			</div>
		</div>
	</section>

	<section id="blog" class="Post-blog">
		<div class="contenedor Post-blog-contenedor">
			<p class="Post-blog__title">Our Blog</p>
			<a href="#" class="Post-blog__item">
				<picture class="Post-blog__item-img">
					<source srcset="./build/img/blog1.webp">
					<source srcset="./build/img/blog1.jpg">
					<img src="./build/img/blog1.jpg" alt="Entrada Blog">
				</picture>
				<div class="Post-blog__item-details">
					<p class="Post-blog__item-details__title">Terraza en el techo de tu casa</p>
					<p class="Post-blog__item-details__created">
						Escrito el:
						<span> 07/03/2024</span>
						por:
						<span>Admin</span>
					</p>
					<p class="Post-blog__item-details__descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perspiciatis ut, eligendi illo laudantium, saepe soluta aliquam autem laboriosam voluptatibus quos hic esse voluptas libero, dolorum dolores, fuga iusto quisquam?</p>
				</div>
			</a>
			<a href="#" class="Post-blog__item">
				<picture class="Post-blog__item-img">
					<source srcset="./build/img/blog2.webp">
					<source srcset="./build/img/blog2.jpg">
					<img src="./build/img/blog2.jpg" alt="Entrada Blog">
				</picture>
				<div class="Post-blog__item-details">
					<p class="Post-blog__item-details__title">Terraza en el techo de tu casa</p>
					<p class="Post-blog__item-details__created">
						Escrito el:
						<span> 07/03/2024</span>
						por:
						<span>Admin</span>
					</p>
					<p class="Post-blog__item-details__descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perspiciatis ut, eligendi illo laudantium, saepe soluta aliquam autem laboriosam voluptatibus quos hic esse voluptas libero, dolorum dolores, fuga iusto quisquam?</p>
				</div>
			</a>
			<a href="#" class="Post-blog__item">
				<picture class="Post-blog__item-img">
					<source srcset="./build/img/blog3.webp">
					<source srcset="./build/img/blog3.jpg">
					<img src="./build/img/blog3.jpg" alt="Entrada Blog">
				</picture>
				<div class="Post-blog__item-details">
					<p class="Post-blog__item-details__title">Terraza en el techo de tu casa</p>
					<p class="Post-blog__item-details__created">
						Escrito el:
						<span> 07/03/2024</span>
						por:
						<span>Admin</span>
					</p>
					<p class="Post-blog__item-details__descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perspiciatis ut, eligendi illo laudantium, saepe soluta aliquam autem laboriosam voluptatibus quos hic esse voluptas libero, dolorum dolores, fuga iusto quisquam?</p>
				</div>
			</a>
			<a href="#" class="Post-blog__item">
				<picture class="Post-blog__item-img">
					<source srcset="./build/img/blog1.webp">
					<source srcset="./build/img/blog1.jpg">
					<img src="./build/img/blog1.jpg" alt="Entrada Blog">
				</picture>
				<div class="Post-blog__item-details">
					<p class="Post-blog__item-details__title">Terraza en el techo de tu casa</p>
					<p class="Post-blog__item-details__created">
						Escrito el:
						<span> 07/03/2024</span>
						por:
						<span>Admin</span>
					</p>
					<p class="Post-blog__item-details__descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perspiciatis ut, eligendi illo laudantium, saepe soluta aliquam autem laboriosam voluptatibus quos hic esse voluptas libero, dolorum dolores, fuga iusto quisquam?</p>
				</div>
			</a>
			<a href="#" class="Post-blog__item">
				<picture class="Post-blog__item-img">
					<source srcset="./build/img/blog2.webp">
					<source srcset="./build/img/blog2.jpg">
					<img src="./build/img/blog2.jpg" alt="Entrada Blog">
				</picture>
				<div class="Post-blog__item-details">
					<p class="Post-blog__item-details__title">Terraza en el techo de tu casa</p>
					<p class="Post-blog__item-details__created">
						Escrito el:
						<span> 07/03/2024</span>
						por:
						<span>Admin</span>
					</p>
					<p class="Post-blog__item-details__descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perspiciatis ut, eligendi illo laudantium, saepe soluta aliquam autem laboriosam voluptatibus quos hic esse voluptas libero, dolorum dolores, fuga iusto quisquam?</p>
				</div>
			</a>
			<a href="#" class="Post-blog__item">
				<picture class="Post-blog__item-img">
					<source srcset="./build/img/blog3.webp">
					<source srcset="./build/img/blog3.jpg">
					<img src="./build/img/blog3.jpg" alt="Entrada Blog">
				</picture>
				<div class="Post-blog__item-details">
					<p class="Post-blog__item-details__title">Terraza en el techo de tu casa</p>
					<p class="Post-blog__item-details__created">
						Escrito el:
						<span> 07/03/2024</span>
						por:
						<span>Admin</span>
					</p>
					<p class="Post-blog__item-details__descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perspiciatis ut, eligendi illo laudantium, saepe soluta aliquam autem laboriosam voluptatibus quos hic esse voluptas libero, dolorum dolores, fuga iusto quisquam?</p>
				</div>
			</a>

			<div class="Post-blog__btnContainer">
				<a href="blogs.php" class="btn-primary">See More...</a>
			</div>
		</div>
	</section>

	<section id="testimonials" class="Testimonials">
		<div class="contenedor Testimonials-contenedor">
			<p class="Testimonials__title">Testimonials</p>
			<div class="Testimonials__comment">
				<picture>
					<source srcset="build/img/user.webp" type="image/webp">
					<img lazy="loadding" width="64" height="64" src="build/img/user.jpg" alt="Imagen de opinion" type="image/jpeg">
				</picture>
				<p class="Testimonials__comment-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.
					<span class="Testimonials__comment-user">- JOHNATHAN DOE</span>
				</p>
			</div>
			<div class="Testimonials__comment">
				<picture>
					<source srcset="build/img/user.webp" type="image/webp">
					<img lazy="loadding" width="64" height="64" src="build/img/user.jpg" alt="Imagen de opinion" type="image/jpeg">
				</picture>
				<p class="Testimonials__comment-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.
					<span class="Testimonials__comment-user">- JOHNATHAN DOE</span>
				</p>
			</div>
			<div class="Testimonials__comment">
				<picture>
					<source srcset="build/img/user.webp" type="image/webp">
					<img lazy="loadding" width="64" height="64" src="build/img/user.jpg" alt="Imagen de opinion" type="image/jpeg">
				</picture>
				<p class="Testimonials__comment-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.
					<span class="Testimonials__comment-user">- JOHNATHAN DOE</span>
				</p>
			</div>
			<div class="Testimonials__comment">
				<picture>
					<source srcset="build/img/user.webp" type="image/webp">
					<img lazy="loadding" width="64" height="64" src="build/img/user.jpg" alt="Imagen de opinion" type="image/jpeg">
				</picture>
				<p class="Testimonials__comment-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.
					<span class="Testimonials__comment-user">- JOHNATHAN DOE</span>
				</p>
			</div>
			<div class="Testimonials__comment">
				<picture>
					<source srcset="build/img/user.webp" type="image/webp">
					<img lazy="loadding" width="64" height="64" src="build/img/user.jpg" alt="Imagen de opinion" type="image/jpeg">
				</picture>
				<p class="Testimonials__comment-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.
					<span class="Testimonials__comment-user">- JOHNATHAN DOE</span>
				</p>
			</div>
			<div class="Testimonials__comment">
				<picture>
					<source srcset="build/img/user.webp" type="image/webp">
					<img lazy="loadding" width="64" height="64" src="build/img/user.jpg" alt="Imagen de opinion" type="image/jpeg">
				</picture>
				<p class="Testimonials__comment-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.
					<span class="Testimonials__comment-user">- JOHNATHAN DOE</span>
				</p>
			</div>
		</div>
	</section>

	<section id="contact" class="Form-contact">
		<div class="contenedor Form-contact-contenedor">
			<div class="Form-contact__left">
				<p class="Form-contact__left-title">Get In Touch</p>
				<p class="Form-contact__left-subtitle">Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>

				<form class="Form-contact__left-form">
					<input type="text" id="name" class="name-input" placeholder="Name">
					<input type="text" id="email" class="email-input" placeholder="Email">
					<textarea name="message" id="message-input" class="message-input" placeholder="Message"></textarea>

					<input type="submit" value="send message">
				</form>
			</div>
			<div class="Form-contact__right">
				<p class="Form-contact__right-title">Contact Info</p>

				<div class="Form-contact__right-information">
					<p class="Form-contact__right-info">
						Address
						<span>4321 California St, San Francisco, CA 12345</span>
					</p>
					<p class="Form-contact__right-info">
						Phone
						<span>+1 123 456 1234</span>
					</p><p class="Form-contact__right-info">
						Email
						<span>info@company.com</span>
					</p>
				</div>
			</div>
			<div class="Form-contact__bottom">
				<a href="http://facebook.com" target="_blank">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="http://twitter.com" target="_blank">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="http://google.com" target="_blank">
					<i class="fa fa-google-plus" aria-hidden="true"></i>
				</a>
				<a href="http://youtube.com" target="_blank">
					<i class="fa fa-youtube" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

<?php
	incluirTemplate('footer');
?>