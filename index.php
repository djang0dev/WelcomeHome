<?php get_header() ?>



<main class="sections">
	<!-- Find your home -->
	<section>
		<div class="container">
			<div class="search-form">
				<h1 class="search-form__title">Agence immo Montpellier</h1>
				<p>Retrouver tous nos biens sur le secteur de <strong>Montpellier</strong></p>
				<hr>
				<form action="listing.html" class="search-form__form">
					<div class="search-form__checkbox">
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="" type="radio" name="type" id="buy" value="buy">
							<label class="form-check-label" for="buy">Acheter</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="type" id="rent" value="rent">
							<label class="form-check-label" for="rent">Louer</label>
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="city" placeholder="Montpellier">
						<label for="city">Ville</label>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="budget" placeholder="100 000 €">
						<label for="budget">Prix max</label>
					</div>
					<div class="form-group">
						<select name="kind" id="kind" class="form-control">
							<option value="flat">Appartement</option>
							<option value="villa">Villa</option>
						</select>
						<label for="kind">Type</label>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="rooms" placeholder="4">
						<label for="rooms">Pièces</label>
					</div>
					<button type="submit" class="btn btn-filled">Rechercher</button>
				</form>
			</div>

		</div>
		<div class="highlighted highlighted--home">
			<img src="https://picsum.photos/id/234/790/728.jpg" alt="">
			<div class="highlighted__body">
				<div class="highlighted__title">Maison 4 pièce(s)</div>
				<div class="highlighted__price">178 200€</div>
				<div class="highlighted__location">34 000 MONTPELLIER</div>
				<div class="highlighted__space">80m²</div>
			</div>
		</div>
	</section>

	<!-- Feature properties -->
	<section class="container">
		<div class="push-properties">
			<div class="push-properties__title">Nos derniers biens</div>
			<p>
				Les agences Agencia présente sur Montpellier, Lattes et Palavas vous présentent leurs biens. Vous souhaitez louer ou acheter un appartement dans la zone de Montpellier, Pérols, Carnon ou leurs environ ?
			</p>
			<div class="push-properties__grid">

				<a class="property " href="single.html" title="Maison 4 pièce(s) - 00m²">
					<div class="property__image">

						<img src="https://picsum.photos/id/30/385/220.jpg" alt="">

					</div>
					<div class="property__body">
						<div class="property__location">34000 Montpellier</div>
						<h3 class="property__title">Maison 4 pièce(s) - 10m²</h3>
						<div class="property__price">45 000 €</div>
					</div>
				</a>


				<a class="property " href="single.html" title="Maison 4 pièce(s) - 10m²">
					<div class="property__image">

						<img src="https://picsum.photos/id/31/385/220.jpg" alt="">

					</div>
					<div class="property__body">
						<div class="property__location">34000 Montpellier</div>
						<h3 class="property__title">Maison 4 pièce(s) - 20m²</h3>
						<div class="property__price">45 000 €</div>
					</div>
				</a>


				<a class="property " href="single.html" title="Maison 4 pièce(s) - 20m²">
					<div class="property__image">

						<img src="https://picsum.photos/id/32/385/220.jpg" alt="">

					</div>
					<div class="property__body">
						<div class="property__location">34000 Montpellier</div>
						<h3 class="property__title">Maison 4 pièce(s) - 30m²</h3>
						<div class="property__price">45 000 €</div>
					</div>
				</a>


				<a class="property " href="single.html" title="Maison 4 pièce(s) - 30m²">
					<div class="property__image">

						<img src="https://picsum.photos/id/33/385/220.jpg" alt="">

					</div>
					<div class="property__body">
						<div class="property__location">34000 Montpellier</div>
						<h3 class="property__title">Maison 4 pièce(s) - 40m²</h3>
						<div class="property__price">45 000 €</div>
					</div>
				</a>


			</div>

			<div class="highlighted">
				<img src="https://picsum.photos/id/234/790/728.jpg" alt="">
				<div class="highlighted__body">
					<div class="highlighted__title">Maison 4 pièce(s)</div>
					<div class="highlighted__price">178 200€</div>
					<div class="highlighted__location">34 000 MONTPELLIER</div>
					<div class="highlighted__space">80m²</div>
				</div>
			</div>

			<a class="push-properties__action btn" href="#">
				Parcourir nos biens
				<svg class="icon">
					<use xlink:href="sprite.14d9fd56.svg#arrow"></use>
				</svg>
			</a>

		</div>
	</section>

	<section class="container quote">
		<div class="quote__title">Ce que pensent nos clients</div>
		<div class="quote__body">
			<div class="quote__image">
				<img src="quote-man.5c402ea9.png" alt="">
				<div class="quote__author">Stephane, Agent immobilier</div>
			</div>
			<blockquote>
				<p>J'ai voulu vendre mon bien et j'ai été très bien conseillé, des agents très professionnels et investis.</p>
			</blockquote>
		</div>

		<a class="quote__action btn" href="#">
			Estimer mon bien
			<svg class="icon">
				<use xlink:href="sprite.14d9fd56.svg#arrow"></use>
			</svg>
		</a>
	</section>

	<!-- Read our stories -->
	<section class="container push-news">
		<h2 class="push-news__title">Dernière actualités</h2>
		<p>Retrouvez toutes les actualités liées à nos agences autour de Montpellier.</p>
		<div class="push-news__grid">
			<a href="#" class="push-news__item">
				<picture>
					<source media="(max-width: 950px)" srcset="https://picsum.photos/id/849/910/910.jpg">
					<img src="https://picsum.photos/id/849/385/640.jpg">
				</picture>
				<span class="push-news__tag">Tendance</span>
				<h3 class="push-news__label">Studio in the heart of San Francisco CBD @ Circular Quay</h3>
			</a>
			<div class="news-overlay">

				<picture>
					<source media="(max-width: 545px)" srcset="https://picsum.photos/id/851/910/700.jpg">
					<source media="(max-width: 950px)" srcset="https://picsum.photos/id/851/910/500.jpg">
					<img src="https://picsum.photos/id/851/912/318.jpg">
				</picture>
				<div class="news-overlay__body">
					<div class="news-overlay__title">
						Consultez tous nos articles <br> liés à l'immobilier
					</div>
					<a href="#" class="news-overlay__btn btn">
						Lire nos articles
						<svg class="icon">
							<use xlink:href="sprite.14d9fd56.svg#arrow"></use>
						</svg>
					</a>
				</div>
			</div>
			<a href="#" class="push-news__item">
				<picture>
					<source media="(max-width: 950px)" srcset="https://picsum.photos/id/852/910/910.jpg">
					<img src="https://picsum.photos/id/852/322/274.jpg">
				</picture>
				<span class="push-news__tag">Financement</span>
				<h3 class="push-news__label">Studio in the heart of San Francisco CBD @ Circular Quay</h3>
			</a>
			<a href="#" class="push-news__item">
				<picture>
					<source media="(max-width: 950px)" srcset="https://picsum.photos/id/853/910/910.jpg">
					<img src="https://picsum.photos/id/853/556/274.jpg">
				</picture>
				<span class="push-news__tag">Prêt</span>
				<h3 class="push-news__label">Studio in the heart of San Francisco CBD @ Circular Quay</h3>
			</a>
		</div>
	</section>

	<!-- Newsletter -->
	<section class="newsletter">
		<form class="newsletter__body">
			<div class="newsletter__title">Restez connecté</div>
			<p>
				Recevez les dernières nouveautés concernant l'agence en vous inscrivant à notre newsletter
			</p>
			<div class="form-group">
				<input type="email" class="form-control" id="email" placeholder="Entrez votre email">
				<label for="email">Votre email</label>
			</div>
			<!--
			<input type="email" class="form-control" placeholder="Enter your email adress">
			-->
			<button type="submit" class="btn">S'inscrire</button>
		</form>
		<div class="newsletter__image">
			<img src="man.87215a62.png" alt="">
		</div>
	</section>

</main>


<?php get_footer() ?>
