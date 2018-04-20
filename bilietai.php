<?php
/*
Template name: Bilietai
*/

get_header('in');

?>

<main class="content">
	<div class="container bilietai-container">
		<div class="section">
			<div class="section__title">
				Bilietai
			</div>
			<div class="container-medium">
				<div class="tickets">
					<div class="tickets__table">
						<div class="tickets__table-header">
							<div class="tickets__row">
								<div class="tickets__col tickets__col_type">
									Bilietų tipai
								</div>
								<div class="tickets__col tickets__col_price">
									Kaina
								</div>
								<div class="tickets__col tickets__col_count">
									Kiekis
								</div>
							</div>
						</div>
						<div class="tickets__table-body">
							<div class="tickets__row">
								<div class="tickets__col tickets__col_type">
									Suaugusiems
								</div>
								<div class="tickets__col tickets__col_price" data-price="8.50">
									€ 8,50
								</div>
								<div class="tickets__col tickets__col_count">
									<div class="tickets__count">
										<div class="amount-select">
											<buttom class="btn amount-select__btn amount-select__btn_minus">
												<i class="amount-select__ico _minus"></i>
											</buttom>
											<input type="text" class="amount-select__control" value="0">
											<buttom class="btn amount-select__btn amount-select__btn_plus">
												<i class="amount-select__ico _plus"></i>
											</buttom>
										</div>
									</div>
								</div>
							</div>
							<div class="tickets__row">
								<div class="tickets__col tickets__col_type">
									Pensininkams
								</div>
								<div class="tickets__col tickets__col_price" data-price="5">
									€ 5,00
								</div>
								<div class="tickets__col tickets__col_count">
									<div class="tickets__count">
										<div class="amount-select">
											<buttom class="btn amount-select__btn amount-select__btn_minus">
												<i class="amount-select__ico _minus"></i>
											</buttom>
											<input type="text" class="amount-select__control" value="0">
											<buttom class="btn amount-select__btn amount-select__btn_plus">
												<i class="amount-select__ico _plus"></i>
											</buttom>
										</div>
									</div>
								</div>
							</div>
							<div class="tickets__row">
								<div class="tickets__col tickets__col_type">
									Studentams
								</div>
								<div class="tickets__col tickets__col_price" data-price="5">
									€ 5,00
								</div>
								<div class="tickets__col tickets__col_count">
									<div class="tickets__count">
										<div class="amount-select">
											<buttom class="btn amount-select__btn amount-select__btn_minus">
												<i class="amount-select__ico _minus"></i>
											</buttom>
											<input type="text" class="amount-select__control" value="0">
											<buttom class="btn amount-select__btn amount-select__btn_plus">
												<i class="amount-select__ico _plus"></i>
											</buttom>
										</div>
									</div>
								</div>
							</div>
							<div class="tickets__row">
								<div class="tickets__col tickets__col_type">
									Žmonėms su negalia
								</div>
								<div class="tickets__col tickets__col_price" data-price="8">
									€ 8,00
								</div>
								<div class="tickets__col tickets__col_count">
									<div class="tickets__count">
										<div class="amount-select">
											<buttom class="btn amount-select__btn amount-select__btn_minus">
												<i class="amount-select__ico _minus"></i>
											</buttom>
											<input type="text" class="amount-select__control" value="0">
											<buttom class="btn amount-select__btn amount-select__btn_plus">
												<i class="amount-select__ico _plus"></i>
											</buttom>
										</div>
									</div>
								</div>
							</div>
							<div class="tickets__row">
								<div class="tickets__col tickets__col_type">
									Šeimai (2 suaugę, 4 vaikai iki 18 metų)
								</div>
								<div class="tickets__col tickets__col_price" data-price="8">
									€ 8,00
								</div>
								<div class="tickets__col tickets__col_count">
									<div class="tickets__count">
										<div class="amount-select">
											<buttom class="btn amount-select__btn amount-select__btn_minus">
												<i class="amount-select__ico _minus"></i>
											</buttom>
											<input type="text" class="amount-select__control" value="0">
											<buttom class="btn amount-select__btn amount-select__btn_plus">
												<i class="amount-select__ico _plus"></i>
											</buttom>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tickets__footer">
						<div class="tickets__price">
							<div class="tickets__price-total">
								iš viso:
								<div class="tickets__price-val">
									€
									<span>0</span>
								</div>
							</div>
							<div class="tickets__notice">
								*Vaikams iki 7 metų įėjimas nemokamas
							</div>
						</div>
						<div class="tickets__action">
							<a href="#" class="btn btn_red tickets__btn">Pirkti</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="section__title">
				Narystės
			</div>
			<div class="container-medium">
				<div class="membership">
					<div class="membership__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas natus a sequi amet inventore omnis suscipit rerum, architecto
						nemo libero, necessitatibus id magni fuga aliquid quasi labore excepturi molestias ea pariatur debitis
						corrupti. Non eligendi ut repellat quis minus exercitationem hic maxime optio vitae minima modi corporis,
						provident, nemo quidem saepe totam laboriosam nesciunt magnam natus et itaque libero sunt. Et qui
						dignissimos eligendi. Quaerat atque quos eaque reiciendis optio id fugit quam iusto cupiditate ratione.
						Sint eveniet eius fuga excepturi, accusamus error repellendus, id vitae labore voluptatem fugit possimus!
						Itaque, ad voluptas mollitia dolorem est obcaecati quaerat eos assumenda!
					</div>
					<div class="membership__list">
						<div class="membership__item">
							<div class="membership__item-wrap">
								<div class="membership__header">
									<div class="membership__title">
										Individuali
									</div>
									<div class="membership__subtitle">
										narystė
									</div>
								</div>
								<div class="membership__body">
									<div class="membership__row">
										<div class="membership__col">
											<div class="membership__price">
												€ 60.00
											</div>
											metams
										</div>
										<div class="membership__col">
											<div class="membership__person">
												<i class="membership__person-ico"></i>
											</div>
											<strong>1</strong>
										</div>
									</div>
									<div class="membership__action">
										<a href="#" class="btn btn_ghost membership__btn">privalumai</a>
										<a href="#" class="btn btn_red membership__btn">Pirkti</a>
									</div>
								</div>
							</div>
						</div>
						<div class="membership__item">
							<div class="membership__item-wrap">
								<div class="membership__header">
									<div class="membership__title">
										Studento
									</div>
									<div class="membership__subtitle">
										narystė
									</div>
								</div>
								<div class="membership__body">
									<div class="membership__row">
										<div class="membership__col">
											<div class="membership__price">
												€ 55.00
											</div>
											metams
										</div>
										<div class="membership__col">
											<div class="membership__person">
												<i class="membership__person-ico"></i>
											</div>
											<strong>1</strong>
										</div>
									</div>
									<div class="membership__action">
										<a href="#" class="btn btn_ghost membership__btn">privalumai</a>
										<a href="#" class="btn btn_red membership__btn">Pirkti</a>
									</div>
								</div>
							</div>
						</div>
						<div class="membership__item">
							<div class="membership__item-wrap">
								<div class="membership__header">
									<div class="membership__title">
										Šeimos
									</div>
									<div class="membership__subtitle">
										narystė
									</div>
								</div>
								<div class="membership__body">
									<div class="membership__row">
										<div class="membership__col">
											<div class="membership__price">
												€ 95.00
											</div>
											metams
										</div>
										<div class="membership__col">
											<div class="membership__person">
												<i class="membership__person-ico"></i>
											</div>
											<strong>3</strong>
										</div>
									</div>
									<div class="membership__action">
										<a href="#" class="btn btn_ghost membership__btn">privalumai</a>
										<a href="#" class="btn btn_red membership__btn">Pirkti</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="membership__list">
						<div class="membership__item">
							<div class="membership__item-wrap">
								<div class="membership__header">
									<div class="membership__title">
										Benefactors
									</div>
									<div class="membership__subtitle">
										narystė
									</div>
								</div>
								<div class="membership__body">
									<div class="membership__row">
										<div class="membership__col">
											<div class="membership__price">
												€ 60.00
											</div>
											metams
										</div>
										<div class="membership__col">
											<div class="membership__person">
												<i class="membership__person-ico"></i>
											</div>
											<strong>1</strong>
										</div>
									</div>
									<div class="membership__action">
										<a href="#" class="btn btn_ghost membership__btn">privalumai</a>
										<a href="#" class="btn btn_red membership__btn">Pirkti</a>
									</div>
								</div>
							</div>
						</div>
						<div class="membership__item">
							<div class="membership__item-wrap">
								<div class="membership__header">
									<div class="membership__title">
										Corporate
									</div>
									<div class="membership__subtitle">
										narystė
									</div>
								</div>
								<div class="membership__body">
									<div class="membership__row">
										<div class="membership__col">
											<div class="membership__price">
												€ 55.00
											</div>
											metams
										</div>
										<div class="membership__col">
											<div class="membership__person">
												<i class="membership__person-ico"></i>
											</div>
											<strong>3</strong>
										</div>
									</div>
									<div class="membership__action">
										<a href="#" class="btn btn_ghost membership__btn">privalumai</a>
										<a href="#" class="btn btn_red membership__btn">Pirkti</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="section__title">
				Parodos ir renginiai
			</div>
			<div class="events-preview">
				<div class="events-preview__list">
					<div class="events-preview__item">
						<a href="#" class="events-preview__img" style="background-image:url(css/img/events-ph-1.png);"></a>
						<div class="events-preview__content">
							<div class="events-preview__title">
								<a href="">Žmogus su Saukos veidu</a>
							</div>
							<div class="events-preview__date">
								2017 08 05 - 2017 08 16
							</div>
							<div class="events-preview__tags-list">
								<a href="" class="events-preview__tag">
									ŠarūnAS SaukA
								</a>
								<a href="" class="events-preview__tag">
									TAPYBOS paroda
								</a>
							</div>
						</div>
					</div>
					<div class="events-preview__item">
						<a href="#" class="events-preview__img" style="background-image:url(css/img/events-ph-2.png);"></a>
						<div class="events-preview__content">
							<div class="events-preview__title">
								<a href="">Malonioji 6</a>
							</div>
							<div class="events-preview__date">
								2017 08 05 - 2017 08 16
							</div>
							<div class="events-preview__tags-list">
								<a href="" class="events-preview__tag">
									ŠarūnAS SaukA
								</a>
								<a href="" class="events-preview__tag">
									TAPYBOS paroda
								</a>
							</div>
						</div>
					</div>
					<div class="events-preview__item">
						<a href="#" class="events-preview__img" style="background-image:url(css/img/events-ph-3.png);"></a>
						<div class="events-preview__content">
							<div class="events-preview__title">
								<a href="">Kvadratas</a>
							</div>
							<div class="events-preview__date">
								2017 08 05 - 2017 08 16
							</div>
							<div class="events-preview__tags-list">
								<a href="" class="events-preview__tag">
									ŠarūnAS SaukA
								</a>
								<a href="" class="events-preview__tag">
									TAPYBOS paroda
								</a>
							</div>
						</div>
					</div>
					<div class="events-preview__item">
						<a href="#" class="events-preview__img" style="background-image:url(css/img/events-ph-4.png);"></a>
						<div class="events-preview__content">
							<div class="events-preview__title">
								<a href="">Ultra dinamica</a>
							</div>
							<div class="events-preview__date">
								2017 08 05 - 2017 08 16
							</div>
							<div class="events-preview__tags-list">
								<a href="" class="events-preview__tag">
									ŠarūnAS SaukA
								</a>
								<a href="" class="events-preview__tag">
									TAPYBOS paroda
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section__more">
				<a href="#" class="btn btn_grey section__more-btn">daugiau</a>
			</div>
		</div>
	</div>
</main>

<?php

get_footer('in');